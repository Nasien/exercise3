<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students= Student::all();
        return view('students.index',['students'=> $students]);

        
    }

    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        $data=$request->validate([
            'studentID'=>'required',
            'name'=>'required',
            'course'=>'required'
        ]);

        $newStudent = Student::create($data);

        return redirect(route('student.index'));
    }

    public function edit(Student $student){

            return view('students.edit',['student'=>$student]);
    }

    public function update(Student $student, Request $request){
        $data=$request->validate([
            'studentID'=>'required',
            'name'=>'required',
            'course'=>'required'
        ]);

        $student->update($data);

        return redirect(route('student.index'))->with('success','Student List Updated Successfuly');

    }

    public function delete(Student $student){

        $student->delete(); 

        return redirect(route('student.index'))->with('success','Student Deleted Successfuly');
    }
}

