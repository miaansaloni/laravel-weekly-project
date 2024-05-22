@extends('templates.base')

@section('title', "$offer->title - CareerHub")

@section('content')
    <h1>{{ $offer->title }}</h1>

    @session('creation_success')
        <div class="alert alert-success" role="alert">
            Creation succesful!
        </div>
    @endsession

    <img src="{{ $offer->img }}" alt="">

    <h4>Job Description:</h4> 
    <p>{{ $offer->description }}</p>

    <h4>Requirements:</h4> 
    <p>{{ $offer->requirements }}</p>

    <h4>Salary:</h4> 
    <p>{{ $offer->salary }}</p>

    <h4>Location:</h4> 
    <p>{{ $offer->location }}</p>

    <h4>Category:</h4> 
    <p>{{ $offer->category }}</p>

    <h4>Salary:</h4> 
    <p>{{ $offer->salary }}</p>

    <h4>Field:</h4> 
    <p>{{ $offer->field }}</p>

    
@endsection
