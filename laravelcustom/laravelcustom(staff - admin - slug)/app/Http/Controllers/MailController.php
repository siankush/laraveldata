<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use Illuminate\Http\Request;

use Mail;
use App\Mail\testmail;

class MailController extends Controller
{
    public function index(){

        $maildata = [
            'title' => "mail from ankush",
            'body' => "this is for testing email for smtp.",
        ];
        Mail::to('siankush@teqmavens.com')->send(new testmail($maildata));

        dd('email send successfully');
    }
}
