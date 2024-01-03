<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        return view('admin.employee.index');
    }
    public function create()
    {
        return view('admin.employee.create');
    }
    

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        // $info = $this->crudInfo();
        // $info['item'] = Admission::findOrFail($id);
        // return view($this->showResource(), $info);
    }

}
