@extends('adminlte::page')
@section('title', 'Emergency Contact')
@section('content_header')
    <div class="row">
        {{--    <div class="col"><h1>Emergency</h1></div> --}}
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        {{-- <div class="col"><a href="{{ route('emergency.create') }}" class="tertiary-color"><button type="button"
                    class="btn btn-primary">Add Emergency</button></a></div> --}}
    </div>


@section('content')
    <div class="setting-container">
        <div class="setting-tab">
            <a class="b1" href="{{ route('setting.index') }}">Profile</a>
            <a class="b2" href="{{ route('emergency.index') }}">Emergency Contact</a>
            <a href="{{ route('changepassword.index') }}">Change Password</a>
            <div class="user-icon float-right pr-30">
                <i class="fas fa-user"></i>
            </div>
        </div>
    </div>



    <div class="emergency-content">

        <div class="emergency-info">
  <form action="{{ route('setting.update', $user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="emergency-form">
                <div class="form-row">
                    <div class="form-group col-md-4 ">
                        <label for="name">Name <span style="color: #FF3B30">*</span> </label>
                        <input type="text" value="{{ old('name') }}" class="form-control" id="name" name="name"
                            required>
                    </div>
                    <div class="form-group col-md-4 ">
                        <label for="email">Email <span style="color: #FF3B30">*</span> </label>
                        <input type="text" value="{{ old('email') }}" class="form-control" id="email" name="email"
                            required>
                    </div>
                    <div class="form-group col-md-4 ">
                        <label for="contact_number">Contact Number <span style="color: #FF3B30">*</span></label>
                        <input type="text" value="{{ old('contact_number') }}" class="form-control" id="contact_number"
                            name="contact_number" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4 ">
                        <label for="gender">Gender <span style="color: #FF3B30">*</span> </label>
                        <input type="text" value="{{ old('gender') }}" class="form-control" id="gender" name="gender"
                            required>
                    </div>
                    <div class="form-group col-md-4 ">
                        <label for="relationship">Relationship<span style="color: #FF3B30">*</span> </label>
                        <input type="text" value="{{ old('relationship') }}" class="form-control" id="relationship"
                            name="relationship" required>
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-4 ">
                        <label for="country">Your Name <span style="color: #FF3B30">*</span> </label>
                        <input type="text" value="{{ old('country') }}" class="form-control" id="country"
                            name="country" required>
                    </div>
                    <div class="form-group col-md-4 ">
                        <label for="city">City <span style="color: #FF3B30">*</span> </label>
                        <input type="text" value="{{ old('city') }}" class="form-control" id="city" name="city"
                            required>
                    </div>
                    <div class="form-group col-md-4 ">
                        <label for="postalcode">Postal Code / Ward <span style="color: #FF3B30">*</span></label>
                        <input type="text" value="{{ old('postalcode') }}" class="form-control" id="postalcode"
                            name="postalcode" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary float-right mt-3">Edit</button>

            </div>
  </form>

        </div>

    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/emergency.css">
@stop

@section('js')

@stop
