<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Leave;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return view("admin.leave.index", $info);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        $info = $this->getInfo();
        $info['user'] = Auth::user();

        // $employee = Employee::get();
        return view('admin.leave.create', $info);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'reason' => 'required|string|max:255',
            'type' => 'required|string',
            'duration' => 'required|string|in:halfDay,fullDay',
            'date' => 'required',
            //            'status'=>'required',
        ]);


        $data = $request->all();
        $leave = new Leave($data);
        $leave->save();


        //        $leave->attendance()->save($leave);




        return redirect()->route('leave.index')->with('success', 'Leave added successfully');
    }




    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $info = $this->getInfo();
        $info['leave'] = Leave::findOrFail($id);
        return view('admin.leave.show', $info);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $info = $this->getInfo();
        $info['leave'] = Leave::findOrFail($id);
        $info['user'] = Auth::user();
        return view('admin.leave.edit', $info);
    }

    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request, $id)
    {
        $leave = Leave::findOrFail($id);
        $leave->update($request->all());

        
        if ($leave->status === 'approved') {
           
            $user = User::where('name', $leave->name)->first();

            if ($user) {
                $user_id = $user->id;

                $attendance = Attendance::create([
                    'leave_id' => $id,
                    'user_id' => $user_id, 
                    'status' => "absent",
                ]);
            } 
        }
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
