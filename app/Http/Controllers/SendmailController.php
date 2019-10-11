<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;

class SendmailController extends Controller
{
    public function sendMail()
    {
        SendEmailJob::dispatch()->delay(now()->addSecond(3));
        echo "email sent";
    }
}
