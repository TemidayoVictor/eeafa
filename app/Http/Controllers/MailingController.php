<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mailing;

use Illuminate\Foundation\Validation\ValidatesRequests;

class MailingController extends Controller
{
    //
    use ValidatesRequests;
    
    public function mailingList() {
        $subscribers = Mailing::all();
        return view('admin.mailing-list', [
            'active' => 'mailingList',
            'admin' => true,
            'subscribers' => $subscribers,
        ]);
    }

}
