@extends('layouts.main')

@section('front-end')
<x-front-navbar></x-front-navbar>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/train4.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate pb-5 text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
				<h1 class="mb-0 bread">Contact us</h1>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pb contact-section mb-4">
	<div class="container">
		<div class="row d-flex contact-info">
			<div class="col-md-4 d-flex">
				<div class="align-self-stretch box p-4 text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="fa fa-map-marker"></span>
					</div>
					<h3 class="mb-2">Address</h3>
					<p>Gedung C Fasilkom-TI, Universitas Sumatera Utara, Jl. Alumni No.3, Padang Bulan, Kec. Medan Baru, Kota Medan, Sumatera Utara 20155</p>
				</div>
			</div>
			<div class="col-md-4 d-flex">
				<div class="align-self-stretch box p-4 text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="fa fa-phone"></span>
					</div>
					<h3 class="mb-4">Contact Number</h3>
					<p><a href="https://wa.me/6281260679408?text=Ingin%20Melaporkan%20Masalah">081260679408 Admin 1(Petra)</a></p>
					<p><a href="https://wa.me/6281364981832?text=Ingin%20Melaporkan%20Masalah">081364981832 Admin 1(Syuja)</a></p>
				</div>
			</div>
			<div class="col-md-4 d-flex">
				<div class="align-self-stretch box p-4 text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="fa fa-paper-plane"></span>
					</div>
					<h3 class="mb-4">Email Address</h3>
					<p><a href="mailto:sonicticket@gmail.com">sonic@gmail.com</a></p>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section contact-section ftco-no-pt mt-2">
	<div class="container">
		<div class="row block-9">
			<div class="col-md-12 d-flex justify-content-center">
				<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1eBukMCmT6gtQXaLc3dEO-lQ7tvVCAT4&ehbc=2E312F&noprof=1" width="640" height="480"></iframe>			</div>
		</div>
	</div>
</section>


<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md pt-5">
				<div class="ftco-footer-widget pt-md-5 mb-4">
					<h2 class="ftco-heading-2">About</h2>
					<p>Sonic yang berarti kecepatan. Ini menandakan website
						kami memberi respon dengan cepat dan bisa diandalkan. Sesuai dengan kebutuhan pengguna kami.</p>
					<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
						<li class="ftco-animate"><a href="https://www.instagram.com/sonicjourneyy?igsh=ZmxzMzM1c201ancx&utm_source=qr" target="_blank"><span class="fa fa-twitter"></span></a></li>
						<li class="ftco-animate"><a href="" target="_blank"><span class="fa fa-facebook"></span></a></li>
						<li class="ftco-animate"><a href="https://www.instagram.com/sonicjourneyy?igsh=ZmxzMzM1c201ancx&utm_source=qr" target="_blank"><span class="fa fa-instagram"></span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md pt-5 border-left">
				<div class="ftco-footer-widget pt-md-5 mb-4">
					<h2 class="ftco-heading-2">Have a Questions?</h2>
					<div class="block-23 mb-3">
						<ul>
							<li><span class="icon fa fa-map-marker"></span><span class="text">Gedung C Fasilkom-TI, Universitas Sumatera Utara, Jl. Alumni No.3, Padang Bulan, Kec. Medan Baru, Kota Medan, Sumatera Utara 20155</span></li>
							<li><a href="https://wa.me/6281260679408?text=Ingin%20Melaporkan%20Masalah"><span class="icon fa fa-whatsapp"></span><span class="text">081260679408 Admin 1(Petra)
										</span></a></li>
							<li><a href="https://wa.me/6281364981832?text=Ingin%20Melaporkan%20Masalah"><span class="icon fa fa-whatsapp"></span><span class="text">081364981832 Admin 2(syuja)
										</span></a></li>
							<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">Sonic@gmail.com</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">

				<p>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Sonic &copy;
					<script>
						document.write(new Date().getFullYear());
					</script>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
	</svg></div>
@endsection