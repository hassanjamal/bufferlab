<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>BufferLab</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="@yield('meta_description')">
        <meta name="author" content="@yield('meta_content')">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <!-- google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,300,100' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
        <!-- stylesheets -->
        {{ HTML::style('/css/bootstrap.min.css') }}
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        {{ HTML::style('/css/theme.css') }}
        {{ HTML::style('/css/prettyPhoto.css') }}
        {{ HTML::style('/css/zocial.css') }}
        <!-- {{ HTML::style('/css/nerveSlider.css') }} -->
        @yield('stylesheet')
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!--[if IE 7]>
        <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
        <![endif]-->
    </head>

    <body>
        <!--header-->
        <div class="header" id="main_header">
            <div id="slider_header">
                <!--logo-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="navbar">
                                <!--logo-->			
                                <div class="logo">
                                    <a href=""><img src="/img/logo.png" alt="" class="animated bounceInDown" /></a>  
                                </div>
                                <!--menu-->	
                                <a class="menu-link" href=""><i class="icon-reorder  white"></i></a>  
                                <nav id="menu" class="menu">
                                    <ul>
                                        <li class="has-submenu-no"><a href="{{{URL::to('/')}}}">Home</a></li>
                                        <li class="has-submenu">
                                            <a class="dropdown-toggle " href="{{{ URL::to('/company/')}}}">Company</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{{URL::to('company/')}}}">About Us</a></li>
                                                <li><a href="{{{URL::to('company/whyus')}}}">Why BufferLab</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a class="dropdown-toggle " href="{{{ URL::to('/services/')}}}">Services </a>
                                            <ul class="sub-menu">
                                                <li><a href="{{{URL::to('services/businesssolution')}}}">Business Solutions</a></li>
                                                <li><a href="{{{URL::to('services/softwaredevelopment')}}}">Software Development</a></li>
                                                <li><a href="{{{URL::to('services/userinterface')}}}">User Interface</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu-no"><a href="{{{ URL::to('/works/') }}}">Works</a></li>
                                        
                                        <li class="has-submenu-no"><a href="{{{ URL::to('/blogs/') }}}">Blog</a></li>
                                        <li class="has-submenu-no"><a href="{{{ URL::to('/contact') }}}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//header-->

            <!--page-->
            @yield('body_content')

            <!--//page-->

            <!--strip-->
            @section('strip')
            <div class="strip">
                @section('striphead')
                <div class="get_quote_footer">Are you in need of business, software development or design services?<br>
                    Let's work together...
                </div>
                <div class="pad25"></div>
                <a href="" class="btn big-button "> <i class="icon-envelope icon-space"></i>contact us today</a>
                @show

                <div class="pad25"></div>
                <div class="follow_us">
                    <a href="" class="zocial twitter"></a>
                    <a href="" class="zocial facebook"></a>
                    <a href="" class="zocial linkedin"></a>
                    <a href="" class="zocial googleplus"></a>
                </div>
            </div>
            @show
            <!--/strip-->

            <!-- footer -->
            <div id="footer_work">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="copyright">
                                BufferLab &copy; {{ date('Y')  }} 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="copyright">
                                BufferLab &copy; {{ date('Y')  }} 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="copyright">
                                BufferLab &copy; {{ date('Y')  }} 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div id="footer_company"> -->
            <!--     <div class="container"> -->
            <!--         <div class="row"> -->
            <!--             <div class="span12"> -->
            <!--                 <div class="copyright"> -->
            <!--                     BufferLab &#38;copy; {{ date('Y') }}  -->
            <!--                 </div> -->
            <!--             </div> -->
            <!--         </div> -->
            <!--     </div> -->
            <!-- </div> -->

            <!-- up to top -->
            <a href="{{{ URL::to('/') }}}"><i class="go-top hidden-phone hidden-tablet fa fa-angle-double-up"></i></a>
            <!--//end-->
        </div>

        <!-- scripts -->
        {{ HTML::script('/js/jquery.js') }}
        {{ HTML::script('/js/bootstrap.js') }}
        {{ HTML::script('/js/scripts.js') }}
        {{ HTML::script('/js/functions.js') }}
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)
        },i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-48813684-1', 'bufferlab.com');
        ga('send', 'pageview');

        </script>
        @yield('javaScript')
    </body>
</html>

