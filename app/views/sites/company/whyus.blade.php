@extends('sites.layouts.master')
@section('meta_description', 'index page')
@section('meta_content', 'index page content')
@section('stylesheet')
<!--  more stylesheet to be added here -->
@stop
@section('body_content')

<div class="container">
    <div class="inner_content">
        <h2 class="title">Why bufferlab ??</h2>
        <hr>
        <blockquote>
            <h2>Logic can take us from <span class="colour normal">A to B</span> but imagination will take everywhere. We are <span class="hue_block white normal">logically sound day dreamer</span></h2>
        </blockquote>
        <!--info boxes-->
        <div class="col-md-12">
            <div class="row">

                <div class="col-md-4">
                    <div class="tile">
                        <h3 class="tile-title">Custom Website Design</h3>
                        <div class="animate bounceInLeft">
                            <i class="fa fa-dashboard fa-8x"></i>
                        </div>
                        <p>To get the most out of your website, its design must match your business branding and needs.
                            This is why all of our websites are designed from scratch.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="tile">
                        <h3 class="tile-title">Affordable Web Design</h3>
                        <div class="animate bounceInLeft">
                            <i class="fa fa-rupee fa-8x"></i>
                        </div>
                        <p>We provide high quality, yet low cost web development and design services.Our development
                            process conserves your budget, focussing your investment to quickly and safely bring
                            your product to market.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="tile">
                        <h3 class="tile-title">Management <br>Process</h3>
                        <div class="animate bounceInLeft">
                            <i class="fa fa-group fa-8x"></i>
                        </div>
                        <p>We work closely with a given specification. If you do not have one, we will create one for you to be approved and signed off.We use proven management methodologies to keep projects on time.</p>
                    </div>
                </div>
            </div><!-- /tiles -->
        </div>
    </div>
</div>
<!-- Banner Start here -->
<div class="container">
    <!-- <div class="banner" id="banner&#45;2"> -->
    <!--     <div class="welcome_index" >We started in year 2007 working for <span -->
    <!--             class="colour normal">accenture</span> and now working as <span -->
    <!--             class="hue_block white normal">BufferLab</span>.. -->
    <!--     </div> -->
    <!-- </div> -->
<blockquote>
    <h2>Our mission is to bring the new values to our customers' businesses through the implementation of the highly effective software solutions precisely tailored for their needs. We propose perfect combination of trusted reliable cooperation with our partners, well defined business processes, high-qualified specialists and competitive pricing policy.</h2>
    </blockquote>
</div>
<div class="container">
    <div class="inner_content" >
        <!-- Banner Ends  here -->

        <div class="col-md-12">
            <div class="row">

                <div class="col-md-4">
                    <div class="tile">
                        <h3 class="tile-title">Quality <br> Assurance</h3>
                        <div class="animate bounceInLeft">
                            <i class="fa fa-check-square-o fa-8x"></i>
                        </div>
                        <p>Two principles included in Quality Assurance are: "Fit for purpose", the product should be suitable for the intended purpose; and "Right first time", mistakes should be eliminated. After All Quality matters a lot.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="tile">
                        <h3 class="tile-title">Security and Confidentiality</h3>
                        <div class="animate bounceInLeft">
                            <i class="fa fa-lock fa-8x"></i>
                        </div>
                        <p>Precise approach for customers confidential info protection.We are too serious for data privacy.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="tile">
                        <h3 class="tile-title">World Class Technical Talent</h3>
                        <div class="animate bounceInLeft">
                            <i class="fa fa-group fa-8x"></i>
                        </div>
                        <p>Our talent pool of highly skilled software resources are simply unrivalled. We provide the technical skill, accountability and industry knowledge needed to deliver custom applications on time and on budget.</p>
                    </div>
                </div>
            </div><!-- /tiles -->
        </div><!--//info boxes-->
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
{{ HTML::script('/js/frameit-presets.js') }}
{{ HTML::script('/js/frameit-plugin.js') }}
<script>
    $(window).load(function() {
        $("#container-id").show();
        $('#container-id').frameit();
    })
</script>
@stop

