<div class="theme-layout">
    <header class="simple-header for-sticky">
        <div class="top-bar">
            <div class="container">
                <ul class="contact-item">
                    <li><i class="fa fa-envelope-o"></i>info@hrvoje-zubcic.dev</li>
                    <li><i class="fa fa-mobile"></i>+385 97 66 222 18</li>
                </ul>
                <div class="choose-language">
                    <a href="#" title="">HR</a>
                    <a href="#" title="">EN</a>
                    <a href="#" title="">DE</a>
                </div>
            </div>
        </div>

        <div class="menu">
            <div class="container">
                <div class="logo">
                    <a href="#" title="">
                        <i class="fa fa-get-pocket"></i>
                        <span>Hrvoje Zubcic</span>
                        <strong>Power up your dream</strong>
                    </a>
                </div>
                {{--<div class="popup-client">
                    <span><i class="fa fa-user"></i> Signup</span>
                </div>--}}
                <span class="menu-toggle"><i class="fa fa-bars"></i></span>
                <nav>
                    <ul>
                        <li class="menu-item-has-children mega">
                            <a href="{{ route('home') }}">HOME</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('about-me') }}">ABOUT ME</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('portfolio') }}">PORTFOLIO</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('blog.index') }}">BLOG</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('contact') }}">GET IN TOUCH</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>
</div>