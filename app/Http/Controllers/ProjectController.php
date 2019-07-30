<?php

namespace App\Http\Controllers;

use App\Mail\ProjectLead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        Mail::to($validated['email'])->bcc(env('MAIL_FROM_ADDRESS'))->send(
            new ProjectLead($validated)
        );

        $request->session()->flash('success.project.lead');
        return redirect('/#');
    }

}
