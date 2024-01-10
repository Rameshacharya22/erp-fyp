@extends('adminlte::page')

@section('title', 'Add Employee')

<!-- @section('content_header')
    <h1>Add Employee</h1>   

@stop -->

@section('content')
<div class="container mt">
    <form action="{{ route('employee.store') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Add Employee</button>
        <div class="form-row">  
            <div class="form-group col-md-6">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
            </div>
            <div class="form-group col-md-6">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <!-- Add more options if needed -->
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="contact_number">Contact Number</label>
                <input type="text" class="form-control" id="contact_number" name="contact_number" required>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="hire_date">Hire Date</label>
                <input type="date" class="form-control" id="hire_date" name="hire_date" required>
            </div>
            <div class="form-group col-md-6">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
        </div>
            <!-- <div class="form-group col-md-6">
                <label for="position_id">Position</label>
                <select class="form-control" id="position_id" name="position_id" required>
                </select>
            </div> -->
        </div>

        
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