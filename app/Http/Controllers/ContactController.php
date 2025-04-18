<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->route('contact.create')->with('status', 'Message sent!');
    }

    public function index()
    {
        $messages = Contact::latest()->get();

        return view('contact.index', compact('messages'));
    }
}




