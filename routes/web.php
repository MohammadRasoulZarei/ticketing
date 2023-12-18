<?php

use Carbon\Carbon;
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
    //dd(Carbon::now()->format('Y_m_d_H_i_s_u'));
  //  dd(auth()->user()->role);

    //return view('home.tickets.show');
})->middleware('admin');
Route::get('/', function () {
    if (auth()->check()) {
        return to_route('panel.tickets.index');
    }else{
        return redirect('login');
    }

});

Route::prefix('panel')->middleware('auth')->name('panel.')->group(function(){
    Route::get('tickets',[TicketController::class,'index'])->name('tickets.index');
    Route::post('tickets',[TicketController::class,'store'])->name('tickets.store');
    Route::get('tickets/create',[TicketController::class,'create'])->name('tickets.create');
    Route::match(['get', 'post'],'tickets/{ticket}',[TicketController::class,'show'])->name('tickets.show');
});
Route::prefix('admin')->middleware(['auth','admin'])->name('admin.')->group(function(){
    Route::resource('tickets',AdminTicket::class);
});

Route::get('logout',function(){
    auth()->logout();
    return redirect('/');
});
