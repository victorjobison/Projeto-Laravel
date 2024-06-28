<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;

Route::get('/', function () {
    return view('welcome');
});
  
Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [Dashboard::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/appointments', \App\Livewire\Appointments\Index::class)->name('appointments.index');
    Route::get('/appointments/create', \App\Livewire\Appointments\Create::class)->name('appointments.create');
    Route::get('/appointments/show/{appointment}', \App\Livewire\Appointments\Show::class)->name('appointments.show');
    Route::get('/appointments/update/{appointment}', \App\Livewire\Appointments\Edit::class)->name('appointments.edit');

    Route::get('/users', \App\Livewire\Users\Index::class)->name('users.index');
    Route::get('/users/create', \App\Livewire\Users\Create::class)->name('users.create');
    Route::get('/users/show/{user}', \App\Livewire\Users\Show::class)->name('users.show');
    Route::get('/users/update/{user}', \App\Livewire\Users\Edit::class)->name('users.edit');


});

Route::middleware(['editor'])->group(function () {
    Route::get('/editor/dashboard', [Dashboard::class, 'editorDashboard'])->name('editor.dashboard');
    Route::get('/appointments', \App\Livewire\Appointments\Index::class)->name('appointments.index');
    Route::get('/appointments/create', \App\Livewire\Appointments\Create::class)->name('appointments.create');
    Route::get('/appointments/show/{appointment}', \App\Livewire\Appointments\Show::class)->name('appointments.show');
    Route::get('/appointments/update/{appointment}', \App\Livewire\Appointments\Edit::class)->name('appointments.edit');

});


Route::middleware(['user'])->group(function () {
    Route::get('/user/dashboard', [Dashboard::class, 'index'])->name('user.dashboard');

});


