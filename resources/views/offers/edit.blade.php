@extends('templates.base')

@section('title', 'CareerHub - Edit a Job Position')

<h1>Edit Job Position</h1>
<form method="POST" action="{{ route('books.update', ['id' => $book]) }}">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ }}">
    </div>
    <div class="mb-3">
        <label for="img" class="form-label">Image url</label>
        <input type="text" class="form-control" id="img" name="img">
    </div>
    <div class="mb-3">
        <label for="salary" class="form-label">Salary</label>
        <input type="number" class="form-control" id="salary" name="salary" value="{{ }}">
    </div>
    <div class="mb-3">
        <label for="requirements" class="form-label">Requirements</label>
        <input type="text" class="form-control" id="requirements" name="requirements" value="{{ }}">
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <input type="text" class="form-control" id="category" name="category" value="{{ }}">
    </div>
    <div class="mb-3">
        <label for="location" class="form-label">Location</label>
        <input type="text" class="form-control" id="location" name="location" value="{{ }}">
    </div>
    <div class="mb-3">
        <label for="field" class="form-label">Field</label>
        <input type="text" class="form-control" id="field" name="field" value="{{ }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>

</form>

@section('content')

@endsection
