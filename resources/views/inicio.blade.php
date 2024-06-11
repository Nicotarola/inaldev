@extends("layouts.template")

@section("title", "NIALDEV - Inicio")


@section('content-general')


{{-- ? BANNER --}}
<div class="mil-banner mil-fixed">
    <div class="swiper-container mil-banner-slideshow">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('assets/img/photo/1.jpg') }}" class="mil-background-image" style="object-position: center" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1" alt="image">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/img/photo/2.jpg') }}" class="mil-background-image" style="object-position: center" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1" alt="image">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/img/photo/3.jpg') }}" class="mil-background-image" style="object-position: center" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1" alt="image">
            </div>
        </div>
    </div>
    <div class="mil-overlay"></div>

    <div class="mil-banner-content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8">
                    <span class="mil-suptitle mil-mb-60"><span class="mil-light">NialDEV</span> <span class="mil-accent">Desarrollo de Software</span></span>
                    <h1 class="mil-mb-60"><span class="mil-uppercase mil-light">Cotiza con nosotros <br>Tu proyecto</span> <span class="mil-font-3 mil-accent"></span></h1>
                    <div class="mil-flex-hori-center">
                        <div>
                            <a href="{{ url('./contacto') }}" class="mil-button mil-border mil-light"><span>Contactanos</span></a>
                        </div>
                        <p class="mil-button-descr mil-light-soft">Contacto con nosotros y cuantos sobre tu proyecto</p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="mil-illustration-1">
                        <div class="mil-item mil-item-1">
                            <div class="mil-plus">
                                <div class="mil-hover-window">
                                    <div class="mil-window-content">
                                        <h5 class="mil-dark mil-mb-15">Web</h5>
                                        <div class="mil-divider mil-divider-left mil-mb-15"></div>
                                        <p class="mil-text-sm">Necesitas una aplicacion web?</p>
                                    </div>
                                </div>
                                <div class="mil-item-hover">
                                    <div class="mil-plus-icon">+</div>
                                    <h6 class="mil-light">Aplicaciones WEB</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mil-item mil-item-2">
                            <div class="mil-plus">
                                <div class="mil-hover-window">
                                    <div class="mil-window-content">
                                        <h5 class="mil-dark mil-mb-15">Desarrollo Mobile</h5>
                                        <div class="mil-divider mil-divider-left mil-mb-15"></div>
                                        <p class="mil-text-sm">Potencia tus ventas con aplicaciones móviles personalizadas y de alto rendimiento.</p>
                                    </div>
                                </div>
                                <div class="mil-item-hover">
                                    <div class="mil-plus-icon">+</div>
                                    <h6 class="mil-light">Aplicaciones Mobile</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mil-item mil-item-3">
                            <div class="mil-plus">
                                <div class="mil-hover-window">
                                    <div class="mil-window-content">
                                        <h5 class="mil-dark mil-mb-15">Expertos</h5>
                                        <div class="mil-divider mil-divider-left mil-mb-15"></div>
                                        <p class="mil-text-sm">Expertos desarrolladores que dominan las últimas tecnologías para crear soluciones móviles innovadoras y de alta calidad.</p>
                                    </div>
                                </div>
                                <div class="mil-item-hover">
                                    <div class="mil-plus-icon">+</div>
                                    <h6 class="mil-light">Desarrolladores Expertos</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- partners -->
{{-- <div class="mil-partners mil-p-90-60">
    <div class="container">
        <div class="mil-partners-frame">
            <a href="#."><img src="{{ asset('assets/img/partners/1.png') }}" alt="partner"></a>
            <a href="#."><img src="{{ asset('assets/img/partners/2.png') }}" alt="partner"></a>
            <a href="#."><img src="{{ asset('assets/img/partners/3.png') }}" alt="partner"></a>
            <a href="#."><img src="{{ asset('assets/img/partners/4.png') }}" alt="partner"></a>
            <a href="#."><img src="{{ asset('assets/img/partners/5.png') }}" alt="partner"></a>
            <a href="#."><img src="{{ asset('assets/img/partners/6.png') }}" alt="partner"></a>
        </div>
    </div>
</div> --}}
<!-- partners end -->

