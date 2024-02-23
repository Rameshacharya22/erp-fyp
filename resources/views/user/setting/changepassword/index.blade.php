@extends('adminlte::page')
@section('title', 'Emergency Contact')
@section('content_header')
    <div class="row">
        {{--    <div class="col"><h1>Emergency</h1></div> --}}
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        {{-- <div class="col"><a href="{{ route('emergency.create') }}" class="tertiary-color"><button type="button"
                    class="btn btn-primary">Add Emergency</button></a></div> --}}
    </div>


@section('content')
    <div class="setting-container">
        <div class="setting-tab">
           <a class="b1" href="{{route('setting.index')}}">Profile</a>
            <a class="b2" href="{{ route('emergency.index') }}">Emergency Contact</a>
            <a href="{{ route('changepassword.index') }}">Change Password</a>
            <div class="user-icon float-right pr-30">
                <i class="fas fa-user"></i>
            </div>
        </div>
    </div>



    <div class="password-change-box">

        <div class="password-info">
            <div class="pass-head ">
                <div class="pass-text">Change Password</div>
                <i class="fas fa-lock"></i>
            </div>

            <div class="pass-info">
                <p>Your password must be at least six characters and should include
                    a combination of numbers, letters and special characters (!$@%).</p>
            </div>

            <div class="combo-input">
                <input type="password" class="form-control mt-3" placeholder="Current password" id="title"
                    name="title">
                <input type="password" class="form-control mt-3 " placeholder="New Password" id="title" name="title">
                <input type="password" class="form-control mt-3 " placeholder="New Password" id="title" name="title">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Change Password</button>




        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/changepw.css">
@stop

@section('js')

@stop
