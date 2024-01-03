@extends('adminlte::page')

@section('title', 'Attendance')

@section('content_header')
<div class="row">
    <div class="col"><h1>Attendance</h1></div>
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"><a href="{{route('attendance.create')}}" class="tertiary-color"><button type="button" class="btn btn-primary">Add Attendance</button></a></div>
</div>
    
    
@stop

@section('content')
<div class="container">
        <table class="table" id="employee-table">
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Total Working Days</th>
                    <th>Total Absent Days</th>
                    <th>Action</th>
                     
                </tr>
            </thead>
        </table>
    </div>

   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
        $(function () {
            var table = $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('attendance.index') }}",
                columns: [
                    {data: 'id', name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    { 
                        data: 'is_active', 
                        name: 'is_active',
                        render: function(data, type, full, meta) {
                            // Assuming 1 represents active and 0 represents inactive
                            return data == 1 ? 'Active' : 'Inactive';
                        }},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action'},
                ],
            });
        });
    </script>
    @stop