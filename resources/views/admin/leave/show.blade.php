@extends('adminlte::page')

@section('title', 'Employee')

@section('content_header')

@stop

@section('content')
    <div class="container">
        <div class="card-body">
            <h4> Name: {{$leave->name}}</h4>
            <h4>Type: {{$leave->type}}</h4>
            <h4>Duration: {{$leave->duration}}</h4>
            <h4>Date: {{$leave->date}}</h4>
            <h4>Reason: {{$leave->reason}}</h4>
            <h4>Status: {{$leave->status}}</h4>
        </div>
        <a href="{{route('leave.index')}}">
            <div class="button">
                <button class="btn btn-primary" type="submit">Back</button>
            </div></a>
    </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
