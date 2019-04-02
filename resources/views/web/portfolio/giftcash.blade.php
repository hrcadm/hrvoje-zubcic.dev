@extends('web.webLayout')

@section('content')
    <div class="inner-head overlap">
        <div data-velocity="-.2" style="background: repeat scroll 50% 422.28px #CCCCCC;" class="parallax scrolly-invisible no-parallax"></div>
        <div class="container">
            <div class="inner-content">
                <span><i class="fa fa-bolt"></i></span>
                <h2>GiftCash</h2>
                <ul><li></li></ul>
            </div>
        </div>
    </div>

    <section class="block" style="margin-bottom:5em;">
        <div class="container">
            <h3>Project details</h3>
            <p>GiftCash Inc is a Canadian startup company, based in Toronto.</p>
            <p>I've had a great opportunity to work with them, alongside Colin Moffat (the GiftCash CEO) and a well seasoned and experienced PHP developer <a href="https://johnshipp.com" target="_blank">John Shipp</a>.</p>
            <p><a href="https://giftcash.com" target="_blank">GiftCash</a> is a service that offers you to redeem your gift cards for cash.</p>
            <p>I was in charge for both backend and frontend tasks. Mainly optimizing backend services and speeding up the processes while implementing new logic. Also, creating new functional components and rendering dynamic statistics with Vue.js charts</p>
            <p>It was a great experience working with GiftCash, where my ideas and actions were highly appreciated, praised and implemented.</p>

            <div>
                <h4>Tech Stack</h4>
                <span class="tech-stack-item">PHP</span>
                <span class="tech-stack-item">Laravel</span>
                <span class="tech-stack-item">JavaScript</span>
                <span class="tech-stack-item">Vue.js</span>
                <span class="tech-stack-item">Rest API</span>
                <span class="tech-stack-item">JSON</span>
                <span class="tech-stack-item">HTML</span>
                <span class="tech-stack-item">CSS</span>
                <span class="tech-stack-item">MySQL</span>
                <span class="tech-stack-item">Rest</span>
                <span class="tech-stack-item">LAMP</span>
                <span class="tech-stack-item">Git</span>
            </div>

            <div style="margin-top:3em;">
                <a href="{{ URL::previous() }}" class="btn btn-dark">Back</a>
            </div>
        </div>
    </section>
@endsection