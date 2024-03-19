<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index')->with('contacts', Contact::all());
    }

    public function show($id)
    {
        return view('contacts.show')->with('contact', Contact::find($id));
    }

    public function edit($id)
    {
        return view('contacts.edit')->with('contact', Contact::find($id));
    }

    public function update($id, Request $request)
    {
        $contact = Contact::find($id);
        $contact->update($request->all());
        return redirect('/contacts/' . $id);
    }

    public function destroy($id)
    {
        return Contact::destroy($id);
    }
    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:6|max:255',
            'email' => 'required|email',
            'contact' => 'required|numeric|digits:9',
        ]);

        if ($validator->fails()) {
            return redirect('/contacts/create')
                ->withErrors($validator)
                ->withInput();
        }
        $contact = Contact::create($request->all());
        return redirect('/contacts/' . $contact->id);
    }
}
