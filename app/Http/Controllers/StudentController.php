<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $nama = "budi";
        // eloquent orm(rekomendasi)
        // query builder(ini masih oke)
        // row query(tidak rekomended)
        $student = Student::all(); // select * from students
        // dd($student);
        return view('student', ['studentList' => $student]);
    }
}
