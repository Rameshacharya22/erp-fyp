<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\DataTables;
use App\Models\Employee;
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
        if ($request->ajax()) {
            $data = Employee::orderBy('id', 'DESC')->limit(10)->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->rawColumns(['action','title','image'])
                ->make(true);
        }
        return view('admin.employee.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.employee.create');
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
            'date_of_birth' => 'required|date',
            'gender' => 'required|string',
            'contact_number' => 'required|string',
            'email' => 'required|email|unique:employees',
            'address' => 'required|string',
            'hire_date' => 'required|date',
            // 'position_id' => 'required|exists:positions,id',
        ]);

        $data = $request->all();
        $employee = new Employee($data);
        $employee->save();

        // Redirect to a success page or do other actions
        return redirect()->route('employee.index')->with('success', 'Employee added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }

}
