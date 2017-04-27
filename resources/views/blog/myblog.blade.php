@extends('layouts.frontend')
    @section('content')

     	<div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 style="font-size:30px;color:DarkGrey;">My Articles</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a style="font-size:20px;color:DarkBlue;" href="{{ route('index') }}">Home</a></li>
                            <li><a style="font-size:20px;color:DarkBlue;" href="{{ route('blog.index') }}">Blog</a></li>
                            <li style="font-size:20px;color:DarkBlue;">My Articles</li>
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
        @include('admin.includes.alert')
            <div class="row">       
                <div class="col-md-8">
                @if(count($blogs))
                	@foreach($blogs as $blog)
                    <div class="blog-post">
                        <div class="row">
                            <div class="col-md-6 margin20">
                                <a href="{{ route('blog.single', str_slug($blog->title, '-')) }}">
                                    <div class="item-img-wrap">
                                        <img src="{{ asset($blog->cover_img) }}" class="img-responsive" alt="workimg">
                                        <div class="item-img-overlay">
                                            <span></span>
                                        </div>
                                    </div>                       
                                </a><!--work link--> 
                            </div>
                            <div class="col-md-6 margin20">
                                <ul class="list-inline post-detail">
                                
                                    <li>by <a href="#">{{ auth()->user()->profile->fullName }}</a></li>
                                    <li><i class="fa fa-calendar"></i> {{ $blog->updated_at->diffForHumans() }}</li>
                                    <li><i class="fa fa-tag"></i> <a href="#">{{ $blog->category->name }}</a></li>
                                </ul>
                                <h2><a href="{{ route('blog.single', str_slug($blog->title, '-')) }}">{{ $blog->title }}</a></h2>
                                <div>{!! str_limit($blog->details, 50) !!}</div><br>
                                <p><a href="{{ route('blog.single', str_slug($blog->title, '-')) }}" class="btn btn-theme-dark">Read More...</a></p>
                                <a href="{{ route('blog.edit', $blog->id) }}"><button class="btn btn-sm">Edit this Article</button></a>
                            </div>
                        </div>
                    </div><!--blog post-->
                    @endforeach

                    
                    <ul class="pager pagination">
                        {!! $blogs->render() !!} 
                    </ul><!--pager-->
                @else
                    <p>You haven't wriiten any article yet. You can Write an Article From Here.</p>
                    <a href="{{ route('blog.create') }}"><button class="btn btn-sm btn-primary">Write an Article</button></a>
                @endif
                </div><!--col-->               
                <div class="col-md-3 col-md-offset-1">
                    <!-- <div class="sidebar-box margin40">
                        <h4>Search</h4>
                        <form role="form" class="search-widget">
                            <input type="text" class="form-control">
                            <i class="fa fa-search"></i>
                        </form>
                    </div> --><!--sidebar-box-->
                   <!--  <div class="sidebar-box margin40">
                        <h4>Text widget</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
                        </p>
                    </div> --><!--sidebar-box-->
                    <div class="sidebar-box margin40">
                        <h4>Categories</h4>
                        <ul class="list-unstyled cat-list">
                        	@foreach($categories as $category)
                            <li> <a href="#">{{ $category->name }}</a> <i class="fa fa-angle-right"></i></li>
                            @endforeach
                        </ul>
                    </div><!--sidebar-box-->
                    <!-- <div class="sidebar-box margin40">
                        <h4>Popular Post</h4>
                        <ul class="list-unstyled popular-post">
                            <li>
                                <div class="popular-img">
                                    <a href="#"> <img src="img/img-7.jpg" class="img-responsive" alt=""></a>
                                </div>
                                <div class="popular-desc">
                                    <h5> <a href="#">blog post image</a></h5>
                                    <h6>31st july 2014</h6>
                                </div>
                            </li>
                            <li>
                                <div class="popular-img">
                                    <a href="#"> <img src="img/img-8.jpg" class="img-responsive" alt=""></a>
                                </div>
                                <div class="popular-desc">
                                    <h5> <a href="#">blog post image</a></h5>
                                    <h6>31st july 2014</h6>
                                </div>
                            </li>
                            <li>
                                <div class="popular-img">
                                    <a href="#"> <img src="img/img-9.jpg" class="img-responsive" alt=""></a>
                                </div>
                                <div class="popular-desc">
                                    <h5> <a href="#">blog post image</a></h5>
                                    <h6>31st july 2014</h6>
                                </div>
                            </li>
                        </ul>
                    </div> --><!--sidebar-box-->
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
                </div><!--sidebar-col-->
            </div><!--row for blog post-->
        </div><!--blog full main container-->
        <div class="divide60"></div>
          
    @endsection