<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProjectLead extends Mailable
{

    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     * @param array $request
     * @return void
     */
    public function __construct(array $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): self
    {
        return $this->subject('Thanks for sharing some insights into your project! #letsdothis')
            ->markdown('emails.project.lead');
    }

}
