<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Ticket;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    public function index()  {
      // dd(request()->all());
    $userDepartments=auth()->user()->departments;
  //  $tickets=Ticket::whereIN("department_id",$userDeparments->pluck('id')->toArray())->;
    $tickets=Ticket::whereIN("department_id",$userDepartments->pluck('id')->toArray())->filter()->paginate(5);
        return view('admin.tickets.index',compact('userDepartments','tickets'));
    }

    public function show(Ticket $ticket)
    {
        if ($ticket->status=='unanswered') {
            $ticket->update([
                'status'=>'checking'
            ]);
        }
        if (request()->method() == 'POST') {
            Validator::validate(request()->all(), [
                'message' => 'required',
                'attachment' => 'file|max:3000'
            ]);
            $filename = null;
            if (request()->attachment) {

                $filename = uniqeFileName(request()->attachment->getClientOriginalName());
                request()->attachment->move(public_path(env('ATTACHMENT_PATH')), $filename);
            }
            DB::beginTransaction();
            Message::create([
                'ticket_id' => $ticket->id,
                'message' => request()->message,
                'ip' => request()->ip(),
                'user_id' => auth()->id(),
                'attachment' => $filename
            ]);
            if (auth()->user()->role=='admin') {
                $ticket->update([
                    'status'=>'answered',
                ]);
            }else {
                $ticket->update([
                    'status'=>'unanswered',
                ]);
            }
            DB::commit();
            return redirect(url()->current());
        }
        $messages=$ticket->messages;
        $pastTime = Carbon::create($ticket->updated_at)->diffForHumans(['parts' => 2]);
        return view('admin.tickets.show', compact('ticket', 'pastTime','messages'));
    }

}
