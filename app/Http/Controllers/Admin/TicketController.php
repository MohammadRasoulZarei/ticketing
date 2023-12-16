<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()  {
        return view('admin.tickets.index');
    }
    public function show(Ticket $ticket)
    {
        //
    }
}
