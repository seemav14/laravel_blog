<?php

namespace App\Jobs;

use App\Email;
use App\Mail\SendEmailMailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /*php artisan queue:failed-table*/

    /*php artisan queue:work --timeout=30*/
    public $tries = 5;

    public $timeout = 120;

    protected $details;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
    
        // $data = ['name' => $this->details['name']];
        $data = ['name' => 'test'];

        Mail::send('emails.sendemail', $data, function($message) {
            // $message->from('vseema912@gmail.com', 'Seema Verma');
            $message->subject($this->details['subject']);
            $message->to($this->details['email']);
        });
    }
}
