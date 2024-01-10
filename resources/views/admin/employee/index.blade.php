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
    <table class="table table-bordered" id="employees-table">
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
    </table>
</div>

   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#employees-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('employee.index') }}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'first_name', name: 'first_name' },
                { data: 'last_name', name: 'last_name' },
                { data: 'date_of_birth', name: 'date_of_birth' },
                { data: 'gender', name: 'gender' },
                { data: 'contact_number', name: 'contact_number' },
                { data: 'email', name: 'email' },
                { data: 'address', name: 'address' },
                { data: 'hire_date', name: 'hire_date' },
                // { data: 'position.title', name: 'position.title' }, // Assumes you have a relationship in the Employee model
            ]
        });
    });
</script>
    @stop