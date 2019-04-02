@extends('web.webLayout')

@section('content')
    <div class="inner-head overlap">
        <div data-velocity="-.2" style="background: repeat scroll 50% 422.28px #CCCCCC;" class="parallax scrolly-invisible no-parallax"></div>
        <div class="container">
            <div class="inner-content">
                <span><i class="fa fa-bolt"></i></span>
                <h2>MINGO</h2>
                <ul><li></li></ul>
            </div>
        </div>
    </div>

    <section class="block" style="margin-bottom:5em;">
        <div class="container">
            <h3>Project details</h3>
            <p><a href="https://www.mingo.hr/" target="_blank">MINGO</a> is a Croatian government ministry, and the shorthand stands for "Ministarstvo gospodarstva, poduzetnistva i obrta" (eng. Ministry of Economy, Entrepreneurship and Sole Traders).</p>
            <p>The project was initiated while I was working at <a href="https://gauss.hr" target="_blank">Gauss Development LTD</a>. They needed an internal system built to keep records for their inspections data and live (on site) entries. </p>

            <div>
                <h4>Tech Stack</h4>
                <span class="tech-stack-item">PHP</span>
                <span class="tech-stack-item">Laravel</span>
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