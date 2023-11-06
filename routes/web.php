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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
})->name('/');

// Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    
Route::get('/chatbot', function () {
    return view('chatbot');
})->name('chatbot');

use App\Http\Controllers\BotManController;

Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);
require __DIR__.'/auth.php';
