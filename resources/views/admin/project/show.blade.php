@extends('adminlte::page')

@section('title', 'Project')

@section('content_header')
  
@stop

@section('content')
<div class="container">
    <div class="card-body">
        <h4>Id: {{$project->id}}</h4>
        <h4> Title: {{$project->title}}</h4>
        <h4> Description: {{$project->description}}</h4>
        <h4>Started_at: {{$project->started_at}}</h4>
        <h4> Deadline At: {{$project->deadline_at}}</h4>
        <h4> Completion time: {{$project->completion_time}}</h4>
        <h4> Completed At: {{$project->completed_at}}</h4>
    </div>
    <a href="{{route('project.index')}}">
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