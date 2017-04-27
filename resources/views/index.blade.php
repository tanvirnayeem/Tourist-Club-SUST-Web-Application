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
                    {{--
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 3">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('img/tccover.jpg') }}"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption lft"
                             data-x="35" 
                             data-y="140"
                             data-speed="900"
                             data-start="800" 
                             data-easing="Sine.easeOut">
                            <img src="rev-images/macbook.png" alt="" />
                        </div>
                        <div class="tp-caption lfr"
                             data-x="375"
                             data-y="180"
                             data-speed="900" 
                             data-start="1500"
                             data-easing="Sine.easeOut">
                            <img src="rev-images/ipad.png" alt="" />
                        </div>
                        <div class="tp-caption lfl" 
                             data-x="348"
                             data-y="249"
                             data-speed="900"
                             data-start="1800"
                             data-easing="Sine.easeOut">
                            <img src="rev-images/iphone.png" alt="" />
                        </div>
                        <div class="tp-caption sfr modern_big_redbg" 
                             data-x="750"
                             data-y="185"
                             data-speed="400"
                             data-start="2500"
                             data-easing="Sine.easeOut">
                            100% Responsive
                        </div>
                        <div class="tp-caption sfr modern_big_redbg"
                             data-x="750" 
                             data-y="237"
                             data-speed="400"
                             data-start="2900"
                             data-easing="Sine.easeOut">
                            80+ layouts
                        </div>
                        <div class="tp-caption sfr modern_big_redbg"
                             data-x="750" data-y="289"
                             data-speed="400"
                             data-start="3300" 
                             data-easing="Sine.easeOut">
                            Revolution Slider
                        </div>
                        <!-- <div class="caption sfr rev-buttons tp-resizeme " 
                             data-x="750"
                             data-y="341" 
                             data-speed="400" 
                             data-start="3700" 
                             data-easing="Sine.easeOut">
                            <a href="#" class="btn btn-lg border-white">See all features</a>
                        </div> -->


                    </li>
                     --}}
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
            {{--
            <div class="row">
                <div class="col-md-3 col-sm-6 margin30">
                    <div class="colored-boxed green">
                        <i class="pe-7s-magic-wand"></i>
                        <h3>Free support & updates</h3>
                        <span class="center-line"></span>
                        <p>
                            Nullam vulputate lorem ut leo. Sed volutpat. Etiam non pede. Nullam et mauris. 
                        </p>
                    </div>
                </div><!--colored boxed col end-->
                <div class="col-md-3 col-sm-6 margin30">
                    <div class="colored-boxed dark">
                        <i class="pe-7s-phone"></i>
                        <h3>Ultra responsive</h3>
                        <span class="center-line"></span>
                        <p>
                            Nullam vulputate lorem ut leo. Sed volutpat. Etiam non pede. Nullam et mauris. 
                        </p>
                    </div>
                </div><!--colored boxed col end-->
                <div class="col-md-3 col-sm-6 margin30">
                    <div class="colored-boxed blue">
                        <i class="pe-7s-like"></i>
                        <h3>made with love</h3>
                        <span class="center-line"></span>
                        <p>
                            Nullam vulputate lorem ut leo. Sed volutpat. Etiam non pede. Nullam et mauris. 
                        </p>
                    </div>
                </div><!--colored boxed col end-->
                <div class="col-md-3 col-sm-6 margin30">
                    <div class="colored-boxed red">
                        <i class="pe-7s-folder"></i>
                        <h3>Premium plugins</h3>
                        <span class="center-line"></span>
                        <p>
                            Nullam vulputate lorem ut leo. Sed volutpat. Etiam non pede. Nullam et mauris. 
                        </p>
                    </div>
                </div><!--colored boxed col end-->
            </div>
             --}}
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

                {{-- 
                <div class="col-sm-4 margin30">
                    <div>
                        <a href="#">
                            <div class="item-img-wrap">
                                <img src="img/img-3.jpg" class="img-responsive" alt="workimg">
                                <div class="item-img-overlay">
                                    <span></span>
                                </div>
                            </div>                       
                        </a><!--news link--> 
                        <div class="news-desc">
                            <span>Sports</span>
                            <h4><a href="#">Lorem ipsum dollor Sit amet</a></h4>
                            <span>By <a href="#">Author</a> on 24 july 2014</span> <span><a href="#">Read more...</a></span>
                        </div><!--news desc-->
                    </div> 
                </div><!--news col-->
                <div class="col-sm-4 margin30">
                    <div>
                        <a href="#">
                            <div class="item-img-wrap">
                                <img src="img/img-6.jpg" class="img-responsive" alt="workimg">
                                <div class="item-img-overlay">
                                    <span></span>
                                </div>
                            </div>                       
                        </a><!--news link--> 
                        <div class="news-desc">
                            <span>Sports</span>
                            <h4><a href="#">Lorem ipsum dollor Sit amet</a></h4>
                            <span>By <a href="#">Author</a> on 24 july 2014</span> <span><a href="#">Read more...</a></span>
                        </div><!--news desc-->
                    </div> 
                </div><!--news col-->
                --}}
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
        <!--     position: absolute;
    right: 20px;
    padding-top: 2%;
} -->

        <!-- <div class="testimonials-v-2 wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="100ms">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="center-heading">
                            <h2><strong>Speech</strong> of Advisor</h2> -->
                            <!-- <p>2600+ Worldwide customers  use Assan template.</p>
                            <span class="center-line"></span> -->

                        <!-- </div>
                    </div>
                </div> --><!--center heading end-->

                <!-- <div class="row">

                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="testi-slide">
                            <ul class="slides">
                                <li>
                                    <img src="{{ asset('img/mzi.png') }}" alt="">
                                    <p>
                                        <i class="ion-quote"></i>
                                        SUST Science Arena is the one of the science based organizations of SUST, established at February 24, 2004 by a group of science enthusiast of SUST. The main commitment of this organization is to popularize science among the youngstars throughout the city. 
                                    </p>
                                    <h4 class="test-author">
                                        Dr. Muhammed Zafar Iqbal - <em>Renowned Writer & Professor,