<div class="container">
    <div class="mil-divider"></div>
</div>

<!-- services -->
<section class="mil-services mil-p-120-90">
    <div class="mil-deco" style="top: 0; right: 20%;"></div>
    <div class="container">
        <h2 class="mil-mb-30">Te podemos<span class="mil-accent">Ayudar</span></h2>
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <h4 class="mil-mb-60 mil-mt-30">Soluciones</h4>
                <div class="mil-divider mil-divider-left"></div>
                <div class="mil-service-item">
                    <div class="mil-service-icon">
                        <div class="mil-icon-frame mil-icon-frame-md">
                            <img src="{{ asset('assets/img/icons/md/1.svg') }}" alt="icon">
                        </div>
                    </div>
                    <div class="mil-service-text">
                        <h5 class="mil-mb-30"><span class="mil-accent">01</span> Aplicaciones WEB</h5>
                        <p>
                            Desarrollamos aplicaciones web dinámicas y personalizadas que ofrecen una experiencia fluida e interactiva para tus usuarios, potenciando tu presencia en línea y optimizando tus operaciones comerciales.    
                        </p>
                    </div>
                </div>
                <div class="mil-divider mil-divider-left"></div>
                <div class="mil-service-item">
                    <div class="mil-service-icon">
                        <div class="mil-icon-frame mil-icon-frame-md">
                            <img src="{{ asset('assets/img/icons/md/2.svg') }}" alt="icon">
                        </div>
                    </div>
                    <div class="mil-service-text">
                        <h5 class="mil-mb-30"><span class="mil-accent">02</span> Aplicaciones Mobile</h5>
                        <p>
                            Desarrollamos aplicaciones móviles intuitivas y personalizadas que potencian la experiencia del usuario y aumentan las ventas.
                        </p>
                    </div>
                </div>
                <div class="mil-divider mil-divider-left"></div>
                <div class="mil-service-item">
                    <div class="mil-service-icon">
                        <div class="mil-icon-frame mil-icon-frame-md">
                            <img src="{{ asset('assets/img/icons/md/3.svg') }}" alt="icon">
                        </div>
                    </div>
                    <div class="mil-service-text">
                        <h5 class="mil-mb-30"><span class="mil-accent">03</span> Gestión de Proyectos TI</h5>
                        <p>
                            La Gestión de Proyectos TI coordina eficientemente recursos y actividades para garantizar la entrega exitosa de soluciones tecnológicas, cumpliendo con objetivos, plazos y presupuestos
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <h4 class="mil-mb-60 mil-mt-30">IT Solutions</h4>
                <div class="mil-divider mil-divider-left"></div>
                <div class="mil-service-item">
                    <div class="mil-service-icon">
                        <div class="mil-icon-frame mil-icon-frame-md">
                            <img src="{{ asset('assets/img/icons/md/4.svg') }}" alt="icon">
                        </div>
                    </div>
                    <div class="mil-service-text">
                        <h5 class="mil-mb-30"><span class="mil-accent">01</span> Desarrollado a la medida</h5>
                        <p>
                            El desarrollo a medida implica crear soluciones tecnológicas personalizadas, garantizando que cada detalle del producto, desde el diseño hasta la implementación.
                        </p>
                    </div>
                </div>
                <div class="mil-divider mil-divider-left"></div>
                <div class="mil-service-item">
                    <div class="mil-service-icon">
                        <div class="mil-icon-frame mil-icon-frame-md">
                            <img src="{{ asset('assets/img/icons/md/5.svg') }}" alt="icon">
                        </div>
                    </div>
                    <div class="mil-service-text">
                        <h5 class="mil-mb-30"><span class="mil-accent">02</span> Integración de sistemas</h5>
                        <p>Este proceso garantiza una colaboración fluida entre sistemas dispares, optimizando la productividad y simplificando las operaciones empresariales.</p>
                    </div>
                </div>
                <div class="mil-divider mil-divider-left"></div>
                <div class="mil-service-item">
                    <div class="mil-service-icon">
                        <div class="mil-icon-frame mil-icon-frame-md">
                            <img src="{{ asset('assets/img/icons/md/6.svg') }}" alt="icon">
                        </div>
                    </div>
                    <div class="mil-service-text">
                        <h5 class="mil-mb-30"><span class="mil-accent">03</span> UX / UI</h5>
                        <p>
                            UX/UI: Diseño centrado en el usuario para crear experiencias digitales intuitivas y atractivas, que fusionan la funcionalidad con la estética para maximizar la satisfacción del usuario y el rendimiento del producto
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services end -->

