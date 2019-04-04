@extends('web.webLayout')

@section('pageTitle', 'Portfolio')

@section('content')
    <div class="inner-head overlap">
        <div data-velocity="-.2" style="background: repeat scroll 50% 422.28px #CCCCCC;" class="parallax scrolly-invisible no-parallax"></div>
        <div class="container">
            <div class="inner-content">
                <span><i class="fa fa-bolt"></i></span>
                <h2>PORTFOLIO</h2>
                <ul><li></li></ul>
            </div>
        </div>
    </div>

    <section class="block" style="margin-bottom:5em;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 column">
                    <div class="portfolio-mini-sec">

                        {{-- echo three by three projects   --}}
                        @foreach($projects->chunk(3) as $pro)
                            <div class="row">
                                @foreach($pro as $project)
                                    <div class="col-md-4">
                                        <div class="mini-portfolio" style="width:230px;height:300px;background: rgba(0,0,0,0.3) url({{ asset('storage/projectLogos/'. $project->logo) }}) no-repeat center center;-webkit-background-size: contain;-moz-background-size: contain;-o-background-size: contain;background-size: contain;">
                                            <div class="portfolio-info">
                                                <span>{{ $project->title }}</span>
                                                <h3>
                                                    @foreach (explode(', ', $project->main_techs) as $tech)
                                                        {{ $tech }} <br>
                                                    @endforeach
                                                </h3>
                                                @if($project->has_content === 1)
                                                    <a href="{{ route('publicPortfolioSingle', $project->title) }}" class="flat-btn"><i class="fa fa-link"></i> More...</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach

                        @if(!empty($featuredProject))
                        <div class="row text-center mt-5">
                            <div class="col-md-12">
                                <span style="color:#FF2929"><strong>More to be added soon...</strong></span>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>

                @if(!empty($featuredProject))
                <aside class="col-md-4 column">
                    <div class="admin_widget widget">
                        <div class="heading2">
                            <h3>Featured Project</h3>
                        </div>
                        <div class="meet_admin">
                            <div class="mini-portfolio" style="width:230px;height:300px;background: rgba(0,0,0,0.3) url({{ asset('storage/projectLogos/'. $featuredProject->logo) }}) no-repeat center center;-webkit-background-size: contain;-moz-background-size: contain;-o-background-size: contain;background-size: contain;">
                                <div class="portfolio-info">
                                    <span>{{ $featuredProject->title }}</span>
                                    <h3>
                                        @foreach (explode(', ', $featuredProject->main_techs) as $tech)
                                            {{ $tech }} <br>
                                        @endforeach
                                    </h3>
                                    @if($featuredProject->has_content === 1)
                                        <a href="{{ route('publicPortfolioSingle', $featuredProject->title) }}" class="flat-btn"><i class="fa fa-link"></i> More...</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                @else
                    <aside class="col-md-4 column text-center">
                        <i class="fa fa-arrow-down"></i><br>
                        <span style="color:#FF2929"><strong>More to be added soon...</strong></span>
                    </aside>
                @endif
            </div>

        </div>
    </section>
@endsection