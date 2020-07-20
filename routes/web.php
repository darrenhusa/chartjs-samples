<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  $labels = collect(['01', '02', '03']);
  $chartdata = collect([50, 25, 10]);

  // dd($labels, $chartdata);

    return view('welcome-chart', compact('labels', 'chartdata'));
});

// Route::get('/revenue', function () {
//     return view('welcome-chart');
// });
