<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Job
{
    public static function all(): array
    {
        return [
            ['id' => 1, 'title' => 'Director', 'salary' => 50000],
            ['id' => 2, 'title' => 'Programmer', 'salary' => 10000],
            ['id' => 3, 'title' => 'Teacher', 'salary' => 40000],
        ];
    }
}

Route::get('/', function () {
    return view('home', ['jobs' => Job::all()]);
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Job::all()]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Arr::first(Job::all(), fn ($job) => (int) $job['id'] === (int) $id);

    return view('job', ['job' => $job]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
