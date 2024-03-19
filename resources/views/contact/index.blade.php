@extends('layouts.default')

@section('content')
<div>
    <h1>Contacts</h1>
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
      <td>
        <a href="contact/show?id={{ $contact->id }}" class="btn btn-outline-primary"><i class="fa fa-address-card"></i>  Ver</a>
        <a href="contact/edit?id={{ $contact->id }}" class="btn btn-outline-secondary"><i class="fa fa-edit"></i> Editar</a>
        <a onclick="return confirmRemove({{ $contact->id }})" href="contact/remove?id={{ $contact->id }}" class="btn btn-outline-danger"><i class="fa fa-close"></i> Excluir</a>
       </td>
    </tr>
    @endforeach
  </tbody>
    </table>
</div>
<script>
    function confirmRemove(id){
        return confirm('Deseja realmente excluir o contato?');
    }
</script>
@endsection