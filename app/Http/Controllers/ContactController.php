<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\WelcomeEmail;
use Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('contact');
    }

    public function create()
    {   
        return view('contact');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:contacts',
            'message' => 'required|string|min:10'
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        Mail::to('admin@admin.com')->send(new WelcomeEmail([
            'name' => $request->name
        ]));

        return redirect()->back();
    }

}
