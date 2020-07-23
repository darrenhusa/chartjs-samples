<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
      $students = Student::orderBy('last_name', 'asc')->get(); 

      // $freshman = Student::whereIn('class',['F1', 'F2'])->get();

      $first_time_freshman = Student::whereIn('class', ['F1', 'F2'])
      ->where('entry_type', 'HS')
      ->get();

      // dd($students);
      // dd($first_time_freshman);

        return view('students.index', compact('students'));
    }
}
