@extends('layouts.default')

@section('content')
<div>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        @include('contacts.form')
    </form>
</div>
@endsection
