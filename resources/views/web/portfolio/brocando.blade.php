@extends('web.webLayout')

@section('content')
    <div class="inner-head overlap">
        <div data-velocity="-.2" style="background: repeat scroll 50% 422.28px #CCCCCC;" class="parallax scrolly-invisible no-parallax"></div>
        <div class="container">
            <div class="inner-content">
                <span><i class="fa fa-bolt"></i></span>
                <h2>BroCanDo</h2>
                <ul><li></li></ul>
            </div>
        </div>
    </div>

    <section class="block" style="margin-bottom:5em;">
        <div class="container">
            <h3>Project details</h3>
            <p><a href="https://brocando.ch" target="_blank">BroCanDo</a> is a Swiss based company offering health insurance services for citizens of Switzerland.</p>
            <p>I was involved with this project while working at <a href="https://gauss.hr">Gauss Development Ltd</a> company.</p>
            <p>Since I was the newcomer to the company at the time, I was given Sascha's (CEO of BroCanDo) web application project to debug and fix existing errors.</p>
            <p>It seemed like an "easy fix" job, but soon enough it turned out to be faulty at its core functionality. The job was though, since the app was fully developed by several developers who were no longer present at the company and without any documentation (except some mobile devices API endpoints)
                It took 2 months of hard work alongside my colleague Luka B. to get the app working properly again. But, we did it even before the deadline, which made Sascha very pleased with us and the company.</p>
            <small>hint: formerly developed app crashed very soon, while this version still stands still!</small>
            <p>BroCanDo had a massive impact in my programming career as it took all of my thinking resources to get it working again. I've learned so much about PHP, Symfony framework and many other things. So, I'll be always thankful to both the Gauss Development CEO Ivan Lozancic for hiring me in the first place and giving me Sascha's project to work on, and BroCanDo CEO Sascha Teorodovic for being flexible and supportive throughout the process. </p>

            <div>
                <h4>Tech Stack</h4>
                <span class="tech-stack-item">PHP</span>
                <span class="tech-stack-item">Symfony</span>
                <span class="tech-stack-item">HTML</span>
                <span class="tech-stack-item">CSS</span>
                <span class="tech-stack-item">MySQL</span>
                <span class="tech-stack-item">Rest API</span>
                <span class="tech-stack-item">LAMP</span>
                <span class="tech-stack-item">Git</span>
                <span class="tech-stack-item">Android/iOS</span>
                <span class="tech-stack-item">UI/UX</span>
            </div>

            <div style="margin-top:3em;">
                <a href="{{ URL::previous() }}" class="btn btn-dark">Back</a>
            </div>
        </div>
    </section>
@endsection