@extends('web.webLayout')

@section('content')
<div class="inner-head overlap">
    <div data-velocity="-.2" style="background: url(http://placehold.it/1500x1100) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
    <div class="container">
        <div class="inner-content">
            <span><i class="fa fa-bolt"></i></span>
            <h2>404 ERROR</h2>
            <ul>
                <li><a href="#" title="">HOME</a></li>
                <li><a href="#" title="">404 ERROR</a></li>
            </ul>
        </div>
    </div>
</div><!-- inner Head -->

<section class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-sec">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="error-not-found style2">
                                <span>Sorry the Page you are looking fot does not exist here</span>
                                <h3>404<strong>ERROR !</strong></h3>
                                <h5>You can Explore Our Website Back <br/>to the Navigation Below</h5>
                                <ul>
                                    <li><a href="#" title="">HOME</a></li>
                                    <li><a href="#" title="">ABOUT</a></li>
                                    <li><a href="#" title="">PORTFOLIO</a></li>
                                    <li><a href="#" title="">EVENTS</a></li>
                                    <li><a href="#" title="">BLOG</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @endsection