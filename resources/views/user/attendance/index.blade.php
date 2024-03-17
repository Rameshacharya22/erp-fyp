@extends('adminlte::page')

@section('title', 'My Attendance')

@section('content')


    <style>
        .assign-leave {
            display: flex;
            justify-content: space-between;
        }


        .att-card {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
        }

        .att-box {
            border: 1px solid black;
            width: 335px;
            height: 199px;
            flex-shrink: 0;
            border-radius: 8px;
            border: 1px solid #D5D5D5;
            background: #FFF;
        }

        .att-header {
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }

        .att-header .att-icon {
        }

        .box-title {
            color: #023E7D;
            /* Headings/Headline 24 */
            font-family: Inter;
            font-size: 24px;
            font-style: normal;
            font-weight: 600;
            line-height: 36px;
            /* 150% */
        }

        .box-icon {
            width: 56px;
            height: 56px;
            flex-shrink: 0;
            font-size: 24px;
            padding-left: 25px;
            fill: #E1F0FE;
        }

        .att-dyn-data .att-data {
            color: #C2699E;
            font-family: Inter;
            font-size: 40px;
            font-style: normal;
            font-weight: 700;
            line-height: 44px;
            padding-left: 40px;

            /* 110% */
        }

        .att-svg {
            width: 382px;
            height: 87px;
            flex-shrink: 0;
            fill: #0f66b8;
        }
    </style>


    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
    <div class="container ">

        <div class="attendance-box">

            <div class="assign-leave" style="font-size:20px; padding:10px 0 10px 0">
                <div class="back-icon ">
                    <a href=""><i class="fas fa-file-upload"></i> <span class="pr-10"> Export</span></a>
                </div>
                <div class="setting-icon">
                    <i class="fas fa-sliders-h"></i>
                </div>
            </div>

            <div class="att-card">
                <div class="att-box">
                    <div class="att-header">
                        <div class="box-title">Working Days</div>
                        <div class="box-icon"><i class="far fa-calendar-alt"></i></div>
                    </div>
                    <div class="att-dyn-data"><span class="att-data">30</span></div>
                    <div class="att-svg">
                        {{-- 334 77 --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="334" height="77
                        "
                             viewBox="0 0 382 87" fill="none">
                            <path
                                d="M163.931 21.6499C126.49 41.5613 29.177 40.7103 0 21.6499V79C0 83.4183 3.58172 87 7.99999 87H374C378.418 87 382 83.4183 382 79V21.6499C314.404 -17.5602 208.456 5.31238 163.931 21.6499Z"
                                fill="#E1F0FE"/>
                        </svg>
                    </div>
                </div>

                <div class="att-box">
                    <div class="att-header">
                        <div class="box-title">Days Present</div>
                        <div class="box-icon"><i class="far fa-calendar-alt"></i></div>
                    </div>
                    <div class="att-dyn-data"><span class="att-data">{{$presentDays}}</span></div>
                    <div class="att-svg">
                        {{-- 334 77 --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="334" height="77
                        "
                             viewBox="0 0 382 87" fill="none">
                            <path
                                d="M163.931 21.6499C126.49 41.5613 29.177 40.7103 0 21.6499V79C0 83.4183 3.58172 87 7.99999 87H374C378.418 87 382 83.4183 382 79V21.6499C314.404 -17.5602 208.456 5.31238 163.931 21.6499Z"
                                fill="#E1F0FE"/>
                        </svg>
                    </div>
                </div>

                <div class="att-box">
                    <div class="att-header">
                        <div class="box-title">Late</div>
                        <div class="box-icon"><i class="far fa-calendar-alt"></i></div>
                    </div>
                    <div class="att-dyn-data"><span class="att-data">{{$late}}</span></div>
                    <div class="att-svg">
                        {{-- 334 77 --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="334" height="77
                        "
                             viewBox="0 0 382 87" fill="none">
                            <path
                                d="M163.931 21.6499C126.49 41.5613 29.177 40.7103 0 21.6499V79C0 83.4183 3.58172 87 7.99999 87H374C378.418 87 382 83.4183 382 79V21.6499C314.404 -17.5602 208.456 5.31238 163.931 21.6499Z"
                                fill="#E1F0FE"/>
                        </svg>
                    </div>
                </div>

                <div class="att-box">
                    <div class="att-header">
                        <div class="box-title">Half Days</div>
                        <div class="box-icon"><i class="far fa-calendar-alt"></i></div>
                    </div>
                    <div class="att-dyn-data"><span class="att-data">{{$halfDays}}</span></div>
                    <div class="att-svg">
                        {{-- 334 77 --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="334" height="77
                        "
                             viewBox="0 0 382 87" fill="none">
                            <path
                                d="M163.931 21.6499C126.49 41.5613 29.177 40.7103 0 21.6499V79C0 83.4183 3.58172 87 7.99999 87H374C378.418 87 382 83.4183 382 79V21.6499C314.404 -17.5602 208.456 5.31238 163.931 21.6499Z"
                                fill="#E1F0FE"/>
                        </svg>
                    </div>
                </div>

                <div class="att-box">
                    <div class="att-header">
                        <div class="box-title">Absent Days</div>
                        <div class="box-icon"><i class="far fa-calendar-alt"></i></div>
                    </div>
                    <div class="att-dyn-data"><span class="att-data">{{$absentDays}}</span></div>
                    <div class="att-svg">
                        {{-- 334 77 --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="334" height="77
                        "
                             viewBox="0 0 382 87" fill="none">
                            <path
                                d="M163.931 21.6499C126.49 41.5613 29.177 40.7103 0 21.6499V79C0 83.4183 3.58172 87 7.99999 87H374C378.418 87 382 83.4183 382 79V21.6499C314.404 -17.5602 208.456 5.31238 163.931 21.6499Z"
                                fill="#E1F0FE"/>
                        </svg>
                    </div>
                </div>

                <div class="att-box">
                    <div class="att-header">
                        <div class="box-title">Holidays</div>
                        <div class="box-icon"><i class="far fa-calendar-alt"></i></div>
                    </div>
                    <div class="att-dyn-data"><span class="att-data">{{$holidays}}</span></div>
                    <div class="att-svg">
                        {{-- 334 77 --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="334" height="77
                        "
                             viewBox="0 0 382 87" fill="none">
                            <path
                                d="M163.931 21.6499C126.49 41.5613 29.177 40.7103 0 21.6499V79C0 83.4183 3.58172 87 7.99999 87H374C378.418 87 382 83.4183 382 79V21.6499C314.404 -17.5602 208.456 5.31238 163.931 21.6499Z"
                                fill="#E1F0FE"/>
                        </svg>
                    </div>
                </div>
            </div>


            <input type="month" name="date" class="form-control mt-2" id="date"
                   value="{{\Carbon\Carbon::now()->format('Y-m')}}">


            <div class="card my-2">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Clock In</th>
                                <th scope="col">Clock Out</th>
                                <th scope="col">Total</th>
                                <th scope="col">View</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($attendances ?? [] as $attendance)
                                <tr>
                                    <th>{{$attendance->date}}</th>
                                    <td>{{ ucfirst($attendance->status)}}</td>
                                    <td>{{$attendance->clock_in ?: '---'}}</td>
                                    <td>{{$attendance->clock_out ?: '---'}}</td>
                                    <td>{{$attendance->work_hrs ?: '---'}}</td>
                                    <td><i class="fas fa-eye"></i></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->


@stop

@section('css')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- <script>
        console.log('Hi!');
    </script> -->

    <script>
        $(document).on('change', '#date', function () {

            let value = $(this).val();
            $.ajax({
                url: '{{route('attendance.index')}}',
                method: 'GET',
                data: {month: value},
                success: function (response) {
                    console.log(response);
                    $('.table tbody').empty(); // Clear existing table rows
                    $.each(response, function (index, attendance) {
                        let newRow = `<tr>
                                    <th>${attendance.date}</th>
                                    <td>${attendance.status}</td>
                                    <td>${attendance.clock_in_time || '---'}</td>
                                    <td>${attendance.clock_out_time || '---'}</td>
                                    <td>${attendance.work_hrs || '---'}</td>
                                    <td><i class="fas fa-eye"></i></td>
                                  </tr>`;
                        $('.table tbody').append(newRow); // Append new row to the table
                    });
                },
                error: function (xhr, status, error) {
                    // Handle error
                    console.error(status, error);
                }
            });
        })
    </script>
@stop
