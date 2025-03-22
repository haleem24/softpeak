<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function services() {
        return view('services');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function sendContact(Request $request) {
        // Validate and handle contact form (e.g., save to DB or email)
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        // Add logic: e.g., Mail::to('info@softpeak.co.uk')->send(...)
        return redirect()->route('contact')->with('success', 'Message sent!');
    }
}
