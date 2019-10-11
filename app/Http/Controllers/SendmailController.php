<?php

namespace App\Http\Controllers;

use App\Mail\SendMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendmailController extends Controller
{
    public function sendMail()
    {
        Mail::to('idstack@mail.com')->send(new SendMailable());
        echo "email sent";
    }
}
