<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(ContactFormRequest $request)
    {
        Mail::to(config('mail.from.address', 'info@example.com'))
            ->send(new ContactMail(
                $request->name,
                $request->email,
                $request->subject,
                $request->message
            ));

        return back()->with('success', 'Your message has been sent successfully. We will get back to you soon.');
    }
}
