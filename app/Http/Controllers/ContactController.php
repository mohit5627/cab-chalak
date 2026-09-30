<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'subject' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['required', 'string', 'max:20'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        // Contact message ko database/email se connect
        // hum next step mein karenge.

        return redirect()
            ->route('contact')
            ->with('success', 'Your message has been successfully sent. Our team will contact you shortly.');
    }
}