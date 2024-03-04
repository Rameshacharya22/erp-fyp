@extends('adminlte::page')

@section('title', 'Task')

@section('content_header')
    <div class="row">
        {{--    <div class="col"><h1>Task</h1></div> --}}
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"><a href="{{ route('task.create') }}" class="tertiary-color"><button type="button"
                    class="btn btn-primary">Add Task</button></a></div>
    </div>


@stop

@section('content')
    <div class="container">
        <table class="table table-bordered" id="employee-table">
            <thead>
                <tr>
                    <th>Task N0.</th>
                    <th>Title</th>
                    <th>Project Name</th>
                    <th>Description</th>
                    <th>Started</th>
                    <th>Deadline</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->project->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->started_at }}</td>
                        <td>{{ $task->deadline }}</td>
                        <td>
                            <a href="{{ route('task.show', $task->id) }}" class="btn"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('task.edit', $task->id) }}" class="btn "><i class="far fa-edit"></i></a>
                            <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn"><i class="fas fa-trash-alt"
                                        style="color: #e01010;"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $tasks->links() }}

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
