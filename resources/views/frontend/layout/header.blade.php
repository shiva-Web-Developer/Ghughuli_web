<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="author" content="shiva-web-developer">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="{{url('assets/stylesheets/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/stylesheets/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/stylesheets/responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/stylesheets/colors/color1.css')}}" id="colors">
        <link rel="stylesheet" type="text/css" href="{{url('assets/stylesheets/animate.css')}}">
        {{-- fevi icon  --}}
        <link href="{{url('assets/icon/apple-touch-icon-48-precomposed.png')}}" rel="shortcut icon" sizes="48x48">
        <link href="{{url('assets/icon/apple-touch-icon-32-precomposed.png')}}" rel="shortcut icon">
        <link href="{{url('assets/icon/favicon.png')}}" rel="shortcut icon">
       
        </head>
        <body class="header-sticky">

            {{-- <section class="loading-overlay">
                <div class="Loading-Page">
                <h2 class="loader">Loading...</h2>
                </div>
            </section> --}}

            <div class="boxed">
                <div class="top">
                <div class="container">
                <div class="row">
                <div class="col-md-6 text-white">
                    <div class="time">
                        <i class="fa fa-clock-o"></i>
                      
                        <script type="text/javascript" type="text/javascript">// <![CDATA[
                            var d = new Date()
                            var weekday = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday")
                            var monthname = new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec")
                            document.write(weekday[d.getDay()] + ", ")
                            document.write(d.getDate() + " ")
                            document.write(monthname[d.getMonth()] + ", ")
                            document.write(d.getFullYear())
                        // ]]></script>
                        <span id="clockDisplay" >
                            <script type="text/javascript" type="text/javascript">// <![CDATA[
                                function renderTime() {
                                    var currentTime = new Date();
                                    var diem = "AM";
                                    var h = currentTime.getHours();
                                    var m = currentTime.getMinutes();
                                    var s = currentTime.getSeconds();
                                    setTimeout('renderTime()', 1000);
                                    if (h == 0) {
                                        h = 12;
                                    } else if (h > 12) {
                                        h = h - 12;
                                        diem = "PM";
                                    }
                                    if (h < 10) {
                                        h = "0" + h;
                                    }
                                    if (m < 10) {
                                        m = "0" + m;
                                    }
                                    if (s < 10) {
                                        s = "0" + s;
                                    }
                                    var myClock = document.getElementById('clockDisplay');
                                    myClock.textContent = h + ":" + m + ":" + s + " " + diem;
                                    myClock.innerText = h + ":" + m + ":" + s + " " + diem;
                                }
                                renderTime();
                        // ]]></script>
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="top-navigator">
                <ul>
                <li><a href="{{route('adminlog')}}" target="_blank">Login</a></li>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div>

                <div class="site-brand">
                    <div class="container">
                    <div class="row">
                    <div class="col-md-12">
                    <div id="logo" class="logo">
                    <a href="{{url('/')}}/" rel="home">

                    <img src="{{url('assets/images/logo.jpeg')}}" alt="image" style="height:80px;width:100%;">
                    </a>
                    </div>
                    <div class="header-widgets">
                    <div id="text-1" class="widget widget_text">
                    <div class="textwidget">
                    <div class="info-icon">
                    <i class="icon-call-out icons"></i>
                    <div class="content">Call Us Now
                    <br>
                    <span><a href="tel:+1234567891">1234567891</a></span></div>
                    </div>
                    </div>
                    </div>
                    <div id="text-2" class="widget widget_text">
                    <div class="textwidget">
                    <div class="info-icon">
                    <i class="icon-envelope icons"></i>
                    <div class="content">Email Now
                    <br>
                    <span><a href="mailto:nppnautanwa@gmail.com">[Email protected]</a></span></div>
                    </div>
                    </div>
                    </div>

                    <div id="text-3" class="widget widget_text">
                       <div class="textwidget">
                    <div class="info-icon">
                    <i class="fa fa-map-marker"></i>
                    <div class="content"> Location
                    <br>
                    <span><a href="https://goo.gl/maps/PsFAwJjE27FUVGUi7" target="_blank">Google Map</a></span></div>
                    </div>
                    </div>
                    </div>

                    </div>
                    </div>
                    </div>
                    </div>
                    </div>

                    {{-- header  --}}
                    <header id="header" class="header clearfix">
                        <div class="header-wrap clearfix" style="background-color:#007780;">
                        <div class="container">
                        <div class="row">
                        <div class="col-md-12">
                        <div class="nav-wrap">
                        <div class="btn-menu">
                        <span></span>
                        </div>
                        <nav id="mainnav" class="mainnav">
                        <ul class="menu">
                            <li class="home"><a href="{{url('/')}}/">Home</a></li>

                            <li class="nav-item"> <a href="{{url('/')}}/"> होम </a></li>
                                @foreach ($getmewnudata as $getmewnudata)                        
                                    <li class="has-mega-menu  @if($getmewnudata->have_sub == 'YES') has-children @endif">
                                        <a href=" @if($getmewnudata->have_sub == 'YES') # @else   {{url('/')}}/Ghughuli/{{ $getmewnudata->id }} @endif">{{ $getmewnudata->menu_name }} </a>
                                        @if($getmewnudata->have_sub == 'YES')
                                            <div class="sub-menu mega-menu three-colums">
                                                @foreach ($getthesubmenu as $sub)
                                                @if($sub->cat_name == $getmewnudata->id)
                                                    <div class="menu-item">
                                                        <a href="@if($sub->have_chield == 'YES') # @else {{url('/')}}/Ghughuli/{{ $getmewnudata->id }}/{{ $sub->id }} @endif"> <b>{{ $sub->sub_name }}</b></a>
                                                            @if($sub->have_chield == 'YES')
                                    <ul>
                                        @foreach($getchildmenu as $child)
                                            @if($child->submenu == $sub->id && $child->mainmenu == $sub->cat_name)
                                                <li><a href="{{url('/')}}/Ghughuli/{{ $getmewnudata->id }}/{{ $sub->id }}/{{ $child->id }}" style="font-size:13px;">{{ $child->child_menu }}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                                @endif
                                            </div>  
                                        @endif
                                @endforeach
                            </div>
                        @endif
                        </li>
                    @endforeach

                        {{-- for सॉफ्टवेयर menu  --}}
                                <li class="has-children">
                                    <a href="#" title="" class="nav-link dropdown-toggle has-children submenu" data-bs-toggle="dropdown has-children"  
                                    href="#" role="button" aria-haspopup="true" aria-expanded="false"> सॉफ्टवेयर </a>
                                    <ul class="submenu">
                                        @foreach($getSoftwaree as $sf)
                                        <li><a href="{{ $sf->subject }}" target="_blank" class="dropdown-item" title=""> {{ $sf->name }} </a></li>
                                        @endforeach
                                    </ul> 
                                  </li>

                        {{-- for गैलरी menu  --}}
                                  <li class="has-children"> <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"  
                                    href="#" role="button" aria-haspopup="true" aria-expanded="false"> गैलरी </a>
                                    <ul class="submenu">
                                       <li><a class="dropdown-item" href="{{route('imagegadsdsllery')}}">फोटो गैलरी</a></li>
                                       <li><a class="dropdown-item" href="#"> विडियो गैलरी </a></li>
                                    </ul>
                                  </li>

                        {{-- for हमसे संपर्क करें menu  --}}
                                  <li class="has-children"> <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                      href="#" role="button" aria-haspopup="true" aria-expanded="false"> हमसे संपर्क करें </a>
                                      <ul class="submenu">
                                        <li><a class="dropdown-item" href="{{route('manchitrrrra')}}"> मानचित्र</a></li>
                                        <li><a class="dropdown-item" href="{{route('contascvtnagar')}}"> संपर्क करे </a></li>
                                     </ul>
                                  </li>

                        </ul>
            
                        </nav>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </header>

                        

