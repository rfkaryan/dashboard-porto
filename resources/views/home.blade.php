@extends('layouts.main')

@section('primary-layout')
    <div class="section big-70-height over-hide">
        <div class="hero-center-wrap big z-bigger">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 parallax-fade-top">
                        <p class="text-center">welcome!</p>
                        <h1 class="text-center">i'm rifki aria<br>a web developer<br>and data enthusiast</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-bottom">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="portfolio-filter" class="portfolio-filter">
                        <ul id="filter">
                            <li><a href="#" class="current" data-filter="*" title="">all</a></li>
                            <li><a href="#" data-filter=".web" title="">Web Dev.</a></li>
                            <li><a href="#" data-filter=".data" title="">Data Visualization</a></li>
                            <li><a href="#" data-filter=".graphic" title="">Graphic Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="projects-grid">
            
            @foreach ($posts as $post)
                <a href="/posts/{{ $post->slug }}">
                    <div class="portfolio-box {{ $post->category }}">
                        <div class="parallax-elements js-tilt" data-tilt-perspective="600" data-tilt-speed="700"
                            data-tilt-max="10">
                            <img src="img/portfolio/{{ $post->image }}" alt="">
                            <div class="mask"></div>
                            <h2>{{ $post->title }}</h2>
                            <p><span>{{ $post->tech }}</span></p>
                        </div>
                    </div>
                </a>
            @endforeach

            {{-- <a href="project.html">
                <div class="portfolio-box motion">
                    <div class="parallax-elements js-tilt" data-tilt-perspective="600" data-tilt-speed="700"
                        data-tilt-max="10">
                        <img src="img/portfolio/3.jpg" alt="">
                        <div class="mask"></div>
                        <h2>Inuit</h2>
                        <p><span>direction, web design</span></p>
                    </div>
                </div>
            </a>
            <a href="project.html">
                <div class="portfolio-box branding">
                    <div class="parallax-elements js-tilt" data-tilt-perspective="600" data-tilt-speed="700"
                        data-tilt-max="10">
                        <img src="img/portfolio/10.jpg" alt="">
                        <div class="mask"></div>
                        <h2>Kolektif</h2>
                        <p><span>branding, fashion</span></p>
                    </div>
                </div>
            </a>
            <a href="project.html">
                <div class="portfolio-box photo">
                    <div class="parallax-elements js-tilt" data-tilt-perspective="600" data-tilt-speed="700"
                        data-tilt-max="10">
                        <img src="img/portfolio/5.jpg" alt="">
                        <div class="mask"></div>
                        <h2>Val Sander</h2>
                        <p><span>branding, art direction</span></p>
                    </div>
                </div>
            </a>
            <a href="project.html">
                <div class="portfolio-box motion">
                    <div class="parallax-elements js-tilt" data-tilt-perspective="600" data-tilt-speed="700"
                        data-tilt-max="10">
                        <img src="img/portfolio/11.jpg" alt="">
                        <div class="mask"></div>
                        <h2>Nike Dunes</h2>
                        <p><span>photography, retouching</span></p>
                    </div>
                </div>
            </a>
            <a href="project.html">
                <div class="portfolio-box branding">
                    <div class="parallax-elements js-tilt" data-tilt-perspective="600" data-tilt-speed="700"
                        data-tilt-max="10">
                        <img src="img/portfolio/7.jpg" alt="">
                        <div class="mask"></div>
                        <h2>Cafe</h2>
                        <p><span>art direction</span></p>
                    </div>
                </div>
            </a>
            <a href="project.html">
                <div class="portfolio-box photo">
                    <div class="parallax-elements js-tilt" data-tilt-perspective="600" data-tilt-speed="700"
                        data-tilt-max="10">
                        <img src="img/portfolio/8.jpg" alt="">
                        <div class="mask"></div>
                        <h2>Ceramic W-G</h2>
                        <p><span>industrial design</span></p>
                    </div>
                </div>
            </a>
            <a href="project.html">
                <div class="portfolio-box motion">
                    <div class="parallax-elements js-tilt" data-tilt-perspective="600" data-tilt-speed="700"
                        data-tilt-max="10">
                        <img src="img/portfolio/12.jpg" alt="">
                        <div class="mask"></div>
                        <h2>Middletown</h2>
                        <p><span>branding, graphic design</span></p>
                    </div>
                </div>
            </a>
            <a href="project.html">
                <div class="portfolio-box photo">
                    <div class="parallax-elements js-tilt" data-tilt-perspective="600" data-tilt-speed="700"
                        data-tilt-max="10">
                        <img src="img/portfolio/1.jpg" alt="">
                        <div class="mask"></div>
                        <h2>Oysho</h2>
                        <p><span>art direction</span></p>
                    </div>
                </div>
            </a> --}}
        </div>

    </div>
@endsection
