@extends('adminlte::page')

@section('title', 'Project')

@section('content_header')
<div class="row">
{{--    <div class="col"><h1>Project</h1></div>--}}
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"><a href="{{route('project.create')}}" class="tertiary-color"><button type="button" class="btn btn-primary">Add Project</button></a></div>
</div>


@stop

@section('content')
<div class="container">
        <table class="table table-bordered" id="employee-table">
            <thead>
                <tr>
                    <th>Project ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Started At</th>
                    <th>Deadline At</th>
                    <th>Completion Time</th>
                    <th>Completed At</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{$project->id}}</td>
                        <td>{{$project->title}}</td>
                        <td>{{$project->description}}</td>
                        <td>{{$project->started_at}}</td>
                        <td>{{$project->deadline_at}}</td>
                        <td>{{$project->completion_time}}</td>
                        <td>{{$project->completion_at}}</td>
                        <td>
                        <a href="{{ route('project.show', $project->id) }}" class="btn"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('project.edit', $project->id) }}" class="btn "><i class="far fa-edit"></i></a>
                            <form action="{{ route('project.destroy', $project->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn"><i class="fas fa-trash-alt" style="color: #e01010;"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
                {{$projects->links()}}

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
