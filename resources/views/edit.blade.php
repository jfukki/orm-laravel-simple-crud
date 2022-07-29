@extends('master')


@section('content')


<div class="container mt-5 text-center">
    <h2>    LARAVEL | Eloquent CRUD</h2>
    <h5>Update: {{$student->name}}</h5>
    <hr>
</div>

<div class="container mt-5 "  >
    <div class="row" >
        <div class="col-md-8 offset-md-2 mb-5" style="padding:20px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" >

        <form action="{{ route('update', $student->id) }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Student Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Student Name"  value="{{$student->name}}">
            </div>

             
            <div class="mb-3">
                <label for="city" class="form-label">Student City</label>
                <input type="text" class="form-control" id="city" name="city" value="{{$student->city}}">
            </div>
            <div class="mb-3">
                <label for="program" class="form-label">Student Degree Program</label>
                <input type="text" class="form-control" id="program" name="program" placeholder="Enter Student Program" value="{{$student->program}}">
            </div>
            
            
           <div>

           <textarea class="form-control" placeholder="Enter Student Address here" name="address" id="address" cols="10" rows="4" >{{$student->address}}  </textarea>

           </div>

           <button type="submit" class="btn btn-danger mt-3">Update Student</button>

        </form>

        </div>
    </div>
</div>

@endsection