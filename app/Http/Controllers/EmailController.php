<?php

namespace App\Http\Controllers;

use Mail;
use App\Jobs\SendEmailJob;
use Carbon\Carbon;
use Illuminate\Http\Request;


class EmailController extends Controller
{
    public function sendEmail(){
        
        $details['email'] = 'seema0996@gmail.com';
        $details['subject'] = 'Mail from Laravel Queue';
        $details['name'] = 'Seema Verma';

         $job = (new \App\Jobs\SendEmailJob($details))->delay(Carbon::now()->addSeconds(5));
        dispatch($job);
        dd('done');
        //  return 'Email Sent';
    }

    public function test(Request $request)
    {
       
        $to = "seema0996@gmail.com";
        $data = ['name' => 'test'];
        // echo $data['name'];

        Mail::send('emails.sendemail', $data, function ($message) use ($to)
         {
            // $message->setBody($html, 'text/html');
               
            $message->from('seema0996@gmail.com', 'Seema VErma')->subject('Testing');
                $message->to($to);
            
         });

         if (Mail::failures()) {
            dd('error');
        }else{
            echo 'sent';
        }
    }
}
