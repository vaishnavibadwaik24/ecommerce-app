<?php

namespace App\Http\Controllers\Api;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\WelcomeEmail;
use Mail;

class ContactController extends Controller
{

    public function contacts(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email', 
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors(), 'status' => 400]);
        }

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        Mail::to('admin@admin.com')->send(new WelcomeEmail([
            'name' => $request->name,
            'email'=>$request->email
        ]));


        return response()->json(['message' => 'Your Contact Details has been sent Successfully!', 'status' => 201]);
    }

}

