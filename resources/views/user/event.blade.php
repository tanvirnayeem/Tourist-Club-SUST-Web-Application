@extends('layouts.frontend')
    @section('content')
        @include('admin.includes.alert')
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
                <div class="col-md-8">


                @foreach($events as $event)

                    <div class="blog-post">

                        <div class="row">
                        
                            <div class="col-md-6 margin20">
                                <a href="{{ route('event.single',$event->id) }}">
                                    <div class="item-img-wrap">
                                        <img src="{{ asset($event->img_url) }}" class="img-responsive" alt="workimg">
                                        <div class="item-img-overlay">
                                            <span></span>
                                        </div>
                                    </div>                       
                                </a><!--work link--> 
                            </div>
                            <div class="col-md-6 margin20">
                                <ul class="list-inline post-detail">
                                    <li>by <a href="#">TCSUST</a></li>
                                    <li><i class="fa fa-calendar"></i>Created at: {{ $event->created_at->toFormattedDateString() }} </li>
                                   <!-- <li><i class="fa fa-tag"></i> <a href="#">Sports</a></li>
                                </ul> -->
                                <h2><a href="{{ route('event.single',$event->id) }}">{{ $event->name }}</a></h2>
                                <h5>Date: {{ $event->date }}</h5><h6>Place: {{ $event->place }} </h6>
                                <p>
                                    {!!  str_limit($event->description, 100) !!}
                                </p>
                                <p><a href="{{ route('event.single',$event->id) }}" class="btn btn-theme-dark">Read More...</a>
                                <a href="{{ $event->fb_event_link or '#' }}" class="btn btn-primary">Facebook Event</a>
                                </p>
                            </div>
                        </div>
                    </div><!--blog post-->


                    @endforeach

                  
                    <!-- <div class="sidebar-box margin40">
                        <h4>Tag Cloud</h4>
                        <div class="tag-list">
                            <a href="#">Wordpress</a>
                            <a href="#">Design</a>
                            <a href="#">Graphics</a>
                            <a href="#">Seo</a>
                            <a href="#">Development</a>
                            <a href="#">Marketing</a>
                            <a href="#">fashion</a>
                            <a href="#">Media</a>
                            <a href="#">Photoshop</a>
                        </div>
                    </div> -->
                    {!! $events->render() !!}
                </div><!--sidebar-col-->
            </div><!-- row for blog post -->
       </div><!--blog full main container -->
       <div class="divide60"></div> 

       <div class="divide60"></div> 
         <div class="divide60"></div> 

@stop