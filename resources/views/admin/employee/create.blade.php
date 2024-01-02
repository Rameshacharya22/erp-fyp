@extends('adminlte::page')

@section('title', 'Add Employee')

@section('content_header')
    <h1>Add Employee</h1>
@stop

@section('content')
<form>
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Employee ID</label>
      <input type="id" class="form-control" id="inputEmail4" placeholder="Name">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Employee Name</label>
      <input type="name" class="form-control" id="inputEmail4" placeholder="Name">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Employee Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
</div>
<dic class="form-row">
    <div class="form-group col-md-4">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Designation</label>
      <input type="designation" class="form-control" id="inputPassword4" placeholder="Designation">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Department</label>
      <input type="department" class="form-control" id="inputPassword4" placeholder="Department">
    </div>
  </div>
  <div class="form-group">
  <div class="form-group col-md-4">
      <label for="inputPassword4">Country</label>
      <input type="country" class="form-control" id="inputPassword4" placeholder="Department">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Mobile Number</label>
      <input type="phone_number" class="form-control" id="inputPassword4" placeholder="Phone Number">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Country</label>
      <input type="country" class="form-control" id="inputPassword4" placeholder="Department">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop