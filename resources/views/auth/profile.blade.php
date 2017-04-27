@extends('layouts.frontend')
    @section('content')

         <!--navbar-default-->
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 style="font-size:30px;color:Gainsboro;">{{ $title }}</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a style="font-size:20px;color:PowderBlue;" href="{{ route('index') }}">Home</a></li>
                            <li style="font-size:20px;color:PowderBlue;">{{ $title }}</li>
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
        <div class="container blog-left-img">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-post">

                        <div class="row">
                        
                            <div class="col-md-4 margin20">
                                <a href="">
                                  
                                 <img src="{{ asset($user->profile->img_url) }}" class="img-responsive img-circle" alt="Profile Picture">                
                                </a><!--work link--> 
                            </div>
                            <div class="col-md-6 margin20">
                                <h3>{{ $user->profile->fullName }}</h3>
                                <p><i>Username:</i> {{ $user->username }}</p>
                                <p><i>Email:</i> {{ $user->email }}</p>
                                <p><i>Phone:</i> {{ $user->profile->phone }}</p>
                                <p><i>Address:</i> {{ $user->profile->address }}</p>
                                <p><i>Occupation:</i> {{ $user->profile->occupation }}</p>
                                

                                <a href="{{ route('settings') }}" class="btn btn-primary">Edit Profile</a>
                            </div>
                           <!--  <div class="col-md-2">
                                <a href="{{ route('settings') }}" class="btn btn-primary">Edit Profile</a>
                            </div> -->
                        </div>
                    </div><!--blog post-->

                  
                
                </div><!--sidebar-col-->
            </div><!-- row for blog post -->
       </div><!--blog full main container -->

    @endsection



