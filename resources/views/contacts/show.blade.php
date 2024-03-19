@extends('layouts.default')
@section('content')
<div class="container py-5 text-center">
    <h1>Detalhes do Contato</h1>
<div class="card mx-auto" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $contact->name }}</h5>
    <p class="card-text">{{ $contact->contact }}</p>
    <p class="card-text">{{ $contact->email }}</p>    
    <p>
        <a class="btn btn-success" href="{{ route('contacts.edit', $contact->id) }}">Editar</a>
        <a class="btn btn-outline-secondary" href="{{ route('contacts.index') }}">Voltar</a>
    </p>
  </div>
</div>
</div>
@endsection