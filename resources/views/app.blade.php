<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lam Vien FNB</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="{{ env('CDN_URL') }}/css/animate.css">
    <link rel="stylesheet" href="{{ env('CDN_URL') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ env('CDN_URL') }}/css/layout.css">

    @routes
    @if (isset($page) || request()->inertia())
        @vite(['resources/js/app.ts'])
        @inertiaHead
    @else
        @stack('styles')
    @endif
</head>
<!-- body -->

<body class="main-layout">

    <header>
        <!-- header inner -->
        <div class="header">
            <div class="header_white_section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header_information">
                                <ul>
                                    <li><img src="images/1.png" alt="#" /> 145.street road new York</li>
                                    <li><img src="images/2.png" alt="#" /> +71 5678954378</li>
                                    <li><img src="images/3.png" alt="#" /> Demo@hmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo"> <a href="index.html"><img rel="preload"
                                            src="{{ env('CDN_URL') }}/webps/logo.webp"
                                            alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 bar">
                        <div class="menu-area">
                            <div class="mean-bar">
                                <a href="#nav" class="meanmenu-reveal">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                                <nav class="mean-nav">
                                    <ul class="menu-area-main" style="display: none;">
                                        <li class="active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li>
                                            <a href="#about">About</a>
                                        </li>
                                        <li>
                                            <a href="#blog">Blog</a>
                                        </li>
                                        <li class="mean-last">
                                            <a href="#contact">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="#">Home</a> </li>
                                        <li> <a href="#about">About</a> </li>
                                        <li><a href="#blog">Blog</a></li>
                                        <li><a href="#contact">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @if (isset($page) || request()->inertia())
        @inertia
    @else
        @yield('content')
        @stack('scripts')
    @endif

    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <ul class="location_icon">
                            <li> <a href="#"><img loading="lazy"
                                        src="{{ env('CDN_URL') }}/webps/facebook.webp" /></a>
                            </li>
                            <li> <a href="#"><img loading="lazy"
                                        src="{{ env('CDN_URL') }}/webps/Twitter.webp" /></a>
                            </li>
                            <li> <a href="#"><img loading="lazy"
                                        src="{{ env('CDN_URL') }}/webps/linkedin.webp" /></a>
                            </li>
                            <li> <a href="#"><img loading="lazy"
                                        src="{{ env('CDN_URL') }}/webps/instagram.webp" /></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="Follow">
                            <h3>CONTACT US</h3>
                            <span>123 Second Street Fifth <br />Avenue,<br />
                                Manhattan, New York<br />
                                +987 654 3210</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="Follow">
                            <h3>ADDITIONAL LINKS</h3>
                            <ul class="link">
                                <li> <a href="#">About us</a></li>
                                <li> <a href="#">Terms and conditions</a></li>
                                <li> <a href="#"> Privacy policy</a></li>
                                <li> <a href="#">News</a></li>
                                <li> <a href="#"> Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="Follow">
                            <h3> Contact</h3>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <input class="Newsletter" placeholder="Name" type="text" />
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <input class="Newsletter" placeholder="Email" type="text" />
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" placeholder="comment" type="text">Comment</textarea>
                                </div>
                            </div>
                            <button class="Subscribe">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
