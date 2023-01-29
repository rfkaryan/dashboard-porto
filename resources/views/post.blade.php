@extends('layouts.main')

@section('primary-layout')
<div class="section big-65-height over-hide">
    <div class="hero-center-wrap big z-bigger">
        <div class="container">
            <div class="row">
                <div class="col-md-12 parallax-fade-top">
                    <p class="text-center">{{ $post->tech }}</p>
                    <h1 class="text-center">{{ $post->title }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img-wrap">
                    <img src="img/portfolio/project/2.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <div class="img-wrap">
                    <img src="img/portfolio/project/7.jpg" alt="">
                </div>
            </div>
            <div class="offset-md-6 col-md-6 padding-top-bottom"
                data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                <div class="project-text-wrapper">
                    <h4>Overview</h4>
                    <p>Los Caballos designed and developed the digital branding for Argentina Cine. The project included
                        the full website design, digital brand guidelines and a landing-page generator.</p>
                </div>
            </div>
            <div class="col-md-12" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                <div class="img-wrap">
                    <img src="img/portfolio/project/5.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6 mt-4" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                <div class="video-section">
                    <figure class="vimeo tipped" data-title="<em><small>play</small></em>"
                        data-tipper-options='{"direction":"top","follow":"true","margin":5}'>
                        <a href="https://player.vimeo.com/video/219627581">
                            <img src="img/portfolio/project/1.jpg" alt="image" />
                        </a>
                    </figure>
                </div>
            </div>
            <div class="col-md-6 mt-4" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                <div class="video-section">
                    <figure class="vimeo tipped" data-title="<em><small>play</small></em>"
                        data-tipper-options='{"direction":"top","follow":"true","margin":5}'>
                        <a href="https://player.vimeo.com/video/219627581">
                            <img src="img/portfolio/project/3.jpg" alt="image" />
                        </a>
                    </figure>
                </div>
            </div>
            <div class="offset-md-2 col-md-8 padding-top-bottom"
                data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                <div class="project-text-wrapper">
                    <h4>About project</h4>
                    <p>Established in 1999, Argentina Cine is among the top ten film production companies in South
                        America, now having expanded its horizons beyond Argentina, with operations in Chile and Spain,
                        as well. Known for high-quality production services, they put client needs at the top of their
                        priorities in every project that they embark on.</p>
                </div>
            </div>
            <div class="col-md-12" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
                <div class="img-wrap">
                    <img src="img/portfolio/project/6.jpg" alt="">
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <div class="project-nav-wrap">
                    <a href="project.html">
                        <div class="left-nav" data-scroll-reveal="enter left move 60px over 0.9s after 0.1s">prev<div
                                class="text-on-hover">Ceramic Wood</div>
                        </div>
                    </a>
                    <a href="project.html">
                        <div class="right-nav" data-scroll-reveal="enter right move 60px over 0.9s after 0.1s">next<div
                                class="text-on-hover">Middletown Cafe</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
