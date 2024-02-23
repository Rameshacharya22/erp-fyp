<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    protected $title;

    public function getInfo()
    {
        $info['title'] = "Change Paaword";
        return $info;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = $this->getInfo();
        return view('user.setting.changepassword.index', $info);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    }
}
