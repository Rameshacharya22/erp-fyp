<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    protected $title;

    public function getInfo()
    {
        $info['title'] = "Setting";
        return $info;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = $this->getInfo();
        $info['user'] = Auth::user();
        return view('user.setting.userprofile.index', $info);
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

        $user = User::findOrFail($id); // Retrieve the existing user by ID

        // Validate the incoming request data
        $validatedData = $request->validate([
            'hobbies' => 'required|string|max:255',
            'country' => 'required|string|max:20',
            'language' => 'required|string|max:20',
            'city' => 'required|string|max:20', 
            'postalcode' => 'required|string|max:20',
            'number' => 'required|digits_between:9,10',
            // 'email' => 'required|email|unique:users,email,' . $user->id, 
            // 'goog_cal' => 'nullable|string|in:yes,no', 
            'about-you' => 'required|string|max:255', 
        ]);

        // Update the user's personal details
        $user->employee->update([
            'personaldetail' => [
                'hobbies' => $validatedData['hobbies'],
                'country' => $validatedData['country'],
                'language' => $validatedData['language'],
                'city' => $validatedData['city'], 
                'postalcode' => $validatedData['postalcode'],
                'about-you' => $validatedData['about-you'],
            ],
            'number' => $validatedData['number'], 
        ]);

        
        // $user->update([
        //     'email' => $validatedData['email'], 
        // ]);

        // $user->employee->update([
        //     'email' => $validatedData['email'],
        // ]);


        return redirect()->back()->with('success', 'User settings updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    }
}
