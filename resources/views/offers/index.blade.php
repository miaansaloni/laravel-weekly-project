@extends('templates.base')

@section('title', 'CareerHub - Browse Job Opportunities')

@section('content')
    <h1>Job list</h1>

    @session('no_permission')
        <div class="alert alert-danger" role="alert">
            You do not have the rights
        </div>
    @endsession

    @session('operation_success')
        <div class="alert alert-success" role="alert">
            Job Offer "{{ session('operation_success')->title }}" has been succesfully removed!
        </div>
    @endsession

    @session('update_success')
        <div class="alert alert-success" role="alert">
            "{{ session('update_success')->title }}" has been succesfully updated<a
                href="{{ route('offers.show', ['id' => session('update_success')->id]) }}">See more</a>
        </div>
    @endsession

    @if ($offers->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Requirements</th>
                    <th scope="col">Category</th>
                    <th scope="col">Location</th>
                    <th scope="col">Field</th>
                    @auth <th scope="col">Actions</th> @endauth
                </tr>
            </thead>
            <tbody>
                @foreach ($offers as $offer)
                    <tr>
                        <th scope="row">{{ $offer->id }}</th>
                        <td><a href="{{ route('offers.show', ['id' => $offer]) }}">{{ $offer->title }}</a></td>
                        <td>{{ $offer->description }}</td>
                        <td>{{ $offer->img }}</td>
                        <td>{{ $offer->salary }}</td>
                        <td>{{ $offer->requirements }}</td>
                        <td>{{ $offer->category }}</td>
                        <td>{{ $offer->location }}</td>
                        <td>{{ $offer->field }}</td>
                        @auth
                            <td>
                                @if (Auth::user()->id === $offer->user_id)
                                    <a class="btn btn-warning" href="{{ route('offers.edit', ['id' => $offer]) }}">Edit</a>
                                    <form action="{{ route('offers.destroy', ['id' => $offer]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                @endif
                            </td>
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $offers->links() }}
    @else
        <h2>Non ci sono libri</h2>
    @endif
@endsection
