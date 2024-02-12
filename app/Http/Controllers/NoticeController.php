<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class NoticeController extends Controller
{
    protected $title;

    public function getInfo()
    {
        $info['title'] = "Notice";
        return $info;
    }

    //display the notice
    public function index(Request $request)
    {
        // dd(auth()->user());
        dd(Auth::user());

        if (Gate::allows('userAccss', auth()->user())) {
            $info = $this->getInfo();
            $info['notices'] = Notice::orderBy('created_at', 'desc')->limit(5)->get();
            return view('user.notice.index', $info);
        } else {
            $info = $this->getInfo();
            $info['notices'] = Notice::paginate(5);
            return view('admin.notice.index', $info);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $info = $this->getInfo();
        return view('admin.notice.create', $info);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date|after_or_equal:today',
        ]);



        $notice = new Notice();
        $notice->fill($validatedData);
        $notice->save();

        return redirect()->route('notice.index')->with('success', 'Notice added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $info = $this->getInfo();
        $info['notice'] = Notice::findOrFail($id);
        return view('admin.notice.show', $info);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $info = $this->getInfo();
        $info['notice'] = Notice::findOrFail($id);
        return view('admin.notice.edit', $info);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $notice = Notice::findOrFail($id);
        $notice->update($request->all());
        return redirect()->route('notice.index')->with('success', 'Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $notice = Notice::find($id);
        $notice->delete();
        return back()->withSuccess('Notice deleted');
    }
}
