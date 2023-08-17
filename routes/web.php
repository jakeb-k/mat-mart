<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Mat; 
use App\Http\Controllers\MatController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('mat', MatController::class); 
Route::get('mats/{type}', [MatController::class, 'filter']); 
Route::get('/', [MatController::class, 'index']);

Route::get('add-to-cart/{id}', [MatController::class, 'addToCart']);
Route::delete('remove-from-cart', [MatController::class, 'remove']);
Route::delete('clear-cart', [MatController::class, 'clearCart']);

Route::get('/dashboard', function () {
    return redirect('/')->with('mats', Mat::paginate(6));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
