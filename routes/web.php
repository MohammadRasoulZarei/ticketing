<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Home\TicketController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});
Route::get('/', function () {
    if (auth()->check()) {
        return to_route('panel.tickets.index');
    }else{
        return redirect('login');
    }

});

Route::prefix('panel')->middleware('auth')->name('panel.')->group(function(){
    Route::get('tikckts',[TicketController::class,'index'])->name('tickets.index');
});

Route::get('logout',function(){
    auth()->logout();
    return redirect('/');
});
