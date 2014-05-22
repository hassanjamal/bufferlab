@extends('sites.layouts.master')

@section('title', ':: User Interface Design')
@section('meta_description', 'User Interface Design')
@section('meta_content', 'Wireframing , User experience (UX) ,User experience (UX), Responsive web design')
@section('stylesheet')
<!--  more stylesheet to be added here -->
@stop
@section('body_content')
<div class="container">
    <div class="inner_content">
        <h1 class="title">User Interface Design</h1>
        <hr>
        <blockquote>
            <h2>Building quality software isn't all about programming and technology. Great software needs to look
                great, and needs to be dead simple to use. That's why we take design and user experience very
                seriously.</h2>
        </blockquote>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Wireframing</h3>

                    <img src="/images/frames.png">
                    <!-- <div class="animate bounceInLeft"> -->
                    <!--     <i class="fa fa&#45;building&#45;o  fa&#45;8x"></i> -->
                    <!-- </div> -->
                    <p>We create simple prototypes that can be transformed to efficient User experience journeys and
                        beautiful designs.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">User interface (UI) design</h3>

                    <img src="/images/settings.png">
                    <!-- <div class="animate bounceInLeft"> -->
                    <!--     <i class="fa fa&#45;sliders fa&#45;8x"></i> -->
                    <!-- </div> -->
                    <p>The UI design is the first thing that brings someone to your app. We create beautiful, original
                        and modern interfaces that will amaze and delight your users.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">User experience (UX)</h3>

                    <img src="/images/profile.png">
                    <!-- <div class="animate bounceInLeft"> -->
                    <!--     <i class="fa fa&#45;user fa&#45;8x"></i> -->
                    <!-- </div> -->
                    <p>To create software that people will actually use, you need to create software that's simple, easy to use and that people will like. We also adhere to the native look and feel of each platform we create for.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Responsive web design</h3>

                    <img src="/images/computer.png">
                    <!-- <div class="animate bounceInLeft"> -->
                    <!--     <i class="fa fa&#45;desktop fa&#45;8x"></i> -->
                    <!-- </div> -->
                    <p>Responsive web design is a web-design approach where one site layout is crafted to provide an optimal experience on a wide range of devices like desktop computers, tablets and mobile phones.</p>
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
@stop
