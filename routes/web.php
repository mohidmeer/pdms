<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return to_route('login');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('prisoner',\App\Http\Controllers\PrisonerController::class);
    Route::get('prisoner/{prisoner}/prisionerShifted/create',[\App\Http\Controllers\PrisionerShiftedController::class,'create'])->name('prisionerShifted.create');
    Route::post('prisionerShifted',[\App\Http\Controllers\PrisionerShiftedController::class,'store'])->name('prisionerShifted.store');
    Route::resource('prisonerCharges',\App\Http\Controllers\PrisonerChargesController::class);

});
