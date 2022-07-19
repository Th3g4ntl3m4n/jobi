<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\CvController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::controller(PageController::class)->group(function(){
    Route::get('/',            'home')->name('home');
    Route::get('/companies',            'companies')->name('companies');
});

Route::get('/formcv', function () {
    return view('formcv');
})->name('formcv');

Route::get('/resume', function () {
    return view('prueba');
})->name('prueba');

Route::get('/details', function () {
    return view('details');
})->name('details');







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('cvs', CvController::class);
Route::resource('Comp', CompaniesController::class);


Route::resource('Comp', 'App\Http\Controllers\CompaniesController');
Route::get('Comp/{id}/show', 'App\Http\Controllers\CompaniesController@show')->name('companies.show');

Route::get('companies', 'App\Http\Controllers\CompaniesController@index')->name('companies.index');

Route::post('/create_user', 'App\Http\Controllers\Auth\RegisteredUserController@store')->name('user.store');


Route::get('jobs/{job}', [CompaniesController::class, 'showjob'])->name('jobs.showjob');


Route::get('/showalljobs', [CompaniesController::class, 'ShowAllJobs'])->name('showalljobs');
Route::get('/showallusers', [CvController::class, 'ShowAllUsers'])->name('showallusers');
Route::get('/showallcompanies', [CvController::class, 'ShowAllcompanies'])->name('showallcompanies');

Route::get('/{id}/details', 'App\Http\Controllers\CompaniesController@showJobDetails')->name('details');

Route::get('/logout', 'App\Http\Controllers\LogoutController@logout')->name('logout');


Route::post('/makeApply', 'App\Http\Controllers\ApplyesController@store')->name('makeApply');

/*
Route::controller(CompaniesController::class)->group(function(){
    Route::get('/companies/create',            'create')->name('companies.create');
    Route::get('/companies/store',            'store')->name('companies.store');
   // Route::get('/companies',            'companies')->name('companies');
});*/


Route::resource('cvs', 'App\Http\Controllers\CvController');
Route::get('/{id}/show', 'App\Http\Controllers\CvController@show')->name('cv.show');

require __DIR__.'/auth.php';
