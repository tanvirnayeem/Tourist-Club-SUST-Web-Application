
@include('pages.header');


    <body>

      
              @include('pages.topline')


        <!--top-bar end here-->
        <!--navigation -->

             @include('pages.navBar')

     <!--navbar-default-->
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>{{ $title }}</h4>
                    </div>
                    <div class="col-sm-6 hidden-xs text-right">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>{{ $title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><!--breadcrumbs-->
        <div class="divide80"></div>
        <div class="container blog-left-img">
            <div class="row">
                <div class="col-md-8">


                @foreach($info as $info_list)
                 
                    <div class="blog-post">

                        <div class="row">
                            <div class="col-md-6 margin20">
                                <a href="#">
                                    <div class="item-img-wrap">
                                        <img src="" class="img-responsive" alt="workimg">
                                        <div class="item-img-overlay">
                                            <span></span>
                                        </div>
                                    </div>                       
                                </a><!--work link--> 
                            </div>
                            <div class="col-md-6 margin20">
                                <ul class="list-inline post-detail">
                                    <li>by <a href="#">TCSUST</a></li>
                                    <li><i class="fa fa-calendar"></i>{{ $info_list->created_at }}</li>
                                   <!-- <li><i class="fa fa-tag"></i> <a href="#">Sports</a></li> -->
                                </ul>
                                <h2><a href="#">{{ $info_list->title }}</a></h2>
                                <p>
                                    {{ $info_list->detail }}
                                </p>
                                <p><a href="blog-single.html" class="btn btn-theme-dark">Read More...</a></p>
                            </div>
                        </div>
                    </div><!--blog post-->


                    @endforeach

                      <!--blog post-->
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Previous Page</a></li>
                        <li class="next"><a href="#">Next Page &rarr;</a></li>
                    </ul><!--pager-->
                </div><!--col-->
              <!--  <div class="col-md-3 col-md-offset-1">
                    <div class="sidebar-box margin40">
                        <h4>Search</h4>
                        <form role="form" class="search-widget">
                            <input type="text" class="form-control">
                            <i class="fa fa-search"></i>
                        </form>
                    </div><!--sidebar-box-->
                 <!--   <div class="sidebar-box margin40">
                        <h4>Text widget</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
                        </p>
                    </div><!--sidebar-box-->
                   <!--  <div class="sidebar-box margin40">
                        <h4>Categories</h4>
                        <ul class="list-unstyled cat-list">
                            <li> <a href="#">Marketing</a> <i class="fa fa-angle-right"></i></li>
                            <li> <a href="#">Videos</a> <i class="fa fa-angle-right"></i></li>
                            <li> <a href="#">Sports</a> <i class="fa fa-angle-right"></i></li>
                            <li> <a href="#">Fashion</a> <i class="fa fa-angle-right"></i></li>
                            <li> <a href="#">Media</a> <i class="fa fa-angle-right"></i></li>
                            <li> <a href="#">Seo</a> <i class="fa fa-angle-right"></i></li>
                            <li> <a href="#">Marketing</a> <i class="fa fa-angle-right"></i></li>
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
                    </div><!--sidebar-box-->
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
                    </div>
                </div><!--sidebar-col-->
          <!--  </div><!--row for blog post-->
       <!-- </div>  --> <!--blog full main container-->
        <div class="divide60"></div>

               @include('pages.footer')<!--default footer end here-->
       <!--scripts and plugins -->
        <!--must need plugin jquery-->

        @include('pages.script')

    </body>



</html>
