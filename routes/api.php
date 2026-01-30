<?php

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function () {
    return User::all();
});


Route::get('/tasks', function () {
    return Task::all();
});

