@extends('master')


@section('content')


<div class="container mt-5 text-center">
    <h2>    LARAVEL | Eloquent CRUD</h2>
    <hr>
</div>

<div class="container mt-5 "  >
    <div class="row" >
        <div class="col-md-8 offset-md-2 mb-5" style="padding:20px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" >

        <form action="{{ route('store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Student Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Student Name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Student Email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Student City</label>
                <input type="text" class="form-control" id="city" name="city">
            </div>
            <div class="mb-3">
                <label for="program" class="form-label">Student Degree Program</label>
                <input type="text" class="form-control" id="program" name="program" placeholder="Enter Student Program">
            </div>
            
            
           <div>

           <textarea class="form-control" placeholder="Enter Student Address here" name="address" id="address" cols="10" rows="4"></textarea>

           </div>

           <button type="submit" class="btn btn-primary mt-3">Add Student</button>

        </form>

        </div>
    </div>
</div>

@endsection