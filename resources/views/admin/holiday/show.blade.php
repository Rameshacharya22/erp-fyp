@extends('adminlte::page')

@section('title', 'View Holiday')

@section('content_header')

@stop

@section('content')
<div class="container">
    <div class="card-body">
        <h4>Id: {{$holiday->id}}</h4>
        <h4>Date: {{$holiday->date}}</h4>
        <h4> Title: {{$holiday->title}}</h4>
        <h4> Description: {{$holiday->description}}</h4>
        <h4> Day: {{$holiday->day}}</h4>
    </div>
    <a href="{{route('holiday.index')}}">
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
