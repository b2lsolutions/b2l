<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('recruiter')->user();

    //dd($users);

    return view('recruiter.home');
})->name('home');

