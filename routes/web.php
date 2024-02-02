<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::post('pridat-chovatele', [HomeController::class, 'pridatChovatele']);
Route::get('smazat-chovatele/{id}', [HomeController::class, 'smazatChovatele']);
Route::get('editovat-chovatele/{id}', [HomeController::class, 'editovatChovatele']);