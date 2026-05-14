<!DOCTYPE html>
<html lang="es">
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
						<a href="#" class="block px-4 py-2 font-medium text-white text-sm mb-2 lg:mb-0 lg:mx-2">Servicios <i class="fas fa-chevron-down"></i></a>
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
						<a href="{{ route('consultoria.index') }}#contacto" class="block px-4 py-2 font-medium bg-white text-[#002696] text-sm rounded mb-2 lg:mb-0 lg:mx-2">Contáctanos</a>
					</li>
				</ul>
			</div>
		</div>
	</header>

	@yield('content')

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

	<script>
		//AOS

		AOS.init();
		

		// Menu responsive
		const toggleMenu = document.querySelector('#toggle-menu');
		const menu = document.querySelector('#menu');

		toggleMenu.addEventListener('click', function(){
			menu.classList.toggle('hidden');
		})

		//Carousels
		

		new Swiper('#swiper-clients', {
			slidesPerView: 1,
			spaceBetween: 10,
			autoplay: {
				delay: 3000
			},
			loop: true,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			breakpoints: {
				640: {
					slidesPerView: 1,
					spaceBetween: 10,
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 20,
				},
				1024: {
					slidesPerView: 3,
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
	@yield('scripts')
</body>
</html>