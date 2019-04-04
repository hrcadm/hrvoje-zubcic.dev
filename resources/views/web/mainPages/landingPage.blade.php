@extends('web.webLayout')

@section('pageTitle', 'Welcome')

@section('content')
    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="who-we-are-sec">
                        <h3>WHO AM I & <span>WHAT I DO</span></h3>
                        <p>I'm a web developer specialized in developing custom web applications and solutions. <br>
                        My main programming language is PHP and I'm mainly oriented to Backend development, though I have <br>
                        UI/UX and Frontend skills also, which makes me a complete web developer ready for the next challenge.</p>
                        <div class="service-simple-sec">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="service-simple">
                                        <i class="fa  fa-html5"></i>
                                        <h3>Web Development</h3>
                                        <p>Development of custom web applications from scratch</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="service-simple">
                                        <i class="fa  fa-html5"></i>
                                        <h3>Legacy Projects</h3>
                                        <p>Upgrading and/or fixing legacy projects to newer versions</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="service-simple">
                                        <i class="fa  fa-gear"></i>
                                        <h3>Support & Maintenance</h3>
                                        <p>Once the project is finished, I offer support & maintenance of it </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="service-simple">
                                        <i class="fa  fa-check"></i>
                                        <h3>Code Quality</h3>
                                        <p>I take pride in my code. Therefore, I strive to write the best possible code</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block">
        <div class="row">
            <div class="col-md-12">
                <div class="steps-sec with-color">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="step" style="background-color: #171717; height: 100%">
                                <img style="width:450px;height:455px;background-color: #171717" src="#" alt="" />
                                <div class="step-info">
                                    <span>01</span>
                                    <h3>PLANNING</h3>
                                    <p>The first phase is putting the plan on the paper, write documentation and specifications. </p>
                                    <a href="{{ route('contact') }}" title="" class="flat-btn">GET IN TOUCH NOW!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="step">
                                <img style="width:450px;height:455px;background-color: #171717" src="#" alt="" />
                                <div class="step-info">
                                    <span>02</span>
                                    <h3>DEVELOPMENT</h3>
                                    <p>The second phase is the actual development of your project based on the documentation and specifications we agreed on.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="step" style="background-color: #171717; height: 100%">
                                <img style="width:450px;height:455px;background-color: #171717" src="#" alt="" />
                                <div class="step-info">
                                    <span>03</span>
                                    <h3>FINALIZING</h3>
                                    <p>The third phase is launching the project and making sure everything works as planned. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block" style="margin-bottom:5em;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ceo-message-sec">
                        <div class="row">
                            <div class="col-md-7">
                                <img src="{{ asset('images/Untitled-5-1024x576.png') }}" style="width:100%;height:100%;" alt="pic" />
                            </div>
                            <div class="col-md-5">
                                <div class="ceo-message" style="float:none;padding: 43px 70px;">
                                    <span>Hrvoje Zubcic</span>
                                    <img src="{{ asset('images/ja1.png') }}" alt="hzdm">
                                    <p>Programming has been my passion since the young age, when I was exploring the world of web apps, desktop apps etc.
                                        I've always been intrigued by how the things work behind the scenes and the logic that powers it.</p>
                                    <a href="{{ route('about-me') }}" title="" class="flat-btn">MORE...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection