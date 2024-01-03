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
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
    <div class="form-group col-md-4">
      <label for="inputdesignation">Designation</label>
      <input type="designation" class="form-control" id="inputdesignation" placeholder="Designation">
    </div>
    <div class="form-group col-md-4">
      <label for="inputdepartment">Department</label>
      <input type="department" class="form-control" id="inputdepartment" placeholder="Department">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputcountry">Country</label>
      <input type="country" class="form-control" id="inputcountry" placeholder="Department">
    </div>
    <div class="form-group col-md-4">
      <label for="inputphone">Mobile Number</label>
      <input type="phone_number" class="form-control" id="inputphone" placeholder="Phone Number">
    </div>
    <div class="form-group col-md-4">
      <label for="inputGender">Gender</label>
      <select id="inputGender" class="form-control">
        <option selected>Choose...</option>
        <option>Male</option>
        <option>Female</option>
      </select>
    </div>
  </div>
  <div class="from-row">
    <div class="form-group col-md-4">
      <label for="inputZip">Date of Birth</label>
      <input type="text" class="form-control" id="inputdob" placeholder="Date of Birth">
    </div>
  </div>
  <!-- </div> -->
  
</form>
<button type="submit" class="btn btn-primary">Sign in</button>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop