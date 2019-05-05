<?php

namespace App\Http\Controllers;


use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        try {
            $this->validate($request, [
                'firstName' => 'required|max:30',
                'lastName' => 'required|max:30',
                'company' => 'required|max:150',
                'email' => 'required|email|unique:contacts',
                'url' => array('required', 'regex:/^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&\'\(\)\*\+,;=.]+$')

            ]
,[
                'firstName.required' => ' The first name field is required.',
                'company.max' => ' The first name must not be at most 150 characters.',
                'firstName.max' => ' The first name may not be greater than 30 characters.',
                'lastName.required' => ' The last name field is required.',
                'lastName.max' => ' The last name must not be at most 30 characters.'
            ]
                );

            $contact = new Contact([
                'first_name' => $request->get('firstName'),
                'last_name' => $request->get('lastName'),
                'company' => $request->get('company'),
                'email' => $request->get('email'),
                'url' => $request->get('url')
            ]);

            $contact->save();
//            Contact::create($request->all());
            return view('index');

        } catch (ValidationException $exception) {
            return view('news');
        }


    }
}
