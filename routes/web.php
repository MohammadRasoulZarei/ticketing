<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Home\TicketController;
use App\Http\Controllers\Admin\TicketController as AdminTicket;

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
Route::get('/test',function(){
    return view('home.tickets.show');
});
Route::get('/', function () {
    if (auth()->check()) {
        return to_route('panel.tickets.index');
    }else{
        return redirect('login');
    }

});

Route::prefix('panel')->middleware('auth')->name('panel.')->group(function(){
    Route::resource('tickets',TicketController::class);
});
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){
    Route::resource('tickets',AdminTicket::class);
});

Route::get('logout',function(){
    auth()->logout();
    return redirect('/');
});