<div class="container">
    <div class="mil-divider"></div>
</div>

<!-- portfolio -->
<section class="mil-works mil-p-120-90">
    <div class="mil-deco" style="top: 0; right: 40%;"></div>
    <div class="container">
        <div class="row align-items-center mil-mb-60-adapt">
            <div class="col-md-6 col-xl-6">

                <h2 class="mil-mb-30">Últimos Proyectos</h2>

            </div>
            <div class="col-md-6 col-xl-6">

                <div class="mil-adaptive-right">
                    <div class="mil-slider-nav mil-mb-30">
                        <div class="mil-slider-btn-prev mil-works-prev"><i class="fas fa-arrow-left"></i><span class="mil-h6">  </span></div>
                        <div class="mil-slider-btn-next mil-works-next"><span class="mil-h6">  </span><i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="swiper-container mil-works-slider mil-mb-90">
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <a href="project.html" class="mil-card">
                        <div class="mil-cover-frame">
                            <img src="{{ asset('assets/img/projects/1.jpg') }}" alt="project">
                        </div>
                        <div class="mil-description">
                            <div class="mil-card-title">
                                <h4 class="mil-mb-20">Software para controlar tus activos de flota.</h4>
                                <h6> <span class="mil-accent">ControllFlota</span></h6>
                            </div>
                            <div class="mil-card-text">
                                <p>
                                    es una aplicación móvil diseñada específicamente para gestionar eficientemente los neumáticos de una flota de vehículos, ya sea de transporte de carga, transporte público o flotas corporativas. Esta herramienta integral ayuda a maximizar la vida útil de los neumáticos, optimizar el consumo de combustible y mejorar la seguridad en la carretera.
                                </p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="swiper-slide">

                    <a href="project.html" class="mil-card">
                        <div class="mil-cover-frame">
                            <img src="{{ asset('assets/img/projects/2.jpg') }}" alt="project">
                        </div>
                        <div class="mil-description">
                            <div class="mil-card-title">
                                <h4 class="mil-mb-20">Requerimiento de Notas</h4>
                                <h6> <span class="mil-accent">Geo Clientes</span></h6>
                            </div>
                            <div class="mil-card-text">
                                <p>es una aplicación diseñada para simplificar el proceso de recopilación y gestión de los requerimientos de los clientes. Dirigida a empresas de diversos sectores, desde desarrollo de software hasta servicios de consultoría, ClienteReqs ofrece una plataforma intuitiva y eficiente para registrar, organizar y dar seguimiento a las necesidades y solicitudes de los clientes. </p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="swiper-slide">

                    <a href="project.html" class="mil-card">
                        <div class="mil-cover-frame">
                            <img src="{{ asset('assets/img/projects/3.jpg') }}" alt="project">
                        </div>
                        <div class="mil-description">
                            <div class="mil-card-title">
                                <h4 class="mil-mb-20">E-commerce</h4>
                                <h6> <span class="mil-accent">neumatruck.cl</span></h6>
                            </div>
                            <div class="mil-card-text">
                                <p>
                                    Aplicación web para venta de neumáticos para camión, líder en ventas en ese rubro.
                                </p>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="swiper-slide">

                    <a href="project.html" class="mil-card">
                        <div class="mil-cover-frame">
                            <img src="{{ asset('assets/img/projects/4.jpg') }}" alt="project">
                        </div>
                        <div class="mil-description">
                            <div class="mil-card-title">
                                <h4 class="mil-mb-20">E-commerce.</h4>
                                <h6> <span class="mil-accent">premium.neumachile.cl</span></h6>
                            </div>
                            <div class="mil-card-text">
                                <p>
                                    Aplicación web para venta de productos automotrices, empresa líder en el rubro.
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 col-xl-6">

                <a href="portfolio.html" class="mil-link mil-mb-30"><span>Mirar todos nuestros Proyectos</span><i class="fas fa-arrow-right"></i></a>

            </div>
            <div class="col-md-6 col-xl-6">

                <div class="mil-adaptive-right">
                    <a href="contact.html" class="mil-button mil-border mil-mb-30"><span>Contactanos</span></a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- portfolio end -->

