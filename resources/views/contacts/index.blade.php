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
        <a href="contacts/{{ $contact->id }}/edit" class="btn btn-outline-secondary"><i class="fa fa-edit"></i> Edit</a>
        <button onclick="return confirmRemove({{ $contact->id }})" class="btn btn-outline-danger"><i class="fa fa-close"></i> Remove</button>
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
    function confirmRemove(contactId){
      console.log('remove contact ' + contactId);
      if(confirm('I really want to delete the contact?')){
          fetch(`/contacts/${contactId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        alert('The contact has been removed.');
                        window.location.reload();
                    } else {
                        alert('An error occurred while removing the contact.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    }
</script>
@endsection