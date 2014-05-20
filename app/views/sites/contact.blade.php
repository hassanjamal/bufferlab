@extends('sites.layouts.master')

@section('meta_description', 'contact  page')
@section('meta_content', 'contact  page content')
@section('stylesheet')
{{ HTML::style('/css/bootstrapValidator.min.css') }}
@stop
@section('body_content')
<div class="container">
    <div class="inner_content">
        <h2 class="title">Contact Us</h2>  
        <blockquote>
            <h2>Please contact us to get a free quote via the contact form or by sending us an email. 
                We will gladly answer all of your questions in regards to web development.You can even call us !!</h2>
        </blockquote>
        <div class="col-sm-8" id="contact_form">
            <!-- form start here -->
            <form id="ajax-contact-form" role="form" method="post" action="" autocomplete="off" >
                <div class="form-group">
                    <label class="form_info" for="name">COMPANY / NAME * </label>
                    <input class="form-control" type="text" name="name" id="name" />
                </div>
                <div class="form-group">
                    <label class="form_info" for="phone_number">PHONE NUMBER * </label>
                    <input class="form-control" type="text" name="phone_number" id="phone_number" />
                </div>
                <div class="form-group">
                    <label class="form_info" for="email">EMAIL * </label>
                    <input class="form-control" type="text" name="email" id="email" />
                </div>
                <div class="form-group">
                    <label class="form_info" for="message">MESSAGE * </label>
                    <textarea class="form-control" name="message" id="message"></textarea>
                </div>
                <!-- <div class"clear"></div> -->
                <input type="submit" class="btn  btn-large btn-primary marg-right5 " value="Send Message">
                <input type="reset" class="btn   btn-large btn-primary" value="Reset Form" id="resetBtn">
            </form>
            <!-- form ends here -->
        </div>
        <div class="col-sm-4">
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
            Monday - Saturday 10am to 6pm <br> 
            Sunday - Closed
            </p>
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
{{ HTML::script('/js/bootstrapValidator.min.js') }}
{{ HTML::script('/js/my_custom_validate.js') }}
@stop