<!-- how it works -->
<section class="mil-how-it-works mil-deep-bg mil-p-120-90">
    <div class="mil-deco" style="top: 0; right: 20%;"></div>
    <div class="mil-deco" style="bottom: 0; left: 30%; transform: rotate(180deg)"></div>
    <div class="container">
        <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Discover Our Company</span>
        <h2 class="mil-mb-90">Cómo <span class="mil-accent">Colaboraremos</span> contigo</h2>
        <div class="row">
            <div class="col-md-6 col-xl-3">

                <div class="mil-mb-60">
                    <div class="mil-icon-box-head mil-mb-30">
                        <div class="mil-icon-frame mil-icon-frame-sm">
                            <img src="{{ asset('assets/img/icons/sm/1.svg') }}" alt="icon">
                        </div>
                        <h5>Reunión inicial</h5>
                    </div>
                    <p>
                        Comienza con una reunión detallada con el cliente para comprender completamente sus necesidades y expectativas. Discute los objetivos del proyecto, los requisitos de funcionalidad, el público objetivo y cualquier requisito específico que el cliente tenga en mente.
                    </p>
                </div>

            </div>
            <div class="col-md-6 col-xl-3">

                <div class="mil-mb-60">
                    <div class="mil-icon-box-head mil-mb-30">
                        <div class="mil-icon-frame mil-icon-frame-sm">
                            <img src="{{ asset('assets/img/icons/sm/2.svg') }}" alt="icon">
                        </div>
                        <h5>Planificación y diseño</h5>
                    </div>
                    <p>
                        Basándote en la información recopilada en la reunión inicial, comienza a planificar el desarrollo de la aplicación. Esto incluye la creación de diagramas de flujo, la definición de características principales y la elaboración de prototipos. El diseño de la interfaz de usuario también es crucial en esta etapa para garantizar una experiencia de usuario óptima.
                    </p>
                </div>

            </div>
            <div class="col-md-6 col-xl-3">

                <div class="mil-mb-60">
                    <div class="mil-icon-box-head mil-mb-30">
                        <div class="mil-icon-frame mil-icon-frame-sm">
                            <img src="{{ asset('assets/img/icons/sm/3.svg') }}" alt="icon">
                        </div>
                        <h5>Desarrollo de la aplicación</h5>
                    </div>
                    <p>
                        Una vez que tengas un plan claro, comienza el proceso de desarrollo de la aplicación. Esto implica escribir código, integrar funcionalidades, probar y depurar la aplicación. Es importante mantener una comunicación abierta con el cliente durante este proceso para asegurarte de que el desarrollo esté alineado con sus expectativas.
                    </p>
                </div>

            </div>
            <div class="col-md-6 col-xl-3">

                <div class="mil-mb-60">
                    <div class="mil-icon-box-head mil-mb-30">
                        <div class="mil-icon-frame mil-icon-frame-sm">
                            <img src="{{ asset('assets/img/icons/sm/4.svg') }}" alt="icon">
                        </div>
                        <h5>Entrega y soporte post-implementación</h5>
                    </div>
                    <p>
                        Una vez que la aplicación esté completa y aprobada por el cliente, entrégala según lo acordado. Proporciona cualquier documentación necesaria y ofrece soporte post-implementación para ayudar al cliente con cualquier problema técnico que pueda surgir y para realizar actualizaciones según sea necesario. Además, asegúrate de que el cliente esté satisfecho con el producto final y solicita retroalimentación para futuras mejoras.
                    </p>
                </div>

            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 col-xl-6">

                <a href="#." class="mil-link mil-mb-30"><span>Learn More</span><i class="fas fa-arrow-right"></i></a>

            </div>
            <div class="col-md-6 col-xl-6">

                <div class="mil-adaptive-right">
                    <a href="#." class="mil-button mil-border mil-mb-30"><span>How We Work</span></a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- how it works end -->

