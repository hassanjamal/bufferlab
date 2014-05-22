@extends('sites.layouts.master')

@section('title', ':: Business Solution')
@section('meta_description', 'Business Solution')
@section('meta_content', 'Wireframing , User experience (UX) ,User experience (UX), Responsive web design')
@section('stylesheet')
{{ HTML::style('/css/timeline.css') }}
<!--  more stylesheet to be added here -->
@stop
@section('body_content')
<div class="container">
    <div class="inner_content">
        <h1 class="title">Business Solution</h1>
        <hr>
        <blockquote>
            <h2>Our clients come to us with problems, and we use the best and latest mobile and web technology to solve
                those problems for them.Whether it is static website or data driven web apps , We deliver best for
                them.</h2>
        </blockquote>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Digital Strategy</h3>

                    <div class="animate bounceInLeft">
                        <i class="fa fa-building-o  fa-8x"></i>
                    </div>
                    <p>Web or Mobile? Native or HTML5? Our experience in the web and mobile space can help you determine
                        where to move in the digital space.We help you to indetify the unmet needs and goals of the
                        customers.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Product Development</h3>

                    <div class="animate bounceInLeft">
                        <i class="fa fa-sliders fa-8x"></i>
                    </div>
                    <p>Taking into consideration your business requirements and objectives, we can help you develop your
                        product - so you can focus on developing your business.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge"><i class="fa fa-scissors fa-3x"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Custom Web Application</h3>
                            </div>
                            <div class="timeline-body">
                                <p>We are strong believers that the software you use for your business should be designed around how your business operates, not the other way around.</p>
                                <p>We have helped dozen of companies realize their maximum cost savings through these solutions.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge success"><i class="fa fa-globe fa-3x"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Web Design</h3>
                            </div>
                            <div class="timeline-body">
                                <p>Landing pages that convert. Banner design that attracts clicks. Graphic design that shows off your brand's identity. Web design that is beautiful and functional.</p>
                                <p>Our work is not restricted to building the plumbing of your website or your product.
                                    We also design the facade, the front end which your users, prospects and customers will interact with.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge warning"><i class="fa fa-credit-card fa-3x"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">e-Commerce &amp; Retail Solution</h3>
                            </div>
                            <div class="timeline-body">
                                <p>We specialize in e-commerce solutions designed with one primary objective – to maximize your profits.Our backend solutions are crucial in the keeping your Web business profitable. We provide numerous tools — that fit within your budget — to increase productivity and efficiencies of your operations.  </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge info"><i class="fa fa-facebook fa-3x"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">FaceBook Application</h3>
                            </div>
                            <div class="timeline-body">
                                <p>Beyond likes and shares, Facebook apps can help you get more engaged users, increased traffic to your own website and spikes in revenue.We will guide you through the entire process of Facebook app development from planning, development, getting your apps hosted and keeping them updated.</p>
                            </div>
                        </div>
                    </li>
                    <li> 
                        <div class="timeline-badge danger"><i class="fa fa-mobile fa-3x"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Mobile Application Development</h3>
                            </div>
                            <div class="timeline-body">
                                <p>We offer a comprehensive solution for all your mobile development needs.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge info"><i class="fa fa-cloud fa-3x"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Cloud Application Development</h3>
                            </div>
                            <div class="timeline-body">
                                <p>Not only are businesses moving legacy applications to the cloud, they are also developing newer mobile and social applications off that would not have been possible otherwise.Get your application designed for PagodaBox , Amazon AWS , Heroku , Fortrabbit and much more ..</p>
                            </div>
                        </div>
                    </li>
                </ul>
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

