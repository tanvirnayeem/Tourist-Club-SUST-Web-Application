 <!-- Aside Start-->
<aside class="left-panel">

            <!-- brand -->
            <!-- <div class="logo">
                <a href="#" class="logo-expanded">
                    <i class="ion-social-buffer"></i>
                    <span href="{!!route('dashboard')!!}" class="nav-label">{!! Config::get('customConfig.names.siteName')!!}</span>

                </a>
            </div> -->
            <!-- / brand -->

            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">

                     <li class="{!! Menu::isActiveRoute('dashboard') !!}"><a href="{{ route('dashboard') }}"><i class="ion-star"></i> <span class="nav-label">Dashboard</span></a>                 
                    </li>

                    <li class="has-submenu"><a href="{!! route('pending.blog') !!}"><i class="ion-compose"></i> <span class="nav-label">Blog | Articles</span><span class="badge bg-aqua">{{ count(App\Models\Blog::all()) }}</span></a>
                       <!-- <ul class="list-unstyled">
                            <li><a href="{!! route('blog.create') !!}">Create blog</a></li>
                            <li><a href="{!!route('blog.index') !!}">All Event List</a></li>

                        </ul> -->
                    </li>


                    <!-- <li class="{!! Menu::isActiveRoute('demo.index') !!}"><a href="{{ route('demo.index') }}"><i class="ion-compose"></i> <span class="nav-label">Demo (modal) CRUD</span></a>                       
                    </li>

                    <li class="has-submenu"><a href="#"><i class="ion-grid"></i> <span class="nav-label">Data Tables</span></a>
                        <ul class="list-unstyled">
                            <li><a href="#">Basic Tables</a></li>
                            <li><a href="#">Data Table</a></li>

                        </ul>
                    </li>


                    <li class="has-submenu"><a href="#"><i class="ion-stats-bars"></i> <span class="nav-label">Charts</span><span class="badge bg-purple">1</span></a>
                        <ul class="list-unstyled">
                            <li><a href="#">chart</a></li>
                            <li><a href="#">Morris</a></li>

                        </ul>
                    </li> -->

                   <li class="has-submenu {!! Menu::areActiveRoutes(['event.index', 'event.create']) !!}"><a href="#"><i class="ion-compose"></i> <span class="nav-label">Events</span></a>
                        <ul class="list-unstyled">
                            <li><a href="{!! route('event.create') !!}">Create Event</a></li>
                            <li><a href="{!!route('event.index') !!}">All Event List</a></li>

                        </ul>
                    </li>


                  <li class="has-submenu"><a href="#"><i class="ion-qr-scanner"></i> <span class="nav-label">Info</span></a>
                        <ul class="list-unstyled">
                            <li><a href="{!! route('info.create') !!}">Create Info</a></li>
                            <li><a href="{!!route('info.index') !!}">All Info List</a></li>

                        </ul>
                    </li>

                    <li class="has-submenu"><a href="#"><i class="ion-grid"></i> <span class="nav-label">Category</span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('category.index') }}">All Categories</a></li>
                            <li><a href="{{ route('category.create') }}">Add Category</a></li>

                        </ul>
                    </li>

                    <li class="has-submenu"><a href="#"><i class="ion-person-stalker"></i> <span class="nav-label">User Manage</span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('user.index') }}">List of All Users</a></li>

                        </ul>
                    </li>


                    <!-- <li class="has-submenu"><a href="#"><i class="ion-email"></i> <span class="nav-label">Mail</span></a>
                        <ul class="list-unstyled">
                            <li><a href="#">Inbox</a></li>
                            <li><a href="#">Compose Mail</a></li>
                            <li><a href="#">View Mail</a></li>

                        </ul>
                    </li>


                    <li class="has-submenu"><a href="#"><i class="ion-location"></i> <span class="nav-label">Maps</span></a>
                        <ul class="list-unstyled">
                            <li><a href="gmap.html"> Google Map</a></li>
                            <li><a href="vector-map.html"> Vector Map</a></li>
                        </ul>
                    </li> -->

                </ul>
            </nav>



</aside>
        <!-- Aside Ends-->