<!-- skills -->
{{-- <section class="mil-skills mil-p-120-90">
    <div class="container">
        <div class="row align-items-end mil-mb-90">
            <div class="col-xl-6">

                <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Our Skill</span>
                <h2>Business <span class="mil-accent">Success</span> With <br>Technology</h2>

            </div>
            <div class="col-xl-6">

                <p class="mil-mt-60-adapt">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using content here.</p>

            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6 col-xl-3">

                <h6 class="mil-mb-30">Software Development</h6>

                <div class="mil-skill-frame mil-mb-60">
                    <div class="mil-skill-track">
                        <div class="mil-skill-prog" style="width: 65%"></div>
                    </div>
                    <div class="mil-text-sm">65%</div>
                </div>

            </div>
            <div class="col-md-6 col-xl-3">

                <h6 class="mil-mb-30">Web Development</h6>

                <div class="mil-skill-frame mil-mb-60">
                    <div class="mil-skill-track">
                        <div class="mil-skill-prog" style="width: 90%"></div>
                    </div>
                    <div class="mil-text-sm">90%</div>
                </div>

            </div>
            <div class="col-md-6 col-xl-3">

                <h6 class="mil-mb-30">UX / UI Design</h6>

                <div class="mil-skill-frame mil-mb-60">
                    <div class="mil-skill-track">
                        <div class="mil-skill-prog" style="width: 50%"></div>
                    </div>
                    <div class="mil-text-sm">50%</div>
                </div>

            </div>
            <div class="col-md-6 col-xl-3">

                <h6 class="mil-mb-30">App Development</h6>

                <div class="mil-skill-frame mil-mb-60">
                    <div class="mil-skill-track">
                        <div class="mil-skill-prog" style="width: 95%"></div>
                    </div>
                    <div class="mil-text-sm">95%</div>
                </div>

            </div>
            <div class="col-md-6 col-xl-3">

                <h6 class="mil-mb-30">Internet of Things</h6>

                <div class="mil-skill-frame mil-mb-60">
                    <div class="mil-skill-track">
                        <div class="mil-skill-prog" style="width: 60%"></div>
                    </div>
                    <div class="mil-text-sm">60%</div>
                </div>

            </div>
            <div class="col-md-6 col-xl-3">

                <h6 class="mil-mb-30">Artificial Intelligence</h6>

                <div class="mil-skill-frame mil-mb-60">
                    <div class="mil-skill-track">
                        <div class="mil-skill-prog" style="width: 90%"></div>
                    </div>
                    <div class="mil-text-sm">90%</div>
                </div>

            </div>
            <div class="col-md-6 col-xl-3">

                <h6 class="mil-mb-30">Blockchain</h6>

                <div class="mil-skill-frame mil-mb-60">
                    <div class="mil-skill-track">
                        <div class="mil-skill-prog" style="width: 80%"></div>
                    </div>
                    <div class="mil-text-sm">80%</div>
                </div>

            </div>
            <div class="col-md-6 col-xl-3 mil-text-center">

                <a href="#." class="mil-link mil-mb-30"><span>More</span><i class="fas fa-arrow-right"></i></a>

            </div>
        </div>
    </div>
</section> --}}
<!-- skills end -->

