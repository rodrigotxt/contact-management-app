@extends('layouts.default')

@section('content')

<div>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input class="form-control" type="text" id="name" name="name" required>

        <label for="contact">Contact:</label>
        <input class="form-control" type="text" id="contact" name="contact" required>

        <label for="contact_email">Email:</label>
        <input class="form-control" type="email" id="contact_email" name="email" required>

        <div class="py-3">
            <button class="btn btn-primary mr-5" type="submit">Save</button>
            <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary ml-3">Cancel</a>
        </div>

    </form>
</div>
    @endsection