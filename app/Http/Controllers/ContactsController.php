<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|min:5',
            'email' => 'required|email|max:255|min:5',
            'subject' => 'required|max:255|min:10',
            'message' => 'required|max:255|min:5'

        ]);

        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        return redirect('/#contact');
    }



}
