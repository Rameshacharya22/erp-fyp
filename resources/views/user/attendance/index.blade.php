@extends('adminlte::page')

@section('title', 'My Attendance')

@section('content')
    @can('user-attendance')

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
                                    fill="#E1F0FE" />
                            </svg>
                        </div>
                    </div>

                    <div class="att-box">
                        <div class="att-header">
                            <div class="box-title">Days Present</div>
                            <div class="box-icon"><i class="far fa-calendar-alt"></i></div>
                        </div>
                        <div class="att-dyn-data"><span class="att-data">{{ $presentDays }}</span></div>
                        <div class="att-svg">
                            {{-- 334 77 --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="334" height="77
                        "
                                viewBox="0 0 382 87" fill="none">
                                <path
                                    d="M163.931 21.6499C126.49 41.5613 29.177 40.7103 0 21.6499V79C0 83.4183 3.58172 87 7.99999 87H374C378.418 87 382 83.4183 382 79V21.6499C314.404 -17.5602 208.456 5.31238 163.931 21.6499Z"
                                    fill="#E1F0FE" />
                            </svg>
                        </div>
                    </div>

                    <div class="att-box">
                        <div class="att-header">
                            <div class="box-title">Late</div>
                            <div class="box-icon"><i class="far fa-calendar-alt"></i></div>
                        </div>
                        <div class="att-dyn-data"><span class="att-data">{{ $late }}</span></div>
                        <div class="att-svg">
                            {{-- 334 77 --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="334" height="77
                        "
                                viewBox="0 0 382 87" fill="none">
                                <path
                                    d="M163.931 21.6499C126.49 41.5613 29.177 40.7103 0 21.6499V79C0 83.4183 3.58172 87 7.99999 87H374C378.418 87 382 83.4183 382 79V21.6499C314.404 -17.5602 208.456 5.31238 163.931 21.6499Z"
                                    fill="#E1F0FE" />
                            </svg>
                        </div>
                    </div>

                    <div class="att-box">
                        <div class="att-header">
                            <div class="box-title">Half Days</div>
                            <div class="box-icon"><i class="far fa-calendar-alt"></i></div>
                        </div>
                        <div class="att-dyn-data"><span class="att-data">{{ $halfDays }}</span></div>
                        <div class="att-svg">
                            {{-- 334 77 --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="334" height="77
                        "
                                viewBox="0 0 382 87" fill="none">
                                <path
                                    d="M163.931 21.6499C126.49 41.5613 29.177 40.7103 0 21.6499V79C0 83.4183 3.58172 87 7.99999 87H374C378.418 87 382 83.4183 382 79V21.6499C314.404 -17.5602 208.456 5.31238 163.931 21.6499Z"
                                    fill="#E1F0FE" />
                            </svg>
                        </div>
                    </div>

                    <div class="att-box">
                        <div class="att-header">
                            <div class="box-title">Absent Days</div>
                            <div class="box-icon"><i class="far fa-calendar-alt"></i></div>
                        </div>
                        <div class="att-dyn-data"><span class="att-data">{{ $absentDays }}</span></div>
                        <div class="att-svg">
                            {{-- 334 77 --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="334" height="77
                        "
                                viewBox="0 0 382 87" fill="none">
                                <path
                                    d="M163.931 21.6499C126.49 41.5613 29.177 40.7103 0 21.6499V79C0 83.4183 3.58172 87 7.99999 87H374C378.418 87 382 83.4183 382 79V21.6499C314.404 -17.5602 208.456 5.31238 163.931 21.6499Z"
                                    fill="#E1F0FE" />
                            </svg>
                        </div>
                    </div>

                    <div class="att-box">
                        <div class="att-header">
                            <div class="box-title">Holidays</div>
                            <div class="box-icon"><i class="far fa-calendar-alt"></i></div>
                        </div>
                        <div class="att-dyn-data"><span class="att-data">{{ $holidays }}</span></div>
                        <div class="att-svg">
                            {{-- 334 77 --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="334" height="77
                        "
                                viewBox="0 0 382 87" fill="none">
                                <path
                                    d="M163.931 21.6499C126.49 41.5613 29.177 40.7103 0 21.6499V79C0 83.4183 3.58172 87 7.99999 87H374C378.418 87 382 83.4183 382 79V21.6499C314.404 -17.5602 208.456 5.31238 163.931 21.6499Z"
                                    fill="#E1F0FE" />
                            </svg>
                        </div>
                    </div>
                </div>


                <input type="month" name="date" class="form-control mt-2" id="date"
                    value="{{ \Carbon\Carbon::now()->format('Y-m') }}">


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
                                    @foreach ($attendances ?? [] as $attendance)
                                        <tr>
                                            <th>{{ $attendance->date }}</th>
                                            <td>{{ ucfirst($attendance->status) }}</td>
                                            <td>{{ $attendance->clock_in ?: '---' }}</td>
                                            <td>{{ $attendance->clock_out ?: '---' }}</td>
                                            <td>{{ $attendance->work_hrs ?: '---' }}</td>
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

    @endcan


    @can('admin-attendance')
        <div class="container">

            <div class="attendance-catinfo d-flex pt-4 ">
                <div class="employee">
                    <label for="employee">Employee</label>
                    <select id="employee" name="employee" required>
                        <option value="">All</option>
                        <option value="">All</option>
                        <option value="">All</option>
                    </select>
                </div>

                <div class="department">
                    <label for="department">Department</label>
                    <select id="department" name="department" required>
                        <option value="">All</option>
                        <option value="">All</option>
                        <option value="">All</option>
                    </select>
                </div>

                <div class="designation">
                    <label for="designation">Designation</label>
                    <select id="designation" name="designation" required>
                        <option value="">All</option>
                        <option value="">All</option>
                        <option value="">All</option>
                    </select>
                </div>

                <div class="montn">
                    <label for="month">Month</label>
                    <select id="month" name="month" required>
                        <option value="">All</option>
                        <option value="">All</option>
                        <option value="">All</option>
                    </select>
                </div>

                <div class="year">
                    <label for="year">Year</label>
                    <select id="year" name="year" required>
                        <option value="">All</option>
                        <option value="">All</option>
                        <option value="">All</option>
                    </select>
                </div>

                <div class="late">
                    <label for="late">Late</label>
                    <select id="late" name="late" required>
                        <option value="">All</option>
                        <option value="">All</option>
                        <option value="">All</option>
                    </select>
                </div>

            </div>

            <div class="attendance-action d-flex justify-content-between mt-3   ">
                <div class="combo-btn1">
                    <a href="" class="btn"> + Mark Attendance</a>
                    <a href=""class="btn"><i class="fas fa-file-import"></i> Import</a>
                    <a href=""class="btn"><i class="fas fa-file-download"></i></i> Import</a>
                </div>
                <div class="combo-btn2 ">
                    <a href=""><i class="fas fa-list"></i></a>
                    <a href=""><i class="fas fa-user"></i></a>
                    <a href=""><i class="far fa-clock"></i></a>
                    <a href=""><i class="fas fa-map"></i></a>
                </div>

            </div>


            <div class="attendance-info-table mt-3">

 <table border="1">
        <tr>
            <th>Date</th>
            <th>Employee Name</th>
            <th>Status</th>
        </tr>
        @foreach($attendance as $record)
        <tr>
            <td>{{ $date }}</td>
            <td>{{ $record->user->name }}</td>
            <td>{{ $record->status }}</td>
        </tr>
        @endforeach
    </table>


            </div>

        </div>
    @endcan



    <!-- Bootstrap JS and dependencies -->


@stop

@section('css')
    <link rel="stylesheet" href="css/user_attendance.css">
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
        $(document).on('change', '#date', function() {

            let value = $(this).val();
            $.ajax({
                url: '{{ route('attendance.index') }}',
                method: 'GET',
                data: {
                    month: value
                },
                success: function(response) {
                    console.log(response);
                    $('.table tbody').empty(); // Clear existing table rows
                    $.each(response, function(index, attendance) {
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
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(status, error);
                }
            });
        })
    </script>



    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif
    </script>

@stop