<div class="container">
    <div class="mil-divider"></div>
</div>

<!-- blog -->
{{-- <section class="mil-blog mil-p-120-120">
    <div class="mil-deco" style="top: 0; right: 30%;"></div>
    <div class="container">
        <div class="row align-items-center mil-mb-90">
            <div class="col-md-6 col-xl-6">


                <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Our Latest News</span>
                <h2>Latest Thinking</h2>

            </div>
            <div class="col-md-6 col-xl-6">

                <div class="mil-adaptive-right mil-mt-60-adapt">
                    <div class="mil-slider-nav">
                        <div class="mil-slider-btn-prev mil-blog-prev"><i class="fas fa-arrow-left"></i><span class="mil-h6">Prev</span></div>
                        <div class="mil-slider-btn-next mil-blog-next"><span class="mil-h6">Next</span><i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="swiper-container mil-blog-slider mil-mb-90">
            <div class="swiper-wrapper">
                <div class="swiper-slide mil-slide-50">

                    <a href="publication.html" class="mil-card">
                        <div class="mil-cover-frame">
                            <img src="{{ asset('assets/img/blog/1.jpg') }}" alt="project">
                        </div>
                        <div class="mil-description">
                            <div class="mil-card-title">
                                <h4 class="mil-mb-20">Easy & Most Powerful Server Platform.</h4>
                                <h6>by: <span class="mil-accent">Jane Meldrum</span></h6>
                            </div>
                            <div class="mil-card-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="swiper-slide mil-slide-25">

                    <a href="publication.html" class="mil-card mil-card-sm mil-reverse-sm">
                        <div class="mil-description">
                            <div class="mil-card-title">
                                <h4 class="mil-mb-20">Easy & Most Powerful Server Platform.</h4>
                                <h6>by: <span class="mil-accent">Jane Meldrum</span></h6>
                            </div>
                            <div class="mil-card-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="mil-cover-frame">
                            <img src="{{ asset('assets/img/blog/2.jpg') }}" alt="project">
                        </div>
                    </a>

                </div>
                <div class="swiper-slide mil-slide-25">

                    <a href="publication.html" class="mil-card mil-card-sm">
                        <div class="mil-cover-frame">
                            <img src="{{ asset('assets/img/blog/3.jpg') }}" alt="project">
                        </div>
                        <div class="mil-description">
                            <div class="mil-card-title">
                                <h4 class="mil-mb-20">Easy & Most Powerful Server Platform.</h4>
                                <h6>by: <span class="mil-accent">Jane Meldrum</span></h6>
                            </div>
                            <div class="mil-card-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="swiper-slide mil-slide-50">

                    <a href="publication.html" class="mil-card">
                        <div class="mil-cover-frame">
                            <img src="{{ asset('assets/img/blog/4.jpg') }}" alt="project">
                        </div>
                        <div class="mil-description">
                            <div class="mil-card-title">
                                <h4 class="mil-mb-20">Easy & Most Powerful Server Platform.</h4>
                                <h6>by: <span class="mil-accent">Jane Meldrum</span></h6>
                            </div>
                            <div class="mil-card-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="swiper-slide mil-slide-25">

                    <a href="publication.html" class="mil-card mil-card-sm mil-reverse-sm">
                        <div class="mil-description">
                            <div class="mil-card-title">
                                <h4 class="mil-mb-20">Easy & Most Powerful Server Platform.</h4>
                                <h6>by: <span class="mil-accent">Jane Meldrum</span></h6>
                            </div>
                            <div class="mil-card-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="mil-cover-frame">
                            <img src="{{ asset('assets/img/blog/5.jpg') }}" alt="project">
                        </div>

                    </a>

                </div>
                <div class="swiper-slide mil-slide-25">

                    <a href="publication.html" class="mil-card mil-card-sm">
                        <div class="mil-cover-frame">
                            <img src="{{ asset('assets/img/blog/6.jpg') }}" alt="project">
                        </div>
                        <div class="mil-description">
                            <div class="mil-card-title">
                                <h4 class="mil-mb-20">Easy & Most Powerful Server Platform.</h4>
                                <h6>by: <span class="mil-accent">Jane Meldrum</span></h6>
                            </div>
                            <div class="mil-card-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12">

                <a href="blog.html" class="mil-link"><span>View More Insights</span><i class="fas fa-arrow-right"></i></a>

            </div>
        </div>
    </div>
</section> --}}
<!-- blog end -->

