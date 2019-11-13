<?php

namespace App\Http\Controllers;

use App\Mail\ProjectLead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use ReCaptcha\ReCaptcha;

class ProjectController extends Controller
{

    public function lead(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required_without:phone|email',
            'phone' => 'required_without:email',
            'details' => 'required',
        ]);

        $response = (new ReCaptcha(config('recaptcha.secret')))
            ->setExpectedAction('homepage')
            ->verify($request->input('recaptcha'), $request->ip());

        if (false === $response->isSuccess()) {
            $request->session()->flash('error.project.lead');
            return redirect('/#');
        }

        Mail::to($validated['email'])->bcc(env('MAIL_FROM_ADDRESS'))->send(
            new ProjectLead($validated)
        );

        $request->session()->flash('success.project.lead');
        return redirect('/#');
    }

}
