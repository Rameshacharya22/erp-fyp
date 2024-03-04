<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;

class LeaveController extends Controller
{

    protected $title;

    public function getInfo()
    {
        $info['title'] = "Leave";
        return $info;
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $info = $this->getInfo();
        $info['leaves'] = Leave::paginate(5);

        return view("admin.leave.index",$info);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        $info = $this->getInfo();

        // $employee = Employee::get();
        return view('admin.leave.create',$info);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate the form data
        $request->validate([
            'name'=>'required',
            'reason'=>'required|string|max:255',
            'type' => 'required|string',
            'duration' => 'required|string',
            'status'=> '',
        ]);

        $data = $request->all();
        $leave = new Leave($data);
        $leave->save();
        return redirect()->route('leave.index')->with('success', 'Leave added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $info = $this->getInfo();
        $info ['leave'] = Leave::findOrFail($id);
        return view('admin.leave.show', $info);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $info = $this->getInfo();
        $info['leave'] = Leave::findOrFail($id);
        return view('admin.leave.edit', $info);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $leave = Leave::findOrFail($id);
        $leave->update($request->all());
        return redirect()->route('leave.index')->with('success', 'Record updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $leave = Leave::find($id);
        $leave->delete();
        return back()->withSuccess('Leave deleted');
    }

}
