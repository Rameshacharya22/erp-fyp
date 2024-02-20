@extends('adminlte::page')

@section('title', 'View Appreciation')

@section('content_header')

@stop

@section('content')
    <div class="container">
        <div class="card-body">
            <h4>Id: {{ $appreciation->id }}</h4>
            <h4>Employee Name: {{ $appreciation->employee->first_name }}</h4>
            {{-- <h4>Employee Name: {{ $appreciation->employee_id }}</h4> --}}
            <h4> Title: {{ $appreciation->title }}</h4>
            <h4> Date: {{ $appreciation->given_date }}</h4>
        </div>
        <a href="{{ route('appreciation.index') }}">
            <div class="button">
                <button class="btn btn-primary" type="submit">Back</button>
            </div>
        </a>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
