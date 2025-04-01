<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/automotive', function () {
    return view('pages.automotive');
})->name('automotive');

Route::get('/medical', function () {
    return view('pages.medical');
})->name('medical');

Route::get('/home/appliance', function () {
    return view('pages.home-appliance');
})->name('home.appliance');

Route::get('/recycling', function () {
    return view('pages.recycling');
})->name('recycling');

Route::get('/industry', function () {
    return view('pages.industry');
})->name('industry');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/resources', function (){
    return view('pages.resources');
})->name('resources');

Route::get('/contact', function (){
    return view('pages.contact');
})->name('contact');

Route::get('/home', function (){
    return view('pages.home');
})->name('home');

