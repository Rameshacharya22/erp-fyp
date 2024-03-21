<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeSheetController extends Controller
{

    protected $title;

    public function getInfo()
    {
        $info['title'] = "Time Sheet";
        return $info;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = $this->getInfo();
        return view('admin.timeSheet.index', $info);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $info = $this->getInfo();
        return view("admin.timeSheet.show", $info);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $info = $this->getInfo();
        return view("admin.timeSheet.edit", $info);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
