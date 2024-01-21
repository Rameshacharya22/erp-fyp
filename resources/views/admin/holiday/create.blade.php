@extends('adminlte::page')

@section('title', 'Add Holiday')

<!-- @section('content_header')
    <h1>Add Leave</h1>   

@stop -->

@section('content')

@if($errors->any())

@foreach($errors->all() as $error)
{{$error}}
@endforeach

@endif
<div class="container ">
    <form action="{{ route('holiday.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group col-md-6">
                <label for="date">Holiday Date*</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
        

            <div class="form-group col-md-6">
                <label for="title">Title*</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group col-md-6">
                <label for="description">Description*</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>

            <div class="form-group col-md-6">
                <label for="position_id">Holiday Day</label>
                <select class="form-control" name="day" id="day" required> 
                    <option value=""><-Select Day-></option>
                    <option value="Sunday">Suday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thrusday">Thrusday</option>
                    <option value="Friday">Friday</option>
                </select>
            </div>
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

    <!-- <script> console.log('Hi!'); </script> -->
@stop