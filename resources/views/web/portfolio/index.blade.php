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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mini-portfolio" style="width:230px;height:300px;background-color: rgba(0,0,0,0.3)">
                                    <img alt="giftcash-project" src="{{ asset('images/projectImages/giftcash.png') }}" style="margin-top:35%;width:100%">
                                    <div class="portfolio-info">
                                        <span>Full-stack Development</span>
                                        <h3>Laravel <br> Vue.js</h3>
                                        <a href="{{ route('project.giftcash') }}" class="flat-btn"><i class="fa fa-link"></i> More...</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mini-portfolio" style="width:230px;height:300px;background-color: rgba(0,0,0,0.3)">
                                    <img alt="brocando-project" src="{{ asset('images/projectImages/brocando.png') }}" style="margin-top:50%;width:100%">
                                    <div class="portfolio-info">
                                        <span>Backend Development</span>
                                        <h3>Symfony FW <br> UI/UX</h3>
                                        <a href="{{ route('project.brocando') }}" class="flat-btn"><i class="fa fa-link"></i> More...</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mini-portfolio" style="width:230px;height:300px;background-color: rgba(0,0,0,0.3)">
                                    <img alt="mingo-project" src="{{ asset('images/projectImages/mingo.png') }}" style="margin:15% 0 0 5%;width:100%">
                                    <div class="portfolio-info">
                                        <span>Backend Development</span>
                                        <h3>Laravel <br> UI/UX</h3>
                                        <a href="{{ route('project.mingo') }}" class="flat-btn"><i class="fa fa-link"></i> More...</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ---------------------------------------------------------------------- --}}

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mini-portfolio" style="width:230px;height:300px;background-color: rgba(0,0,0,0.3)">
                                    <img alt="bsg-project" src="{{ asset('images/projectImages/playthings.png') }}" style="margin:40% 0 0 30%">
                                    <div class="portfolio-info">
                                        <span>Backend Development</span>
                                        <h3>Laravel <br> UI/UX</h3>
                                        <small>Development of a global SaaS product</small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mini-portfolio" style="width:230px;height:300px;background-color: rgba(0,0,0,0.3)">
                                    <img alt="playthings-project" src="{{ asset('images/projectImages/dmg.png') }}" style="margin:40% 0 0 10%;">
                                    <div class="portfolio-info">
                                        <span>Backend Development</span>
                                        <h3>SQL <br> Laravel</h3>
                                        <small>Project development through corrupted database.</small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mini-portfolio" style="width:230px;height:300px;background-color: rgba(0,0,0,0.3)">
                                    <img alt="opgdumancic-project" src="{{ asset('images/projectImages/dmg.png') }}" style="margin:40% 0 0 10%;">
                                    <div class="portfolio-info">
                                        <span>UI/UX Development</span>
                                        <h3>HTML/CSS/JS</h3>
                                        <small>Presentational website for local groceries seller.</small>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row text-center mt-5">
                            <div class="col-md-12">
                                <span style="color:#FF2929"><strong>More to be added soon...</strong></span>
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
                            <div class="mini-portfolio" style="width:300px;height:400px;background-color: rgba(0,0,0,0.3)">
                                <img alt="giftcash-project" src="{{ asset('images/projectImages/giftcash.png') }}" style="margin-top:35%;width:100%;">
                                <div class="portfolio-info">
                                    <span>Full-stack Development</span>
                                    <h3>Laravel <br> Vue.js</h3>
                                    <a href="{{ route('project.giftcash') }}" class="flat-btn"><i class="fa fa-link"></i> More...</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>

        </div>
    </section>
@endsection