<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\DataTables;
use Yajra\DataTables\DataTables;

use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) 
    {
        $employees = Employee::all();
        return view('admin.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $info['positions'] = Position::with('department')->get();
        return view('admin.employee.create', $info);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'number' => 'required|digits_between:9,10',
            'email' => 'required|email|unique:employees',
            'address' => 'required|string',
            'hire_date' => 'required|date',
            'position_id' => 'required|exists:positions,id',
        ]);

        $data = $request->all();
        $employee = new Employee($data);
        $employee->save();
        return redirect()->route('employee.index')->with('success', 'Employee added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $employee = Employee::findOrFail($id);
    return view('admin.employee.show', compact('employee'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $info['positions'] = Position::with('department')->get();
    $employee = Employee::findOrFail($id);
    return view('admin.employee.edit', $info,compact('employee'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        return redirect()->route('employee.index')->with('success', 'Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }

}
