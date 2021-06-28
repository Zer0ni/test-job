<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketCreationPageController;

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

Route::get('/', [TicketCreationPageController::class, 'initContent'])->middleware(['auth'])->name('dashboard');
Route::post('/addTicket', [TicketCreationPageController::class, 'processAddTicket'])->middleware(['ticket']);

require __DIR__.'/auth.php';
