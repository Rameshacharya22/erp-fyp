<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    protected $title;

    public function getInfo()
    {
        $info['title'] = "Project";
        return $info;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = $this->getInfo();

        $info['projects'] = Project::paginate(5);
        return view("admin.project.index", $info);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $info = $this->getInfo();

        return view('admin.project.create', $info);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'started_at' => 'required|date|after_or_equal:today',
            'deadline_at' => 'required|date|after_or_equal:today',
            'completion_time' => 'required|time_format:H:i|after_or_equal:today',
            'completion_at' => 'date|after_or_equal:today',
        ]);

        $data = $request->all();
        $project = new Project($data);
        $project->save();
        return redirect()->route('project.index')->with('success', 'department added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $info = $this->getInfo();

        $info['Projects'] = Project::findOrFail($id);
        return view('admin.project.show', $info);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $info = $this->getInfo();
        $info['project']  = Project::findOrFail($id);
        return view('admin.project.edit', $info);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->update($request->all());
        return redirect()->route('project.index')->with('success', 'Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return back()->withSuccess('project deleted');
    }
}
