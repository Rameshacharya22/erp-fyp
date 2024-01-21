<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Position;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       
        
        $positions = Position::paginate(5);
        return view('admin.position.index', compact('positions'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $info['positions'] = Position::with('department')->get();
        $info['departments'] = Department::get();
        return view('admin.position.create', $info);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
        ]);

        $data = $request->all();
        $position = new Position($data);
        $position->save();
        return redirect()->route('position.index')->with('success', 'position added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $position = Position::findOrFail($id);
        $department = $position->department;

        return view('admin.position.show', compact('position', 'department'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $info['departments'] = Department::all();
        $position = Position::findOrFail($id);
        return view('admin.position.edit', compact('info', 'position'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $position = Position::findOrFail($id);
        $position->update($request->all());
        return redirect()->route('position.index')->with('success', 'Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    { {
            // $position = Position::findOrFail($id);
            $position = Position::where('id', $id)->first();

            $position->delete();

            return redirect()->route('position.index')->with('success', 'Position deleted successfully');
        }
    }
}
