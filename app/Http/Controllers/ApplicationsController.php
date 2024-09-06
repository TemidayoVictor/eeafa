<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\Application;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Storage;

class ApplicationsController extends Controller
{
    //
    use ValidatesRequests;

    public function index() {
        $applications = Application::where('status', '!=', 'Delete')->orderBy('id', 'desc')->get();
        return view('admin.applications', [
            'active' => 'applications',
            'admin' => true,
            'applications' => $applications,
        ]);
    }

    public function applicationView($id) {
        $application = Application::where('id', $id)->first();
        return view('admin.application-view', [
            'active' => 'applications',
            'admin' => true,
            'application' => $application,
        ]);
    }

    public function applicationOptions(Request $request, $id) {
        $this->validate($request, [
            'purpose' => 'required',
        ]);

        $status = $request->purpose.'d';

        if($request->purpose == 'Delete') {
            $email = Application::where('id', $id)->value('email');
            $emailUse = $email.'deleted'.time();
            $updateStatus = Application::where('id', $id)
            ->update([
                'status' => $status,
                'email' => $emailUse,
            ]);            
        }

        else {
            $updateStatus = Application::where('id', $id)
            ->update([
                'status' => $status,
            ]);
        }

        $message = "Application ".$request->purpose."d Successfully";

        return redirect()->route('adminApplications')->with('status', $message);
    }

    public function download($id, $ref) {
        $application = Application::findOrFail($id);
        $fullname = 'Reference_'.$ref.'_'.$application->first_name.'_'.$application->last_name.'.pdf';
        if($ref == 1) {
            $filePath = public_path($application->ref1);
            return \Response::download($filePath);
        }

        elseif($ref == 2) {
            $filePath = public_path($application->ref2);
            return \Response::download($filePath);
        }

    }
    
}
