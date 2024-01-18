@extends('adminlte::page')

@section('title', 'Add Department')

@section('css')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif

    <div class="container pt-2">
        <div class="card">
            <div class="card-header">
                Add Department
            </div>
            <div class="card-body">
                <div class="container ">
                    <form action="{{ route('department.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-6">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>



                        <div class="col-md-12 border-top">

                            <button type="submit" class="btn btn-primary mt-2 float-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection



@section('js')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- <script>
        console.log('Hi!');
    </script> -->
@stop
