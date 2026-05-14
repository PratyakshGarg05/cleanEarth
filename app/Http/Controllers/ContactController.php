<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| ContactController
|--------------------------------------------------------------------------
| Handles the Contact page display and form submission with validation.
|--------------------------------------------------------------------------
*/

class ContactController extends Controller
{
    /**
     * Show the Contact page.
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Handle the contact form POST submission.
     * Validates input, then redirects back with a success message.
     */
    public function submit(Request $request)
    {
        // Validate form fields
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'email'      => 'required|email|max:255',
            'subject'    => 'required|string|max:200',
            'message'    => 'required|string|min:10|max:2000',
        ]);

        /*
        |--------------------------------------------------------------
        | In a real project, you would:
        | 1. Save to database:  Contact::create($validated);
        | 2. Send email:        Mail::to('admin@cleanearth.com')->send(new ContactMail($validated));
        | 3. Fire an event:     ContactSubmitted::dispatch($validated);
        |
        | For this class project we simply flash a success message.
        |--------------------------------------------------------------
        */

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you, ' . $validated['first_name'] . '! Your message has been sent. We\'ll get back to you within 24–48 hours.');
    }
}
