<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use ValidatesRequests;
    //
    public function login() {
        return view('login', [
            'active' => 'login',
            'admin' => false,
        ]);
    }

    public function loginPost(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if(!auth()->attempt($request->only('username','password'), $request->remember)) {
            return back()->with('loginStatus', 'Invalid username or password');
        }

        return redirect()->route('adminApplications');
    }

    public function createUser(Request $request) {
        $this->validate($request, [
            'username' => 'required| unique:users,username',
            'password' => 'required',
        ]);

        // return redirect()->route('addDevotional')->with('status', 'Daily Inspiration Created Successfully');
        
        $allusers = User::all()->count();
        $email = "eeafaadmin".$allusers."@eeafa.com";

        User::create([
            'name' => $request->username,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $email,
        ]);

        return back()->with('status', 'New User Added');
        
    }

    // public function __construct() {
    //     $this->middleware(['auth']);
    // }

    public function logout() {
        Session::flush();
        auth()->logout();
        return redirect() -> route('login');
    }

}
