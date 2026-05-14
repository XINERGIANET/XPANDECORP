@extends('consultoria.template')

@section('content')
<section>
	<img src="{{ asset('assets/consultoria/images/higiene-e-inocuidad-alimentaria/banner.jpg') }}" class="w-full">
</section>

<section class="py-16 px-4 bg-[#f9e4e3]">
	<div class="container mx-auto">
		<div class="text-center">
			<h2 class="text-center bg-[#fc6124] text-white font-semibold inline-block text-4xl py-4 px-8 rounded-lg mb-8" data-aos="fade-up"><span class="block text-xl font-light mb-2">Servicio de</span> Higiene e inocuidad alimentaria</h2>
			<p class="text-xl">Garantiza un producto saludable para tu consumidor, implementa un programa de higiene e inocuidad y asegura la <span class="font-semibold">calidad de tus alimentos</span>.</p>
		</div>
	</div>
</section>

<section class="py-16 px-4 bg-[#f4f4f9]">
	<div class="container mx-auto">
		<div class="bg-white p-8 border-[#ffd2b3] border-2 rounded-xl lg:w-3/4 mx-auto">
			<div class="grid grid-cols-12 justify-center gap-4 mb-4 justify-center justify-items-center">
				<div class="col-span-12 md:col-span-6 mb-4" data-aos="fade-up">
					<div class="text-center mb-4">
						<img src="{{ asset('assets/consultoria/images/higiene-e-inocuidad-alimentaria/icono1.png') }}" class="w-32 inline-block">
					</div>
					<h5 class="text-center text-xl font-semibold">Control de calidad</h5>
				</div>
				<div class="col-span-12 md:col-span-6 mb-4" data-aos="fade-up">
					<div class="text-center mb-4">
						<img src="{{ asset('assets/consultoria/images/higiene-e-inocuidad-alimentaria/icono2.png') }}" class="w-32 inline-block">
					</div>
					<h5 class="text-center text-xl font-semibold">Inspección de áreas</h5>
				</div>
				<div class="col-span-12 md:col-span-6 mb-4" data-aos="fade-up">
					<div class="text-center mb-4">
						<img src="{{ asset('assets/consultoria/images/higiene-e-inocuidad-alimentaria/icono3.png') }}" class="w-32 inline-block">
					</div>
					<h5 class="text-center text-xl font-semibold mb-2">Capacitación al personal</h5>
					<p class="text-center text-gray-600">Programa de charlas y capacitaciones</p>
				</div>
				<div class="col-span-12 md:col-span-6 mb-4" data-aos="fade-up">
					<div class="text-center mb-4">
						<img src="{{ asset('assets/consultoria/images/higiene-e-inocuidad-alimentaria/icono4.png') }}" class="w-32 inline-block">
					</div>
					<h5 class="text-center text-xl font-semibold mb-2">Aplicación de normativas</h5>
					<p class="text-center text-gray-600">Principios generales de higiene (PGH), buena prácticas de manufactura (BPM). HACCP, POES, etc.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-16 px-4 bg-[#eceaf6]">
	<div class="container mx-auto">
		<div class="text-center mb-8">
			<h2 class="text-center bg-[#fc6124] text-white font-semibold inline-block text-4xl py-4 px-8 rounded-lg mb-8" data-aos="fade-up">Nuestros clientes</h2>
			<p class="text-xl"><span class="font-semibold">Resolvemos problemas</span>, transformando los límites de las <span class="font-semibold text-[#fc6124]">empresas en crecimiento y desarrollo</span>.</p>
		</div>

		<div class="lg:w-3/4 mx-auto">
			<div class="swiper w-full" id="swiper-clients">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->
					<div class="swiper-slide relative">
						<div class="relative group">
							<img src="{{ asset('assets/consultoria/images/higiene-e-inocuidad-alimentaria/cliente1.jpg') }}" class="w-full rounded-xl">
							<div class="opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-black bg-opacity-75 bg-blend-multiply flex justify-center items-center p-4 text-center text-white rounded-xl transition-opacity duration-300 text-lg">
								Resolvemos problemas, transformando los límites.
							</div>
						</div>
					</div>
					<div class="swiper-slide relative">
						<div class="relative group">
							<img src="{{ asset('assets/consultoria/images/higiene-e-inocuidad-alimentaria/cliente2.jpg') }}" class="w-full rounded-xl">
							<div class="opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-black bg-opacity-75 bg-blend-multiply flex justify-center items-center p-4 text-center text-white rounded-xl transition-opacity duration-300 text-lg">
								Resolvemos problemas, transformando los límites.
							</div>
						</div>
					</div>
					<div class="swiper-slide relative">
						<div class="relative group">
							<img src="{{ asset('assets/consultoria/images/higiene-e-inocuidad-alimentaria/cliente3.jpg') }}" class="w-full rounded-xl">
							<div class="opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-black bg-opacity-75 bg-blend-multiply flex justify-center items-center p-4 text-center text-white rounded-xl transition-opacity duration-300 text-lg">
								Resolvemos problemas, transformando los límites.
							</div>
						</div>
					</div>						
				</div>

				<!-- If we need navigation buttons -->
				<div class="swiper-button-prev bg-[#c6cff0] text-[#7281c9] w-10 h-10 rounded-full after:content-['prev'] after:text-lg after:font-bold"></div>
				<div class="swiper-button-next bg-[#c6cff0] text-[#7281c9] w-10 h-10 rounded-full after:content-['next'] after:text-lg after:font-bold"></div>
			</div>
		</div>
	</div>
</section>
@endsection