<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Corporación Xpande</title>
	<link rel="icon" type="image/png" href="{{ asset('assets/xpande/images/favicon.png') }}">
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/bootstrap/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/animate/animate.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/animate/custom-animate.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/fontawesome/css/all.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/jarallax/jarallax.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/nouislider/nouislider.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/nouislider/nouislider.pips.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/odometer/odometer.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/swiper/swiper.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/jetly-icons/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/tiny-slider/tiny-slider.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/reey-font/stylesheet.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/owl-carousel/owl.carousel.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/owl-carousel/owl.theme.default.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/bxslider/jquery.bxslider.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/vegas/vegas.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/jquery-ui/jquery-ui.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/timepicker/timePicker.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/vendors/nice-select/nice-select.css') }}" />

	<!-- template styles -->
	<link rel="stylesheet" href="{{ asset('assets/xpande/css/jetly.css?v=1') }}" />
	<link rel="stylesheet" href="{{ asset('assets/xpande/css/jetly-responsive.css') }}" />

	<style>

		@import url('https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap');

		:root {
			--blue: #0a3e69;
			--cyan: #33a1d9;
		}

		body {
			font-family: 'Prompt', sans-serif;
			color: var(--blue);
		}

		h2 {
			font-size: 50px;
			line-height: 50px;
			margin-bottom: 60px;
		}

		.text-cyan {
			color: var(--cyan);
		}

		.stricky-header.main-menu {
			background: var(--blue);
		}


		.main-slider__title {
			font-size: 50px;
			line-height: 50px;
			text-transform: none;
			font-weight: 500;
			letter-spacing: normal;
		}

		.main-slider .swiper-slide {
			background: var(--blue);
		}

		.thm-btn {
			background: var(--cyan) ;
			font-size: 18px;
			font-weight: 500;
			padding: 5px 20px;
			border-radius: 10px;
		}

		.thm-btn::before {
			content: none;
		}

		.main-menu .main-menu__list>li>a, .stricky-header .main-menu__list>li>a {
			font-weight: 500;
		}

		.main-menu .main-menu__list>li.current>a, .main-menu .main-menu__list>li:hover>a, .stricky-header .main-menu__list>li.current>a, .stricky-header .main-menu__list>li:hover>a {
			color: var(--cyan);
		}

		.feature-one {
			background: var(--blue);
			padding: 200px 0;
		}

		.feature-one__shape-1 {
			top: -130px;
		}

		.feature-one__shadow {
			background: var(--blue);
		}

    	.section-title__tagline {
    		color: var(--cyan);
    	}

    	.section-title__title {
    		color: var(--blue);
    	}

    	.about-one {
    		padding: 120px 0;
    	}

    	.about-one__satisfied {
    		background: var(--blue);
    		padding: 10px;
    		border-radius: 10px 10px 0 10px;
    	}

    	.about-one__satisfied:before {
    		border-left: 40px solid var(--blue);
    	}

    	.about-one__satisfied-content {
    		display: flex;
    		align-items: center;
    		gap: 10px;
    		margin-left: 10px;
    	}

    	.about-one__satisfied-content h3 {
    		font-size: 60px;
    	}

    	.about-one__satisfied-content p {
    		text-transform: none;
    		color: #fff;
    		font-size: 16px;
    		font-weight: 500;
    	}

    	.feature-two {
    		background: var(--blue);
    		padding: 120px 0;
    	}

    	.feature-two__overlay {
    		position: absolute;
    		top: 100%;
    		left: 0;
    		width: 100%;
    		height: 100%;
    		z-index: 99;
    		display: flex;
    		flex-flow: column;
    		gap: 10px;
    		justify-content: center;
    		align-items: center;
    		transition-delay: .1s;
    		transition-timing-function: ease-in-out;
    		transition-duration: .5s;
    		transition-property: all;
    		color: #fff;
    		background: rgba(0,0,0,0.5);
    		text-align: center;
    		font-size: 14px;
    		line-height: 16px;
    		padding: 20px;
    	}

    	.feature-two__overlay img {
    		width: 192px;
    	}

    	.feature-two__overlay.xpande {
    		border: 4px solid #041e71;
			background: rgba(4, 30, 113, 0.9);
    	}

    	.feature-two__overlay.chango {
    		border: 4px solid #5313a7;
			background: rgba(83, 19, 167, 0.9);
    	}

    	.feature-two__overlay.xinergia {
    		border: 4px solid #3375fa;
			background: rgba(51, 117, 250, 0.9);
    	}

    	.feature-two__img:after {
    		content: none;
    	}

    	.feature-two__img-box {
    		overflow: hidden;
    	}

    	.feature-two__img-box:hover .feature-two__overlay{
    		top: 0;
    	}

    	.feature-two__img:before{
    		content: none;
    	}

    	.counter-one {
    		margin: 60px 0;
    	}

    	.counter-one__box {
    		border-radius: 20px;
    		background: var(--blue);
    	}

    	.counter-one__single {
    		flex: 0 0 33.3%;
    		max-width: 33.3%;
    		display: flex;
    		justify-content: center;
    		align-items: center;
    		gap: 10px;
    	}

    	.counter-one__icon {
    		margin: 0;
    	}

    	.get-flight {
    		background: var(--cyan);
    	}

    	.get-flight__form-input-box input[type="text"] {
    		background: #fff;
    		color: var(--blue);
    	}

    	.contact {
    		padding: 60px 0;
    		background: var(--cyan);
    	}

    	.contact h3 {
    		color: #fff;
    		text-align: center;
    		margin-bottom: 40px;
    	}

    	.contact__input {
    		display: block;
    		width: 100%;
    		color: #fff;
    		background: rgba(255, 255, 255, 0.5);
    		border: none;
    		outline: none;
    		padding: 10px 20px;
    		border-radius: 20px;
    	}

    	.contact .thm-btn {
    		display: block;
    		width: 100%;
    		border: none;
    		background: var(--blue);
    	}

    	.contact form {
    		width: 75%;
    		margin: 0 auto;
    		margin-bottom: 40px;
    	}

    	.contact img {
    		border-radius: 20px;
    		max-width: 100%;
    	}

    	.site-footer {
    		background: #070a37;
    	}

    	.footer-widget__title {
    		font-weight: 500;
    	}

    	.footer-widget__Contact-list li .icon span {
    		font-size: 32px;
    		color: #eee;
    	}

    	.footer-widget__Contact-list li .text p {
    		color: #eee;
    		line-height: 20px;
    	}

    	.footer-widget__Contact-list li .text p a {
    		color: #eee;
    	}

    	.footer-widget__Contact-list li .text {
    		margin-left: 10px;
    	}

    	.site-footer p {
    		color: #eee;
    	}

    	.site-footer__social a {
    		background: var(--blue);
    		font-size: 18px;
    	}

    	.site-footer__social a:hover {
    		color: var(--blue);
    	}

    	.footer-widget__Contact-list li .text p a:hover {
    		color: var(--cyan);
    	}

    	.scroll-to-top {
    		background: var(--blue);
    	}

    	.scroll-to-top:hover {
    		background: var(--cyan);
    	}

    	.feature-one__shape-1>img {
    		max-width: 1100px;
    		width: 100%;
    		height: auto;
    	}

    	.feature-one__shadow>img {
    		max-width: 1100px;
    		width: 100%;
    		height: auto;
    	}

    	.main-menu__logo img {
    		width: 48px;
    	}

    	.footer-widget__logo img {
    		max-width: 150px;
			width: 100%;
    	}

    	.brand-one .swiper-slide img {
    		opacity: 0.5;
    		filter: grayscale();
    	}

    	.brand-one .swiper-slide img:hover {
    		opacity: 1;
    		filter: none;
    	}

		@media only screen and (max-width: 767px) {
    		.main-slider__title {
    			font-size: 35px;
    			line-height: 35px;
    		}

    		.counter-one__single {
		        flex: 0 0 100%;
		        max-width: 100%;
		    }

		    .about-one__right {
		    	width: 90%;
		    }

		    .contact form {
	    		width: 100%;
    		}

    		.feature-one {
    			padding: 200px 0 60px;
    		}

    		.feature-one__shape-1 {
    			top: -200px;
    			left: -30%;
    			width: 160%;
    			transform: none !important;
    			display: block;
    			text-align: center;
    		}

			.site-footer p, .site-footer a, .footer-widget__Contact-list li .text p {
				font-size: 14px;
				line-height: 20px;
			}

			.footer-widget__logo img {
				max-width: 150px;
				width: 100%;
				height: auto;
			}

			.site-footer__social a {
				font-size: 20px;
				margin-right: 15px;
			}
    	}

		@media only screen and (max-width: 600px) {
    		.feature-one__shape-1 > img {
    			width: 100% !important;
    			max-width: none !important;
    		}
    	}

    	@media only screen and (min-width: 768px) and (max-width: 1199px) {
    		.feature-one {
    			padding: 200px 0 60px;
    		}

    		.feature-one__shape-1 {
    			top: -210px;
    			left: -10%;
    			width: 120%;
    			transform: none !important;
    			display: block;
    			text-align: center;
    		}

    		.feature-one__shape-1 > img {
    			width: 100% !important;
    			max-width: none !important;
    		}
    	}

		/* Mobile Nav Enhancements */
		.mobile-nav__wrapper {
			transition: transform 0.4s cubic-bezier(0.645, 0.045, 0.355, 1) !important;
		}
		
		.mobile-nav__container li {
			border-bottom: 1px solid rgba(255, 255, 255, 0.1);
		}

		.mobile-nav__container li:last-child {
			border-bottom: none;
		}

		.mobile-nav__container li a {
			padding: 15px 0 !important;
			font-size: 16px !important;
			text-transform: uppercase;
			letter-spacing: 1px;
			transition: all 0.3s ease;
			display: block;
		}

		.mobile-nav__container li a:hover {
			color: var(--cyan) !important;
			padding-left: 10px !important;
		}

	</style>

