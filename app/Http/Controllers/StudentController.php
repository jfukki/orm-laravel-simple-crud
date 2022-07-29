<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->get();      // to get latest entry on top / decs values
        return view('view', ['students'=> $students]);
    } //table view

    public function add()
    {
        return view('add');
    }//form view

    public function store(Request $req)
    {
        $student = new Student;
        $student->name = $req->name;
        $student->city = $req->city; 
        $student->address = $req->address; 
        $student->program = $req->program; 

        $student->save();
         
        return redirect()->route('home');
    } //insert
 

    public function delete($id)
    {
        Student::find($id)->delete();
        return back();
    }//delete

    public function edit($id)
    {
        $student = Student::find($id);
        return view ('edit',['student'=>$student]);
    }

    public function update(Request $req, $id)
    {
        $student = Student::find($id);

        $student->name = $req->name;
        $student->city = $req->city; 
        $student->address = $req->address; 
        $student->program = $req->program; 

        $student->save();

        return redirect()->route('home');
    }

    public function detail($id)
    {
        $student = Student::find($id);
        return view ('detail',['student'=>$student]);
    }

}
