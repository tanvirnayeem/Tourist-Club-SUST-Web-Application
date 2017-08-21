
        <!-- Static navbar -->

        
        <div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
            <div class="container">
                <div class="navbar-header">
                
                    
                    <!-- <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('img/logo.png') }}" alt="Tourist Club SUST"></a> -->

                </div>
                <h2 style="text-align:right" class="nayeem-navlogo-pos"><a style="color:white;" href="{{ route('index') }}">Tourist Club SUST</a></h2>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown pull-left" style="margin-right: 630px;"><a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('img/logo.png') }}" alt="Tourist Club SUST" style="margin-top: -92px;"></a></li>
                        <li class="dropdown {!! Menu::isActiveRoute('index') !!} ">
                            <a style="color:orange;" href="{{ route('index') }}" class="dropdown-toggle">Home</a>
                            
                        </li>
                        <!--menu home li end here-->
                        <li class="dropdown">
                            <a style="color:orange;" href="{{ route('event.list') }}" class="dropdown-toggle ">Events</i></a>
                            
                        </li>
                        <li class="dropdown">
                            <a style="color:orange;" href="{{ route('info.list') }}" class="dropdown-toggle " data-toggle="dropdown">Info</i></a>
                            
                        </li>
                        <!-- <li class="dropdown">
                            <a style="color:orange;" href="{{ route('info.list') }}" class="dropdown-toggle " data-toggle="dropdown">Gallery</i></a>
                            
                        </li> -->
                        <!--menu Portfolio li end here-->
                        <li class="dropdown {!! Menu::areActiveRoutes(['blog.myblog', 'blog.index']) !!}">
                            <a style="color:orange;" href="{{ route('blog.index' ) }}" class="dropdown-toggle">Blog <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a style="color:darkblue;" href="{{ route('blog.index') }}">Blog Public</a></li>
                                @if(auth()->check())
                                <li><a style="color:darkblue;" href="{{ route('blog.myblog') }}">My Article</a></li>
                                @endif
                                <li><a style="color:darkblue;" href="{{ route('blog.create') }}">Write an Article</a></li>
                                
                                
                                
                            </ul>
                        </li>
                        <!--menu blog li end here-->
        
                        <!--mega menu-->
                        <li class="dropdown ">
                            <a style="color:orange;" href="{{ route('contact') }}" class="dropdown-toggle" >Contact</a>
                            
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--container-->

            <style type="text/css">
                .navbar-brand{
                    position: absolute;
                        right: 20px;
                        padding-top: 39px;
                }

                .navbar.navbar-default.navbar-static-top.yamm.sticky{
                    background-color: Black;
                }
                .top-bar-dark{
                    background-color: DarkSlateGrey;
                }

                .col-md-8.margin30{
                    background-color: BlanchedAlmond ;
                }

               /*.breadcrumb-wrap {
                    padding: 60px 0;
                    background-position: center center;
                    background-repeat: no-repeat;
                    background: url(img/showcase-1.jpg) no-repeat center center;
                }*/
            </style>

            <!-- <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider">
                         <li>    
                            <div class="caption">
                                <h3>Adventure is <span>worthwhile</span> </h3>
                            </div>
                         </li>
                         <li>
                            <div class="caption">                        
                            <h3>Take Your <span>Dream</span> </h3>
                            </div>
                        </li>
                         <li>             
                            <div class="caption">
                                <h3>Adventure is <span>worthwhile</span> </h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> -->

        </div> 