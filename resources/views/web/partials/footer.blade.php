<footer>
    <section class="block">
        <div data-velocity="-.2" class="parallax scrolly-invisible no-parallax blackish"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="row">
                <div class="col-md-3 column">
                    <div class="about_widget widget">
                        <div class="logo">
                            <a href="#" title="">
                                <i class="fa fa-get-pocket"></i>
                                <span>Hrvoje Zubcic</span>
                                <strong>Power up your dream</strong>
                            </a>
                        </div><!-- LOGO -->
                        <ul class="social-btns">
                            <li><a href="https://www.linkedin.com/in/hrvoje-zubcic/" target="_blank" title="Linkedin Profile"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://github.com/hrcadm" target="_blank" title="Github Profile"><i class="fa fa-github"></i></a></li>
                            <li><a href="https://www.upwork.com/fl/hrvojezubcic" target="_blank" title="Upwork Profile"><i class="fa fa-behance"></i></a></li>
                        </ul>

                        <span><i class="fa fa-envelope"></i>info@hrvoje-zubcic.dev</span>
                        <span><i class="fa fa-phone"></i>+385 97 66 222 18</span>
                        <span><i class="fa fa-location-arrow"></i>E. Kvaternika 1, 31540 Donji Miholjac, Croatia</span>
                    </div>
                </div>
                <div class="col-md-3 column">
                    <div class="flickr_widget widget">
                        <div class="heading1">
                            <h2><span>Recent posts</span></h2>
                        </div>
                        <div class="flickr_images">
                            <span>No activity yet...</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 column">
                    <div class="links_widget widget">
                        <div class="heading1">
                            <h2><span>Useful</span> links</h2>
                        </div>
                        <ul>
                            <li><a href="{{ route('home') }}"><i class="fa fa-angle-right"></i> Home</a></li>
                            <li><a href="{{ route('about-me') }}"><i class="fa fa-angle-right"></i> About me</a></li>
                            <li><a href="{{ route('portfolio') }}"><i class="fa fa-angle-right"></i> Portfolio</a></li>
                            <li><a href="{{ route('blog.index') }}"><i class="fa fa-angle-right"></i> Blog</a></li>
                            <li><a href="{{ route('contact') }}"><i class="fa fa-angle-right"></i> GET IN TOUCH <span class="blinkMe" style="color: #ff2929">NOW!</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 column">
                    <div class="subscribe_widget widget">
                        <div class="heading1">
                            <h2><span>Subscribe</span> Us</h2>
                        </div><!-- heading -->
                        @if (\Session::has('msg') && \Session::get('msg') === 'successSubscribe')
                            <p>Thanks for subscribing!</p>
                        @elseif($errors->any())
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger" style="color:#000000">{{ $error }}</p>
                            @endforeach
                        @else
                            <p>Get the latest info first, sign up today!</p>
                        @endif
                        <form method="POST" action="{{ route('subscribe-us') }}">
                            {{ csrf_field() }}
                            <label><i class="fa fa-pencil"></i><input type="text" name="subscriberName" placeholder="YOUR FULL NAME" value="{{ old('subscriberName') }}"/></label>
                            <label><i class="fa fa-envelope"></i><input type="email" name="subscriberEmail" placeholder="YOUR EMAIL" value="{{ old('subscriberEmail') }}" autofocus /></label>
                            <button type="submit" class="flat-btn">SUBSCRIBE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align: center;margin-top: 3em;">
            <span>Copyright &copy; All Right Reserved 2019 &#8226; Developed by: <a href="mailto:info@hrvoje-zubcic.dev" title="">Hrvoje Zubcic</a></span>
        </div>
    </section>
</footer>