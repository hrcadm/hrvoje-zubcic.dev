@extends('web.webLayout')

@section('content')
    <div class="inner-head overlap">
        <div data-velocity="-.2" style="background: url(http://placehold.it/1500x1100) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="inner-content">
                <span><i class="fa fa-bolt"></i></span>
                <h2>GET IN TOUCN NOW!</h2>
                <ul>
                    <li><a href="#" title="">HOME</a></li>
                    <li><a href="#" title="">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </div><!-- inner Head -->

    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-lists-sec">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>021 (4568432-5)  (7654357-0)
                            </li>
                            <li>
                                <i class="fa fa-at"></i>yourcompany@email.com
                            </li>
                            <li>
                                <i class="fa fa-support"></i>Get Free Support  24/7
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block remove-top">
        <div class="contact-details">

                <div class="contact-infos" style="text-align: center">
                    <ul>
                        <li>
                            <span><i class="fa fa-phone"></i> Address</span>
                            <p>765 Shuttle Swift Area <br>at New Born Road </p>
                        </li>
                        <li>
                            <span><i class="fa fa-fax"></i> Fax/Email</span>
                            <p>674-46-7-0,   234-8-987 <br>hello@email.com</p>
                        </li>
                    </ul>
                </div>
        </div>
    </section>

    <section class="block remove-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="heading4">
                        <h2>CONTACT US</h2>
                        <span>Easy to Customize</span>
                    </div>
                    <div id="contact">
                        <div class="contact-form">
                            <form method="post" action="contact.php" name="contactform" id="contactform">
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
                                        <textarea name="comments" id="comments" class="input-style" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" class="form-control" id="submit" value="Submit" style="background-color: #ff2929;color:#fff;"/>
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