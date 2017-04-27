<div class="top-bar-dark">            
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 hidden-xs">
                        <div class="top-bar-socials">
                            <a href="https://www.facebook.com/touristclubsust/" target="_blank" class="social-icon-sm si-dark si-gray-round si-colored-facebook">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://twitter.com/TCSUST" target="_blank" class="social-icon-sm si-dark si-gray-round si-colored-twitter">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="https://plus.google.com/u/0/112255938120348389459" target="_blank" class="social-icon-sm si-dark si-gray-round si-colored-google-plus">
                                <i class="fa fa-google-plus"></i>
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <!-- <a href="#" class="social-icon-sm si-dark si-gray-round si-colored-linkedin">
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-linkedin"></i>
                            </a> -->
                            <a href="https://www.linkedin.com/groups/6551378/profile" target="_blank" class="social-icon si-dark si-colored-linkedin">
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <!-- <a href="#" class="social-icon-sm si-dark si-gray-round si-colored-dribbble">
                                <i class="fa fa-dribbble"></i>
                                <i class="fa fa-dribbble"></i>
                            </a> -->
                        </div>
                    </div>
                    <div class="col-sm-8 text-right">
                        <ul class="list-inline top-dark-right">                      
                            <li class="hidden-sm hidden-xs"><i class="fa fa-envelope"></i> +880-1676435946</li>

                            @if(auth()->check())
                                @role('admin')
                                    <li><a href="{{ route('dashboard') }}"><i class="fa fa-user"></i>Admin</a></li>
                                @endrole
                                <li><a href="{{ route('profile') }}"><i class="fa fa-user"></i>Profile</a></li>
                                <li><a href="{{ route('settings') }}"><i class="fa fa-lock"></i> Settings</a></li>
                                <li><a href="{{ route('logout') }}"><i class="fa fa-logout"></i> Log Out</a></li>
                            @else
                                <li class="hidden-sm hidden-xs"><i class="fa fa-phone"></i> +880-1611496650</li>
                                <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
                                <li><a href="{{ route('register') }}"><i class="fa fa-user"></i> Sign Up</a></li>
                                <li><a class="topbar-icons" href="#"><span><i class="fa fa-search top-search"></i></span></a></li>
                            @endif

                        </ul>
                        <div class="search">
                            <form role="form">
                                <input type="text" class="form-control" autocomplete="off" placeholder="Write something and press enter">
                                <span class="search-close"><i class="fa fa-times"></i></span>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div><!--top-bar-dark end here-->