Dept. of CSE,
SUST, Sylhet.
</em>
                                    </h4>
                                </li> --><!--testi item-->
                                <!-- {{--
                                <li>
                                    <img src="{{ asset('frontend/img/customer-2.jpg') }}" alt="">
                                    <p>
                                        <i class="ion-quote"></i>
                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years </p>
                                    <h4 class="test-author">
                                        Jellia - <em>Founder of tinka inc</em>
                                    </h4>
                                </li> --><!--testi item-->
                   <!--              <li>
                                    <img src="{{ asset('frontend/img/customer-3.jpg') }}" alt="">
                                    <p>
                                        <i class="ion-quote"></i>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor.</p>
                                    <h4 class="test-author">
                                        Smith - <em>Ceo, company inc.</em>
                                    </h4>
                                </li><!--testi item-->
                                 <!-- --}} -->
                           <!--  </ul>
                        </div><!--flex slider testimonials end here-->
                    <!-- </div>
                </div> --><!-- testi slider row end

            </div>
        </div> --> <!-- --><!--testimonials v-2 end-->
        
        <!-- <div class="divide70"></div> -->
        
        <div class="divide40"></div>

        <div class="our-team-v-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="center-heading">
                            <h2>Tourist   Club   SUST       <strong>   Present   Committee</strong></h2>
                            <span class="center-line"></span>
                        </div>
                    </div>                   
                </div>
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <div class="person-v2">
                            
                            <img src="{{ asset('img/pres.jpg') }}" class="img-circular" alt="">
                            
                            <div class="person-desc-v2">

                                <h3>Md. Mostofa Alamin</h3>
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
                                <h3>Anamul Haque</h3>
                                <em>Sr. Vice President</em>
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
                                <h3>Shakil Ahmed</h3>
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
        </div><!--our team v-2-->
        <!-- <div class="divide70"></div> -->
        {{-- 
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center-heading">
                        <h2><strong>latest</strong> news</h2>
                        <span class="center-line"></span>
                    </div>
                </div>                   
            </div>
            <div class="row">
                <div class="col-sm-4 margin30">
                    <div>
                        <a href="#">
                            <div class="item-img-wrap">
                                <img src="img/img-8.jpg" class="img-responsive" alt="workimg">
                                <div class="item-img-overlay">
                                    <span></span>
                                </div>
                            </div>                       
                        </a><!--news link--> 
                        <div class="news-desc">
                            <span>Sports</span>
                            <h4><a href="#">Lorem ipsum dollor Sit amet</a></h4>
                            <span>By <a href="#">Author</a> on 24 july 2014</span> <span><a href="#">Read more...</a></span>
                        </div><!--news desc-->
                    </div> 
                </div><!--news col-->
                <div class="col-sm-4 margin30">
                    <div>
                        <a href="#">
                            <div class="item-img-wrap">
                                <img src="img/img-3.jpg" class="img-responsive" alt="workimg">
                                <div class="item-img-overlay">
                                    <span></span>
                                </div>
                            </div>                       
                        </a><!--news link--> 
                        <div class="news-desc">
                            <span>Sports</span>
                            <h4><a href="#">Lorem ipsum dollor Sit amet</a></h4>
                            <span>By <a href="#">Author</a> on 24 july 2014</span> <span><a href="#">Read more...</a></span>
                        </div><!--news desc-->
                    </div> 
                </div><!--news col-->
                <div class="col-sm-4 margin30">
                    <div>
                        <a href="#">
                            <div class="item-img-wrap">
                                <img src="img/img-6.jpg" class="img-responsive" alt="workimg">
                                <div class="item-img-overlay">
                                    <span></span>
                                </div>
                            </div>                       
                        </a><!--news link--> 
                        <div class="news-desc">
                            <span>Sports</span>
                            <h4><a href="#">Lorem ipsum dollor Sit amet</a></h4>
                            <span>By <a href="#">Author</a> on 24 july 2014</span> <span><a href="#">Read more...</a></span>
                        </div><!--news desc-->
                    </div> 
                </div><!--news col-->
            </div>
        </div><!--latest news-->
        --}}
        <div class="divide40"></div>
        <!-- <div class="intro-text-1 light">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="animated slideInDown">Assan is Simply creative Template
                        </h4>

                        <p>
                            Clean & powerful Easy to use multipurpose business HTML5 template.
                        </p>                   
                    </div>
                    <div class="col-sm-4">
                        <a href="#" class="btn border-theme btn-lg">Purchase now</a>
                    </div>
                </div>
            </div>
        </div> --> <!--intro text end-->
        


@stop