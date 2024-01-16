@extends('adminlte::page')

@section('title', 'Employee')

@section('content_header')
<div class="row">
    <div class="col"><h1>Employee</h1></div>
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"><a href="{{route('employee.create')}}" class="tertiary-color"><button type="button" class="btn btn-primary">Add Employee</button></a></div>
</div>
    
    
@stop

@section('content')
<div class="table-responsive">
       <table class="table  data-table display">  
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Hire Date</th>
                <th>Position</th>
                <th>Action</th>
            </tr>
            </thead>
        <tbody>

        </tbody>
    </table>
</div>

   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(function () {
            var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('employee.index') }}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'first_name', name: 'first_name' },
                { data: 'last_name', name: 'last_name' },
                { data: 'dob', name: 'dob' },
                { data: 'gender', name: 'gender' },
                { data: 'number', name: 'number' },
                { data: 'email', name: 'email' },
                { data: 'address', name: 'address' },
                { data: 'hire_date', name: 'hire_date' },
                { data: 'position_id', name: 'position.title' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
 

            ]
        });
    });
</script>
    @stop