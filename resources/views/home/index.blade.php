@extends('layouts.home')

@section('title', 'Welcome')

@section('content')

    <div class="text-center" style="margin: 0;padding: 0;">
        <img class="img-responsive" src="{{ url('images/cover.jpg') }}" alt="SH Interactive at work" />
        <!--<a class="btn btn-primary get-started btn-lg" href="#">Get Started</a>-->
    </div>

    <div class="aspects">
        <div class="row text-center top20">
            <div class="col-sm-3">
                <i class="fa fa-industry home-icon"></i>
                <p>Keeping up with the latest standards and trends in the ever-changing web-development industry.</p>
            </div>
            <div class="col-sm-3">
                <i class="fa fa-anchor home-icon"></i>
                <p>Established in the Phoenix area since 2005, working with a variety of non-profit and professional clients.</p>
            </div>
            <div class="col-sm-3">
                <i class="fa fa-database home-icon"></i>
                <p>Building database-driven, dynamic web applications, so clients can edit copy on their own websites.</p>
            </div>
            <div class="col-sm-3">
                <i class="fa fa-send home-icon"></i>
                <p>Always available to answer client questions and concerns by email or phone. Ask me anything!</p>
            </div>
        </div>

        <div class="row text-center top20">
            <div class="col-sm-3">
                <i class="fa fa-share-alt home-icon"></i>
                <p>Social-media savvy, using writing skills to manage Facebook and Twitter accounts for several clients.</p>
            </div>
            <div class="col-sm-3">
                <i class="fa fa-shopping-cart home-icon"></i>
                <p>With Stripe and Paypal, integrating online stores and shopping carts into web applications.</p>
            </div>
            <div class="col-sm-3">
                <i class="fa fa-sitemap home-icon"></i>
                <p>All web applications are built with search-engine optimization in mind, so people can find you on the web.</p>
            </div>
            <div class="col-sm-3">
                <i class="fa fa-tasks home-icon"></i>
                <p>Well-organized so that projects are completed on-time and within budget to client specifications.</p>
            </div>
        </div>

        <div class="row text-center top20">
            <div class="col-sm-3">
                <i class="fa fa-wrench home-icon"></i>
                <p>Always willing to address issues that come up pre- and post-production. Fixes done promptly.</p>
            </div>
            <div class="col-sm-3">
                <i class="fa fa-university home-icon"></i>
                <p>College-educated, with two bachelor's degrees (one in web design and one in journalism).</p>
            </div>
            <div class="col-sm-3">
                <i class="fa fa-thumbs-up home-icon"></i>
                <p>View testimonials from several long-time clients and, of course, references are available.</p>
            </div>
            <div class="col-sm-3">
                <i class="fa fa-rocket home-icon"></i>
                <p>Committed to a client from initial meetings to launch, and throughout the maintenance phase.</p>
            </div>
        </div>
    </div>

@stop
