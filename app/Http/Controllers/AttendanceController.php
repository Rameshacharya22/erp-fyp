<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    protected $title;

    public function getInfo()
    {
        $info['title'] = "Attendance";
        return $info;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = $this->getInfo();

        return view("admin.attendance.index", $info);
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
        if ($userId = $request->userId) {
            $date = Carbon::now()->format('Y-m-d');
            $clockTime = Carbon::now();



            $attendance = Attendance::updateOrCreate(
                [
                    'user_id' => $userId,
                    'date' => $date,
                ],
                [
                    $request->clockIn ? 'clock_in_time' : 'clock_out_time' => $clockTime,
                    'status' => $request->clockIn ? 'pending' : 'present'
                ]
            );

            if ($request->clockIn){
                $openingTime = Carbon::createFromFormat('H:i:s', config('erp.open_time'));
                if ($clockTime->gt($openingTime)) {
                    $late = true;
                } else {
                    $late = false;
                }
                $attendance->update(['is_late' => $late]);
            }
            elseif (!$request->clockIn) {
                $startDate = Carbon::parse($attendance->clock_in_time);
                $endDate = Carbon::parse($attendance->clock_out_time);
                $hours = $endDate->diffInHours($startDate);
                $attendance->update(['work_hrs' => $hours]);
            }
        }

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}
