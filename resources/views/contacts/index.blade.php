@extends('layouts.default')

@section('content')
<div>
    <h1 class="py-3">Contacts Index (List)</h1>
    <table class="table table-striped table-hover">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Contact</th>
      <th scope="col">E-mail</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($contacts as $contact)
    <tr>
      <th scope="row">{{ $contact->id }}</th>
      <td>{{ $contact->name }}</td>
      <td>{{ $contact->contact }}</td>
      <td>{{ $contact->email }}</td>
      <td align="right">
        <a href="contacts/{{ $contact->id }}" class="btn btn-outline-primary"><i class="fa fa-address-card"></i>  View</a>
        <a href="contacts/edit/{{ $contact->id }}" class="btn btn-outline-secondary"><i class="fa fa-edit"></i> Edit</a>
        <a onclick="return confirmRemove({{ $contact->id }})" href="contacts/remove/{{ $contact->id }}" class="btn btn-outline-danger"><i class="fa fa-close"></i> Remove</a>
       </td>
    </tr>
    @endforeach
  </tbody>
    </table>
    <p>
        <a href="contacts/create" class="btn btn-success"><i class="fa fa-plus"></i> New Contact</a>
    </p>
</div>
<script>
    function confirmRemove(id){
        return confirm('Deseja realmente excluir o contato?');
    }
</script>
@endsection