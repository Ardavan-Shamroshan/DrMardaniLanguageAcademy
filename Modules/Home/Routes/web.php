<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'admin'])->prefix('home')->group(function() {
    Route::get('/', [\Modules\Home\Http\Livewire\Home::class, '__invoke'])->name('home');
});

Route::middleware(['auth', 'admin'])->prefix('academic')->group(function() {
    Route::get('/setting', [\Modules\Home\Http\Livewire\Academic\Setting::class, '__invoke'])->name('academic.setting');

});
