<?php

namespace App\Http\Controllers\Home;

use App\Models\Ticket;
use App\Models\Message;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{
   public function index() {
    $tickets=Ticket::latest()->paginate(10);
   
    return view('home.tickets.index', compact('tickets'));
   }
   public function create() {

    $departments=Department::all();

    return view('home.tickets.create',compact('departments'));
   }
     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {

       // dd($req->all());
       $req->validate([
        'subject'=>"required|min:5",
        'department_id'=>'required|integer',
        'priority'=>'required',
        'message'=>'required|min:20',
        'attachment'=>'file|max:1000'
       ]);
       $filename=null;
       if ($req->attachment) {

        $filename=uniqeFileName($req->attachment->getClientOriginalName());
        $req->attachment->move(public_path(env('ATTACHMENT_PATH')),$filename);
       }
       $data=$req->except(['_token','message','attachment']);

       $data['ip']=$req->ip();
       $data['user_id']=auth()->id();

       //dd($data);

       DB::beginTransaction();
       $ticket=Ticket::create($data);
       Message::create([
        'ticket_id'=>$ticket->id,
        'message'=>$req->message,
        'ip'=>$req->ip(),
        'user_id'=>auth()->id(),
        'attachment'=>$filename
       ]);
       DB::commit();
       alert()->success('تیکت شما ساخته شد','با تشکر');
       return to_route('panel.tickets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
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
