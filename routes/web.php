<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Mat; 
use App\Http\Controllers\MatController; 
use App\Http\Controllers\StripeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OrderController;

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
Route::get('mats/{type}', [MatController::class, 'type']); 

Route::any('mats/{type}/filter', [MatController::class, 'filter']);

Route::get('/search', [MatController::class, 'search']);
Route::get('/deals', [MatController::class, 'deals']);
Route::get('/', [MatController::class, 'index']);

Route::get('add-to-cart/{id}', [MatController::class, 'addToCart']);
Route::delete('remove-from-cart', [MatController::class, 'remove']);
Route::delete('clear-cart', [MatController::class, 'clearCart']);

Route::get('/checkout', function () {
    return redirect('/')->with('mats', Mat::paginate(6));
});
//Route::post('/checkout', [StripeController::class, 'checkout']);
Route::post('/checkout', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
//Route::get('/success', [StripeController::class, 'success']);
Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');

Route::post('/addReview/{id}', [ReviewController::class, 'addReview']);

Route::get('/test', function(){
    return view('mats.test'); 
}); 
Route::get('/dashboard', function () {
    return redirect('/')->with('mats', Mat::paginate(6));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('favs/{id}', [ProfileController::class, 'show']);
    Route::any('user/{id}/new-fav', [ProfileController::class, 'newFav']);
    Route::post('user/{id}',[ProfileController::class, 'update']); 
    Route::get('mat/create',  [MatController::class, 'create'])->name('mat.create');
    Route::post('mat/{id}/add-tag', [MatController::class, 'addTag']);
    Route::get('mat/{id}/add-tag/{tag}', [MatController::class, 'deleteTag']); 
    Route::get('mat/{id}/available', [MatController::class, 'available']);
    Route::get('admin',[MatController::class, 'admin']); 
    Route::any('admin/filter',[MatController::class, 'adminFilter']); 
    Route::resource('orders', OrderController::class);
    Route::get('user/orders', [ProfileController::class, 'orders']); 
});
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
require __DIR__.'/auth.php';
