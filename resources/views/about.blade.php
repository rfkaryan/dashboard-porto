@extends('layouts.main')

@section('primary-layout')
    <div class="section big-65-height over-hide">
        <div class="hero-center-wrap z-bigger">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 parallax-fade-top">
                        <p>get to know me</p>	
                        <h2>Hello!<br>I'm Rifki Aria</h2>
                    </div>
                </div>	
            </div>
        </div>
    </div>
{{-- 
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="img-wrap">
                        <img src="img/studio.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="section padding-top-bottom-big">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="sec-titile">
                        <div class="subtitle">
                            about me
                        </div>	
                    </div>	
                </div>
                <div class="col-md-8 mt-5 mt-md-0">
                    <p class="lead">I'm Rifki Aria Nugraha. A twenty years old student who still hungry for new experience.</p>
                    <p>I learn Web Development since 2020 and still learning about it. I am familiar with basic HTML, CSS, JS, and some of framework of it. Apart from web development, I am also enthusiast to Data Analyst and Graphic Design, and have a little experience on it.</p>	
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-top-bottom-big background-grey">
        <div class="container-fluid mx-0" data-enllax-ratio=".15" data-enllax-type="foreground" data-enllax-direction="horizontal">
            <div class="row">
                <div class="col-md-2 mb-4 mb-md-0">
                    <div class="logo-img">
                        <img src="/img/logos/html.png" alt="">
                    </div>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <div class="logo-img">
                        <img src="/img/logos/react.png" alt="">
                    </div>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <div class="logo-img">
                        <img src="/img/logos/laravel.png" alt="">
                    </div>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <div class="logo-img">
                        <img src="/img/logos/python.png" alt="">
                    </div>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <div class="logo-img">
                        <img src="/img/logos/tailwind.png" alt="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="logo-img">
                        <img src="img/logos/datastudio.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-top-bottom-big">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="sec-titile">
                        <div class="subtitle">
                            experience
                        </div>	
                    </div>	
                </div>
                <div class="col-md-8 mt-5 mt-md-0">
                    <p class="lead">I have several experiences that make me grow.</p>	
                </div>
                <div class="offset-md-4 col-md-8 mt-5">	
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="team-mem js-tilt" data-tilt-perspective="800" data-tilt-speed="700" data-tilt-max="10">
                                <img src="/img/experience1.png" alt="">
                                <div class="team-mask"></div>
                            </div>
                            <div class="team-info">
                                <p>Yayasan Anak Bangsa Bisa & GoTo</p>
                                <h5>Data Analyst Apprenticeship</h5>
                            </div>		
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <div class="team-mem js-tilt" data-tilt-perspective="800" data-tilt-speed="700" data-tilt-max="10">
                                <img src="/img/experience2.png" alt="">
                                <div class="team-mask"></div>
                            </div>	
                            <div class="team-info">
                                <p>STIMIK Amik Bandung</p>
                                <h5>IT Support</h5>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">
                            <div class="team-mem js-tilt" data-tilt-perspective="800" data-tilt-speed="700" data-tilt-max="10">
                                <img src="/img/experience3.png" alt="">
                                <div class="team-mask"></div>
                            </div>	
                            <div class="team-info">
                                <p>Four Seasons Idn</p>
                                <h5>Graphic Designer</h5>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6 mt-4">
                            <div class="team-mem js-tilt" data-tilt-perspective="800" data-tilt-speed="700" data-tilt-max="10">
                                <img src="img/team4.jpg" alt="">
                                <div class="team-mask"></div>
                                <ul class="team-soc">
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-github"></i></a>
                                    </li>
                                </ul>
                            </div>	
                            <div class="team-info">
                                <p>support manager</p>
                                <h5>Sandra Furius</h5>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-bottom-big">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="sec-titile">
                        <div class="subtitle">
                            training & certificate
                        </div>	
                    </div>	
                </div>
                <div class="col-md-8 mt-5 mt-md-0">	
                    <div class="row">
                        <div class="col-lg-6">	
                            <div class="services background-grey js-tilt" data-tilt-perspective="800" data-tilt-speed="700" data-tilt-max="10">	
                                <img src="img/services1.svg" alt="">
                                <h6>IBM Certification</h6>
                                <p>- Enterprise Design Thinking Practitioner</p><br>
                                <p>- Python for Data Science</p><br>
                                <p>- Data Science Foundations</p><br>
                                <p>- Data Science Methodologies</p><br>
                                <p>- Data Science Tools</p><br>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0">	
                            <div class="services background-grey js-tilt" data-tilt-perspective="800" data-tilt-speed="700" data-tilt-max="10">	
                                <img src="img/services2.svg" alt="">
                                <h6>Cisco Networking Academy</h6>
                                <p>- PCAP (Programming Essentials In Python English 1021b)</p><br>
                                <p>- NDG Linux</p><br>
                                <p>- Cybersecurity Essentials</p><br>
                                <p>- Networking Essentials</p><br>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">	
                            <div class="services background-grey js-tilt" data-tilt-perspective="800" data-tilt-speed="700" data-tilt-max="10">	
                                <img src="img/services3.svg" alt="">
                                <h6>Dicoding Indonesia</h6>
                                <p>- Cloud Practitioner Essentials</p><br>
                                <p>- Architecting on AWS Cloud</p>
                                <p>- Basic Web Programming</p><br>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4">	
                            <div class="services background-grey js-tilt" data-tilt-perspective="800" data-tilt-speed="700" data-tilt-max="10">	
                                <img src="img/services4.svg" alt="">
                                <h6>Training</h6>
                                <p>- Professional Academy (PROA) - Data Visualization by Kominfo</p><br>
                                <p>- Data Analyst Career Track by DQLab</p><br>
                                <p>- Data Analyst Apprenticeship by YABB & GoTo</p><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-top-bottom-big background-grey">
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-5">
                    <div class="contact-info">
                        <h5>Let´s talk</h5>
                        <p>I always looking for new challenges and interesting patterns. Also, It'll be great to say hello.</p>
                        <a href="/contact" class="js-tilt" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>contact</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
	