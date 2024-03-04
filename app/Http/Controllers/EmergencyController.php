<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmergencyController extends Controller
{
    protected $title;

    public function getInfo()
    {
        $info['title'] = "Emergency Contact";
        return $info;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = $this->getInfo();
        $info['user'] = Auth::user();
        return view('user.setting.emergency.index', $info);
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