<!-- reviews -->
{{-- <section class="mil-reviews mil-deep-bg mil-p-120-120">
    <div class="mil-deco" style="top: 0; right: 30%;"></div>
    <div class="container">
        <div class="row align-items-center mil-mb-90">
            <div class="col-md-6 col-xl-6">

                <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Testimonial</span>
                <h2>What Our <span class="mil-accent">Clients</span> Say</h2>

            </div>
            <div class="col-md-6 col-xl-6">

                <div class="mil-adaptive-right mil-mt-60-adapt">
                    <div class="mil-slider-nav">
                        <div class="mil-slider-btn-prev mil-revi-prev"><i class="fas fa-arrow-left"></i><span class="mil-h6">Prev</span></div>
                        <div class="mil-slider-btn-next mil-revi-next"><span class="mil-h6">Next</span><i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="swiper-container mil-revi-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <div class="mil-review">
                        <div class="mil-stars mil-mb-30">
                            <img src="{{ asset('assets/img/icons/sm/11.svg') }}" alt="quote">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <p class="mil-mb-30">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="mil-author">
                            <img src="img/faces/1.jpg" alt="Customer">
                            <div class="mil-name">
                                <h6 class="mil-mb-5">Tamzyn French</h6>
                                <span class="mil-text-sm">Agency Design</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">

                    <div class="mil-review">
                        <div class="mil-stars mil-mb-30">
                            <img src="{{ asset('assets/img/icons/sm/11.svg') }}" alt="quote">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <p class="mil-mb-30">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="mil-author">
                            <img src="img/faces/2.jpg" alt="Customer">
                            <div class="mil-name">
                                <h6 class="mil-mb-5">Margaret Williams</h6>
                                <span class="mil-text-sm">Agency Design</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">

                    <div class="mil-review">
                        <div class="mil-stars mil-mb-30">
                            <img src="{{ asset('assets/img/icons/sm/11.svg') }}" alt="quote">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <p class="mil-mb-30">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="mil-author">
                            <img src="img/faces/3.jpg" alt="Customer">
                            <div class="mil-name">
                                <h6 class="mil-mb-5">Tarryn Gillies</h6>
                                <span class="mil-text-sm">Agency Design</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">

                    <div class="mil-review">
                        <div class="mil-stars mil-mb-30">
                            <img src="{{ asset('assets/img/icons/sm/11.svg') }}" alt="quote">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <p class="mil-mb-30">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="mil-author">
                            <img src="img/faces/4.jpg" alt="Customer">
                            <div class="mil-name">
                                <h6 class="mil-mb-5">Tamzyn French</h6>
                                <span class="mil-text-sm">Agency Design</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">

                    <div class="mil-review">
                        <div class="mil-stars mil-mb-30">
                            <img src="{{ asset('assets/img/icons/sm/11.svg') }}" alt="quote">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <p class="mil-mb-30">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="mil-author">
                            <img src="img/faces/2.jpg" alt="Customer">
                            <div class="mil-name">
                                <h6 class="mil-mb-5">Margaret Williams</h6>
                                <span class="mil-text-sm">Agency Design</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- reviews end -->

<!-- contact -->
@livewire("contactanos.footer")
<!-- contact end -->

@endsection