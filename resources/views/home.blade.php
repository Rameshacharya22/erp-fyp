@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>Dashboard</h1> --}}
@stop

@section('content')
    {{-- <p>Welcome to this beautiful admin panel.</p> --}}

    <div class="dashboard">
        <div class="group-box">
            <div class="box box-one">
                <div class="box-title">Total Task <br> 05</div>
                <div class="box-icon"> <i class="fas fa-tasks"></i> </div>
            </div>

            <div class="box box-two">
                <div class="box-title">New Task <br> 05</div>
                <div class="box-icon"> <i class="fas fa-tasks"></i> </div>
            </div>

            <div class="box box-three">
                <div class="box-title">Due Task <br> 05</div>
                <div class="box-icon"> <i class="fas fa-tasks"></i> </div>
            </div>

            <div class="box box-four">
                <div class="box-title">Attendance <br> 05</div>
                <div class="box-icon">
                    <i class="fas fa-user-clock"></i>
                </div>
            </div>

        </div>

        <div class="combo-box">

            <div class="leave-deadline-box">
                <div class="deadline-box">

                    <div class="deadlinebox">
                        <div class="box-header">
                            <div class="title">Upcomming Title</div>
                            <div class="title-icon">
                                <i class="far fa-hourglass"></i>
                            </div>
                        </div>
                        <p>Lorem, ipsum. ipsum.</p>

                        <div class="deadline-time float-md-right ">Today,12:10A.M</div>
                    </div>
                    <div class="deadlinebox">
                        <div class="box-header">
                            <div class="title">Upcomming Title</div>
                            <div class="title-icon">
                                <i class="far fa-hourglass"></i>
                            </div>
                        </div>
                        <p>Lorem, ipsum. ipsum.Lorem</p>

                        <div class="deadline-time float-md-right">Today,12:10A.M</div>
                    </div>
                </div>

                <div class="leave-box">
                    <div class="box-header">
                        <div class="title">On Leave Today</div>
                        <div class="title-icon">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                    </div>
                    <div class="leave-info">
                        <div class="user-info">
                            <div class="image">
                                <img src="img/user.jpeg" alt="">
                            </div>
                            <div class="user-name">
                                Name Name <br>
                                developer
                            </div>
                        </div>
                        <div class="leave-duration">
                            Full Day
                        </div>
                        <div class="leave-type">
                            Annual
                        </div>


                    </div>
                </div>

            </div>


            <div class="calender-box">
                <div class="box-header">
                    <div class="title">Calender</div>
                    <div class="title-icon">
                        <i class="far fa-calendar-alt"></i>
                    </div>
                </div>
                <div class="calender"></div>
            </div>
        </div>


        <div class="appreciation-notice-box">
            <div class="appreciation-box">
                <div class="box-header">
                    <div class="title">Appreciation</div>
                    <div class="title-icon">
                        <i class="far fa-calendar-alt"></i>
                    </div>
                </div>
                <div class="leave-info">
                    <div class="user-info">
                        <div class="image">
                            <img src="img/user.jpeg" alt="">
                        </div>
                        <div class="user-name">
                            Name Name <br>
                            developer
                        </div>
                    </div>
                    <div class="leave-duration">
                        <i class="fas fa-medal" style="font-size: 25px"></i>
                    </div>
                    <div class="leave-type">
                        Employee of the Week <br>
                        2024/02/02 - 2024/03/30
                    </div>


                </div>
            </div>
            <div class="notice-box">
                <div class="box-header">
                    <div class="title">Notice</div>
                    <div class="title-icon">
                        <i class="fas fa-volume-up"></i>
                    </div>
                </div>


                <div class="notice-info">
                    <div class="notice-info-title">
                        <div class="header">notice header header</div>
                        <div class="date">
                            <i class="fas fa-calendar-alt pr-3"></i>2024/02/02
                        </div>
                    </div>
                    <div class="notice-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam non nihil veritatis accusantium
                            molestias repudiandae odit est enim atque iusto!</p>
                    </div>
                </div>

            </div>
        </div>



    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}

@stop
