@extends('adminlte::page')

@section('title', 'Leave')

@section('content')
    <div class="row mx-4 py-3">
        <a href="{{ route('leave.create') }}" class="tertiary-color">
            <button type="button" class="btn btn-primary rounded">Add Leave +
            </button>
        </a>

        <div class="table-responsive mt-5 bg-white">
            <table class="table table-md data-table rounded">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        {{--                    <th>Employee Id</th> --}}
                        <th> Leave Date</th>
                        <th>Duration</th>
                        <th>Leave Type</th>
                        <th>Leave Reason</th>
                        <th>Leave Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($leaves as $leave)
                        <tr>
                            <td>{{ $leave->id }}</td>
                            <td>{{ $leave->user->name }}</td>
                            <th>{{ $leave->date }}</th>
                            <th>{{ $leave->duration }}</th>
                            <th>{{ $leave->type }}</th>
                            <th>{{ $leave->reason }}</th>
                            <th>{{ $leave->status }}</th>
                            <td>
                                <a href="{{ route('leave.show', $leave->id) }}" class="btn"><i class="fas fa-eye"></i></a>
                                <a href="{{ route('leave.edit', $leave->id) }}" class="btn "><i
                                        class="far fa-edit"></i></a>
                                <form action="{{ route('leave.destroy', $leave->id) }}" method="POST">
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
            {{-- {{$leaves->links()}} --}}

        </div>

    </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

@section('js')

    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif
    </script>

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
