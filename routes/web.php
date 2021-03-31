<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\LivewireAlert;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/livewire-alert', LivewireAlert::class);