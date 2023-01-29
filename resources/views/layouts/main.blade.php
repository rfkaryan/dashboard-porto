<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs
	================================================== -->
    <meta charset="utf-8">
    <title>Rifki's Personal Portofolio | {{ $title }}</title>
    <meta name="description" content="Rifki's Personal Portofolio" />
    <meta name="author" content="rfkaryan">
    <meta name="keywords"
        content="rfkaryan, rifki's personal portofolio, rifki portofolio" />
    <meta property="og:title" content="Rifki's Personal Portofolio" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="470" />
    <meta property="og:image:height" content="246" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="Rifki's Personal Portofolio" />

    <!-- Mobile Specific Metas
	================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#212121" />
    <meta name="msapplication-navbutton-color" content="#212121" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121" />

    <!-- Web Fonts 
	================================================== -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet" />

    <!-- CSS
	================================================== -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/colors/color.css" />

    <!-- Favicons
	================================================== -->
    <link rel="icon" type="/image/png" href="/favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">


</head>

<body>

    <div class="loader">
        <div class="loader__figure"></div>
    </div>

    <div class="main">

        <!-- Nav and Logo
	================================================== -->

       @include('partials.navbar')

        <!-- Primary Page Layout
	================================================== -->

        @yield('primary-layout')

        <div class="section padding-top-big padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 footer" data-scroll-reveal="enter bottom move 50px over 0.5s after 0.2s">
                        <p>2023 © Brought to you by <a href="instagram.com/rfkaryan">Rfkaryan</a>.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="social-fixed-left">
            <a href="instagram.com/rfkaryan">instagram</a>
            <a href="linkedin.com/in/rfkaryan">linkedin</a>
            <a href="behance.net/rfkaryan">behance</a>
            <a href="github.com/rfkaryan">github</a>
        </div>

        <div class="scroll-to-top">to top</div>

    </div>

    <!-- JAVASCRIPT
    ================================================== -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/custom.js"></script>

    <!-- End Document
================================================== -->
</body>

</html>
