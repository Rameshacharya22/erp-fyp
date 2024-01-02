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
}
