<?php

namespace App\Http\Controllers\Admin;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $departments=Department::latest()->get();
        return view('admin.departments.index',compact('departments'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:departments,name'
        ]);
        Department::create([
            'name'=>$request->name
        ]);
        alert()->success('واحد شما ساخته شد', 'با تشکر');
        return to_route('admin.departments.index');
    }

    public function choose()
    {
        $userDepIDs=auth()->user()->departments->pluck('id')->toArray();
        $departments=Department::latest()->get();
        return view('admin.departments.choose',compact('departments','userDepIDs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function set(Request $req)
    {
        auth()->user()->departments()->sync($req->departments);
        return to_route('admin.tickets.index');

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
