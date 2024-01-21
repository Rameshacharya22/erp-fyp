@extends('adminlte::page')

@section('title', 'Position')

@section('content_header')
    <div class="row">
        <div class="col">
            <h1>Position</h1>
        </div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"><a href="{{ route('position.create') }}" class="tertiary-color"><button type="button"
                    class="btn btn-primary">Add Position</button></a></div>
    </div>


@stop

@section('content')
    <div class="table-responsive">
        <table class="table  data-table display table-bordered ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Position</th>
                    <th>Department</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($positions as $position)
                    <tr>
                        <td>{{ $position->id }}</td>
                        <td>{{ $position->title }}</td>
                        <td>{{ $position->department->title }}</td>
                        <td>
                            <a href="{{ route('position.show', $position->id) }}" class="btn"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('position.edit', $position->id) }}" class="btn "><i class="far fa-edit"></i></a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script>
    $(function () {
            var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('position.index') }}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'title', name: 'title' },
                { data: 'department_id', name: 'department.title' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
 

            ]
        });
    });
</script> --}}
@stop