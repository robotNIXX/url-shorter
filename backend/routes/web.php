<?php

use App\Http\Controllers\BaseController;
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

Route::get('/', [BaseController::class, 'index']);

Route::post('/create-url', [LinksController::class, 'store'])->name('create-url');
Route::get('/{path}', [LinksController::class, 'redirectExport'])->where('path', '^(?!api).*$');
