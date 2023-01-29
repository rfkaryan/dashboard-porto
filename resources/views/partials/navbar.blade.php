<header class="cd-header">

    <div class="container">
        <div class="row">
            <div class="col-md-12 ml-3 mr-md-3">
                <div class="logo-wrap">
                    <a href="/"><img src="/img/inilogo.png" alt=""></a>
                </div>
                <div class="nav-but-wrap">
                    <div class="menu-icon">
                        <span class="menu-icon__line menu-icon__line-left"></span>
                        <span class="menu-icon__line"></span>
                        <span class="menu-icon__line menu-icon__line-right"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

<div class="nav">
    <div class="nav__content">
        <ul class="nav__list">
            {{-- <li class="nav__list-item active-nav"><a data-toggle="collapse" href="#collapseSub" role="button"
                    aria-expanded="false" aria-controls="collapseSub">Project</a>
                <ul class="sub-links collapse" id="collapseSub">
                    <li><a href="/">slice revealer</a></li>
                    <li><a href="index-1.html">scrolling letters</a></li>
                    <li><a href="index-2.html">slider hero</a></li>
                    <li><a href="index-3.html">video showcase</a></li>
                    <li class="active-nav"><a href="index-4.html">masonry portfolio</a></li>
                    <li><a href="index-5.html">title follow mouse</a></li>
                    <li><a href="index-6.html">parallax portfolio</a></li>
                </ul>
            </li> --}}
            <li class="nav__list-item {{  ($title == "Home") ? 'active-nav' : '' }}"><a href="/">Home</a></li>
            {{-- <li class="nav__list-item {{  ($title == "Projects") ? 'active-nav' : '' }}"><a href="/projects">My Projects</a></li> --}}
            <li class="nav__list-item {{  ($title == "About") ? 'active-nav' : '' }}"><a href="/about">About Me</a></li>
            <li class="nav__list-item {{  ($title == "Contact") ? 'active-nav' : '' }}"><a href="/contact">Contact</a></li>
        </ul>
    </div>
</div>