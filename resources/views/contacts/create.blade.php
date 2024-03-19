@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row text-center">
        <h1>Create Contact</h1>
    </div>
    <div class="row">
            @include('contacts.form')
    </div>
</div>
@endsection
