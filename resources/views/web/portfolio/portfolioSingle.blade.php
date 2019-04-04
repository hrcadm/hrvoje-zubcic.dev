@extends('web.webLayout')

@section('pageTitle', $project->title )

@section('content')
    <div class="inner-head overlap">
        <div data-velocity="-.2" style="background: repeat scroll 50% 422.28px #CCCCCC;" class="parallax scrolly-invisible no-parallax"></div>
        <div class="container">
            <div class="inner-content">
                <span><i class="fa fa-bolt"></i></span>
                <h2>{{ $project->title }}</h2>
                <ul><li></li></ul>
            </div>
        </div>
    </div>

    <section class="block" style="margin-bottom:5em;">
        <div class="container">
            <h3>Project details</h3>
            <p>{!! $project->content !!}</p>

            <div>
                <h4>Tech Stack</h4>
                @foreach (explode(', ', $project->tech_stack) as $skill)
                    <span class="tech-stack-item">{{ $skill }}</span>
                @endforeach
            </div>

            <div style="margin-top:3em;">
                <a href="{{ URL::previous() }}" class="btn btn-dark">Back</a>
            </div>
        </div>
    </section>
@endsection