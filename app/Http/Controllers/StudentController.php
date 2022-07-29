<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();     
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
         
        return back();
    } //insert
 

    public function delete($id)
    {
        Student::find($id)->delete();
        return back();
    }//delete
}
