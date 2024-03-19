<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index')->with('contacts', \App\Models\Contact::all());
    }

    public function show($id)
    {
        return view('contacts.show')->with('contact', \App\Models\Contact::find($id));
    }

    public function edit($id)
    {
        return view('contacts.edit')->with('contact', \App\Models\Contact::find($id));
    }

    public function update($id, Request $request)
    {
        $contact = \App\Models\Contact::find($id);
        $contact->update($request->all());
        return redirect('/contacts/' . $id);
    }

    public function destroy($id)
    {
        return \App\Models\Contact::destroy($id);
    }
    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $contact = \App\Models\Contact::create($request->all());
        return redirect('/contacts/' . $contact->id);
    }
}
