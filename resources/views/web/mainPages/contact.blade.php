@extends('web.webLayout')

@section('content')
    <div class="inner-head overlap">
        <div data-velocity="-.2" style="background: repeat scroll 50% 422.28px #CCCCCC;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="inner-content">
                <span><i class="fa fa-bolt"></i></span>
                <h2>GET IN TOUCN <span style="color: #FF2929">NOW!</span></h2>
                <ul><li></li></ul>
            </div>
        </div>
    </div><!-- inner Head -->

    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                    <div class="contact-lists-sec" style="text-align: center">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i><br>+385 97 662 2218
                            </li>
                            <li>
                                <i class="fa fa-at"></i><br>info@hrvoje-zubcic.dev
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i><br>Donji Miholjac - Europe/Croatia
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block remove-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="heading4">
                        <h2>CONTACT ME</h2>
                    </div>
                    <div id="contact">
                        <div class="contact-form">
                            <form method="post" action="{{ route('contact-form-request') }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <i class="fa fa-user"></i>
                                        <input name="name" type="text" id="name" class="input-style" placeholder="Name" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <i class="fa fa-at"></i>
                                        <input name="email" type="text" id="email" class="input-style" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <i class="fa fa-pencil"></i>
                                        <textarea name="message" id="message" class="input-style" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" class="flat-btn" id="submit" value="Submit"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection