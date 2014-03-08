@extends('sites.layouts.master')

@section('meta_description', 'index page')
@section('meta_content', 'index page content')
@section('stylesheet')
<!--  more stylesheet to be added here -->
@stop
@section('body_content')
<h1>Hello BufferLab</h1>
<div class="banner" id="banner-1">
    <!--welcome-->
    <div class="welcome_index">We specialise in the design, construction and management of <span class="hue_block white normal">data-driven web sites</span> and associated applications including e-commerce and content management software.
    </div>
</div>
<div class="container">
    <div class="inner_content">
        <div class="pad30"></div>
        <!--info boxes-->
        <div class="span12">
            <div class="row">
                <div class="row">

                    <div class="span4">
                        <div class="tile">
                            <h3 class="tile-title">Solutions </h3>
                            <i class="fa fa-rocket fa-8x"></i>
                            <p>Our clients come to us with problems, and we use the best and latest mobile and web technology to solve those problems for them.Whether it is static website or data driven web apps , We deliver best for them. </p>
                            <a class="btn btn-2 btn-1b" href="#">read more..</a>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="tile">
                            <h3 class="tile-title">Services</h3>
                            <i class="fa fa-gears fa-8x"></i>
                            <p>Coding great software you need to have great tools and we are simply good for that. We are too good with Laravel (PHP framework), AngularJs, HTML5 , Ruby on Rails, Responsive Web Design and more.  </p>
                            <a class="btn btn-2 btn-1b" href="">read more</a>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="tile">
                            <h3 class="tile-title">Low Cost</h3>
                            <i class="fa fa-inr fa-8x"></i>
                            <p>We provide high quality, yet low cost web development and design services.Our development process conserves your budget, focussing your investment to quickly and safely bring your product to market.</p>
                            <a class="btn btn-2 btn-1b" href="#">read more..</a>
                        </div>
                    </div>
                </div><!-- /tiles -->
            </div>
        </div> 
        <!--//info boxes-->
    </div>
</div>
<div class="banner" id="banner-2">
    <!--welcome-->
    <div class="welcome_index">We provide a wide array of software design and development services – from <span class="hue_block white normal">Web applications</span> to User interface design, Quality assurance and Digital Strategy</div>
</div>
<div class="container">
    <div class="inner_content">
        <div class="pad30"></div>
        <!--info boxes-->
        <div class="span12">
            <div class="row">
                <div class="row">

                    <div class="span4">
                        <div class="tile">
                            <h3 class="tile-title">User Interface Design</h3>
                            <i class="fa fa-magic fa-8x"></i>
                            <p>Building quality software isn't all about programming and technology. Great software needs to look great, and needs to be dead simple to use. That's why we take design and user experience very seriously.</p>
                            <a class="btn btn-2 btn-1b" href="#">read more..</a>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="tile">
                            <h3 class="tile-title">Quality Assurance</h3>
                            <i class="fa fa-check-square-o fa-8x"></i>
                            <p>Two principles included in Quality Assurance are: "Fit for purpose", the product should be suitable for the intended purpose; and "Right first time", mistakes should be eliminated. After All Quality matters a lot.</p>
                            <a class="btn btn-2 btn-1b" href="">read more..</a>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="tile">
                            <h3 class="tile-title">Digital Strategy</h3>
                            <i class="fa fa-bolt fa-8x"></i>
                            <p>Web or Mobile? Native or HTML5? Our experience in the web and mobile space can help you determine where to move in the digital space.We help you to indetify the unmet needs and goals of the customers.</p>
                            <a class="btn btn-2 btn-1b" href="">read more..</a>
                        </div>
                    </div>
                </div><!-- /tiles -->
            </div>
        </div> 
        <!--//info boxes-->
    </div>
</div>
<div class="banner" id="banner-3">
    <!--welcome-->
    <div class="welcome_index_small">Most <span class="hue_block white normal"_block white normal">programmers</span> spend the first 5 years of their career mastering complexity and the rest of their lives learning simplicity. </div>
    <div class="welcome_index" style="padding-top:20px;">We started in year 2007 working for accenture and now working independently..</div>
</div>
<div class="container">
    <div class="inner_content">
        <div class="row">
            <!--col 1-->
            <div class="span12">
                <div class="row">
                    <div class="pad30 hidden-phone"></div>	

                    <div class="span4">
                        <h2 class="title">Recent Work</h2>
                        <h4>Our customers loves us because their customers loves them.Take a look at some of the projects we've been working on recently.</h4>

                        <a href="portfolio_2columns.html" class="btn btn-2 btn-1b">view portfolio</a>

                        <div class="pad45"></div>
                    </div>

                    <!--column 2 circle slider-->
                    <div class="span8 pad25">
                        <!--circle slider-->
                        <div class="content_slider_wrapper" id="slider1"></div>
                        <div class="pad45"></div>		
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@section('strip')
@parent
@section('striphead')
@parent
@stop
@stop

@section('javaScript')
{{ HTML::script('/js/jquery.content_slider.min.js') }}
{{ HTML::script('/js/jquery.prettyPhoto.js') }}
{{ HTML::script('/js/additional_content.js') }}

<script type="text/javascript">
    (function($){
        $(document).ready(function() {
            var image_array = new Array();
            image_array = [
        {image: 'img/home_content_slider/halfrate.png', link_url: 'img/small/2.jpg', link_rel: 'prettyPhoto'},
            {image: 'img/home_content_slider/companykart.png', link_url: 'img/small/2.jpg', link_rel: 'prettyPhoto'},
            {image: 'img/home_content_slider/bluecrystal.png', link_url: 'img/small/2.jpg', link_rel: 'prettyPhoto'},
            ];
        $('#slider1').content_slider({      
            map : image_array,              
            max_shown_items:4,  // number of visible circles
            automatic_height_resize:1,
            wrapper_text_max_height:300,
            active_item: 0,                 
            border_on_off:0,
            allow_shadow:1,
            enable_mousewheel:0
        });
        $("a[rel^='prettyPhoto']").prettyPhoto();
        jQuery("a[rel^='prettyPhoto'], a[rel^='lightbox']").prettyPhoto({
            overlay_gallery: false, social_tools: false,  deeplinking: false
        });
        });
    })(jQuery);
</script>
@stop
