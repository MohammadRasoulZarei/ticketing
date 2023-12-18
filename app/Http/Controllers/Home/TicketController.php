<?php

namespace App\Http\Controllers\Home;

use Carbon\Carbon;
use App\Models\Ticket;
use App\Models\Message;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::where('user_id', auth()->id())->latest()->paginate(10);

        return view('home.tickets.index', compact('tickets'));
    }
    public function create()
    {

        $departments = Department::all();

        return view('home.tickets.create', compact('departments'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {

        // dd($req->all());
        $req->validate([
            'subject' => "required|min:5",
            'department_id' => 'required|integer',
            'priority' => 'required',
            'message' => 'required|min:10',
            'attachment' => 'file|max:3000'
        ]);
        $filename = null;
        if ($req->attachment) {

            $filename = uniqeFileName($req->attachment->getClientOriginalName());
            $req->attachment->move(public_path(env('ATTACHMENT_PATH')), $filename);
        }
        $data = $req->except(['_token', 'message', 'attachment']);

        $data['ip'] = $req->ip();
        $data['user_id'] = auth()->id();

        //dd($data);

        DB::beginTransaction();
        $ticket = Ticket::create($data);
        Message::create([
            'ticket_id' => $ticket->id,
            'message' => $req->message,
            'ip' => $req->ip(),
            'user_id' => auth()->id(),
            'attachment' => $filename
        ]);
        DB::commit();
        alert()->success('تیکت شما ساخته شد', 'با تشکر');
        return to_route('panel.tickets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
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
        $pastTime = Carbon::create($ticket->created_at)->diffForHumans(['parts' => 2]);
        return view('home.tickets.show', compact('ticket', 'pastTime','messages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
