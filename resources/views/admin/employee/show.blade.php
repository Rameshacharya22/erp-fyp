@extends('adminlte::page')

@section('title', 'Employee')

@section('content_header')
  
@stop

@section('content')
<div class="container">
    <div class="card-body">
        <h4>First Name: {{$employee->first_name}}</h4>
        <h4>Last Name: {{$employee->last_name}}</h4>
        <h4>Date of Birth: {{$employee->dob}}</h4>
        <h4>Gender: {{$employee->gender}}</h4>
        <h4>Number: {{$employee->number}}</h4>
        <h4>Email: {{$employee->email}}</h4>
        <h4>Address: {{$employee->address}}</h4>
        <h4>Hire Date: {{$employee->hire_date}}</h4>
        <h4>Position: {{$employee->position}}</h4>
    </div>
    <a href="{{route('employee.index')}}">
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