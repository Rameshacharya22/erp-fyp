<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\DataTables;
use App\Models\Leave;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


use App\Models\Employee;
use App\Models\Position;
use App\Models\User;

class EmployeeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     */

    protected $title;

    public function getInfo()
{
    $info['title'] = "Employee";
    return $info;

}

     //display the employee
    public function index(Request $request)
    {
        $info = $this->getInfo();
        $info['employees'] = Employee::paginate(5);

        return view('admin.employee.index',$info);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $info = $this->getInfo();
        $info['positions'] = Position::with('department')->get();
        return view('admin.employee.create', $info);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'number' => 'required|digits_between:9,10',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|max:255|confirmed',
            'address' => 'required|string|max:255',
            'hire_date' => 'required|date',
            'position_id' => 'required|exists:positions,id',
        ]);

        $name = $validatedData['first_name'] . ' ' . $validatedData['last_name'];


        // Create user through employee form
        $user = User::create([
//            'name' => $validatedData['first_name'],
            'name' => $name,
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Create employee
        $employee = Employee::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'dob' => $validatedData['dob'],
            'gender' => $validatedData['gender'],
            'email' => $validatedData['email'],
            'number' => $validatedData['number'],
            'address' => $validatedData['address'],
            'hire_date' => $validatedData['hire_date'],
            'position_id' => $validatedData['position_id'],
        ]);

        return redirect()->route('employee.index')->with('success', 'Employee added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $info = $this->getInfo();
    $info ['employee'] = Employee::findOrFail($id);
    return view('admin.employee.show', $info);
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $info = $this->getInfo();
    $info['positions'] = Position::with('department')->get();
    $info['employee'] = Employee::findOrFail($id);
    return view('admin.employee.edit', $info);
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
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return back()->withSuccess('Employee deleted');
    }

}
