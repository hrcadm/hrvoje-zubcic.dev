@extends('web.webLayout')

@section('content')
    <div class="inner-head overlap">
        <div data-velocity="-.2" style="background: repeat scroll 50% 422.28px #CCCCCC;" class="parallax scrolly-invisible no-parallax"></div>
        <div class="container">
            <div class="inner-content">
                <span><i class="fa fa-bolt"></i></span>
                <h2>PORTFOLIO</h2>
                <ul><li></li></ul>
            </div>
        </div>
    </div>

    <section class="block" style="margin-bottom:5em;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 column">
                    <div class="portfolio-mini-sec">
                        @include('web.portfolio.portfolioSingle')
                    </div>
                </div>
                <aside class="col-md-4 column">
                    <div class="admin_widget widget">
                        <div class="heading2">
                            <h3>Featured Project</h3>
                        </div>
                        <div class="meet_admin">
                            <div class="mini-portfolio" style="width:300px;height:400px;background-color: rgba(0,0,0,0.3)">
                                <img alt="" src="#">
                                <div class="portfolio-info">
                                    <span>Design</span>
                                    <h3>MUSHI is fully Hand Crafted Design</h3>
                                    <ul>
                                        <li><button class="btn" style="background-color: #FF2929;color:#fff"><i class="fa fa-link"></i> See more...</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- Admin Widget -->

                </aside>
            </div>
        </div>
    </section>
@endsection