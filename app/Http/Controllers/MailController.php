<?php

namespace App\Http\Controllers;

use App\Jobs\SendMail;
use App\Mail\MailSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
    
    public function sendMail(Request $request)
    {
        $data = [
            'email' => "yourmail@gmail.com",
            'message' => 'You have a test mail'
        ];

        $template = new MailSend($data, 'Test Mail');
        SendMail::dispatch($data['email'], $template);
        echo ("Mail Send");
    }
}
