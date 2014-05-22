@extends('sites.layouts.master')

@section('title', ':: Software Development Services')
@section('meta_description', 'Software Development Services')
@section('meta_content', 'Laravel Development , Javascript Development, Angular.js Development , jQuery Development, Node.js Development, Ruby on Rails Development, Android Development, Mobile Applications')
@section('stylesheet')
{{ HTML::style('/css/timeline.css') }}
<!--  more stylesheet to be added here -->
@stop
@section('body_content')
<div class="container">
    <div class="inner_content">
        <h1 class="title">Software Development Services</h1>
        <hr>
        <blockquote>
            <h2>To get great results you need to use great technology. Writing software for browsers, smartphones or servers is what we do best. We're agile, we move fast and produce quality code.</h2>
        </blockquote>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Laravel Development</h3>

                    <img src="/images/php.png">
                    <!-- <div class="animate bounceInLeft"> -->
                    <!--     <i class="fa fa&#45;building&#45;o  fa&#45;8x"></i> -->
                    <!-- </div> -->
                    <p>We know the ins and outs of Laravel since we've been working with it right from beginning. The elegant design and opinionated nature of Laravel made it our preferred weapon of choice for server side development.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">JavaScript Development</h3>

                    <img src="/images/js.png">
                    <!-- <div class="animate bounceInLeft"> -->
                    <!--     <i class="fa fa&#45;sliders fa&#45;8x"></i> -->
                    <!-- </div> -->
                    <p>With the rise of HTML5 related technologies, Javascript has become one of the most important programming languages today. We work with jQuery, Angular, Node.js and a variety of other Javascript technologies.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Ruby on Rails Development</h3>

                    <img src="/images/train.png">
                    <!-- <div class="animate bounceInLeft"> -->
                    <!--     <i class="fa fa&#45;building&#45;o  fa&#45;8x"></i> -->
                    <!-- </div> -->
                    <p>Like Laravel We are Rails expert since we've been working with it for more than 3 years. The elegant design and opinionated nature of Rails made it our another preferred weapon of choice for server side development.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Android Development</h3>

                    <img src="/images/android.png">
                    <!-- <div class="animate bounceInLeft"> -->
                    <!--     <i class="fa fa&#45;android fa&#45;8x"></i> -->
                    <!-- </div> -->
                    <p>Life seems incomplete these day with out an Android Smartphone. Billions of smartphones with millions of applications. A Driving force for Market today. If you need Android applications for mobile or tablet - we can build them. </p>
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


