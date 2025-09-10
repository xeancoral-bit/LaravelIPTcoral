<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show contact form
    public function create()
    {
        return view('contact'); // points to resources/views/contact.blade.php
    }

    // Save form data
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:25',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Thank you — your message has been sent!');
    }

    // Admin: list messages
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('contact_index', compact('contacts'));
    }

    // Admin: view single message
    public function show(Contact $contact)
    {
        if ($contact->status === 'new') {
            $contact->update(['status' => 'read']);
        }
        return view('contact_show', compact('contact'));
    }

    // Admin: delete message
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Message deleted.');
    }
}
