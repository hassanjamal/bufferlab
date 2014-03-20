@extends('sites.layouts.master')

@section('meta_description', 'index page')
@section('meta_content', 'index page content')
@section('stylesheet')
<!--  more stylesheet to be added here -->
@stop
@section('body_content')
<div class="container">
    <div class="inner_content">
        <h2 class="title">Contact Us</h2>  
        <blockquote>
            <h2>Please contact us to get a free quote via the contact form or by sending us an email. 
                We will gladly answer all of your questions in regards to web development.</h2>
        </blockquote>
        <div class="row">
            <div class="col-md-8">
            </div>
            <div class="col-md-4">
                <h3 class="colour"><i class="fa fa-map-marker"></i><span style="margin-left:20px;">Visit Us</span></h3>
                <p>
                Dumrao Palace <br>
                Fraser Road <br>
                Patna - 800001
                </p>
                <h3 class="colour"><i class="fa fa-phone"></i><span style="margin-left:20px;">Call Us</span></h3>
                <p>
                Phone : (+91)-9955-012-012<br>
                Skype : buffer.lab
                </p>
                <h3 class="colour"><i class="fa fa-envelope-o"></i><span style="margin-left:20px;">E-Mail Us</span></h3>
                <p>
                Sales : <a href="mailto:marketing@bufferlab.com">marketing@bufferlab.com</a><br>
                General : <a href="mailto:hello@bufferlab.com">hello@bufferlab.com</a>
                </p>
                <h3 class="colour"><i class="fa fa-clock-o "></i><span style="margin-left:20px;">Business Hour</span></h3>
                <p>
                Monday - Saturday 9am to 5pm <br> 
                Sunday - Closed
                </p>
            </div>
        </div>
    </div>
</div>
<div class="pad45"></div>

@stop
@section('strip')
@parent
@section('striphead')
@stop
@stop

@section('javaScript')
@stop
