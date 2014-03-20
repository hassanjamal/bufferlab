@extends('sites.layouts.master')

@section('meta_description', 'index page')
@section('meta_content', 'index page content')
@section('stylesheet')
<!--  more stylesheet to be added here -->
@stop
@section('body_content')
<div class="container">
    <div class="inner_content">
        <h1 class="title">Error 404</h1>
        <h1 class="intro">The page you are <span>looking for</span> seems to be missing, please 
            <a href="index.html"><span>continue browsing!</span></a></h1>

        <div class="row">

            <div class="span12 screen-bg">
                <div class="row">
                    <div class="span8 offset2">
                        <img src="img/whoops.png" class=" animated swing" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pad30"></div>

@stop
@section('strip')
@parent
@section('striphead')
@parent
@stop
@stop

@section('javaScript')
@stop
