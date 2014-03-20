@extends('sites.layouts.master')
@section('meta_description', 'index page')
@section('meta_content', 'index page content')
@section('stylesheet')
<!--  more stylesheet to be added here -->
@stop
@section('body_content')
<div class="container">
    <div class="inner_content">
        <h2 class="title">All About Us</h2>
        <hr>
        <blockquote>
        <h2>
            BufferLab is a software design and development company specialized in providing <span class="colour"> mobile and web development services </span>.
            Our journey started in 2007 when one of core team member joined <span class="colour">accenture</span> as Software Engineer. After two years of global experience and exposure, <span class="hue_block white normal">bufferlab</span> was founded.   
        </h2>
    </blockquote>
    </div>
</div>

<div id="container-id" >
    <!-- CIRCLE IMAGE -->
    <img title="preset: 'bubble-2'" src="/img/large/dumraonpalace.jpg" alt=""/> 
</div>
<div class="container">
    <div class="inner_content">
        <h2 class="intro">
            We develop in <span class="colour normal">house products</span> and provides technology solutions for our clients enabling them to grow their business and take it to the next level. <br><br> 
            We offer our clients a <span class="colour normal">full service approach</span> in all phases of software development - developing a creative concept, planning, graphic design, programming, testing and publishing.<br><br>
            We work with you to invent, test and refine new online products, with a focus on delivering <span class="colour normal">measurable results</span>.
        </h2>
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
