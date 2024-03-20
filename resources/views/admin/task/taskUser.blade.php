@extends('adminlte::page')

@section('title', 'Task Detail')

@section('content_header')
    <div class="row">
        {{--    <div class="col"><h1>Task</h1></div> --}}
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
    </div>


@stop

@section('content')
    <div class="container">

        <div class="taskUser-header">
            <div class="two-button">
                    <div class="btn btn-1"> <i class="far fa-check-circle"></i> Mark as Completed</div>
                <div class="btn ml-3 btn-primary "> <i class="far fa-clock"></i> Start Timer </div>
            </div>
            <div class="btn"> <i class="fas fa-file-export"></i> Export</div>
        </div>

        <div class="taskHeader mt-4">Task Details</div>

        <div class="taskDetail-box">
            <div class="taskBox mt-4">
                <label class="detail-lable">Task Name:</label>   <span class="detailText">ssdfdsf</span> <br>

                <label class="detail-lable">Assign By:</label>   <span class="detailText">ssdfdsf</span><br>

                <label class="detail-lable">Project Name:</label>   <span class="detailText">ssdfdsf</span><br>
                <label class="detail-lable">Priority:</label>   <span class="detailText">ssdfdsf</span><br>

                <label class="detail-lable">Working Days:</label>   <span class="detailText">ssdfdsf</span>


            </div>
            <div class="taskProgress mt-4">
                <label class="detail-lable">Task Status:</label>   <span class="detailText">Task in Progress</span> <br>

                <label class="detail-lable">Start Date:</label>   <span class="detailText">2023/10/18</span><br>

                <label class="detail-lable">End Date:</label>   <span class="detailText">2023/10/18</span><br>
                <label class="detail-lable">Hours Logged:</label>   <span class="detailText">1 hrs 30 min</span><br>

                <label class="detail-lable">Working Days:</label>   <span class="detailText">ssdfdsf</span>
            </div>
        </div>

        <div class="form-row">
            <label for="reason" class="mt-4" style="color: #B6B6B6"> Description of the Task (if needed)</label>
            <textarea class="form-control mb-4"  value="{{ old('reason') }}" name="reason" id="reason" cols="30" rows="5"
                      placeholder="For e.g : This project is  ----------"></textarea>
        </div>

        <div class="form-row">
            <label for="reason" class="mt-4 pr-4 " style="color: #023E7D"> Comment </label>
            <label for="reason" class="mt-4 pr-4" style="color: #023E7D"> History </label>
            <textarea class="form-control mb-4"  value="{{ old('reason') }}" name="reason" id="reason" cols="30" rows="5"
                      placeholder="+ Add Comment"></textarea>
        </div>


    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
