@extends('web.webLayout')

@section('content')
    <div class="inner-head overlap">
        <div data-velocity="-.2" style="background: repeat scroll 50% 422.28px #CCCCCC;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container">
            <div class="inner-content">
                <span><i class="fa fa-bolt"></i></span>
                <h2>ABOUT ME</h2>
                <ul><li></li></ul>
            </div>
        </div>
    </div>

    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery-fancy-sec about-sec">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="follow_widget widget">
                                    <div class="heading2">
                                        <h3>Follow Me</h3>
                                    </div>
                                    <div class="social_widget">
                                        <a href="https://www.linkedin.com/in/hrvoje-zubcic/" target="_blank" title="Linkedin Profile"><i class="fa fa-linkedin" style="color: #FF2929"></i></a>
                                        <a href="https://github.com/hrcadm" target="_blank" title="Github Profile"><i class="fa fa-github" style="color: #FF2929"></i></a>
                                        <a href="https://www.upwork.com/fl/hrvojezubcic" target="_blank" title="Upwork Profile"><i class="fa fa-behance" style="color: #FF2929"></i></a>
                                    </div>
                                </div>
                                <div class="fancy-mockup-image" style="text-align: left;margin-top:3em">
                                    <div class="heading2">
                                        <h3>Skill stack</h3>
                                    </div>
                                    <ul style="list-style-type: none; text-align: left">
                                        <li>
                                            <i class="pp-icon fa fa-arrow-circle-o-right" style="color: #FF2929; font-size: 20px;"></i>
                                            <strong>Web Development</strong>
                                        </li>
                                        <li>
                                            <i class="pp-icon fa fa-arrow-circle-o-right" style="color: #FF2929; font-size: 20px;"></i>
                                            <strong>PHP: Laravel / Symfony Development</strong>
                                        </li>
                                        <li>
                                            <i class="pp-icon fa fa-arrow-circle-o-right" style="color: #FF2929; font-size: 20px;"></i>
                                            <strong>JavaScript: Plain / jQuery / Vue.js</strong>
                                        </li>
                                        <li>
                                            <i class="pp-icon fa fa-arrow-circle-o-right" style="color: #FF2929; font-size: 20px;"></i>
                                            <strong>Support & Maintenance</strong>
                                        </li>
                                        <li>
                                            <i class="pp-icon fa fa-arrow-circle-o-right" style="color: #FF2929; font-size: 20px;"></i>
                                            <strong>LAMP / WAMP family</strong>
                                        </li>
                                        <li>
                                            <i class="pp-icon fa fa-arrow-circle-o-right" style="color: #FF2929; font-size: 20px;"></i>
                                            <strong>Virtual Machines, Homestead, Docker</strong>
                                        </li>
                                        <li>
                                            <i class="pp-icon fa fa-arrow-circle-o-right" style="color: #FF2929; font-size: 20px;"></i>
                                            <strong>ORM: Eloquent / Doctrine</strong>
                                        </li>
                                        <li>
                                            <i class="pp-icon fa fa-arrow-circle-o-right" style="color: #FF2929; font-size: 20px;"></i>
                                            <strong>MySQL / MariaDB</strong>
                                        </li>
                                        <li>
                                            <i class="pp-icon fa fa-arrow-circle-o-right" style="color: #FF2929; font-size: 20px;"></i>
                                            <strong>Git & Collaborative Tools (Jira, Slack, Trello, ActiveCollab)</strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="fancy-gallery-infos">
                                    <span>Programming is an art form</span>
                                    <h3>It all started...</h3>
                                    <p>
                                        ... when I was just a kid, having my first PC bought by my parents. The passion happened instantly! I've learned about the Hardware, dissambling and assembling PC's, repairing them for my friends and family and so on. Later on, I started learning more about the Software,
                                        games and learning English while exploring its potential throughout my childhood on Dial-up connection. When I was about to go to highschool was the time I started some "actual" development of websites, forums (boards) for our class, school and private little projects with my friends.
                                        <br><br>
                                        I went to collage (Informatics Management) for only a year, unfortunately, because I've had to sign off due to the personal/family problems. It was the time I took a pause in the IT, but I guess it was only matter of time when I'd get back to it.
                                        And it did! I had to pick up where I left of, learning new stuff, reading a lot, get rutine practice again and hit the ground hard. Since I do think that "you can do what you want" and that "you should do what you love", I've spent months only learning and exploring, and then when I felt
                                        comfortable enough (in my head, not the knowledge, because every day I learn something new) I've decided to hit off with my professional career.
                                        <br><br>
                                        Today, I've got plenty of clients that are very pleased with my efforts and results. Since I take pride in my code, I always code the best and cleanest as I can, because my code quality will speak out my general quality.
                                        I've worked both in the in-house teams, remote jobs and freelancing, so I'm very flexible regarding the type of engagement you would need.
                                        <br><br>
                                        Drop me a message or give me a call for more info or possible cooperation!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-bottom:5em;">
        <div class="container">
            <div class="heading4" style="margin-top:2em">
                <h2>TESTIMONIALS</h2>
            </div>

            @foreach($testimonials as $testimonial)
            <div>
                <p>
                    <i class="fa fa-quote-left" style="color:#FF2929"></i>
                    {{ $testimonial->testimonial_content }}
                    <i class="fa fa-quote-right" style="color:#FF2929"></i><br>
                    <strong>
                        {{ $testimonial->testimonial_author_name }}, {{ $testimonial->testimonial_author_role }}
                        @if($testimonial->testimonial_author_company !== null)
                            <span style="color: #FF2929">@</span> GiftCash Inc
                        @endif
                        @if($testimonial->testimonial_note !== null)
                            <br><em> - {{ $testimonial->testimonial_note }}</em>
                            @endif
                    </strong>
                </p>
            </div>
            <hr>
            @endforeach

            <div class="text-center">
                <span style="font-size: 55px; color: #FF2929">...</span>
                <p style="font-weight: 600; font-style: italic;">Ask for references <a href="{{ route('contact') }}" style="color:#FF2929">here</a>!</p>
            </div>
        </div>
    </section>
@endsection