<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Project;
use App\Models\ProjectMember;
use App\Models\User;
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
        $info['employees'] = Employee::get();

        return view('admin.project.create', $info);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'started_at' => 'required|date|after_or_equal:today',
            'deadline_at' => 'required|date|after_or_equal:today',
            'completion_at' => 'nullable|date|after_or_equal:today',
        ]);
//
//        $data = $request->all();
//        $project = new Project($data);
//        $project->save();

        $project = Project::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'started_at' => $validatedData['started_at'],
            'deadline_at' => $validatedData['deadline_at'],
            'completion_at' => $validatedData['completion_at'],
        ]);

        $project->employees()->sync($request->employee_ids);


        return redirect()->route('project.index')->with('success', 'department added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $info = $this->getInfo();

        $info['project'] = Project::findOrFail($id);
        return view('admin.project.show', $info);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $info = $this->getInfo();
        $info['employees'] = Employee::get();
        $info['project'] = Project::findOrFail($id);
        return view('admin.project.edit', $info);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'started_at' => 'required|date|after_or_equal:today',
            'deadline_at' => 'required|date|after_or_equal:today',
            'completion_at' => 'nullable|date|after_or_equal:today',
        ]);

//        dd($validatedData);
        $project = Project::findOrFail($id);
        $project->update($validatedData);

        $project->employees()->sync($request->employee_ids);

//        foreach ($request->employee_ids ?? [] as $employeeId)
//        {
//            $pm = new ProjectMember([
//                'employee_id' => $employeeId,
//                'project_id' => $project->id
//            ]);
//            $pm->save();
//
//        }
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
