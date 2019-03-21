<div class="theme-layout">
    <header class="simple-header for-sticky">
        <div class="top-bar">
            <div class="container">
                <ul class="contact-item">
                    <li><i class="fa fa-envelope-o"></i>info@hrvoje-zubcic.dev</li>
                    <li><i class="fa fa-mobile"></i>+385 97 66 222 18</li>
                </ul>
                <div class="choose-language">
                    <a href="https://www.linkedin.com/in/hrvoje-zubcic/" target="_blank" title="Linkedin Profile"><i class="fa fa-linkedin"></i></a>
                    <a href="https://github.com/hrcadm" target="_blank" title="Github Profile"><i class="fa fa-github" ></i></a>
                    <a href="https://www.upwork.com/fl/hrvojezubcic" target="_blank" title="Upwork Profile"><i class="fa fa-behance"></i></a>
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
                        <li class="menu-item-has-children {{ (Route::currentRouteName() === 'home' ? 'active-navbar-item' : '') }}">
                            <a href="{{ route('home') }}">HOME</a>
                        </li>
                        <li class="menu-item-has-children {{ (Route::currentRouteName() === 'about-me' ? 'active-navbar-item' : '') }}">
                            <a href="{{ route('about-me') }}">ABOUT ME</a>
                        </li>
                        <li class="menu-item-has-children {{ (Route::currentRouteName() === 'portfolio' ? 'active-navbar-item' : '') }}">
                            <a href="{{ route('portfolio') }}">PORTFOLIO</a>
                        </li>
                        <li class="menu-item-has-children {{ (Route::currentRouteName() === 'blog.index' ? 'active-navbar-item' : '') }}">
                            <a href="{{ route('blog.index') }}">BLOG</a>
                        </li>
                        <li class="menu-item-has-children {{ (Route::currentRouteName() === 'contact' ? 'active-navbar-item' : '') }}">
                            <a href="{{ route('contact') }}">GET IN TOUCH <span class="blinkMe" style="color: #ff2929">NOW !</span></a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>
</div>