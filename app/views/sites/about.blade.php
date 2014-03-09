@extends('sites.layouts.master')

@section('meta_description', 'index page')
@section('meta_content', 'index page content')
@section('stylesheet')
<!--  more stylesheet to be added here -->
@stop
@section('body_content')
<div class="container">
    <div class="inner_content">
        <h1 class="title">All About Us</h1>
        <h2 class="intro">
            BufferLab is a software design and development company specialized in providing <span class="colour"> mobile and web development services </span>.
            Our journey started in 2007 when one of core team member joined <span class="colour">accenture</span> as Software Engineer. After two years of global experience and exposure, <span class="hue_block white normal">bufferlab</span> was founded.   
        </h2>
        <!-- <h2 class="intro">Logic will take you from <span class="colour">A to B</span>, but <span class="mid">Imagination</span> will take you everywhere;Web Design is more about Imagination and We are superb <span class="hue_block white normal">Logically Sound Day Dreamer.</span> -->
        <!-- </h2> -->
    </div>
</div>

<div id="container-id" class="strip"  >
    <!-- CIRCLE IMAGE -->
    <img title="preset: 'bubble-2'" src="img/large/dumraonpalace.jpg" alt=""/> 
</div>
<div class="container">
    <div class="inner_content">
        <h2 class="intro">
            We develop in <span class="colour normal">house products</span> and provides technology solutions for our clients enabling them to grow their business and take it to the next level. <br> 
            We offer our clients a <span class="colour normal">full service approach</span> in all phases of software development - developing a creative concept, planning, graphic design, programming, testing and publishing.<br>
            We work with you to invent, test and refine new online products, with a focus on delivering <span class="colour normal">measurable results</span>.
        </h2>
    </div>
</div>


<div class="container">
    <div class="inner_content">
        <h1 class="title">Why bufferlab ??</h1>
        <h2 class="intro">Logic can take us from <span class="colour normal">A to B</span> but imagination will take everywhere. We are <span class="hue_block white normal">logically sound day dreamer</span></h2>
        <!--info boxes-->
        <div class="span12">
            <div class="row">

                <div class="span4">
                    <div class="tile">
                        <h3 class="tile-title">Our Philosophy</h3>
                        <div class="animate bounceInLeft">
                            <i class="fa fa-book fa-8x"></i>
                        </div>
                        <p>Building quality software isn't all about programming and technology. Great software needs to look great, and needs to be dead simple to use. That's why we take design and user experience very seriously.</p>
                    </div>
                </div>

                <div class="span4">
                    <div class="tile">
                        <h3 class="tile-title">Our Mission</h3>
                        <div class="animate bounceInLeft">
                            <i class="fa fa-road fa-8x"></i>
                        </div>
                        <p>Two principles included in Quality Assurance are: "Fit for purpose", the product should be suitable for the intended purpose; and "Right first time", mistakes should be eliminated. After All Quality matters a lot.</p>
                    </div>
                </div>

                <div class="span4">
                    <div class="tile">
                        <h3 class="tile-title">Our Process</h3>
                        <div class="animate bounceInLeft">
                            <i class="fa fa-cogs fa-8x"></i>
                        </div>
                        <p>Web or Mobile? Native or HTML5? Our experience in the web and mobile space can help you determine where to move in the digital space.We help you to indetify the unmet needs and goals of the customers.</p>
                    </div>
                </div>
            </div><!-- /tiles -->
        </div> 
        <!--//info boxes-->
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
