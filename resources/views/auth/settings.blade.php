@extends('layouts.frontend')
    @section('content')
        
		<div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 style="font-size:30px;color:Gainsboro;">Edit Profile</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a style="font-size:20px;color:PowderBlue;" href="{{ route('index')}}">Home</a></li>
                            <li><a style="font-size:20px;color:PowderBlue;" href="{{ route('profile')}}">Profile</a></li>
                            <li style="font-size:20px;color:PowderBlue;">Edit Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->

<style type="text/css">
    .breadcrumb-wrap{
        background-image: url('user/img/bg.jpg');
    }
</style>
        <div class="divide80"></div>
         <div class="container">
            <div class="row">  
                <div class="col-md-8 col-sm-8">
                @include('admin.includes.alert')
                    <div class="login-form">
                        <h3>Edit Profile</h3>
                         
                        {!! Form::model($user, array('route' => 'postRegister', 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form', 'files' => true)) !!}

                        <div class="form-group">
                            {!! Form::label('username', "Username*", array('class' => 'control-label col-lg-2')) !!}
                            <div class="col-lg-10">
                                {!! Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'E.g. dark_xaviar', 'required' => 'required')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('fullName', "Full Name*", array('class' => 'control-label col-lg-2')) !!}
                            <div class="col-lg-10">
                                {!! Form::text('fullName', $user->profile->fullName, array('class' => 'form-control', 'placeholder' => 'E.g. Dark Xaviar', 'required' => 'required')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', "Email Address*", array('class' => 'control-label col-lg-2')) !!}
                            <div class="col-lg-10">
                                {!! Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'dark_xaviar@mail.com', 'required' => 'required')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('address', "Address*", array('class' => 'control-label col-lg-2')) !!}
                            <div class="col-lg-10">
                                {!! Form::text('address', $user->profile->address, array('class' => 'form-control', 'placeholder' => 'Eg. Street No, City, Division')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('phone', "Phone*", array('class' => 'control-label col-lg-2')) !!}
                            <div class="col-lg-10">
                                {!! Form::text('phone', $user->profile->phone, array('class' => 'form-control', 'placeholder' => 'E.g. +880 XXXXX XXX XXX')) !!}
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            {!! Form::label('bio', "Bio*", array('class' => 'control-label col-lg-2')) !!}
                            <div class="col-lg-10">
                                {!! Form::text('bio', $user->profile->bio, array('class' => 'form-control', 'placeholder' => 'I like to read :D')) !!}
                            </div>
                        </div> -->

                        <div class="form-group">
                            {!! Form::label('occupation', "Occupation*", array('class' => 'control-label col-lg-2')) !!}
                            <div class="col-lg-10">
                                {!! Form::text('occupation', $user->profile->occupation, array('class' => 'form-control', 'placeholder' => 'E.g student, service holder etc.')) !!}
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label for="exampleInputProfilePicture">Profile Picture</label>
                            <input type="file" name="photo" class="form-control" id="exampleInputProfilePicture" multiple="false">
                        </div> -->
         
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                            {!! Form::submit('Save Changes', array('class' => 'btn btn-success')) !!}
                            </div>
                        </div>


                    {!! Form::close() !!}
                    </div>
                </div>
                <!-- <div class="col-md-4 col-sm-4">
                    <a href="#" class="btn btn-fb-login"><i class="fa fa-facebook"></i> Login With Facebook</a>
                </div> -->
            </div>
        </div>
        <div class="divide60"></div>

@endsection