<?php

use Carbon\Carbon;
use App\Models\Ticket;

use App\Models\Message;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Home\TicketController;
use App\Http\Controllers\Admin\DepartmentController;
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

Route::get('/', function () {
    if (auth()->check()) {
        if (auth()->user()->role=='admin') {
            return to_route('admin.tickets.index');
        }
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
   Route::controller(AdminTicket::class)->name('tickets.')->group(function () {

       Route::get('tickets','index')->name('index');
       Route::match(['get', 'post'],'tickets/{ticket}','show')->name('show');
       Route::get('tickets/{ticket}/close','close')->name('close');
   });
   Route::prefix('departments')->controller(DepartmentController::class)->name('departments.')->group(function () {

       Route::get('/','index')->name('index');
       Route::post('/','store')->name('store');
       Route::get('create','create')->name('create');

       Route::get('delete/{department}','delete')->name('delete');
       Route::get('choose','choose')->name('choose');
       Route::get('set','set')->name('set');

   });



});

Route::get('logout',function(){
    auth()->logout();
    return redirect('/');
});
