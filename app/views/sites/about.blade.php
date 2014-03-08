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
        <h2 class="intro">Logic will take you from <span class="colour">A to B</span>, but <span class="mid">Imagination</span> will take you everywhere;Web Design is more about Imagination and We are superb <span class="colour">Logically Sound Day Dreamer.</span>
        </h2>
    </div>
</div>

<div id="container-id"  class="strip" style="background-color:rgb(226,71,62)">
    <!-- CIRCLE IMAGE -->
    <img title="preset: 'bubble-1'" src="img/large/preset8.jpg" alt=""/> 
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
                            <h3 class="tile-title">Our Philosophy</h3>
                            <i class="fa fa-book fa-8x"></i>
                            <p>Building quality software isn't all about programming and technology. Great software needs to look great, and needs to be dead simple to use. That's why we take design and user experience very seriously.</p>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="tile">
                            <h3 class="tile-title">Our Mission</h3>
                            <i class="fa fa-road fa-8x"></i>
                            <p>Two principles included in Quality Assurance are: "Fit for purpose", the product should be suitable for the intended purpose; and "Right first time", mistakes should be eliminated. After All Quality matters a lot.</p>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="tile">
                            <h3 class="tile-title">Our Process</h3>
                            <i class="fa fa-cogs fa-8x"></i>
                            <p>Web or Mobile? Native or HTML5? Our experience in the web and mobile space can help you determine where to move in the digital space.We help you to indetify the unmet needs and goals of the customers.</p>
                        </div>
                    </div>
                </div><!-- /tiles -->
            </div>
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
        $("#container-id, #container-id2").show();
        $('#container-id, #container-id2 ').frameit();
    })
</script>
@stop
