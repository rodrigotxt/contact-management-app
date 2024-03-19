<form action="{{ route('contacts.store') }}" method="POST" class="col-md-4 offset-md-4">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input class="form-control" type="text" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="contact">Contact:</label>
        <input class="form-control" type="text" id="contact" name="contact" required>
    </div>

    <div class="form-group">
        <label for="contact_email">Email:</label>
        <input class="form-control" type="email" id="contact_email" name="email" required>
    </div>

    <div class="py-3">
        <button class="btn btn-primary mr-5" type="submit">Save</button>
        <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary ml-3">Cancel</a>
    </div>
</form>