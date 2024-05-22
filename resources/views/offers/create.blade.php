@extends('templates.base')

@section('title', 'CareerHub - Create a New Job Position')

@section('content')
    <form method="POST" action="{{ route('') }}">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="mb-3">
        <label for="img" class="form-label">Image url</label>
        <input type="text" class="form-control" id="img" name="img">
    </div>
    <div class="mb-3">
        <label for="salary" class="form-label">Salary</label>
        <input type="number" class="form-control" id="salary" name="salary">
    </div>
    <div class="mb-3">
        <label for="requirements" class="form-label">Requirements</label>
        <input type="text" class="form-control" id="requirements" name="requirements">
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <input type="text" class="form-control" id="category" name="category">
    </div>
    <div class="mb-3">
        <label for="location" class="form-label">Location</label>
        <input type="text" class="form-control" id="location" name="location">
    </div>
    <div class="mb-3">
        <label for="field" class="form-label">Field</label>
        <input type="text" class="form-control" id="field" name="field">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection