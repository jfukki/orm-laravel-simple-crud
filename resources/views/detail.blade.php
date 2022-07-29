@extends('master')


@section('content')


<div class="container mt-5 text-center">
    <h2>    LARAVEL | Eloquent CRUD</h2>
    <h5>{{$student->name}} :Detail Page View</h5>
    <hr>
    <a href="{{ route('add') }}" class="btn btn-sm btn-success">Add New Entry</a>
    <a href="{{ route('home') }}" class="btn btn-sm btn-dark">View All Entries</a>

</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 offset-md-1">
    <hr>
                <h3>Full Name: {{$student->name}}</h3>
                <h5>Address: {{$student->address}}</h5>
                <h6>City: {{$student->city}}</h6>
                <h6>Program: {{$student->program}}</h6>

    <hr>



        </div>
    </div>
</div>

@endsection