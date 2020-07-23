<?php

use Illuminate\Support\Facades\Route;
// use \App\Student;

// Route::get('/students', function () {
//
//   $students = Student::all();
//   // $freshman = Student::whereIn('class',['F1', 'F2'])->get();
//
//   $first_time_freshman = Student::whereIn('class', ['F1', 'F2'])
//   ->where('entry_type', 'HS')
//   ->get();
//
//   // dd($students);
//   // dd($first_time_freshman);
//
//     return view('students.index', compact('students'));
// });

Route::get('/students', 'StudentController@index');

Route::get('/', function () {
  $labels = collect(['01', '02', '03']);
  $chartdata = collect([50, 25, 10]);

  // dd($labels, $chartdata);

    return view('welcome-chart', compact('labels', 'chartdata'));
});

Route::get('/api/revenue', function () {
  $labels = collect(['01', '02', '03']);
  $chartdata = collect([50, 25, 10]);

  $result = collect([
    'labels' => $labels,
    'chartdata' => $chartdata,
  ]);

  return $result;
});

Route::get('/users', function () {
  $users = \App\User::all();

  // dd($users);

  // return $users;

  // uses tailwindcss responsive datatable
  // return view('users.index-dt', compact('users'));

  // uses datatable vue component
  return view('users.index2', compact('users'));
});

Route::get('/sample-charts', function () {

  return view('ten_sample_charts');
});


// Route::get('/revenue', function () {
//     return view('welcome-chart');
// });
