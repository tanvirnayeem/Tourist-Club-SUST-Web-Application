@extends('layouts.frontend')
    @section('content')
        
<div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Register</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('index')}}">Home</a></li>
                            <li>Register</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->
        <div class="divide80"></div>
         <div class="container">
            <div class="row">  
                <div class="col-md-8 col-sm-8">
                @include('admin.includes.alert')
                    <div class="login-form">
                        <h3>Register</h3>
                         <form role="form" method="POST" action="{{route('postRegister') }}"  enctype="multipart/form-data">
                          {{ csrf_field() }}

                        <div class="form-group">
                            <label for="exampleInputName">Full Name*</label>
                            <input type="text" name="fullName" class="form-control" id="exampleInputName" placeholder="Enter Your Full Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail">Email Address*</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="someone@example.com" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword">Password*</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Type Your Password" required>
                        </div> 

                        <div class="form-group">
                            <label for="exampleInputPassword2">Confirm Password*</label>
                            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2" placeholder="Please Type Your Password Again" required>
                        </div> 

                        <div class="form-group">
                            <label for="exampleInputAddress">Address</label>
                            <input type="text" name="address" class="form-control" id="exampleInputAddress" placeholder="Eg. Street No, City, Division">
                        </div>

                          <div class="form-group">
                            <label for="exampleInputPhone">Phone No.</label>
                            <input type="text" name="phone" class="form-control" id="exampleInputPhone" placeholder="Contact Number">
                        </div>

                          <div class="form-group">
                            <label for="exampleInputBio">Bio</label>
                            <input type="textarea" name="bio" class="form-control" id="exampleInputBio" placeholder="Say something about you">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputOccupation">Occupation</label>
                            <input type="text" name="occupation" class="form-control" id="exampleInputOccupation" placeholder="Student or Service Holder etc.">
                        </div>

                        <!-- <div class="form-group">
                            <label for="exampleInputProfilePicture">Profile Picture</label>
                            <input type="file" name="photo" class="form-control" id="exampleInputProfilePicture" multiple="false">
                        </div> -->
         
                        <button type="submit" class="btn btn-theme-bg">Sign Up</button>

                    </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <a href="#" class="btn btn-fb-login"><i class="fa fa-facebook"></i> Login With Facebook</a>
                </div>
            </div>
        </div>
        <div class="divide60"></div>

@endsection