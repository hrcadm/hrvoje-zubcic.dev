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
                                <span>MUSHI</span>
                                <strong>Innovation is here</strong>
                            </a>
                        </div><!-- LOGO -->
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>

                        <span><i class="fa fa-envelope"></i>examplecompany@gmail.com</span>
                        <span><i class="fa fa-phone"></i>0900 (23456366)</span>
                        <span><i class="fa fa-location-arrow"></i>4465 Washington Avenue De Pere, WI 54115</span>
                    </div>
                </div>
                <div class="col-md-3 column">
                    <div class="flickr_widget widget">
                        <div class="heading1">
                            <h2><span>SOCIAL MEDIA</span></h2>
                        </div>
                        <div class="flickr_images">
                            <a href="https://www.linkedin.com/in/hrvoje-zubcic/" target="_blank" title="Linkedin" style="background-color: rgba(0,0,0,0)"><img src="{{ asset('images/socialMedia/linkedin.png') }}" alt="linkedin" /></a>
                            <a href="http://github.com/hrcadm" target="_blank" title="Github" style="background-color: rgba(0,0,0,0)"><img src="{{ asset('images/socialMedia/github.png') }}" alt="github" /></a>
                            <a href="https://www.upwork.com/fl/hrvojezubcic" target="_blank" title="Upwork" style="background-color: rgba(0,0,0,0)"><img src="{{ asset('images/socialMedia/upwork.png') }}" alt="upwork" /></a>

                            {{--<span>Follow <a href="#" title="">@mushithemes</a></span>--}}
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
                            <li><a href="{{ route('contact') }}"><i class="fa fa-angle-right"></i> Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 column">
                    <div class="subscribe_widget widget">
                        <div class="heading1">
                            <h2><span>Subscribe</span> Us</h2>
                        </div><!-- heading -->
                        <p>Positioning the closest positioned for abs positioning</p>
                        <form>
                            <label><i class="fa fa-envelope"></i><input type="text" placeholder="YOUR NAME" /></label>
                            <label><i class="fa fa-pencil"></i><input type="text" placeholder="TYPE YOUR EMAIL" /></label>
                            <button type="submit" class="flat-btn">SUBSCRIBE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align: center;margin-top: 3em;">
            <span>Copyright All Right Reserved 2015 <a href="#" title="">Numberstheme</a></span>
        </div>
    </section>
</footer>