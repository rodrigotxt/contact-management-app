<html>
    <head>
        <title>Contact Management System - @yield('title')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>


<script>
function confirmRemove(contactId){
    console.log('remove contact ' + contactId);
    if(confirm('Do you really want to delete the contact?')){
        fetch(`/contacts/${contactId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => {
                if (response.ok) {
                    alert('The contact has been removed.');
                    window.location.replace('/contacts');
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
    </body>
</html>