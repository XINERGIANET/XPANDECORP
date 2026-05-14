@extends('consultoria.template')

@section('content')
<section class="py-16 px-4 bg-[#ededf4]">
	<div class="container mx-auto">
		<div class="grid grid-cols-12 gap-8 items-center mb-4 lg:w-3/4 mx-auto">
			<div class="col-span-12 md:col-span-6 mb-4">
				<h2 class="text-3xl mb-4" data-aos="fade-up">¿Quienes somos?</h2>
				<p class="text-xl text-justify" data-aos="fade-up">Somos una consultura de negocios especializada en <span class="font-semibold">desarrollo empresarial y sistemas integrados</span> de gestión, el principal compromiso con nuestros clientes es <span class="font-semibold">optimizar su desempeño</span> mediante un enfoque aplicado a la ingenería de procesos.</p>
			</div>
			<div class="col-span-12 md:col-span-6 mb-4">
				<iframe class="w-full aspect-video rounded-lg" src="https://www.youtube.com/embed/mYya8AjMIYE?si=oFsezSPc1OryaKoy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen data-aos="fade-left"></iframe>
			</div>
		</div>
	</div>
</section>

<section class="py-16 px-4 bg-[#f4f4f9]">
	<div class="container mx-auto">
		<div class="lg:w-3/4 mx-auto">
			<h2 class="text-3xl mb-4 text-center" data-aos="fade-up">Nuestra historia</h2>
			<div class="hidden lg:block">
				<img src="{{ asset('assets/consultoria/images/nosotros/timeline.jpg') }}" class="w-full">
			</div>
			<div class="swiper w-full lg:hidden" id="swiper-timeline" data-aos="fade-up">
				
				<div class="swiper-wrapper">
					<!-- Slides -->
					<div class="swiper-slide">
						<div class="text-center">
						<img src="{{ asset('assets/consultoria/images/nosotros/icono1.png') }}" class="inline-block w-32 object-contain aspect-square mb-4">
						<span class="block text-2xl font-bold mb-2">2021</span>
						<span class="block text-xl font-medium">Iniciamos operaciones 10/08</span>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="text-center">
						<img src="{{ asset('assets/consultoria/images/nosotros/icono2.png') }}" class="inline-block w-32 object-contain aspect-square mb-4">
						<span class="block text-2xl font-bold mb-2">2021</span>
						<span class="block text-xl font-medium">Implementación de primera oficina (centro de operaciones)</span>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="text-center">
						<img src="{{ asset('assets/consultoria/images/nosotros/icono3.png') }}" class="inline-block w-32 object-contain aspect-square mb-4">
						<span class="block text-2xl font-bold mb-2">2021</span>
						<span class="block text-xl font-medium">Creación de metodología Xpande: EPEEA</span>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="text-center">
						<img src="{{ asset('assets/consultoria/images/nosotros/icono4.png') }}" class="inline-block w-32 object-contain aspect-square mb-4">
						<span class="block text-2xl font-bold mb-2">2022</span>
						<span class="block text-xl font-medium">Desarrollo de primeros proyectos</span>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="text-center">
						<img src="{{ asset('assets/consultoria/images/nosotros/icono5.png') }}" class="inline-block w-32 object-contain aspect-square mb-4">
						<span class="block text-2xl font-bold mb-2">2022</span>
						<span class="block text-xl font-medium">Desarrollo de cartera de primeros clientes</span>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="text-center">
						<img src="{{ asset('assets/consultoria/images/nosotros/icono6.png') }}" class="inline-block w-32 object-contain aspect-square mb-4">
						<span class="block text-2xl font-bold mb-2">2022</span>
						<span class="block text-xl font-medium">Generación de alianzas estratégicas</span>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="text-center">
						<img src="{{ asset('assets/consultoria/images/nosotros/icono7.png') }}" class="inline-block w-32 object-contain aspect-square mb-4">
						<span class="block text-2xl font-bold mb-2">2023</span>
						<span class="block text-xl font-medium">Nuevo servicio: Higiene e inocuidad alimentaria</span>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="text-center">
						<img src="{{ asset('assets/consultoria/images/nosotros/icono8.png') }}" class="inline-block w-32 object-contain aspect-square mb-4">
						<span class="block text-2xl font-bold mb-2">2023</span>
						<span class="block text-xl font-medium">Presencia en Trujillo y Lima</span>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="text-center">
						<img src="{{ asset('assets/consultoria/images/nosotros/icono9.png') }}" class="inline-block w-32 object-contain aspect-square mb-4">
						<span class="block text-2xl font-bold mb-2">2023</span>
						<span class="block text-xl font-medium">Nueva línea de negocio: Sistema web de gestión empresarial XINERGIA</span>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="text-center">
						<img src="{{ asset('assets/consultoria/images/nosotros/icono10.png') }}" class="inline-block w-32 object-contain aspect-square mb-4">
						<span class="block text-2xl font-bold mb-2">2023</span>
						<span class="block text-xl font-medium">Nueva oficina</span>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="text-center">
						<img src="{{ asset('assets/consultoria/images/nosotros/icono11.png') }}" class="inline-block w-32 object-contain aspect-square mb-4">
						<span class="block text-2xl font-bold mb-2">2024</span>
						<span class="block text-xl font-medium">Sociedad con Chango Maker</span>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="text-center">
						<img src="{{ asset('assets/consultoria/images/nosotros/icono12.png') }}" class="inline-block w-32 object-contain aspect-square mb-4">
						<span class="block text-2xl font-bold mb-2">2024</span>
						<span class="block text-xl font-medium">Lanzamiento de Holding de servicios profesionales XPANDECORP</span>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="text-center">
						<img src="{{ asset('assets/consultoria/images/nosotros/icono13.png') }}" class="inline-block w-32 object-contain aspect-square mb-4">
						<span class="block text-2xl font-bold mb-2">2024</span>
						<span class="block text-xl font-medium">Automatización de procesos internos: Xinergia</span>
						</div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
		
	</div>
</section>
@endsection

@section('scripts')
<script>
	new Swiper('#swiper-timeline', {
		speed: 1000,
		autoplay: {
			delay: 2000,
		},
		loop: true,
		pagination: {
			el: '.swiper-pagination',
		},		
	});
</script>
@endsection