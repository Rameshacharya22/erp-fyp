@extends('adminlte::page')

@section('title', 'Department')

@section('content_header')
  
@stop

@section('content')
<div class="container">
    <div class="card-body">
        <h4>Id: {{$department->id}} </h4>
        <h4>Title: {{$department->title}}</h4>
    </div>
    <a href="{{route('department.index')}}">
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