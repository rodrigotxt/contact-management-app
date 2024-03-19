@extends('layouts.default')
@section('content')
<div class="container py-5 text-center">
    <h1>Contact Details</h1>
<div class="card mx-auto" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $contact->name }}</h5>
    <p class="card-text">{{ $contact->contact }}</p>
    <p class="card-text">{{ $contact->email }}</p>    
    <p>
        <a class="btn btn-success mr-5" href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
        <button onclick="return confirmRemove({{ $contact->id }})" class="btn btn-outline-danger"><i class="fa fa-close"></i> Remove</button>
        <br>
        <a class="btn btn-outline-secondary my-3" href="{{ route('contacts.index') }}">Back</a>
    </p>
  </div>
</div>
</div>
@endsection