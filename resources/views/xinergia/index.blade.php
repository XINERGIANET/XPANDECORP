<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xinergia</title>
	<link rel="stylesheet" href="{{ asset('assets/xinergia/css/style.css') }}">
	<link rel="icon" type="image/png" href="{{ asset('assets/xinergia/images/favicon.png') }}">
	<style>
		.header-home6,
		.banner-6,
		.sticky-bar.stick {
			background: rgb(80, 193, 243);
			background: linear-gradient(90deg, rgba(80, 193, 243, 1) 0%, rgba(35, 75, 187, 1) 100%);
		}

		.sticky-bar.stick {
			border-bottom: none;
		}

		.header .main-menu li a {
			color: #fff;
			font-size: 20px;
			font-weight: 500;
		}

		.header .main-menu li a:hover {
			color: #b8eeff;
		}



		.btn.btn-brand-1 {
			color: #234bbb;
			background: #b8eeff;
		}

		.btn.btn-brand-1:hover {
			color: #b8eeff;
			background: #234bbb;
		}

		.text-blue-dark {
			color: #01035f;
		}

		.text-blue {
			color: #234bbb;
		}

		.text-cyan {
			color: #b8eeff;
		}

		.box-create-account {
			background: #b8eeff;
		}

		.cardNumber .card-head {
			color: #234bbb;
		}

		.cardNumber .card-description {
			color: #234bbb;
		}

		.card-offer-2 {
			background: #b8eeff;
		}

		.card-offer-2:hover {
			background: #b8eeff;
		}

		.bg-plan {
			background: rgb(80, 193, 243);
			background: linear-gradient(90deg, rgba(80, 193, 243, 1) 0%, rgba(35, 75, 187, 1) 100%);
		}

		.btn.btn-brand-1-full {
			background: rgb(80, 193, 243);
			background: linear-gradient(90deg, rgba(80, 193, 243, 1) 0%, rgba(35, 75, 187, 1) 100%);
			border: none;
			font-size: 24px;
			color: #fff;
		}

		.list-ticks li {
			color: #01035f;
			font-size: 24px;
		}

		.item-number .num-ele {
			background: rgb(80, 193, 243);
			background: linear-gradient(90deg, rgba(80, 193, 243, 1) 0%, rgba(35, 75, 187, 1) 100%);
			color: #fff;
		}

		.w-3\/4 {
			width: 75%;
		}

		.form-control:focus {
			border-color: #b8eeff;
		}

		.box-form-contact {
			border: 1px solid #b8eeff;
			padding: 20px;
			background: #fff;
		}

		.footer-1 {
			background: #234bbb;
			color: #fff;
			padding: 50px 0;
		}

		.lists-logo img {
			filter: grayscale();
			opacity: 0.5;
		}

		.lists-logo img:hover {
			filter: none;
			opacity: 1;
		}

		@media (max-width: 1199.98px) {

			.header .main-header .header-left .header-logo a img {
				height: 40px;
			}

			.w-3\/4 {
				width: 100%;
			}

			@media (max-width: 991px) {
				.box-video-business {
					display: block;
					text-align: center;
				}

				.item-video img,
				.box-image-right img {
					margin: 0 auto;
				}

				.box-image-right {
					display: block !important;
					margin-top: 20px;
				}

				.box-image-right div {
					text-align: center;
				}
			}

			@media (max-width: 767px) {
				.footer-1 {
					padding: 30px 0;
				}

				.footer-1 .font-md,
				.footer-1 span {
					font-size: 14px !important;
					line-height: 1.5;
				}

				.footer-1 img {
					max-width: 180px;
					height: auto;
				}

				.footer-1 .mb-4 {
					margin-bottom: 1rem !important;
				}

				/* New styles */
				.font-xl {
					font-size: 30px !important;
					line-height: 1.2 !important;
				}
			}
		.item-video img {
			border: 5px solid #b8eeff;
			border-radius: 12px;
			box-shadow: 0 10px 40px rgba(35, 75, 187, 0.2);
		}

		/* Mobile Menu Enhancements */
		.mobile-header-active {
			transition: transform 0.4s cubic-bezier(0.645, 0.045, 0.355, 1) !important;
			box-shadow: -10px 0 30px rgba(0,0,0,0.1);
		}

		.mobile-menu li {
			border-bottom: 1px solid rgba(0, 0, 0, 0.08);
		}

		.mobile-menu li:last-child {
			border-bottom: none;
		}

		.mobile-menu li a {
			padding: 18px 0 !important;
			font-size: 16px !important;
			text-transform: uppercase;
			letter-spacing: 1px;
			transition: all 0.3s ease;
			display: block;
		}

		.mobile-menu li a:hover, .mobile-menu li a.active {
			color: #234bbb !important;
			padding-left: 10px !important;
		}

	</style>
</head>

<body>
	<div id="preloader-active">
		<div class="preloader d-flex align-items-center justify-content-center">
			<div class="preloader-inner position-relative">
				<div class="page-loading">
					<div class="page-loading-inner">
						<div></div>
						<div></div>
						<div></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header class="header sticky-bar header-home6">
		<div class="container">
			<div class="main-header">
				<div class="header-left">
					<div class="header-logo"><a class="d-flex" href="{{ route('xinergia.index') }}"><img
								src="{{ asset('assets/xinergia/images/logo.png') }}"></a></div>
					<div class="header-nav">
						<nav class="nav-main-menu d-none d-xl-block">
							<ul class="main-menu">
								<li><a href="#inicio">INICIO</a></li>
								<li><a href="#nosotros">NOSOTROS</a></li>
								<li><a href="#soluciones">SOLUCIONES</a></li>
								<li><a href="#contacto">CONTACTO</a></li>
							</ul>
						</nav>
						<div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
								class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
					</div>
					<div class="header-right">
						<div class="d-none d-sm-inline-block"><a class="btn btn-brand-1 hover-up" href="#">Solicita una
								demo</a></div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
		<div class="mobile-header-wrapper-inner">
			<div class="mobile-header-content-area">
				<div class="mobile-logo"><a class="d-flex" href="#inicio"><img alt="IORI"
							src="{{ asset('assets/xinergia/images/logo2.png') }}"></a></div>
				<div class="burger-icon"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span
						class="burger-icon-bottom"></span></div>
				<div class="perfect-scroll">
					<div class="mobile-menu-wrap mobile-header-border w-100">
						<nav class="mt-15">
							<ul class="mobile-menu font-heading">
								<li><a href="#inicio">INICIO</a></li>
								<li><a href="#nosotros">NOSOTROS</a></li>
								<li><a href="#soluciones">SOLUCIONES</a></li>
								<li><a href="#contacto">CONTACTO</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<main class="main">
		<!-- Banner -->
		<section id="inicio" class="section banner-6">
			<!-- Slider main container -->
			<div class="swiper">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->
					<div class="swiper-slide">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-xl-6 d-none d-xl-block">
									<div class="box-banner-6">
										<img class="img-main"
											src="{{ asset('assets/xinergia/images/cellphone.webp') }}">
									</div>
								</div>
								<div class="col-xl-6">
									<div class="box-banner-right-home6">
										<h1 class="text-white mb-20 mt-5 wow animate__animated animate__fadeIn"
											data-wow-delay=".1s"><span class="text-cyan">Versatilidad</span> empresarial
										</h1>
										<div class="row">
											<div class="col-lg-10">
												<p class="font-lg fw-semibold text-white mb-30 wow animate__animated animate__fadeIn"
													data-wow-delay=".2s">Gestiona todos los <span
														class="text-cyan">procesos</span> de tu empresa en cualquier
													lugar.</p>
											</div>
										</div>
										<div class="box-button mt-20 wow animate__animated animate__fadeIn"
											data-wow-delay=".4s">
											<a class="btn btn-brand-1 hover-up"
												href="https://api.whatsapp.com/send?phone=51940174022&text=Hola%2C%20solicito%20una%20demo%20de%20su%20sistema."
												target="_blank">Comienza ahora</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-xl-6 d-none d-xl-block">
									<div class="box-banner-6">
										<img class="img-main" src="{{ asset('assets/xinergia/images/romi.webp') }}">
									</div>
								</div>
								<div class="col-xl-6">
									<div class="box-banner-right-home6">
										<h1 class="text-white mb-20 mt-5 wow animate__animated animate__fadeIn"
											data-wow-delay=".1s"><span class="text-cyan">Súmate</span> a la
											Transformación Digital</h1>
										<div class="row">
											<div class="col-lg-10">
												<p class="font-lg fw-semibold text-white mb-30 wow animate__animated animate__fadeIn"
													data-wow-delay=".2s">Gestiona todos los <span
														class="text-cyan">procesos</span> de tu empresa en cualquier
													lugar.</p>
											</div>
										</div>
										<div class="box-button mt-20 wow animate__animated animate__fadeIn"
											data-wow-delay=".4s">
											<a class="btn btn-brand-1 hover-up"
												href="https://api.whatsapp.com/send?phone=51940174022&text=Hola%2C%20solicito%20una%20demo%20de%20su%20sistema."
												target="_blank">Comienza ahora</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</section>

		<!-- Sec 1 -->

		<section class="section mt-50" id="nosotros">
			<div class="container w-3/4 mx-auto">
				<div class="box-create-account">
					<div class="row align-items-center">
						<div class="col-lg-6 position-relative mb-30">
							<div class="box-image-account"><img class="d-block"
									src="{{ asset('assets/xinergia/images/dashboard.png') }}"></div>
							<div class="cardNumber bg-2">
								<div class="card-head">+<span class="count">30</span></div>
								<div class="card-description">proyectos</div>
							</div>
						</div>
						<div class="col-lg-6">
							<h3 class="font-lg text-blue-dark mb-20 mt-10 wow animate__animated animate__fadeIn fw-normal"
								data-wow-delay=".1s"><span class="fw-bold">Xinergia</span> te permite tener el <span
									class="fw-bold">control absoluto</span> de los procesos de tu negocio.</h3>
							<ul class="font-md text-blue-dark mb-50 wow animate__animated animate__fadeIn"
								data-wow-delay=".2s">
								<li>➜ Registro de ventas</li>
								<li>➜ Emisión de facturas electrónicas</li>
								<li>➜ Control de inventarios y producción</li>
								<li>➜ Finanzas</li>
								<li>➜ Recursos humanos</li>
								<li>➜ Y mucho más!</li>
								</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Sec 2 -->

		<section class="section mt-50">
			<div class="container w-3/4 mx-auto">
				<div class="row mt-50">
					<div class="col-xl-5 col-lg-12 mb-40">
						<h2 class="font-xl text-blue mt-10 mb-15 wow animate__animated animate__fadeIn"
							data-wow-delay=".0s">¿Por qué Xinergia?</h2>
						<p class="font-md text-blue-dark wow animate__animated animate__fadeIn" data-wow-delay=".1s">
							Impulsamos empresas con sistemas inteligentes que integran tecnología y procesos en un solo
							lugar. Los diseñamos a tu medida para que optimices recursos, tomes el control total y hagas
							crecer tu negocio desde el primer día.</p>
					</div>
					<div class="col-xl-7 col-lg-12">
						<div class="box-video-business">
							<div class="item-video wow animate__animated animate__fadeIn" data-wow-delay=".0s"><a
									class="btn btn-play-center popup-youtube"
									href="https://www.youtube.com/watch?v=sVPYIRF9RCQ"></a><img class="bd-rd4"
									src="{{ asset('assets/xinergia/images/dashboard.png') }}"></div>
							<div class="box-image-right">
								<div class="wow animate__animated animate__zoomIn" data-wow-delay=".0s"><img
										class="bd-rd4 mb-20" src="{{ asset('assets/xinergia/images/why1.jpg') }}"></div>
								<div class="wow animate__animated animate__zoomIn" data-wow-delay=".2s"><img
										class="bd-rd4" src="{{ asset('assets/xinergia/images/why2.jpg') }}"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Sec 3 -->

		<section class="section mt-50" id="soluciones">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="font-xl text-blue mb-20 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
							Soluciones <span class="text-blue-dark">Empresariales</span></h2>
					</div>
				</div>
				<div class="mt-50">
					<div class="row">
						<div class="col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
							<div class="card-offer card-offer-2 hover-up">
								<div class="card-image"><img src="{{ asset('assets/xinergia/images/icon1.svg') }}"
										alt="iori"></div>
								<div class="card-info">
									<h4 class="text-blue mb-15 font-lg">Sitios Web Optimizados</h4>
									<p class="font-md text-blue-dark mb-15">En un mundo digital competitivo, contar con
										un sitio web optimizado es esencial. Nuestros servicios garantizan que tu página
										no solo se vea impresionante, sino que también funcione a la perfección.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
							<div class="card-offer card-offer-2 hover-up">
								<div class="card-info">
									<h4 class="text-blue mb-15 font-lg">Software de Gestión Empresarial</h4>
									<p class="font-md text-blue-dark mb-15">Transforma la manera en que operas con
										nuestro software de gestión empresarial. Diseñado para mejorar la eficiencia y
										la productividad, nuestras soluciones integradas te permiten supervisar cada
										aspecto de tu negocio en tiempo real..</p>
								</div>
								<div class="card-image mb-0 text-end"><img
										src="{{ asset('assets/xinergia/images/icon2.svg') }}" alt="iori"></div>
							</div>
						</div>
						<div class="col-lg-4 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
							<div class="card-offer card-offer-2 hover-up">
								<div class="card-image"><img src="{{ asset('assets/xinergia/images/icon3.svg') }}"
										alt="iori"></div>
								<div class="card-info">
									<h4 class="text-blue mb-15 font-lg">Tiendas Virtuales</h4>
									<p class="font-md text-blue-dark mb-15">Lleva tu negocio al siguiente nivel con
										nuestras tiendas virtuales personalizadas. Crearemos una plataforma de comercio
										electrónico que no solo atraiga a tus clientes, sino que también brinde una
										experiencia de compra fluida y segura.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Precios -->
		<section class="section mt-50 bg-grey-80 bg-plan pt-110 pb-110" id="planes">
			<div class="container w-3/4 mx-auto">
				<h2 class="font-xl text-white mb-20 wow animate__animated animate__fadeInUp text-center"
					data-wow-delay=".s">Elige el plan que impulse<br>tu éxito empresarial</h2>
				<div class="row mt-50">
					<div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
						<div class="card-plan hover-up">
							<div class="card-image-plan">
								<div class="info-plan">
									<h4 class="text-blue text-center font-xl fw-bold">Emprendedor</h4>
								</div>
							</div>
							<div class="mt-30 mb-30">
								<ul class="list-ticks list-ticks-2">
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/check.png') }}"
											width="24"><span>Controles Generales</span>
									</li>
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/check.png') }}"
											width="24"><span>Control de Datos</span>
									</li>
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/check.png') }}"
											width="24"><span>Ventas</span>
									</li>
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/x.png') }}"
											width="24"><span>Logistica</span>
									</li>
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/x.png') }}"
											width="24"><span>Finanzas</span>
									</li>
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/x.png') }}"
											width="24"><span>Producción</span>
									</li>
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/x.png') }}"
											width="24"><span>RR.HH.</span>
									</li>
								</ul>
							</div>
							<div class="mt-20">
								<a class="btn btn-brand-1-full hover-up"
									href="https://api.whatsapp.com/send?phone=51940174022&text=Hola%2C%20solicito%20m%C3%A1s%20detalles%20sobre%20el%20plan%20Emprendedor."
									target="_blank">Más detalles aquí
									<svg class="w-6 h-6 icon-16 ml-10" fill="none" stroke="currentColor"
										viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
									</svg>
								</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
						<div class="card-plan hover-up">
							<div class="card-image-plan">
								<div class="info-plan">
									<h4 class="text-blue text-center font-xl fw-bold">Desarrollo</h4>
								</div>
							</div>
							<div class="mt-30 mb-30">
								<ul class="list-ticks list-ticks-2">
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/check.png') }}"
											width="24"><span>Controles Generales</span>
									</li>
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/check.png') }}"
											width="24"><span>Control de Datos</span>
									</li>
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/check.png') }}"
											width="24"><span>Ventas</span>
									</li>
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/check.png') }}"
											width="24"><span>Logistica</span>
									</li>
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/x.png') }}"
											width="24"><span>Finanzas</span>
									</li>
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/x.png') }}"
											width="24"><span>Producción</span>
									</li>
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/x.png') }}"
											width="24"><span>RR.HH.</span>
									</li>
								</ul>
							</div>
							<div class="mt-20">
								<a class="btn btn-brand-1-full hover-up"
									href="https://api.whatsapp.com/send?phone=51940174022&text=Hola%2C%20solicito%20m%C3%A1s%20detalles%20sobre%20el%20plan%20Desarrollo."
									target="_blank">Más detalles aquí
									<svg class="w-6 h-6 icon-16 ml-10" fill="none" stroke="currentColor"
										viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
									</svg>
								</a>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
						<div class="card-plan card-plan-2 hover-up">
							<div class="card-image-plan">
								<div class="info-plan">
									<h4 class="text-blue text-center font-xl fw-bold">Xpansión</h4>
								</div>
							</div>
							<div class="mt-30 mb-30">
								<ul class="list-ticks list-ticks-2 text-blue-dark">
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/check.png') }}"
											width="24"><span>Controles Generales</span>
									</li>
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/check.png') }}"
											width="24"><span>Control de Datos</span>
									</li>
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/check.png') }}"
											width="24"><span>Ventas</span>
									</li>
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/check.png') }}"
											width="24"><span>Logistica</span>
									</li>
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/check.png') }}"
											width="24"><span>Finanzas</span>
									</li>
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/check.png') }}"
											width="24"><span>Producción</span>
									</li>
									<li class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/xinergia/images/check.png') }}"
											width="24"><span>RR.HH.</span>
									</li>
								</ul>
							</div>
							<div class="mt-20"><a class="btn btn-brand-1-full hover-up"
									href="https://api.whatsapp.com/send?phone=51940174022&text=Hola%2C%20solicito%20m%C3%A1s%20detalles%20sobre%20el%20plan%20Xpansi%C3%B3n."
									target="_blank">Más detalles aquí
									<svg class="w-6 h-6 icon-16 ml-10" fill="none" stroke="currentColor"
										viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
									</svg></a></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Marcas -->
		<div class="section mt-55" id="clientes">
			<div class="container w-3/4 mx-auto">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="font-xl text-blue-dark mb-50 wow animate__animated animate__fadeIn"
							data-wow-delay=".0s">Clientes que confían <span class="text-blue">en nosotros</span></h2>
					</div>
				</div>
				<ul class="lists-logo">
					<li class="wow animate__animated animate__fadeIn" data-wow-delay=".s"><img
							src="{{ asset('assets/xinergia/images/clientes/dar.webp') }}"></li>
					<li class="wow animate__animated animate__fadeIn" data-wow-delay=".1s"><img
							src="{{ asset('assets/xinergia/images/clientes/huayas.webp') }}"></li>
					<li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s"><img
							src="{{ asset('assets/xinergia/images/clientes/musas.webp') }}"></li>
					<li class="wow animate__animated animate__fadeIn" data-wow-delay=".3s"><img
							src="{{ asset('assets/xinergia/images/clientes/subuz.webp') }}"></li>
				</ul>
			</div>
		</div>

		<!-- Final -->
		<section class="section mt-50">
			<div class="container w-3/4 mx-auto">
				<div class="row mt-50 align-items-center">
					<div class="col-lg-6">
						<div class="box-images-project">
							<div class="box-images wow animate__animated animate__fadeIn"><img class="img-main-2"
									src="{{ asset('assets/xinergia/images/vitu.webp') }}" alt="iori">
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<h2 class="font-xl text-blue-dark mb-40 wow animate__animated animate__fadeIn">Nos adaptamos a
							la realidad de tu <span class="text-blue">Empresa</span></h2>
						<div class="item-number hover-up">
							<div class="num-ele">1</div>
							<div class="info-num">
								<h3 class="font-lg text-blue-dark">Comercios</h3>
								<p class="font-md text-blue-dark">Bodegas / Minimarket / Distribuidoras Mayoristas /
									Farmacias / Ferreterías / Tiendas de ropa</p>
							</div>
						</div>
						<div class="item-number hover-up">
							<div class="num-ele">2</div>
							<div class="info-num">
								<h3 class="font-lg text-blue-dark">Servicios</h3>
								<p class="font-md text-blue-dark">Restaurante / Hoteles / Guarderías / Consultoras /
									Clínicas / Car wash / Gimnasios / Local de eventos</p>
							</div>
						</div>
						<div class="item-number hover-up">
							<div class="num-ele">3</div>
							<div class="info-num">
								<h3 class="font-lg text-blue-dark">Industrias</h3>
								<p class="font-md text-blue-dark">Panadería / Pastelería / Metalmecánica / Madera &
									Melamine / Agua de mesa y hielo / Sector Textil / Imprentas</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Form -->

		<section class="section pt-50 pb-50 bg-light" id="contacto">
			<div class="container w-3/4 mx-auto">
				<h2 class="text-xl text-blue mb-10">Contacto</h2>
				<p class="font-md text-blue-dark">Ponte en contacto con nosotros.</p>
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="box-form-contact wow animate__ animate__fadeIn animated mt-15 mb-15"
							data-wow-delay=".0s"
							style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="form-group mb-25">
										<input class="form-control icon-user" type="text"
											placeholder="Nombres y apellidos">
									</div>
								</div>
								<div class="col-lg-6 col-sm-6">
									<div class="form-group mb-25">
										<input class="form-control icon-email" type="text"
											placeholder="Correo electrónico">
									</div>
								</div>
								<div class="col-lg-6 col-sm-6">
									<div class="form-group mb-25">
										<input class="form-control icon-phone" type="text" placeholder="Celular">
									</div>
								</div>
								<div class="col-lg-6 col-sm-6">
									<div class="form-group mb-25">
										<input class="form-control icon-company" type="text" placeholder="Empresa">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group mb-25">
										<input class="form-control" type="text" placeholder="Ciudad">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group mb-25">
										<textarea class="form-control textarea-control"
											placeholder="Mensaje"></textarea>
									</div>
								</div>
							</div>
							<button class="btn btn-brand-1-full font-sm" type="submit">Enviar
								<svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
									xmlns="http://www.w3.org/2000/svg">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
								</svg>
							</button>
						</div>
					</div>
					<div class="col-lg-6">
						<img src="{{ asset('assets/xinergia/images/formulario.jpg') }}" class="w-100 rounded-2">
					</div>
				</div>
			</div>
		</section>



	</main>

	<footer class="footer">
		<div class="footer-1">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<!-- Mobile Layout: Icons and Logo side-by-side -->
						<div class="d-flex justify-content-between align-items-center mb-4 d-md-none">
							<div class="site-footer__social mb-0">
								<a href="https://www.facebook.com/xinergianet" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
										fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round"
										class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<path
											d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
									</svg>
								</a>
								<a href="https://www.instagram.com/xinergianet/" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
										fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round"
										class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<path
											d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
										<path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
										<path d="M16.5 7.5l0 .01" />
									</svg>
								</a>
								<a href="https://api.whatsapp.com/send?phone=51940174022&text=Buen%20d%C3%ADa!%20Requiero%20informaci%C3%B3n%20sobre%20su%20servicio."
									target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
										fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round"
										class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
										<path
											d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
									</svg>
								</a>
								<a href="https://www.tiktok.com/@xinergia.pe" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
										fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round"
										class="icon icon-tabler icons-tabler-outline icon-tabler-brand-tiktok">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<path
											d="M21 7.917v4.034a9.948 9.948 0 0 1 -5 -1.951v4.5a6.5 6.5 0 1 1 -8 -6.326v4.326a2.5 2.5 0 1 0 4 2v-11.5h4.083a6.005 6.005 0 0 0 4.917 4.917z" />
									</svg>
								</a>
							</div>
							<div class="footer-widget__logo">
								<img src="{{ asset('assets/xinergia/images/logo-xinergia.png') }}" width="150">
							</div>
						</div>
						<!-- Desktop Layout: Icons and Logo stacked -->
						<div class="d-none d-md-block">
							<div class="mb-2">
								<a href="https://www.facebook.com/xinergianet" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
										fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round"
										class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<path
											d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
									</svg>
								</a>
								<a href="https://www.instagram.com/xinergianet/" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
										fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round"
										class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<path
											d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
										<path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
										<path d="M16.5 7.5l0 .01" />
									</svg>
								</a>
								<a href="https://api.whatsapp.com/send?phone=51940174022&text=Buen%20d%C3%ADa!%20Requiero%20informaci%C3%B3n%20sobre%20su%20servicio."
									target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
										fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round"
										class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
										<path
											d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
									</svg>
								</a>
								<a href="https://www.tiktok.com/@xinergia.pe" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
										fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round"
										class="icon icon-tabler icons-tabler-outline icon-tabler-brand-tiktok">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<path
											d="M21 7.917v4.034a9.948 9.948 0 0 1 -5 -1.951v4.5a6.5 6.5 0 1 1 -8 -6.326v4.326a2.5 2.5 0 1 0 4 2v-11.5h4.083a6.005 6.005 0 0 0 4.917 4.917z" />
									</svg>
								</a>
								<a href="https://www.linkedin.com/company/xinergianet/" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
										fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round"
										class="icon icon-tabler icons-tabler-outline icon-tabler-brand-linkedin">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<path
											d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
										<path d="M8 11l0 5" />
										<path d="M8 8l0 .01" />
										<path d="M12 16l0 -5" />
										<path d="M16 16v-3a2 2 0 0 0 -4 0" />
									</svg>
								</a>
							</div>
							<div class="mb-4"><img src="{{ asset('assets/xinergia/images/logo-xinergia.png') }}"
									width="180"></div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="mb-4 d-flex gap-2 align-items-center">
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
									fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round"
									class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp">
									<path stroke="none" d="M0 0h24v24H0z" fill="none" />
									<path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
									<path
										d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
								</svg>
							</div>
							<div>
								<span class="d-block font-md">Escríbenos al WhatsApp</span>
								<span class="d-block font-md">994 195 832 - 944 031 514</span>
							</div>
						</div>
						<div class="mb-4 d-flex gap-2 align-items-center">
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
									fill="#fff" class="icon icon-tabler icons-tabler-filled icon-tabler-mail">
									<path stroke="none" d="M0 0h24v24H0z" fill="none" />
									<path
										d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" />
									<path
										d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" />
								</svg>
							</div>
							<div>
								<span class="d-block font-md">O al correo</span>
								<span class="d-block font-md">contacto@xpandecorp.com</span>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<span class="d-block font-md">CORPORACIÓN XPANDE</span>
						<span class="d-block font-md">RUC N° 20610079688</span>
						<span class="d-block font-md">Dirección: Av. Garcilazo de la Vega # 323 - Chiclayo</span>
					</div>
				</div>
			</div>
		</div>
	</footer>



	<script src="{{ asset('assets/xinergia/js/vendors/modernizr-3.6.0.min.js') }}"></script>
	<script src="{{ asset('assets/xinergia/js/vendors/jquery-3.6.0.min.js') }}"></script>
	<script src="{{ asset('assets/xinergia/js/vendors/jquery-migrate-3.3.0.min.js') }}"></script>
	<script src="{{ asset('assets/xinergia/js/vendors/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/xinergia/js/vendors/waypoints.js') }}"></script>
	<script src="{{ asset('assets/xinergia/js/vendors/wow.js') }}"></script>
	<script src="{{ asset('assets/xinergia/js/vendors/magnific-popup.js') }}"></script>
	<script src="{{ asset('assets/xinergia/js/vendors/perfect-scrollbar.min.js') }}"></script>
	<script src="{{ asset('assets/xinergia/js/vendors/select2.min.js') }}"></script>
	<script src="{{ asset('assets/xinergia/js/vendors/isotope.js') }}"></script>
	<script src="{{ asset('assets/xinergia/js/vendors/scrollup.js') }}"></script>
	<script src="{{ asset('assets/xinergia/js/vendors/swiper-bundle.min.js') }}"></script>
	<script src="{{ asset('assets/xinergia/js/vendors/noUISlider.js') }}"></script>
	<script src="{{ asset('assets/xinergia/js/vendors/slider.js') }}"></script>
	<!-- Count down-->
	<script src="{{ asset('assets/xinergia/js/vendors/counterup.js') }}"></script>
	<script src="{{ asset('assets/xinergia/js/vendors/jquery.countdown.min.js') }}"></script>
	<!-- Count down-->
	<script src="{{ asset('assets/xinergia/js/vendors/jquery.elevatezoom.js') }}"></script>
	<script src="{{ asset('assets/xinergia/js/vendors/slick.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
	<script src="{{ asset('assets/xinergia/js/main.js?v=5.0.0') }}"></script>
	<script src="{{ asset('assets/xinergia/js/ali-animation.js?v=1.0.0') }}"></script>
	<script>
		const swiper = new Swiper('.swiper', {
			// Optional parameters
			loop: true,
			autoplay: {
				delay: 4000,
				disableOnInteraction: false
			},
			speed: 2000
		});

		// Fix for mobile menu jump-to-top issue
		$(document).on('click', '.burger-icon', function(e) {
			if ($(this).closest('.mobile-header-active').length > 0) {
				// We are in the mobile menu close button
				// No reload needed
			}
		});

		// Ensure clicking menu items closes the menu
		$(document).on('click', '.mobile-menu a, .main-menu a', function() {
			// Remove the classes that show the mobile menu
			$('body').removeClass('mobile-menu-active body-overlay-active');
			$('.mobile-header-active').removeClass('sidebar-visible');
			
			// If there's a burger icon animation, reset it
			$('.burger-icon').removeClass('burger-close');
		});
	</script>
</body>

</html>