<?php

use App\Http\Controllers\AddressController;
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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/address/_create_dialog', [AddressController::class, 'create']);
Route::post('/address/create', [AddressController::class, 'store']);

// Route::resource('address', AddressController::class)->only([
//     'index', 'show', 'create', 'store', 'edit', 'update', 'destroy',
// ]);
