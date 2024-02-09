@extends('adminlte::page')

@section('title', 'Add Project')

<!-- @section('content_header')

@stop -->

@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
    <div class="container ">
        <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-row ">
                <div class="form-group col-md-6 mt-3">
                    <label for="title">Project Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="form-group col-md-6 mt-3">
                    <label for="description">Project Description</label>
                    <input type="text" class="form-control" id="description" name="description" required>
                </div>


            </div>

            <div class="form-row">

                <div class="form-group col-md-6 mt-3">
                    <label for="started_at">Started Date</label>
                    <input type="date" class="form-control" id="started_at" name="started_at" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="deadline_at">Deadline Date</label>
                    <input type="date" class="form-control" id="deadline_at" name="deadline_at" required>
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="completion_time">Completion Time</label>
                    <input type="time" class="form-control" id="completion_time" name="completion_time" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="completion_at">Completed Date</label>
                    <input type="date" class="form-control" id="completion_at" name="completion_at" required>
                </div>
            </div>

            {{-- 
            title
        description 
        started_at
        deadline_at
        completion_time
        completed_at 
        --}}



    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

    <!-- Bootstrap JS and dependencies -->

    </body>

    </html>
@stop

@section('css')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- <script>
        console.log('Hi!');
    </script> -->
@stop
