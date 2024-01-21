<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {       
        $holidays = Holiday::paginate(5);
        return view("admin.holiday.index", compact('holidays'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.holiday.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|string',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'day' => 'required'
        ]);

        $data = $request->all();
        $holiday = new Holiday($data);
        $holiday->save();
        return redirect()->route('holiday.index')->with('success', 'department added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $holiday = Holiday::findOrFail($id);
        return view('admin.holiday.show', compact('holiday'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $holiday = Holiday::findOrFail($id);
        return view('admin.holiday.edit', compact('holiday'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $holiday = Holiday::findOrFail($id);
        $holiday->update($request->all());
        return redirect()->route('holiday.index')->with('success', 'Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
