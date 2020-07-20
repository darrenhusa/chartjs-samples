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

  // dd($result);

  return $result;

  // dd($labels, $chartdata);

    // return view('welcome-chart', compact('labels', 'chartdata'));
});

// Route::get('/revenue', function () {
//     return view('welcome-chart');
// });
