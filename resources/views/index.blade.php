@extends('layouts.frontend')
    @section('content')
        @include('admin.includes.alert')
        <!--rev slider start-->

        <div class="tp-banner-container">
            <div class="tp-banner-boxed">
                <ul>
                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('img/tccover.jpg') }}"   alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="caption sfb bold uppercase-title text-center"
                             data-x="center"
                             data-y="158" 
                             data-speed="900"
                             data-start="800"
                             data-easing="Sine.easeOut">Welcome to Tourist Club</div>
                        <!-- <div class="caption sfb lowercase-caption text-center" 
                             data-x="center"
                             data-y="218"
                             data-speed="900"
                             data-start="1500"
                             data-easing="Sine.easeOut">A responsive site template with a clean and profession design 
                            <br />that will be a great solution for your business, portfolio, Shop or any other purpose.</div> -->
                        <!-- <div class="caption rev-buttons tp-resizeme sfb" 
                             data-x="center" 
                             data-y="313"
                             data-speed="900"
                             data-start="2200" 
                             data-easing="Sine.easeOut">
                            <a href="#" class="btn btn-theme-bg btn-lg">Purchase Now</a>
                        </div> -->
                    </li>
                    <!-- SLIDE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('img/tcow.jpg') }}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                        <div class="tp-caption lft"
                             data-x="578"
                             data-y="120" 
                             data-speed="900"
                             data-start="2100"
                             data-easing="Sine.easeOut">
                            <!-- <img src="{{ asset('img/bdmaptc.jpg') }}" alt="" /> -->
                        </div>

                        <div class="tp-caption sft modern_big_bluebg rev-title-v1"
                             data-x="35" data-y="200"
                             data-speed="500"
                             data-start="800"
                             data-easing="Sine.easeOut">
                            Move as far you will
                        </div>
                        <div class="tp-caption sfr modern_big_bluebg rev-title-v1"
                             data-x="35"
                             data-y="265"
                             data-speed="500"
                             data-start="1300"
                             data-easing="Sine.easeOut">
                            Learn as much you can
                        </div>
                        <!-- <div class="caption sfb rev-buttons tp-resizeme"
                             data-x="35"
                             data-y="330"
                             data-speed="500"
                             data-start="1800"
                             data-easing="Sine.easeOut">
                            <a href="#" class="btn btn-theme-bg btn-lg">Purchase Now</a>
                        </div> -->
                    </li>

                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('img/feb.jpg') }}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                        <div class="tp-caption lft"
                             data-x="578"
                             data-y="120" 
                             data-speed="900"
                             data-start="2100"
                             data-easing="Sine.easeOut">
                            <!-- <img src="{{ asset('img/bdmaptc.jpg') }}" alt="" /> -->
                        </div>

                        
                            
                        </div>
                        <!-- <div class="caption sfb rev-buttons tp-resizeme"
                             data-x="35"
                             data-y="330"
                             data-speed="500"
                             data-start="1800"
                             data-easing="Sine.easeOut">
                            <a href="#" class="btn btn-theme-bg btn-lg">Purchase Now</a>
                        </div> -->
                    </li>

                    <!-- SLIDE -->
              
                </ul>
            </div>
        </div><!--full width banner-->

        <div class="divide60"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="center-heading">
                        <h2>About <strong>Tourist Club</strong> </h2>
                        <span class="center-line"></span>
                        <p style="color: black" class="sub-text margin40">Tourist Club SUST is very dignified ,popular and only one tourism related organization of the Shahjalal University of Science And Technology. We promote the tourism places and create awareness among peoples about tourism. We arrange both domestic and international tour every year. We are the only club in SUST who arranges tour in all SAARC countries. We also arrange open discussion, seminars about tourism.
</p>
                    </div>
                </div>

            </div><!--center heading end-->
            <div class="divide50"></div>
          
        </div><!--services container-->

        <div class="divide50"></div>
        
        @if(count($events))
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center-heading">
                        <h2><strong>Belonging  </strong> Events</h2>
                        <span class="center-line"></span>
                    </div>
                </div>                   
            </div>
            <div class="row">
                
                @foreach($events as $event)
                <div class="col-sm-4 margin30">
                    <div>
                        <a href="#">
                            <div class="item-img-wrap">
                                <img src="{{ asset($event->img_url) }}" class="img-responsive" alt="workimg">
                                <div class="item-img-overlay">
                                    <span></span>
                                </div>
                            </div>                       
                        </a><!--news link--> 
                        <div class="news-desc">
                            <span></span>
                            <h4><a href="{{ route('event.list') }}">{{ $event->name }}</a></h4>
                            <span>At {{ $event->place }} on {{ $event->date }}</span> <!-- <span><a href="#">Read more...</a></span> -->
                        </div><!--news desc-->
                    </div> 
                </div><!--news col-->
                @endforeach

            </div>
        </div>
        @endif

        <!-- <div class="divide50"></div>
        <div class="text-center">
            <a href="masonry-portfolio-4.html" class="btn btn-theme-dark btn-lg">View Past Events</a>
        </div> -->
        <div class="divide50"></div>
        <style type="text/css">
        body{
            background-color: #f1f1f1;
        }
        .navbar-default{
            background-color: black;
        }
        .our-team-v-2{
            background-color: DarkCyan;
        }
        .top-bar-dark{
            background-color: DarkSlateGrey;
        }
        .img-circular{
                border-radius: 300px;
                    background: 2px solid #73AD21;
                    padding: 2px; 
                    width: 300px;
                    height: 300px;
            }

        </style>
        
        
        <div class="divide40"></div>

        <div class="our-team-v-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="center-heading">
                            <h2>Tourist   Club   SUST       <strong>   Present   Committee (2017-18)</strong></h2>
                            <span class="center-line"></span>
                        </div>
                    </div>                   
                </div>
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <div class="person-v2">
                            
                            <img src="{{ asset('img/pres.jpg') }}" class="img-circular" alt="">
                            
                            <div class="person-desc-v2">

                                <h3>Rajorshee Rahman Aurko</h3>
                                <em>President</em>
                                <!-- <ul class="list-inline top-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                </ul> -->
                            </div>
                        </div>
                    </div><!--person col end-->
                    <div class="col-sm-4 text-center">
                        <div class="person-v2">
                            <img src="{{ asset('img/vp.jpg') }}" class="img-circular" alt="">
                            <div class="person-desc-v2">
                                <h3>Jamila Parvin</h3>
                                <em>Snr. Vice President</em>
                                <!-- <ul class="list-inline top-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    
                                </ul> -->
                            </div>
                        </div>
                    </div><!--person col end-->
                    <div class="col-sm-4 text-center">
                        <div class="person-v2">
                            <img src="{{ asset('img/gs.jpg') }}" class="img-circular" alt="">
                            <div class="person-desc-v2">
                                <h3>Md. Shahed Rahman</h3>
                                <em>General Secretary</em>
                                <!-- <ul class="list-inline top-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    
                                </ul> -->
                            </div>
                        </div>
                    </div><!--person col end-->
                    <!-- <div class="col-sm-3 text-center">
                        <div class="person-v2">
                            <img src="img/team-8.jpg" class="img-circular" alt="">
                            <div class="person-desc-v2">
                                <h3>Steve Smith</h3>
                                <em>Creative Designer</em>
                                <ul class="list-inline top-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>


@stop