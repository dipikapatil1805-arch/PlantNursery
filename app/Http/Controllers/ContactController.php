<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Show Contact Form
    public function index()
    {
        return view('contact');
    }

    // Save Contact Message
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    // Show All Contact Messages
    public function messages()
    {
        $contacts = Contact::latest()->get();

        return view('contacts.index', compact('contacts'));
    }
}