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
            border: 1px solid var(--Light-Stroke, #D5D5D5);
            background: var(--White, #FFF);
        }

        .att-header {
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }

        .att-header .att-icon {}

        .box-title {
            color: var(--dark-text-blue, #023E7D);
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
            padding-left: 25px fill: var(--Glass-Effect, #E1F0FE);
        }

        .att-dyn-data .att-data {
            color: var(--Accent, #C2699E);
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
            fill: var(--Glass-Effect, #0f66b8);
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
                                fill="#E1F0FE" />
                        </svg>
                    </div>
                </div>

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

                </div>



        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->

    </body>

    </html>
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
@stop
