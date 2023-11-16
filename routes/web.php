<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ContentController;
use App\Http\Middleware\Authenticate;
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

Route::get('/', [ContentController::class, 'show']);

Route::post('admin/{id}', [
    ContentController::class,
    'store'
])->name('content.store');

Route::middleware(['auth'])->group(function () {
Route::get('admin', [
    ContentController::class,
    'index'
])->name('content.index');
});