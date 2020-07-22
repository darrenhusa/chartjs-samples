<?php

use Illuminate\Support\Facades\Route;


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

// Route::get('/revenue', function () {
//     return view('welcome-chart');
// });
