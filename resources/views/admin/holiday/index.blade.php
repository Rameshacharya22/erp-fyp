@extends('adminlte::page')

@section('title', 'Holiday')

@section('content_header')
<div class="row">
    <div class="col"><h1>Holiday</h1></div>
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"><a href="{{route('holiday.create')}}" class="tertiary-color"><button type="button" class="btn btn-primary">Add Holiday</button></a></div>
</div>
    
    
@stop

@section('content')
<div class="container">
        <table class="table table-bordered" id="employee-table">
            <thead>
                <tr>
                    <th>Holiday ID</th>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Day</th>
                    <th>Action</th>
                     
                </tr>
            </thead>
            <tbody>
                @foreach ($holidays as $holiday)
                    <tr>
                        <td>{{$holiday->id}}</td>
                        <td>{{$holiday->date}}</td>
                        <td>{{$holiday->title}}</td>
                        <td>{{$holiday->description}}</td>
                        <td>{{$holiday->day}}</td>
                        <td>
                        <a href="{{ route('holiday.show', $holiday->id) }}" class="btn"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('holiday.edit', $holiday->id) }}" class="btn "><i class="far fa-edit"></i></a>
                    </td>
                    </tr>
                @endforeach
            </tbody>
            {!! $data->withQueryString()->links('pagination::bootstrap-5') !!}
        </table>
    </div>

   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
{{-- <script>
        $(function () {
            var table = $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('leave.index') }}",
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
    </script> --}}
    @stop