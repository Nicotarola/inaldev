<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bootstrap grid css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap-grid.css') }}">
    <!-- font awesome css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/font-awesome.min.css') }}">
    <!-- swiper css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
    <!-- itsulu css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>@yield('title')</title>
    @livewireStyles
</head>

<body>

    <!-- wrapper -->
    <div class="mil-wrapper">
       
        {{-- * contenido web o de cada seccion --}}
        
        {{-- ? TOM BAR --}}
        <div class="mil-top-position mil-fixed">
            <div class="mil-top-panel">
                <!-- mil-top-panel-transparent -->
                <div class="container">
                    <a href="{{ url('./') }}" class="mil-logo" style="width: 140px"></a>
                    <div class="mil-navigation">
                        <nav>
                            <ul>
                                <li><a href="{{ url('./') }}">Inicio</a></li>
                                {{-- <li class="mil-has-children">
                                    <a href="#.">Enterprise</a>
                                    <ul>
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="team-single.html">Team Member</a></li>
                                        <li><a href="careers.html">Careers</a></li>
                                        <li><a href="prices.html">Prices</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="event.html">Event</a></li>
                                    </ul>
                                </li>
                                <li><a href="portfolio.html">Case Studies</a></li>
                                <li class="mil-has-children">
                                    <a href="#.">Services</a>
                                    <ul>
                                        <li><a href="service-1.html">Service 1</a></li>
                                        <li><a href="service-2.html">Service 2</a></li>
                                        <li><a href="service-3.html">Service 3</a></li>
                                        <li><a href="service-4.html">Service 4</a></li>
                                    </ul>
                                </li>
                                <li class="mil-has-children">
                                    <a href="#.">Solutions</a>
                                    <ul>
                                        <li><a href="solution-1.html">Solution 1</a></li>
                                        <li><a href="solution-2.html">Solution 2</a></li>
                                        <li><a href="solution-3.html">Solution 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a></li> --}}
                                <li><a href="{{ url('./contacto') }}">Contactanos</a></li>
                                {{-- <li class="mil-has-children">
                                    <a href="#.">Other</a>
                                    <ul>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li> --}}
                            </ul>
                            <div class="mil-search-icon">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.5848 19.7029C20.3908 19.8999 20.1358 19.997 19.8808 19.997C19.6268 19.997 19.3718 19.8999 19.1778 19.7029L15.5118 16.2199C13.9778 17.2549 12.3798 17.997 9.92584 17.997C4.98484 17.997 0.964844 13.959 0.964844 8.99695C0.964844 4.34995 4.98484 0.199951 9.92584 0.199951C14.8668 0.199951 18.8858 4.34995 18.8858 8.99695C18.8858 11.118 18.1468 13.68 16.9188 14.608L20.5848 18.29C20.9738 18.681 20.9738 19.3129 20.5848 19.7029ZM9.92584 1.99695C6.82984 1.99695 2.95684 5.13695 2.95684 8.99695C2.95684 12.857 6.82984 15.998 9.92584 15.998C11.8398 15.998 13.5758 15.217 14.8368 13.957C14.8408 13.952 14.8418 13.945 14.8468 13.941C14.8518 13.936 14.8578 13.935 14.8628 13.93C16.1168 12.663 16.8948 10.92 16.8948 8.99695C16.8948 5.13695 13.7678 1.99695 9.92584 1.99695Z" />
                                </svg>
                            </div>
                        </nav>

                    </div>
                    <!-- mobile menu button -->
                    <div class="mil-menu-btn">
                        <span></span>
                    </div>
                    <!-- mobile menu button end -->
                </div>
            </div>
        </div>


        @yield("content-general")

        <!-- footer -->
        <footer class="mil-dark-bg">
            <img src="img/deco/map.png" alt="background" class="mil-footer-bg">
            <div class="container">
                <div class="mil-footer-content mil-p-120-90">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-4 mil-mb-30">

                            <img src="img/logo/logo-light.png" alt="" class="mil-logo mil-mb-30" style="width: 140px">

                            <p class="mil-light-soft mil-mb-30">

                            </p>

                            <a href="#." class="mil-app-btn mil-mb-5">
                                <i class="fab fa-google-play"></i>
                                <div class="mil-app-text">
                                    <span class="mil-accent mil-text-sm"></span>
                                    <div class="mil-h6">Google Play</div>
                                </div>
                            </a>

                            <a href="#." class="mil-app-btn">
                                <i class="fab fa-apple"></i>
                                <div class="mil-app-text">
                                    <span class="mil-accent mil-text-sm"></span>
                                    <div class="mil-h6">App Store</div>
                                </div>
                            </a>

                        </div>
                        <div class="col-xl-7 mil-mt-60-adapt">

                            <div class="row">
                                <div class="col-lg-7 mil-mb-30">

                                    <h3 class="mil-light mil-up-font mil-mb-30"> <span class="mil-accent">Nialdev</span> <br>Software</h3>
                                    <p class="mil-light-soft">Desarrollo de software<br> a Medida</p>

                                </div>
                               
                                @livewire('newslaters')

                            </div>

                        </div>
                    </div>
                </div>
                <div class="mil-divider mil-light"></div>

                <div class="mil-footer-links">
                    <ul class="mil-social mil-light">
                        <li class="mil-adapt-links"><a href="https://www.facebook.com/profile.php?id=61559262725891">Facebook</a><a href="#.">FB</a></li>
                        <li class="mil-adapt-links"><a href="https://www.instagram.com/nialdev_/">Instagram</a><a href="#.">IG</a></li>
                        {{-- <li class="mil-adapt-links"><a href="#.">LinkedIn</a><a href="#.">IN</a></li> --}}
                        {{-- <li class="mil-adapt-links"><a href="#.">Twitter</a><a href="#.">TW</a></li> --}}
                        {{-- <li class="mil-adapt-links"><a href="#.">YouTube</a><a href="#.">YT</a></li> --}}
                    </ul>
                    <ul class="mil-additional-links mil-light">
                        {{-- <li><a href="#.">Terms & Condition</a></li>
                        <li><a href="#.">Privacy Policy</a></li>
                        <li><a href="#.">Sitemap</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="mil-footer-bottom">
                <div class="container">
                    <p class="mil-text-sm mil-light">© NialDev {{ date("Y") }}.</p>
                    <p class="mil-text-sm mil-light">All Rights Reserved.</p>
                </div>
            </div>
        </footer>
        <!-- footer end -->

    </div>
    <!-- wrapper end -->

    <!-- jQuery js -->
    <script src="{{ asset('assets/js/plugins/jquery.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('assets/js/plugins/swiper.min.js') }}"></script>
    <!-- itsulu js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/forms.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireScripts
    @stack("scripts")
</body>

</html>
