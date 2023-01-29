@extends('layouts.main')

@section('primary-layout')
    <div class="section full-height">
        <div class="velo-slides" data-velo-slider="on" data-velo-theme="light">
        
            <!-- Slide -->
            <section class="velo-slide">		   
                <!-- Slide BG -->
                <div class="velo-slide__bg">      
                    <!-- Img -->
                    <figure class="velo-slide__figure" style="background-image: url(img/1.jpg)"></figure>
                </div>
                        
                <!-- Header -->		
                <header class="velo-slide__header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="velo-slide__title"><span class="oh"><span>Nike Dunes</span></span></h3>
                                <p class="velo-slide__text"><span class="oh"><span>Photography, Retouching</span></span></p>
                                <span class="velo-slide__btn"><a class="btn-draw" href="project.html"><span class="btn-draw__text"><span>View Work</span></span></a></span>
                            </div>
                        </div>	
                    </div>
                </header>
            </section>

            <!-- Slide -->
            <section class="velo-slide">
                <!-- Slide BG -->
                <div class="velo-slide__bg">
                    <!-- Img -->
                    <figure class="velo-slide__figure" style="background-image: url(img/2.jpg)"></figure>
                </div>
        
                <!-- Header -->
                <header class="velo-slide__header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="velo-slide__title"><span class="oh"><span>Kolektif</span></span></h3>
                                <p class="velo-slide__text"><span class="oh"><span>Branding, Fashion</span></span></p>
                                <span class="velo-slide__btn"><a class="btn-draw" href="project.html"><span class="btn-draw__text"><span>View Project</span></span></a></span>
                            </div>
                        </div>	
                    </div>
                </header>
            </section>
        
            <!-- Slide - with Video -->
            <section class="velo-slide">
                <!-- Slide BG -->
                <div class="velo-slide__bg">
                    <!-- Img -->
                    <figure class="velo-slide__figure" style="background-image: url(img/3.jpg)"></figure>
                </div>
                
                <!-- Header -->
                <header class="velo-slide__header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="velo-slide__title"><span class="oh"><span>Ceramic Wood</span></span></h3>
                                <p class="velo-slide__text"><span class="oh"><span>Crafts, Industrial Design</span></span></p>
                                <span class="velo-slide__btn"><a class="btn-draw" href="project.html"><span class="btn-draw__text"><span>View Project</span></span></a></span>
                            </div>
                        </div>	
                    </div>
                </header>
            </section>
        
            <!-- Slides Nav -->
            <nav class="velo-slides-nav">
                <ul class="velo-slides-nav__list">
                    <li>
                        <a class="js-velo-slides-prev velo-slides-nav__prev inactive" href="#0"><i class="icon-up-arrow"></i></a>
                    </li>
                    <li>
                        <a class="js-velo-slides-next velo-slides-nav__next" href="#"><i class="icon-down-arrow"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection