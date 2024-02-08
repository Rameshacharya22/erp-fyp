@extends('adminlte::page')

@section('title', 'Department')

@section('content')
    <div class="row mx-4 py-3">
        <a href="{{ route('department.create') }}" class="tertiary-color">
            <button type="button"
                    class="btn btn-primary rounded">Add Department +
            </button>
        </a>


        <div class="table-responsive mt-5 bg-white">
            <table class="table table-md data-table rounded">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($departments as $department)
                    <tr>
                        <td>{{ $department->id }}</td>
                        <td>{{ $department->title }}</td>
                        <td>
                            <a href="{{ route('department.show', $department->id) }}" class="btn"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('department.edit', $department->id) }}" class="btn "><i
                                    class="far fa-edit"></i></a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            {{$departments->links()}}

        </div>

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
            ajax: "{{ route('department.index') }}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'title', name: 'title' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        });
    });
</script> --}}
@stop
