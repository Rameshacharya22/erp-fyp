@extends('adminlte::page')

@section('title', 'Department')

@section('content_header')
<div class="row">
    <div class="col"><h1>Department</h1></div>
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"><a href="{{route('department.create')}}" class="tertiary-color"><button type="button" class="btn btn-primary">Add Department</button></a></div>
</div>
    
    
@stop

@section('content')
<div class="table-responsive">
       <table class="table  data-table display">  
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
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
            ajax: "{{ route('department.index') }}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'title', name: 'title' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        });
    });
</script>
    @stop