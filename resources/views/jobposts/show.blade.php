@extends('templates.base')

@section('title', "$jobpost->title - CareerHub")

@section('content')
    <h1>{{ $jobpost->title }}</h1>

    @session('creation_success')
        <div class="alert alert-success" role="alert">
            Creation succesful!
        </div>
    @endsession

    <h4>Job Description:</h4> 
    <p>{{ $jobpost->description }}</p>

    <h4>Years of experience required:</h4> 
    <p>{{ $jobpost->experience }}</p>

    <h4>Job Description:</h4> 
    <p>{{ $jobpost->description }}</p>

    <h4>Job Description:</h4> 
    <p>{{ $jobpost->experience }}</p>

    <h4>Location:</h4> 
    <p>{{ $jobpost->location }}</p>

    <h4>Requirements:</h4> 
    <p>{{ $jobpost->requirements }}</p>

    <h4>Category:</h4> 
    <p>{{ $jobpost->category }}</p>

    <h4>Salary:</h4> 
    <p>{{ $jobpost->salary }}</p>

    <h4>Field:</h4> 
    <p>{{ $jobpost->field }}</p>

    <img src="{{ $book->img }}" alt="">
@endsection
