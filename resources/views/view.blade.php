@extends('master')


@section('content')


<div class="container mt-5 text-center">
    <h2>    LARAVEL | Eloquent CRUD</h2>
    <hr>
    <a href="{{ route('add') }}" class="btn btn-sm btn-success">Add New Entry</a>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 offset-md-1">

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Student Full Name</th>
                        <th scope="col">City</th>
                        <th scope="col">Address</th>
                        <th scope="col">Degree-Program</th>
                        <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        
                         @foreach($students as $student)

                         <tr>
                            <th scope="row">{{$student->name}}</th>
                            <td>{{$student->city}}</td>
                            <td>{{$student->address}}</td>
                            <td scope="col">{{$student->program}}</td>
                            <td>
                                <a href="{{ route('delete', $student->id ) }}" class="btn btn-sm btn-danger"> Delete </a>
                                <a href="{{ route('edit', $student->id) }}" class="btn btn-sm btn-warning"> Edit </a>
                                <a href="{{ route('detail', $student->id)}}" class="btn btn-sm btn-success"> Detail </a>


                            </td>
                        </tr>


                         @endforeach
                    </tbody>
            </table>


        </div>
    </div>
</div>

@endsection