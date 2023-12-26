<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FooterController;

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

Route::get('/cara_belanja', function(){
    return view('cara_belanja');
})->name('cara_belanja');

// Metode Pembayaran

route::get('/pembayran', [FooterController::class, 'pembayaran'] )->name('pembayaran');
route::get('/pbni', [FooterController::class, 'pbni'] )->name('pbni');
route::get('/pmandiri', [FooterController::class, 'pmandiri'] )->name('pmandiri');
route::get('/pbri', [FooterController::class, 'pbri'] )->name('pbri');
route::get('/ppermata', [FooterController::class, 'ppermatai'] )->name('ppermata');
route::get('/pe_wallet_qris', [FooterController::class, 'pe_wallet_qris'] )->name('pe_wallet_qris');

// Route::get('/pembayaran', function(){
//     return view('pembayaran/pembayaran');
// })->name('pembayaran');
// Route::get('/pbni', function(){
//     return view('pembayaran/pbni');
// })->name('pbni');

// Route::get('/pmandiri', function(){
//     return view('pembayaran/pmandiri');
// })->name('pmandiri');

// Route::get('/pbri', function(){
//     return view('pembayaran/pbri');
// })->name('pbri');

// Route::get('/ppermata', function(){
//     return view('pembayaran/ppermata');
// })->name('ppermata');

// Route::get('/pe_wallet_qris', function(){
//     return view('pembayaran/pe_wallet_qris');
// })->name('pe_wallet_qris');

// FAQ
Route::get('/faq', function(){
    return view('faq');
})->name('faq');



use App\Http\Controllers\BotManController;

Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);
require __DIR__.'/auth.php';
