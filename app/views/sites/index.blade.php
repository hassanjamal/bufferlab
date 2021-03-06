@extends('sites.layouts.master')

@section('meta_description', 'index page')
@section('meta_content', 'index page content')
@section('stylesheet')
{{ HTML::style('/css/slider.css') }}
<!--  more stylesheet to be added here -->
@stop
@section('body_content')
@include('sites.layouts.slider')
<div id="banner-1">
    <!--welcome-->
    <div class="welcome_index">We specialise in the design, construction and management of <span
            class="hue_block white normal">data-driven web sites</span> and associated applications including e-commerce
        and content management software.
    </div>
</div>
<div class="container">
    <div class="inner_content">
        <div class="pad30"></div>
        <!--info boxes-->
        <div class="col-sm-12">
            <div class="row">
                <div class="row">

                    <div class="col-sm-4">
                        <div class="tile">
                            <h3 class="tile-title">Solutions </h3>
                            <!-- <i class="fa fa&#45;rocket fa&#45;8x"></i> -->
                            <img src="/images/rocket.png">

                            <p>Our clients come to us with problems, and we use the best and latest mobile and web
                                technology to solve those problems for them.Whether it is static website or data driven
                                web apps , We deliver best for them. </p>
                            <a class="btn btn-2 btn-1b" href="#">read more..</a>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="tile">
                            <h3 class="tile-title">Technology</h3>
                            <!-- <i class="fa fa&#45;gears fa&#45;8x"></i> -->
                            <img src="/images/merge.png">

                            <p>Coding great software you need to have great tools and we are simply good for that. We
                                are too good with Laravel (PHP framework), AngularJs, HTML5 , Ruby on Rails, Responsive
                                Web Design and more. </p>
                            <a class="btn btn-2 btn-1b" href="">read more</a>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="tile">
                            <h3 class="tile-title">Low Cost</h3>
                            <img src="/images/lowcost.png">
                            <!-- <i class="fa fa&#45;inr fa&#45;8x"></i> -->

                            <p>We provide high quality, yet low cost web development and design services.Our development
                                process conserves your budget, focussing your investment to quickly and safely bring
                                your product to market.</p>
                            <a class="btn btn-2 btn-1b" href="#">read more..</a>
                        </div>
                    </div>
                </div>
                <!-- /tiles -->
            </div>
        </div>
        <!--//info boxes-->
    </div>
</div>
<div class="banner" id="banner-2">
    <!--welcome-->
    <div class="welcome_index">We provide a wide array of software design and development services – from <span
            class="colour normal">Web applications</span> to User interface design, Quality assurance and Digital
        Strategy
    </div>
</div>
<div class="container">
    <div class="inner_content">
        <div class="pad30"></div>
        <!--info boxes-->
        <div class="col-sm-12">
            <div class="row">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="tile">
                            <h3 class="tile-title">User Interface </h3>
                            <img src="/images/magicwand.png">
                            <!-- <i class="fa fa&#45;magic fa&#45;8x"></i> -->

                            <p>Building quality software isn't all about programming and technology. Great software
                                needs to look great, and needs to be dead simple to use. That's why we take design and
                                user experience very seriously.</p>
                            <a class="btn btn-2 btn-1b" href="#">read more..</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="tile">
                            <h3 class="tile-title">Quality Assurance</h3>
                            <!-- <i class="fa fa&#45;check&#45;square&#45;o fa&#45;8x"></i> -->
                            <img src="/images/check.png">

                            <p>Two principles included in Quality Assurance are: "Fit for purpose", the product should
                                be suitable for the intended purpose; and "Right first time", mistakes should be
                                eliminated. After All Quality matters a lot.</p>
                            <a class="btn btn-2 btn-1b" href="">read more..</a>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="tile">
                            <h3 class="tile-title">Digital Strategy</h3>
                            <img src="/images/compose.png">
                            <!-- <i class="fa fa&#45;bolt fa&#45;8x"></i> -->

                            <p>Web or Mobile? Native or HTML5? Our experience in the web and mobile space can help you
                                determine where to move in the digital space.We help you to indetify the unmet needs and
                                goals of the customers.</p>
                            <a class="btn btn-2 btn-1b" href="">read more..</a>
                        </div>
                    </div>
                </div>
                <!-- /tiles -->
            </div>
        </div>
        <!--//info boxes-->
    </div>
</div>
<div class="banner" id="banner-2">
    <div class="welcome_index">We started in year 2007 working for <span
            class="colour normal">accenture</span> and now working as <span
            class="hue_block white normal">BufferLab</span>..
    </div>
</div>
<div class="container">
    <div class="inner_content">
        <div class="row">
            <!--col 1-->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="title">Recent Work</h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="pad30 hidden-phone"></div>

                    <div class="col-sm-4">
                        <h4>Our customers loves us because their customers loves them.Take a look at some of the
                            projects we've been working on recently.</h4>

                        <a href="" class="btn btn-2 btn-1b">view portfolio</a>

                        <div class="pad45"></div>
                    </div>

                    <!--column 2 circle slider-->
                    <div class="col-sm-8 pad25">
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
{{ HTML::script('/js/jquery.revolution.js') }}
{{ HTML::script('/js/jquery.revolution.plugin.js') }}
<script type="text/javascript">
    var revapi;
    var newHeight;
    $(document).ready(sizeContent);
    $(window).resize(sizeContent);
    function sizeContent() {
        newHeight = $(window).height() - $("#main_header").height();
    }
    jQuery(document).ready(function () {

        revapi = jQuery('.fullwidthbanner').revolution(
            {
                delay: 10000,
                startwidth: 1170,
                startheight: newHeight,
                hideThumbs: 10,

                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 5,

                navigationType: "both",
                navigationArrows: "solo",
                navigationStyle: "round",

                touchenabled: "on",
                onHoverStop: "on",

                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 0,

                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",

                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: "off",

                autoHeight: "off",
                forceFullWidth: "on",

                hideThumbsOnMobile: "off",
                hideBulletsOnMobile: "on",
                hideArrowsOnMobile: "on",
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 768,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                videoJsPath: "plugins/revslider/rs-plugin/videojs/",
                fullScreenOffsetContainer: ""
            });

    });	//ready

</script>
<script type="text/javascript">
    (function ($) {
        $(document).ready(function () {
            var image_array = new Array();
            image_array = [
                {image: 'img/home_content_slider/halfrate.png', link_url: '', link_rel: 'prettyPhoto'},
                {image: 'img/home_content_slider/companykart.png', link_url: '', link_rel: 'prettyPhoto'},
                {image: 'img/home_content_slider/bluecrystal.png', link_url: '', link_rel: 'prettyPhoto'},
            ];
            $('#slider1').content_slider({
                map: image_array,
                max_shown_items: 4,  // number of visible circles
                automatic_height_resize: 1,
                wrapper_text_max_height: 300,
                active_item: 0,
                border_on_off: 0,
                allow_shadow: 1,
                enable_mousewheel: 0
            });
            $("a[rel^='prettyPhoto']").prettyPhoto();
            jQuery("a[rel^='prettyPhoto'], a[rel^='lightbox']").prettyPhoto({
                overlay_gallery: false, social_tools: false, deeplinking: false
            });
        });
    })(jQuery);
</script>

@stop
