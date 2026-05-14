@extends('consultoria.template')

@section('content')
<section>
	<img src="{{ asset('assets/consultoria/images/ecosistema-de-negocios/banner.jpg') }}" class="w-full">
</section>

<section class="py-16 px-4 bg-[#e5ccfc]">
	<div class="container mx-auto">
		<div class="text-center">
			<h2 class="text-center bg-[#7900c9] text-white font-semibold inline-block text-4xl py-4 px-8 rounded-lg mb-8" data-aos="fade-up"><span class="block text-xl font-light mb-2">Servicio de</span> Ecosistema de negocios</h2>
			<p class="text-xl">Desarrolla tu idea de negocio y crea un plan sostenible que <span class="font-semibold">minimice los riesgos al fracaso</span>.</p>
		</div>
	</div>
</section>

<section class="py-16 px-4 bg-[#f4f4f9]">
	<div class="container mx-auto">
		<div class="bg-white p-8 border-[#ddc1ff] border-2 rounded-xl lg:w-3/4 mx-auto">
			<div class="grid grid-cols-12 justify-center gap-4 mb-4 justify-center justify-items-center">
				<div class="col-span-12 md:col-span-6 lg:col-span-4 mb-4" data-aos="fade-up">
					<div class="text-center mb-4">
						<img src="{{ asset('assets/consultoria/images/ecosistema-de-negocios/icono1.png') }}" class="w-32 inline-block">
					</div>
					<h5 class="text-center text-xl font-semibold mb-2">Proyectos de inversión</h5>
					<p class="text-center text-gray-600">Desarrollo metódico de una idea de negocio.</p>
				</div>
				<div class="col-span-12 md:col-span-6 lg:col-span-4 mb-4" data-aos="fade-up">
					<div class="text-center mb-4">
						<img src="{{ asset('assets/consultoria/images/ecosistema-de-negocios/icono2.png') }}" class="w-32 inline-block">
					</div>
					<h5 class="text-center text-xl font-semibold mb-2">Investigación de mercado</h5>
					<p class="text-center text-gray-600">Recopilación y análisis de información.</p>
				</div>
				<div class="col-span-12 md:col-span-6 lg:col-span-4 mb-4" data-aos="fade-up">
					<div class="text-center mb-4">
						<img src="{{ asset('assets/consultoria/images/ecosistema-de-negocios/icono3.png') }}" class="w-32 inline-block">
					</div>
					<h5 class="text-center text-xl font-semibold mb-2">Viabilidad empresarial</h5>
					<p class="text-center text-gray-600">Estructura de costos, precios de venta y análisis costo-beneficio.</p>
				</div>
				<div class="col-span-12 md:col-span-6 mb-4" data-aos="fade-up">
					<div class="text-center mb-4">
						<img src="{{ asset('assets/consultoria/images/ecosistema-de-negocios/icono4.png') }}" class="w-32 inline-block">
					</div>
					<h5 class="text-center text-xl font-semibold mb-2">Planificación estratégica</h5>
					<p class="text-center text-gray-600">Establecimiento y medición de objetivos estratégicos. Implementación de indicadores de gestión. Implementación de indicadores de gestión (KPI).</p>
				</div>
				<div class="col-span-12 md:col-span-6 mb-4" data-aos="fade-up">
					<div class="text-center mb-4">
						<img src="{{ asset('assets/consultoria/images/ecosistema-de-negocios/icono5.png') }}" class="w-32 inline-block">
					</div>
					<h5 class="text-center text-xl font-semibold mb-2">Estrategias comerciales</h5>
					<p class="text-center text-gray-600">Metas a corto, mediano y largo plazo. ¿Que se quiere vender? ¿A quien se le va a vender? ¿Como se va a vender?</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-16 px-4 bg-[#eceaf6]">
	<div class="container mx-auto">
		<div class="text-center mb-8">
			<h2 class="text-center bg-[#7900c9] text-white font-semibold inline-block text-4xl py-4 px-8 rounded-lg mb-8" data-aos="fade-up">Nuestros clientes</h2>
			<p class="text-xl"><span class="font-semibold">Resolvemos problemas</span>, transformando los límites de las <span class="font-semibold text-[#7900c9]">empresas en crecimiento y desarrollo</span>.</p>
		</div>

		<div class="lg:w-3/4 mx-auto">
			<div class="swiper w-full" id="swiper-clients">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->
					<div class="swiper-slide relative">
						<div class="relative group">
							<img src="{{ asset('assets/consultoria/images/ecosistema-de-negocios/cliente1.jpg') }}" class="w-full rounded-xl">
							<div class="opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-black bg-opacity-75 bg-blend-multiply flex justify-center items-center p-4 text-center text-white rounded-xl transition-opacity duration-300 text-lg">
								Resolvemos problemas, transformando los límites.
							</div>
						</div>
					</div>
					<div class="swiper-slide relative">
						<div class="relative group">
							<img src="{{ asset('assets/consultoria/images/ecosistema-de-negocios/cliente2.jpg') }}" class="w-full rounded-xl">
							<div class="opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-black bg-opacity-75 bg-blend-multiply flex justify-center items-center p-4 text-center text-white rounded-xl transition-opacity duration-300 text-lg">
								Resolvemos problemas, transformando los límites.
							</div>
						</div>
					</div>
					<div class="swiper-slide relative">
						<div class="relative group">
							<img src="{{ asset('assets/consultoria/images/ecosistema-de-negocios/cliente3.jpg') }}" class="w-full rounded-xl">
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