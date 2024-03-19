@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row text-center">
        <h1>Create Contact</h1>
    </div>
    <div class="row">
        @if ($errors->any())
        <div class="col-md-4 offset-md-4">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
        @include('contacts.form')
    </div>
</div>
@endsection
