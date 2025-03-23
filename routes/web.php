<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/properties/create', [PropertyController::class, 'create'])->name('property.create');
Route::post('/properties/store', [PropertyController::class, 'store'])->name('property.store');
Route::get('/properties', [PropertyController::class, 'index'])->name('property.index');
Route::get('/properties/{property_id}', [PropertyController::class, 'show'])->name('property.show');