</head>
<body>

	<div class="preloader">
	    <div class="preloader__image"></div>
	</div>
	<!-- /.preloader -->


	<div class="page-wrapper">
	    <header class="main-header">
	        <nav class="main-menu">
	            <div class="main-menu__wrapper">
	                <div class="main-menu__wrapper-inner">
	                    <div class="main-menu__left">
	                        <div class="main-menu__logo">
	                            <a href="{{ route('xinergia.index') }}"><img src="{{ asset('assets/xpande/images/logo.png') }}" alt=""></a>
	                        </div>
	                    </div>
	                    <div class="main-menu__main-menu-box">
	                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
	                        <ul class="main-menu__list one-page-scroll-menu">
	                        	<li class="scrollToLink">
	                                <a href="#inicio">Inicio</a>
	                            </li>
	                            <li class="scrollToLink">
	                                <a href="#nosotros">Nosotros</a>
	                            </li>
	                            <li class="scrollToLink">
	                                <a href="#empresas">Empresas</a>
	                            </li>
	                            <li class="scrollToLink">
	                                <a href="#contacto">Contacto</a>
	                            </li>
	                        </ul>
	                    </div>
	                    <div class="main-menu__right">
	                        <div class="main-menu__search-cart-call-box">
								<a href="{{ asset('assets/consultoria/pdf/BROCHURE 2024.pdf') }}" class="thm-btn" target="_blank">Brochure</a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </nav>
	    </header>

	    <div class="stricky-header stricked-menu main-menu">
	        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
	    </div><!-- /.stricky-header -->

	    <!--Main Slider Start-->
	    <section class="main-slider clearfix" id="inicio">
	        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
	            "effect": "fade",
	            "pagination": {
	            "el": "#main-slider-pagination",
	            "type": "bullets",
	            "clickable": true
	            },
	            "navigation": {
	            "nextEl": "#main-slider__swiper-button-next",
	            "prevEl": "#main-slider__swiper-button-prev"
	            },
	            "autoplay": {
	            "delay": 5000
	            }}'>
	            <div class="swiper-wrapper">

	                <div class="swiper-slide">
	                    <div class="image-layer"
	                        style="background-image: url('{{ asset('assets/xpande/images/slider1.webp') }}');"></div>
	                    <!-- /.image-layer -->
	                    <div class="container">
	                        <div class="row">
	                            <div class="col-xl-12">
	                                <div class="main-slider__content">
	                                    <h2 class="main-slider__title">Implementamos cambios <br> que generan valor</h2>
	                                    <div class="main-slider__btn-box">
	                                        <a href="#nosotros" class="thm-btn">Leer más</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>

	                <div class="swiper-slide">
	                    <div class="image-layer"
	                        style="background-image: url('{{ asset('assets/xpande/images/slider2.webp') }}');"></div>
	                    <!-- /.image-layer -->
	                    <div class="container">
	                        <div class="row">
	                            <div class="col-xl-12">
	                                <div class="main-slider__content">
	                                    <h2 class="main-slider__title">Implementamos cambios <br> que generan valor</h2>
	                                    <div class="main-slider__btn-box">
	                                        <a href="#nosotros" class="thm-btn">Leer más</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>


	            </div>

	            <!-- If we need navigation buttons -->


	        </div>
	    </section>
	    <!--Main Slider End-->

	    <!--Feature One Start-->
	    <section class="feature-one">
	        <div class="feature-one__shape-1 float-bob-y-2">
	            <img src="{{ asset('assets/xpande/images/team.webp') }}" class="d-none d-lg-block">
	            <img src="{{ asset('assets/xpande/images/team-mobile.webp') }}" class="d-lg-none">
	            <div class="feature-one__shadow">
	                <img src="{{ asset('assets/xpande/images/shadow.png') }}" alt="">
	            </div>
	        </div>
	    </section>
	    <!--Feature One End-->

	    <!--About One Start-->
	    <section class="about-one" id="nosotros">
	        <div class="container">
	            <div class="row">
	                <div class="col-xl-6">
	                    <div class="about-one__left">
	                        <div class="section-title text-left">
	                            <span class="section-title__tagline">EMPRESA PERUANA</span>
	                            <h2 class="section-title__title">Implementamos cambios que generan valor</h2>
	                        </div>
	                        <p class="mb-4">
	                        	Somos un holding corporativo especializado en desarrollo empresarial, marketing y sistemas web de gestión empresarial.
	                        </p>
	                        <p>
	                        	El principal compromiso con nuestros clientes es optimizar su desempeño mediante un enfoque aplicado a la ingeniería de procesos. 
	                        </p>
	                    </div>
	                </div>
	                <div class="col-xl-6">
	                    <div class="about-one__right">
	                        <div class="about-one__img-box" data-wow-delay="100ms"
	                            data-wow-duration="2500ms">
	                            <div class="about-one__img">
	                                <img src="{{ asset('assets/xpande/images/aniversario.webp') }}" alt="">
	                            </div>
	                            <div class="about-one__satisfied">
	                                <div class="about-one__satisfied-icon">
	                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="64"  height="64"  viewBox="0 0 24 24"  fill="none"  stroke="#33a1d9"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-medal"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 4v3m-4 -3v6m8 -6v6" /><path d="M12 18.5l-3 1.5l.5 -3.5l-2 -2l3 -.5l1.5 -3l1.5 3l3 .5l-2 2l.5 3.5z" /></svg>
	                                </div>
	                                <div class="about-one__satisfied-content count-box">
	                                    <h3>+<span class="count-text" data-stop="3" data-speed="500">0</span></h3>
	                                    <p>años en<br>el mercado</p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!--About One End-->

	    <!--Feature Two Start-->
	    <section class="feature-two" id="empresas">
	        <div class="container">
	        	<h2 class="title text-center text-white">Nuestras <span class="text-cyan">Empresas</span></h2>
	            <div class="row">
	                <!--Feature Two Start-->
	                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
	                    <a href="{{ route('consultoria.index') }}">
	                        <div class="feature-two__single">
    	                        <div class="feature-two__img-box">
    	                        	<div class="feature-two__overlay xpande">
    	                        		<img src="{{ asset('assets/xpande/images/logo-consultoria.png') }}" alt="">
    	                        		Consultora de negocios especializada en desarrollo empresarial y sistemas integrados de gestión.
    	                        	</div>
    	                            <div class="feature-two__img">
    	                                <img src="{{ asset('assets/xpande/images/consultoria.jpg') }}">
    	                            </div>
    	                        </div>
	                        </div>
	                    </a>
	                </div>
	                <!--Feature Two Start-->
	                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
	                    <a href="https://www.changomaker.com/">
    	                    <div class="feature-two__single">
    	                        <div class="feature-two__img-box">
    	                        	<div class="feature-two__overlay chango">
    	                        		<img src="{{ asset('assets/xpande/images/logo-chango.png') }}" alt="">
    	                        		Agencia de Marketing que transforma ideas en estrategias creativas impulsadas por un propósito.
    	                        	</div>
    	                            <div class="feature-two__img">
    	                                <img src="{{ asset('assets/xpande/images/chango.jpg') }}">
    	                            </div>
    	                        </div>
    	                    </div>
    	               </a>
	                </div>
	                <!--Feature Two Start-->
	                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
	                    <a href="{{ route('xinergia.index') }}">
    	                    <div class="feature-two__single">
    	                        <div class="feature-two__img-box">
    	                        	<div class="feature-two__overlay xinergia">
    	                        		<img src="{{ asset('assets/xpande/images/logo-xinergia.png') }}" alt="">
    	                        		Sistema Web de Gestión empresarial que permite tener el control de tu negocio en tiempo real.
    	                        	</div>
    	                            <div class="feature-two__img">
    	                                <img src="{{ asset('assets/xpande/images/xinergia.jpg') }}">
    	                            </div>
    	                        </div>
    	                    </div>
	                    </a>
	                </div>
	                <!--Feature Two Start-->
	            </div>
	        </div>
	    </section>
	    <!--Feature Two End-->

	    <section class="counter-one">
	        <div class="container">
				<div class="section-title text-center wow fadeInUp" data-wow-delay="100ms">
					<h2 class="section-title__title">Nuestro <span class="text-cyan">Respaldo</span></h2>
				</div>
	            <ul class="counter-one__box list-unstyled">
	                <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
	                    <div class="counter-one__icon">
	                        <svg  xmlns="http://www.w3.org/2000/svg"  width="64"  height="64"  viewBox="0 0 24 24"  fill="none"  stroke="#fff"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
	                    </div>
	                    <div class="counter-one__content count-box">
	                        <h3>+<span class="count-text" data-stop="30" data-speed="1000">00</span></h3>
	                        <p class="counter-one__text">Clientes</p>
	                    </div>
	                </li>
	                <li class="counter-one__single wow fadeInUp" data-wow-delay="200ms">
	                    <div class="counter-one__icon">
	                        <svg  xmlns="http://www.w3.org/2000/svg"  width="64"  height="64"  viewBox="0 0 24 24"  fill="none"  stroke="#fff"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-briefcase"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /><path d="M12 12v.01" /><path d="M3 13a20 20 0 0 0 18 0" /></svg>
	                    </div>
	                    <div class="counter-one__content count-box">
	                        <h3>+<span class="count-text" data-stop="60" data-speed="1000">00</span></h3>
	                        <p class="counter-one__text">Proyectos</p>
	                    </div>
	                </li>
	                <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
	                    <div class="counter-one__icon">
	                        <svg  xmlns="http://www.w3.org/2000/svg"  width="64"  height="64"  viewBox="0 0 24 24"  fill="none"  stroke="#fff"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-building-skyscraper"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l18 0" /><path d="M5 21v-14l8 -4v18" /><path d="M19 21v-10l-6 -4" /><path d="M9 9l1 0" /><path d="M9 12l1 0" /><path d="M9 15l1 0" /><path d="M9 18l1 0" /></svg>
	                    </div>
	                    <div class="counter-one__content count-box">
	                        <h3>+<span class="count-text" data-stop="90" data-speed="1000">00</span></h3>
	                        <p class="counter-one__text">Empresas</p>
	                    </div>
	                </li>
	            </ul>
	        </div>
	    </section>
	    <!--Counter One End-->

	    <!--Brand One Start-->
	    <section class="brand-one">
	        <div class="container">
	            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100,
	            "slidesPerView": 5,
	            "loop": true,
	            "navigation": {
	                "nextEl": "#brand-one__swiper-button-next",
	                "prevEl": "#brand-one__swiper-button-prev"
	            },
	            "autoplay": { "delay": 0 },
	            "speed": 5000,
	            "freeMode": true,
	            "breakpoints": {
	                "0": {
	                    "spaceBetween": 30,
	                    "slidesPerView": 2
	                },
	                "375": {
	                    "spaceBetween": 30,
	                    "slidesPerView": 2
	                },
	                "575": {
	                    "spaceBetween": 30,
	                    "slidesPerView": 3
	                },
	                "767": {
	                    "spaceBetween": 50,
	                    "slidesPerView": 4
	                },
	                "991": {
	                    "spaceBetween": 50,
	                    "slidesPerView": 5
	                },
	                "1199": {
	                    "spaceBetween": 50,
	                    "slidesPerView": 5
	                }
	            }}'>
	                <div class="swiper-wrapper">
	                    <div class="swiper-slide">
	                        <img src="{{ asset('assets/xpande/images/clientes/cliente1.webp') }}" alt="">
	                    </div><!-- /.swiper-slide -->
	                    <div class="swiper-slide">
	                        <img src="{{ asset('assets/xpande/images/clientes/cliente2.webp') }}" alt="">
	                    </div><!-- /.swiper-slide -->
	                    <div class="swiper-slide">
	                        <img src="{{ asset('assets/xpande/images/clientes/cliente3.webp') }}" alt="">
	                    </div><!-- /.swiper-slide -->
	                    <div class="swiper-slide">
	                        <img src="{{ asset('assets/xpande/images/clientes/cliente4.webp') }}" alt="">
	                    </div><!-- /.swiper-slide -->
	                    <div class="swiper-slide">
	                        <img src="{{ asset('assets/xpande/images/clientes/cliente5.webp') }}" alt="">
	                    </div><!-- /.swiper-slide -->
	                    <div class="swiper-slide">
	                        <img src="{{ asset('assets/xpande/images/clientes/cliente6.webp') }}" alt="">
	                    </div><!-- /.swiper-slide -->
	                    <div class="swiper-slide">
	                        <img src="{{ asset('assets/xpande/images/clientes/cliente7.webp') }}" alt="">
	                    </div><!-- /.swiper-slide -->
	                    <div class="swiper-slide">
	                        <img src="{{ asset('assets/xpande/images/clientes/cliente8.webp') }}" alt="">
	                    </div><!-- /.swiper-slide -->
	                    <div class="swiper-slide">
	                        <img src="{{ asset('assets/xpande/images/clientes/cliente9.webp') }}" alt="">
	                    </div><!-- /.swiper-slide -->
	                    <div class="swiper-slide">
	                        <img src="{{ asset('assets/xpande/images/clientes/cliente10.webp') }}" alt="">
	                    </div><!-- /.swiper-slide -->
	                </div>
	            </div>
	        </div>
	    </section>
	    <!--Brand One End-->

	    <section class="contact" id="contacto">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-lg-6">
	    				<h3 class="contact__title">Te acompañamos en un proceso de transformación</h3>
	    				<form action="">
	    					<div class="mb-4">
	    						<input type="text" class="contact__input" placeholder="Nombres y apellidos">
	    					</div>
	    					<div class="mb-4">
	    						<input type="text" class="contact__input" placeholder="Correo electrónico">
	    					</div>
	    					<div class="mb-4">
	    						<input type="text" class="contact__input" placeholder="Celular">
	    					</div>
	    					<div class="mb-4">
	    						<input type="text" class="contact__input" placeholder="Empresa">
	    					</div>
	    					<div class="mb-4">
	    						<input type="text" class="contact__input" placeholder="Ciudad">
	    					</div>
	    					<div class="mb-4">
	    						<textarea type="text" class="contact__input" placeholder="Mensaje"></textarea>
	    					</div>
	    					<button type="submit" class="thm-btn">Enviar</button>
	    				</form>
	    			</div>
	    			<div class="col-lg-6">
	    				<img src="{{ asset('assets/xpande/images/formulario.jpg') }}">
	    			</div>
	    		</div>
	    	</div>
	    </section>

	    <!--Site Footer Start-->
	    <footer class="site-footer">
	        <div class="container">
	            <div class="site-footer__inner">
	                <div class="site-footer__shape-1 zoom-fade-3">
	                    <img src="{{ asset('assets/xpande/images/footer.png') }}" alt="">
	                </div>
	                <div class="site-footer__top">
	                    <div class="row">
	                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
								<!-- Mobile Layout: Icons and Logo side-by-side -->
								<div class="d-flex justify-content-between align-items-center mb-4 d-md-none">
									<div class="site-footer__social mb-0">
										<a href="https://www.facebook.com/xpandecorpperu" target="_blank"><i class="fab fa-facebook-f"></i></a>
										<a href="https://www.instagram.com/xpandecorp/" target="_blank"><i class="fab fa-instagram"></i></a>
										<a href="https://api.whatsapp.com/send?phone=51944031514" target="_blank"><i class="fab fa-whatsapp"></i></a>
										<a href="https://www.linkedin.com/company/xpandecorpperu" target="_blank"><i class="fab fa-linkedin"></i></a>
									</div>
									<div class="footer-widget__logo">
										<a href="#"><img src="{{ asset('assets/xpande/images/logo.png') }}" alt="" style="max-width: 130px;"></a>
									</div>
								</div>
								<!-- Desktop Layout: Icons and Logo stacked -->
								<div class="d-none d-md-block">
									<div class="site-footer__social mb-4">
										<a href="https://www.facebook.com/xpandecorpperu" target="_blank"><i class="fab fa-facebook-f"></i></a>
										<a href="https://www.instagram.com/xpandecorp/" target="_blank"><i class="fab fa-instagram"></i></a>
										<a href="https://api.whatsapp.com/send?phone=51944031514" target="_blank"><i class="fab fa-whatsapp"></i></a>
										<a href="https://www.linkedin.com/company/xpandecorpperu" target="_blank"><i class="fab fa-linkedin"></i></a>
									</div>
									<div class="footer-widget__logo mb-4">
										<a href="#"><img src="{{ asset('assets/xpande/images/logo.png') }}" alt="" style="max-width: 120px;"></a>
									</div>
								</div>
	                        </div>
	                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
	                            <div class="footer-widget__column footer-widget__Contact">
	                                <div class="footer-widget__title-box">
	                                    <h3 class="footer-widget__title">Contáctanos</h3>
	                                </div>
	                                <ul class="footer-widget__Contact-list list-unstyled">
	                                    <li>
	                                        <div class="icon">
	                                            <span class="fab fa-whatsapp"></span>
	                                        </div>
	                                        <div class="text">
	                                            <p>Escríbenos al WhatsApp<br>994 195 832 - 944 031 514</p>
	                                        </div>
	                                    </li>
	                                    <li>
	                                        <div class="icon">
	                                            <span class="fas fa-envelope"></span>
	                                        </div>
	                                        <div class="text">
	                                            <p>O al correo<br><a href="mailto:contacto@xpandecorp.com">contacto@xpandecorp.com</a></p>
	                                        </div>
	                                    </li>
	                                </ul>
	                            </div>
	                        </div>
	                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
	                            <div class="footer-widget__column footer-widget__Explore">
									<div class="footer-widget__title-box d-none d-md-block">
	                                    <h3 class="footer-widget__title">Contáctanos</h3>
	                                </div>
									<div class="mt-4 d-md-none"></div>
	                                <p>CORPORACIÓN XPANDE</p>
	                                <p>RUC N° 20610079688</p>
	                                <p>Dirección: Av. Garcilazo de la Vega #323 - Chiclayo</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </footer>
	    <!--Site Footer End-->

	</div>
	
	<div class="mobile-nav__wrapper">
	    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
	    <!-- /.mobile-nav__overlay -->
	    <div class="mobile-nav__content">
	        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

	        <div class="logo-box">
	            <a href="#inicio" aria-label="logo image"><img src="{{ asset('assets/xpande/images/logo.png') }}" width="48"/></a>
	        </div>
	        <!-- /.logo-box -->
	        <div class="mobile-nav__container"></div>
	        <!-- /.mobile-nav__container -->
	    </div>
	    <!-- /.mobile-nav__content -->
	</div>

	<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>

	<script src="{{ asset('assets/xpande/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/jarallax/jarallax.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/nouislider/nouislider.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/odometer/odometer.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/swiper/swiper.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/wnumb/wNumb.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/wow/wow.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/isotope/isotope.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/countdown/countdown.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/vegas/vegas.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/jquery-ui/jquery-ui.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/timepicker/timePicker.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/circleType/jquery.circleType.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/circleType/jquery.lettering.min.js') }}"></script>
	<script src="{{ asset('assets/xpande/vendors/nice-select/jquery.nice-select.min.js') }}"></script>




	<!-- template js -->
	<script src="{{ asset('assets/xpande/js/jetly.js') }}"></script>

	<script>
		// Ensure clicking menu items closes the menu
		$(document).on('click', '.mobile-nav__container a, .logo-box a', function() {
			$('body').removeClass('mobile-menu-visible');
			$('.mobile-nav__wrapper').removeClass('expanded');
		});

		// Fix for mobile menu jump-to-top when clicking toggler
		$(document).on('click', '.mobile-nav__toggler', function(e) {
			var href = $(this).attr('href');
			if (href === '#' || !href) {
				e.preventDefault();
			}
		});
	</script>
	
</body>
</html>