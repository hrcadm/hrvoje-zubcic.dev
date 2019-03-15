@extends('web.webLayout')

@section('content')
    <div class="inner-head overlap">
        <div data-velocity="-.2" style="background: url(http://placehold.it/1500x1100) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="inner-content">
                <span><i class="fa fa-bolt"></i></span>
                <h2>PORTFOLIO</h2>
                <ul><li></li></ul>
            </div>
        </div>
    </div><!-- inner Head -->

    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-8 column">
                    <div class="portfolio-mini-sec">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mini-portfolio">
                                    <img alt="" src="http://placehold.it/270x345">
                                    <div class="portfolio-info">
                                        <span>Design</span>
                                        <h3>MUSHI is fully Hand Crafted Design</h3>
                                        <ul>
                                            <li><button class="btn" style="background-color: #FF2929;color:#fff"><i class="fa fa-link"></i> See more...</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="col-md-4 column">
                    <div class="admin_widget widget">
                        <div class="heading2">
                            <h3>Featured Project</h3>
                        </div>
                        <div class="meet_admin">
                            <div class="mini-portfolio">
                                <img alt="" src="http://placehold.it/270x345">
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