<?php

use App\Http\Controllers\LinksController;
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

Route::post('/create-url', [LinksController::class, 'store'])->name('create-url');
Route::get('/{link}', [LinksController::class, 'redirectExport']);
