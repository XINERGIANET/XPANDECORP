<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="ingenieria, procesos, empresariales, gestión, prevención, reingeniería, análisis, seguridad, trabajo, marketing, negocios, ecosistemas">
	<meta name="description" content="Somos la Consultora XPANDE, una empresa peruana con profesionales especializados en gestión y desarrollo empresarial con una alta calidad técnica, capacidad de adaptación y aplicación de la ingeniería en la gestión de procesos.">
	<title>Corporación XPANDE</title>
	<link rel="icon" type="image/x-icon" href="{{ asset('assets/consultoria/images/favicon.ico') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('assets/consultoria/css/styles.css?v=1') }}">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

		body {
			font-family: 'Poppins', sans-serif;
			color: #041538;
			background: #FBFAFF;
		}
	</style>
</head>
<body>
	<div class="bg-white fixed top-0 left-0 z-50 w-full h-full flex items-center justify-center duration-1000" id="loader">
		<img src="{{ asset('assets/consultoria/images/loader.svg') }}">
	</div>
	<header class="bg-[#002696] py-4">
		<div class="container mx-auto px-4">
			<div class="flex flex-col lg:flex-row justify-between">
				<div class="flex justify-between items-center">
					<div>
						<a href="{{ route('consultoria.index') }}">
							<img src="{{ asset('assets/consultoria/images/logo.png') }}" class="w-32" />
						</a>
					</div>
					<button class="text-white lg:hidden focus:ring p-1 rounded" id="toggle-menu">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6h16" /><path d="M7 12h13" /><path d="M10 18h10" /></svg>
					</button>
				</div>
				<ul class="hidden lg:flex flex-col lg:flex-row mt-4 lg:mt-0 items-center" id="menu">
					<li>
						<a href="{{ route('consultoria.index') }}" class="block px-4 py-2 font-medium text-white text-sm mb-2 lg:mb-0 lg:mx-2">Inicio</a>
					</li>
					<li class="relative group">
						<a href="#servicios" class="block px-4 py-2 font-medium text-white text-sm mb-2 lg:mb-0 lg:mx-2">Servicios <i class="fas fa-chevron-down"></i></a>
						<ul class="absolute bg-white w-60 z-10 text-sm hidden group-hover:block leading-tigh overflow-hidden rounded shadow-sm">
							<li>
								<a href="{{ route('consultoria.productividad') }}" class="block px-4 py-2 hover:bg-gray-100 font-medium">Productividad y procesos</a>
							</li>
							<li>
								<a href="{{ route('consultoria.higiene') }}" class="block px-4 py-2 hover:bg-gray-100 font-medium">Higiene e inocuidad alimientaria</a>
							</li>
							<li>
								<a href="{{ route('consultoria.seguridad') }}" class="block px-4 py-2 hover:bg-gray-100 font-medium">Seguridad y salud en el trabajo</a>
							</li>
							<li>
								<a href="{{ route('consultoria.ecosistema') }}" class="block px-4 py-2 hover:bg-gray-100 font-medium">Ecosistema de negocios</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="{{ route('consultoria.nosotros') }}" class="block px-4 py-2 font-medium text-white text-sm mx-1 mb-2 lg:mb-0 lg:mx-2">Nosotros</a>
					</li>
					<li>
						<a href="#" class="block px-4 py-2 font-medium text-white text-sm border rounded mb-2 lg:mb-0 lg:mx-2" data-toggle="modal" data-target="#modal-referidos">Programa de referidos</a>
					</li>
					<li>
						<a href="#contacto" class="block px-4 py-2 font-medium bg-white text-[#002696] text-sm rounded mb-2 lg:mb-0 lg:mx-2">Contáctanos</a>
					</li>
				</ul>
			</div>
		</div>
	</header>
	
	<div class="swiper w-full" id="swiper-header">
		<!-- Additional required wrapper -->
		
		<div class="swiper-wrapper">
			<!-- Slides -->
			<div class="swiper-slide">
				<div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 md:left-0 md:-translate-x-0 md:px-16 text-center md:text-left">
					<span class="block text-white md:text-4xl font-bold mb-4 text-center drop-shadow">Productividad y procesos</span>
					<a href="{{ route('consultoria.productividad') }}" class="inline-block bg-[#002696] text-white px-4 py-2 rounded text-center text-xs md:text-base">Ver más</a>
				</div>
				<img src="{{ asset('assets/consultoria/images/inicio/carousel1.webp') }}" class="max-h-[450px] w-full object-cover object-center">
			</div>
			<div class="swiper-slide">
				<div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 md:left-0 md:-translate-x-0 md:px-16 text-center md:text-left">
					<span class="block text-white md:text-4xl font-bold mb-4 text-center drop-shadow">Higiene e inocuidad alimentaria</span>
					<a href="{{ route('consultoria.higiene') }}" class="inline-block bg-[#002696] text-white px-4 py-2 rounded text-center text-xs md:text-base">Ver más</a>
				</div>
				<img src="{{ asset('assets/consultoria/images/inicio/carousel2.webp') }}" class="max-h-[450px] w-full object-cover object-center">
			</div>
			<div class="swiper-slide">
				<div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 md:left-0 md:-translate-x-0 md:px-16 text-center md:text-left">
					<span class="block text-white md:text-4xl font-bold mb-4 text-center drop-shadow">Seguridad y salud en el trabajo</span>
					<a href="{{ route('consultoria.seguridad') }}" class="inline-block bg-[#002696] text-white px-4 py-2 rounded text-center text-xs md:text-base">Ver más</a>
				</div>
				<img src="{{ asset('assets/consultoria/images/inicio/carousel3.webp') }}" class="max-h-[450px] w-full object-cover object-center">
			</div>
			
			<div class="swiper-slide">
				<div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 md:left-0 md:-translate-x-0 md:px-16 text-center md:text-left">
					<span class="block text-white md:text-4xl font-bold mb-4 text-center drop-shadow">Ecosistema de negocios</span>
					<a href="{{ route('consultoria.ecosistema') }}" class="inline-block bg-[#002696] text-white px-4 py-2 rounded text-center text-xs md:text-base">Ver más</a>
				</div>
				<img src="{{ asset('assets/consultoria/images/inicio/carousel4.webp') }}" class="max-h-[450px] w-full object-cover object-center">
			</div>
		</div>
		

		<!-- If we need navigation buttons -->
		<div class="swiper-button-prev text-[#002696]"></div>
		<div class="swiper-button-next text-[#002696]"></div>
	</div>

	<section class="py-16 px-4 bg-[#ededf4] overflow-x-hidden">
		<div class="container mx-auto">
			<div class="grid grid-cols-12 gap-4 items-center mb-4 lg:w-3/4 mx-auto">
				<div class="col-span-12 md:col-span-6 mb-4">
					<h2 class="text-3xl mb-4" data-aos="fade-up">Implementamos cambios que<br><span class="font-semibold">generan valor</span></h2>
					<p class="text-xl text-justify" data-aos="fade-up">Somos una consultura de negocios especializada en <span class="font-semibold">desarrollo empresarial y sistemas integrados</span> de gestión, el principal compromiso con nuestros clientes es <span class="font-semibold">optimizar su desempeño</span> mediante un enfoque aplicado a la ingenería de procesos.</p>
				</div>
				<div class="col-span-12 md:col-span-6 mb-4">
					<img src="{{ asset('assets/consultoria/images/inicio/intro.webp') }}" class="w-full" data-aos="fade-left">
				</div>
			</div>
		</div>
	</section>

	<section class="py-16 px-4 bg-[#06093a] overflow-x-hidden">
		<div class="container mx-auto">
			<div class="bg-white rounded-lg p-8 text-center mb-4 lg:w-3/4 mx-auto">
				<h2 class="text-center border border-[#0032cc] text-[#0032cc] font-semibold border-2 inline-block text-3xl py-2 px-4 rounded-lg mb-8" data-aos="fade-up">Nuestra Metodología</h2>
				<p class="text-center text-xl mb-4" data-aos="fade-up">Acompañamos a las empresas en un proceso de transformación <span class="font-semibold">optimizando su desempeño a través de cinco etapas:</span></p>
				<div class="flex items-center">
					<img src="{{ asset('assets/consultoria/images/inicio/metodologia.webp') }}" class="w-full max-w-full">
				</div>
			</div>

			<div class="bg-white rounded-lg p-8 lg:w-3/4 mx-auto">
				<div class="grid grid-cols-12 items-center">
					<div class="col-span-12 lg:col-span-4 border-0" data-aos="fade-up">
						<div class="flex justify-center items-center gap-2 font-semibold">
							<span class="block text-6xl counter">+50</span>
							<span class="block text-lg">proyectos en<br> producción</span>
						</div>
					</div>
					<div class="col-span-12 lg:col-span-4 border-0 xl:border-l-2 xl:border-l-[#06093a]" data-aos="fade-up">
						<div class="flex justify-center items-center gap-2 font-semibold">
							<span class="block text-6xl counter">+40</span>
							<span class="block text-lg">clientes<br>satisfechos</span>
						</div>
					</div>
					<div class="col-span-12 lg:col-span-4 border-0 xl:border-l-2 xl:border-l-[#06093a]" data-aos="fade-up">
						<div class="flex justify-center items-center gap-2 font-semibold">
							<span class="block text-6xl counter">+3</span>
							<span class="block text-lg">años en<br> el mercado</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="py-16 px-4 bg-[#ededf4] overflow-x-hidden" id="servicios">
		<div class="container mx-auto">
			<div class="text-center">
				<h2 class="border border-[#0032cc] text-[#0032cc] font-semibold border-2 inline-block text-3xl py-2 px-4 rounded-lg mb-8" data-aos="fade-up">Nuestros Servicios</h2>
				<p class="text-xl mb-4" data-aos="fade-up"><span class="font-semibold">Resolvemos problemas</span>, transformando los límites de las <span class="font-semibold">empresas en crecimiento y desarrollo</span>.</p>
			</div>
			<div class="grid grid-cols-12 gap-4 py-8 mb-4 lg:w-3/4 mx-auto">
				<div class="col-span-12 md:col-span-6 relative" data-aos="fade-right">
					<div>
						<img src="{{ asset('assets/consultoria/images/inicio/servicio1.webp') }}" class="w-full">
					</div>
					<div>
						<div class="p-6 shadow-lg bg-white rounded-lg mt-4">
							<span class="block text-xs text-gray-700">Servicio de</span>
							<h5 class="font-semibold text-[#1129a6] leading-tight mb-2">Productividad y procesos</h5>
							<p class="text-sm text-gray-700 text-justify mb-4 truncate">Adecúa los procesos de tu empresa a las exigencias del mercado actual y <span class="font-semibold">logra un alto nivel de competitividad</span>.</p>
							<a href="{{ route('consultoria.productividad') }}" class="block bg-[#1129a6] text-white px-4 py-2 rounded text-center text-xs">Ver más</a>
						</div>
					</div>
				</div>
				<div class="col-span-12 md:col-span-6 relative" data-aos="fade-left">
					<div>
						<img src="{{ asset('assets/consultoria/images/inicio/servicio2.webp') }}" class="w-full">
					</div>
					<div>
						<div class="p-6 shadow-lg bg-white rounded-lg mt-4">
							<span class="block text-xs text-gray-700">Servicio de</span>
							<h5 class="font-semibold text-[#ff5717] leading-tight mb-2">Higiene e inocuidad alimientaria</h5>
							<p class="text-sm text-gray-700 text-justify mb-4 truncate">Garantiza un producto saludable para tu consumidor, implementa un programa de higiene e inocuidad y asegura la <span class="font-semibold">calidad de tus alimentos</span>.</p>
							<a href="{{ route('consultoria.higiene') }}" class="block bg-[#ff5717] text-white px-4 py-2 rounded text-center text-xs">Ver más</a>
						</div>
					</div>
				</div>
				<div class="col-span-12 md:col-span-6 relative" data-aos="fade-right">
					<div>
						<img src="{{ asset('assets/consultoria/images/inicio/servicio3.webp') }}" class="w-full">
					</div>
					<div>
						<div class="p-6 shadow-lg bg-white rounded-lg mt-4">
							<span class="block text-xs text-gray-700">Servicio de</span>
							<h5 class="font-semibold text-[#ff5717] leading-tight mb-2">Seguridad y salud en el trabajo</h5>
							<p class="text-sm text-gray-700 text-justify mb-4 truncate">Promueve un ambiente de trabajo seguro en tu empresa , a través de la prevención de <span class="font-semibold">accidentes y enfermedades ocupacionales</span>.</p>
							<a href="{{ route('consultoria.seguridad') }}" class="block bg-[#ff5717] text-white px-4 py-2 rounded text-center text-xs">Ver más</a>
						</div>
					</div>
				</div>
				<div class="col-span-12 md:col-span-6 relative" data-aos="fade-left">
					<div>
						<img src="{{ asset('assets/consultoria/images/inicio/servicio4.webp') }}" class="w-full">
					</div>
					<div>
						<div class="p-6 shadow-lg bg-white rounded-lg mt-4">
							<span class="block text-xs text-gray-700">Servicio de</span>
							<h5 class="font-semibold text-[#7900c8] leading-tight mb-2">Ecosistema de negocios</h5>
							<p class="text-sm text-gray-700 text-justify mb-4 truncate">Desarrolla tu idea de negocio y crea un plan sostenible que <span class="font-semibold">minimice los riesgos al fracaso</span>.</p>
							<a href="{{ route('consultoria.ecosistema') }}" class="block bg-[#7900c8] text-white px-4 py-2 rounded text-center text-xs">Ver más</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>

	<section class="py-16 px-4 bg-[#06093a] overflow-x-hidden">
		<div class="container mx-auto">
			<div class="grid grid-cols-12 gap-4 items-center py-8 lg:w-3/4 mx-auto">
				<div class="col-span-12 md:col-span-6 text-center">
					<img src="{{ asset('assets/consultoria/images/inicio/cvaleriano.webp') }}" class="w-full" data-aos="fade-right">
				</div>
				<div class="col-span-12 md:col-span-6 text-center">
					<h3 class="mb-8 text-4xl font-semibold text-white">Conoce más sobre nosotros:</h3>
					<div data-aos="fade-left">
						<a href="{{ asset('assets/consultoria/pdf/BROCHURE 2024.pdf') }}" download class="block text-[#1129a6] bg-white py-4 rounded text-center text-2xl mb-4 font-medium">
							<i class="fa fa-file-text"></i> Brochure
						</a>
						<a href="{{ asset('assets/consultoria/pdf/PORTAFOLIO DE PROYECTOS.pdf') }}" download class="block text-[#1129a6] bg-white py-4 rounded text-center text-2xl font-medium">
							<i class="fa fa-images"></i> Portafolio
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="py-16 px-4 bg-[#dce2f9] overflow-x-hidden">
		<div class="container mx-auto">
			<div class="text-center">
				<h2 class="bg-[#0032cc] text-white font-semibold border-2 inline-block text-3xl py-2 px-4 rounded-lg mb-8" data-aos="fade-up">Nuestros Clientes</h2>
			</div>
			<div class="bg-white p-4 rounded-lg mb-8 lg:w-3/4 mx-auto">
				<div class="swiper w-full" id="swiper-clients">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente1.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente2.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente3.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente4.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente5.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente6.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente7.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente8.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente9.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente10.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente11.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente12.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente13.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente14.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente15.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente16.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente17.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente18.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente19.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente20.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente21.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente22.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente23.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente24.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente25.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente26.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente27.webp') }}">
						</div>
						<div class="swiper-slide">
							<img src="{{ asset('assets/consultoria/images/clientes/cliente28.webp') }}">
						</div>
					</div>

					<!-- If we need navigation buttons -->
					<div class="swiper-button-prev bg-[#c6cff0] text-[#7281c9] w-10 h-10 rounded-full after:content-['prev'] after:text-lg after:font-bold"></div>
					<div class="swiper-button-next bg-[#c6cff0] text-[#7281c9] w-10 h-10 rounded-full after:content-['next'] after:text-lg after:font-bold"></div>
				</div>
			</div>

			<div class="text-center">
				<h2 class="bg-[#0032cc] text-white font-semibold border-2 inline-block text-3xl py-2 px-4 rounded-lg mb-8" data-aos="fade-up">Opiniones que inspiran</h2>
			</div>

			<div class="swiper w-full lg:w-3/4 mx-auto" id="swiper-reviews">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->
					<div class="swiper-slide">
						<div class="p-4 bg-white rounded-lg">
							<div class="flex items-center gap-2 mb-4">
								<img class="rounded-full bg-white border aspect-square object-contain w-10 h-10" src="{{ asset('assets/consultoria/images/clientes/cliente27.webp') }}">
								<div>
									<h5 class="mb-0 font-semibold">ALL PROTEIN</h5>
									<span class="block text-sm">PROPIETARIO</span>
								</div>
							</div>
							<p class="text-sm">
								Mi experiencia con Xpande Consultoria ha sido muy buena, el equipo 100% comprometido, nos apoyan constantemente y siempre responden nuestras dudas o preguntas. Personalmente, vengo recomendando el servicio de Xpande a todos mis amigos que tienen empresas, quienes me informan que sus negocios estan teniendo cambios positivos.
							</p>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="p-4 bg-white rounded-lg">
							<div class="flex items-center gap-2 mb-4">
								<img class="rounded-full bg-white border aspect-square object-contain w-10 h-10" src="{{ asset('assets/consultoria/images/clientes/cliente7.webp') }}">
								<div>
									<h5 class="mb-0 font-semibold">SUPERMERCADOS EL SUPER</h5>
									<span class="block text-sm">COLABORADOR</span>
								</div>
							</div>
							<p class="text-sm">
								Con XPANDE hemos visto grandes resultados con el progreso de saniamiento y mejora en los productos de alimentos. Además, recomiendo a esta empresa porque la experiencia con ellos ha sido muy satisfactoria, debido a que son muy meticulosos en las supervisiones que realizan.
							</p>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="p-4 bg-white rounded-lg">
							<div class="flex items-center gap-2 mb-4">
								<img class="rounded-full bg-white border aspect-square object-contain w-10 h-10" src="{{ asset('assets/consultoria/images/clientes/cliente11.webp') }}">
								<div>
									<h5 class="mb-0 font-semibold">I.E.P. SANTO TORIBIO DE MOGROVEJO</h5>
									<span class="block text-sm">DIRECTOR DE ADMINISTRACIÓN</span>
								</div>
							</div>
							<p class="text-sm">
								Durante este último año, gracias a esta empresa en crecimiento, hemos logrado implementar en nuestro colegio un sistema adecuado de seguridad y salud en el trabajo para el bienestar de toda nuestra comunidad educativa. Acentúo el conocimiento, la experiencia, y la correcta coordinación del trabajo.
							</p>
						</div>
					</div>
				</div>

				<!-- If we need navigation buttons -->
				<div class="swiper-button-prev bg-[#c6cff0] text-[#7281c9] w-10 h-10 rounded-full after:content-['prev'] after:text-lg after:font-bold"></div>
				<div class="swiper-button-next bg-[#c6cff0] text-[#7281c9] w-10 h-10 rounded-full after:content-['next'] after:text-lg after:font-bold"></div>
			</div>
		</div>
	</section>

	<section class="py-16 px-4 bg-[#0f1d90] overflow-x-hidden" id="contacto">
		<div class="container mx-auto">
			<h2 class="font-semibold text-3xl mb-8 text-white text-center" data-aos="fade-up">¿Quieres saber más de nosotros?</h2>
			<div class="grid grid-cols-12 items-center gap-4 lg:w-3/4 mx-auto">
				<div class="col-span-12 lg:col-span-6">
					<div class="p-4 md:p-8 bg-[#f3f3f3] rounded-lg" data-aos="fade-right">
						<h3 class="font-semibold text-lg mb-4 text-center text-[#06093a]">Nos ponemos en contacto contigo</h3>
						<form action="">
							<div class="mb-3">
								<input type="text" class="block w-full border rounded bg-white p-1.5" placeholder="Nombres y apellidos">
							</div>
							<div class="mb-3">
								<input type="text" class="block w-full border rounded bg-white p-1.5" placeholder="Correo electrónico">
							</div>
							<div class="mb-3">
								<input type="text" class="block w-full border rounded bg-white p-1.5" placeholder="Celular">
							</div>
							<div class="mb-3">
								<input type="text" class="block w-full border rounded bg-white p-1.5" placeholder="Empresa">
							</div>
							<div class="mb-3">
								<input type="text" class="block w-full border rounded bg-white p-1.5" placeholder="Ciudad">
							</div>
							<div class="mb-3">
								<textarea class="block w-full border rounded bg-white p-1.5" placeholder="Mensaje"></textarea>

							</div>
							<button type="submit" class="block w-full bg-[#1241d0] text-white p-1.5 rounded text-center">Enviar</button>
						</form>
					</div>
				</div>
				<div class="col-span-12 lg:col-span-6">
					<img src="{{ asset('assets/consultoria/images/inicio/contacto.jpg') }}" class="w-full rounded-lg" data-aos="fade-left">
				</div>
			</div>
		</div>
	</section>



	<footer class="bg-[#06093a] text-gray-400 py-8 px-4">
		<div class="container mx-auto">
			<div class="grid grid-cols-3 items-center lg:w-3/4 mx-auto">
				<div class="col-span-3 md:col-span-1 mb-4">
					<div class="mb-8">
						<a href="https://www.facebook.com/xpandeconsultoria" class="inline-flex h-7 w-7 me-2 rounded-full bg-gray-400 text-[#06093a] justify-center items-center" target="_blank">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="https://www.instagram.com/xpandeconsultoria/" class="inline-flex h-7 w-7 me-2 rounded-full bg-gray-400 text-[#06093a] justify-center items-center" target="_blank">
							<i class="fab fa-instagram"></i>
						</a>
						<a href="https://api.whatsapp.com/send?phone=51944031514" class="inline-flex h-7 w-7 me-2 rounded-full bg-gray-400 text-[#06093a] justify-center items-center" target="_blank">
							<i class="fab fa-whatsapp"></i>
						</a>
						<a href="https://www.tiktok.com/@xpandeconsultoria" class="inline-flex h-7 w-7 me-2 rounded-full bg-gray-400 text-[#06093a] justify-center items-center" target="_blank">
							<i class="fab fa-tiktok"></i>
						</a>
						<a href="https://www.linkedin.com/company/xpandeconsultoria/" class="inline-flex h-7 w-7 me-2 rounded-full bg-gray-400 text-[#06093a] justify-center items-center" target="_blank">
							<i class="fab fa-linkedin"></i>
						</a>
					</div>
					<div>
						<a href="#">
							<img src="{{ asset('assets/consultoria/images/logo.png') }}" class="w-32">
						</a>
					</div>
				</div>
				<div class="col-span-3 md:col-span-1 mb-4">
					<h5 class="font-semibold text-lg mb-2">Contáctanos</h5>
					<div>
						<div class="flex items-center gap-4 mb-4">
							<i class="fab fa-whatsapp fa-2x"></i>
							<p class="leading-tight">Escríbenos al WhatsApp <br> 994 195 832 - 944 031 514</p>
						</div>
						<div class="flex items-center gap-4">
							<i class="fas fa-envelope fa-2x"></i>
							<p class="leading-tight">o al correo<br> contacto@xpandecorp.com</p>
						</div>
					</div>
				</div>
				<div class="col-span-3 md:col-span-1">
					<div class="md:text-right">
						<p>CORPORACIÓN XPANDE</p>
						<p>RUC N° 20610079688</p>
						<p>Dirección: Av. Garcilazo de la Vega # 323 - Chiclayo</p>
					</div>
				</div>
			</div>
			
			
		</div>
	</footer>

	<div id="modal-referidos" class="modal hidden relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
		<div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
		<div class="fixed inset-0 z-10 w-screen overflow-y-auto">
			<div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
				<div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all my-8 md:my-0 md:max-w-4xl">
					<div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
						<div class="flex flex-col md:flex-row flex-1">
							<img src="{{ asset('assets/consultoria/images/referidos1.webp') }}" class="md:w-1/2">
							<img src="{{ asset('assets/consultoria/images/referidos2.webp') }}" class="md:w-1/2">
						</div>
					</div>
					<div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
						<button type="button" data-toggle="modal" data-target="#modal-registro" class="inline-flex w-full justify-center rounded-md bg-[#002696] px-3 py-2 text-sm font-semibold text-white shadow-sm sm:ml-3 sm:w-auto">Registrarme</button>
						<button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto btn-close">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="modal-registro" class="modal hidden relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
		<div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
		<div class="fixed inset-0 z-10 w-screen overflow-y-auto">
			<div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
				<div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all my-8 md:my-0 md:max-w-lg">
					<form action="">
						<div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
							<p class="mb-4">Únete a nuestro programa de referidos completando un sencillo registro.</p>
							<div class="grid grid-cols-2 gap-4">
								<div class="col-span-2 md:col-span-1">
									<label class="block text-sm font-medium text-gray-900">Nombre completo *</label>
									<input type="text" name="name" autocomplete="off" class="block w-full border rounded bg-transparent p-1.5 outline-[#002696] outline-1 sm:text-sm">
								</div>
								<div class="col-span-2 md:col-span-1">
									<label for="username" class="block text-sm font-medium text-gray-900">Celular *</label>
									<input type="text" name="phone" autocomplete="off" class="block w-full border rounded bg-transparent p-1.5 outline-[#002696] outline-1 sm:text-sm">
								</div>
								<div class="col-span-2 md:col-span-1">
									<label for="username" class="block text-sm font-medium text-gray-900">Correo electrónico *</label>
									<input type="text" name="phone" autocomplete="off" class="block w-full border rounded bg-transparent p-1.5 outline-[#002696] outline-1 sm:text-sm">
								</div>
								<div class="col-span-2 md:col-span-1">
									<label for="username" class="block text-sm font-medium text-gray-900">Ciudad *</label>
									<input type="text" name="city" autocomplete="off" class="block w-full border rounded bg-transparent p-1.5 outline-[#002696] outline-1 sm:text-sm">
								</div>
							</div>
						</div>
						<div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
							<button type="submit" class="inline-flex w-full justify-center rounded-md bg-[#002696] px-3 py-2 text-sm font-semibold text-white shadow-sm sm:ml-3 sm:w-auto">Guardar</button>
							<button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto btn-close">Cerrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://unpkg.com/counterup2@2.0.2/dist/index.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
	<script>
		//AOS

		AOS.init();
		// CountUp 2

		if (window.counterUp !== undefined) {
		  const counterUp = window.counterUp["default"];
		  const counterUp2 = document.querySelectorAll('.counter')
		  Array.from(counterUp2, (el) => {
		    if (typeof Waypoint !== typeof undefined) {
		      const waypoint = new Waypoint({
		        element: el,
		        handler: function () {
		          counterUp(el, {
		            duration: 1000,
		            delay: 10,
		          });
		          this.destroy();
		        },
		        offset: "bottom-in-view",
		      });
		    }
		  })
		}

		// Menu responsive
		const toggleMenu = document.querySelector('#toggle-menu');
		const menu = document.querySelector('#menu');

		toggleMenu.addEventListener('click', function(){
			menu.classList.toggle('hidden');
		})

		//Carousels
		new Swiper('#swiper-header', {
			speed: 1000,
			autoplay: {
				delay: 2000,

			},
			loop: true,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});

		new Swiper('#swiper-clients', {
			speed: 1000,
			slidesPerView: 1,
			spaceBetween: 10,
			autoplay: {
				delay: 2000
			},
			loop: true,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			breakpoints: {
				640: {
					slidesPerView: 2,
					spaceBetween: 10,
				},
				768: {
					slidesPerView: 4,
					spaceBetween: 20,
				},
				1024: {
					slidesPerView: 6,
					spaceBetween: 30,
				}
			}
		});

		new Swiper('#swiper-reviews', {
			speed: 1000,
			slidesPerView: 1,
			spaceBetween: 10,
			autoplay: {
				delay: 2000
			},
			loop: true,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			pagination: {
				el: '.swiper-pagination',
				type: 'fraction'
			},
			breakpoints: {
				1024: {
					slidesPerView: 2,
					spaceBetween: 30,
				}
			}
		});

	//Modals

		var btnsModal = document.querySelectorAll('[data-toggle');
		var btnsClose = document.querySelectorAll('.btn-close');
		var modals = document.querySelectorAll('.modal');

		btnsModal.forEach(function(btnModal){
			btnModal.addEventListener('click', function(){
				var dataset = this.dataset;

				if(dataset.toggle == 'modal'){

					modals.forEach(function(modal){
						modal.classList.add('hidden');
					});

					document.querySelector(dataset.target).classList.remove('hidden');
				}
			});
		});

		btnsClose.forEach(function(btnClose){
			btnClose.addEventListener('click', function(){
				this.closest('.modal').classList.add('hidden');
			});
		});

		//loader

		document.addEventListener('DOMContentLoaded', function(){
			var loader = document.querySelector('#loader');

			setTimeout(function(){
				loader.style.opacity = 0;

				setTimeout(function(){
					loader.style.display = 'none';
				}, 1000);

			}, 1000);
			

		});

	</script>
</body>
</html>