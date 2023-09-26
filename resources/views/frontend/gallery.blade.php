@extends('frontend.layout.app')
@section('content')
<div class="banner-1 jarallax" id="home">
		<img class="jarallax-img" src="{{asset('frontend_assets/images/22.jpg')}}" alt="">

		@include('frontend.layout.header')
	</div>
	<!--gallery-->
	<div class="gallery">
		<div class="container">	
		<div class="wthree_head_section">
				<h3 class="w3l_header">Our <span>Gallery</span></h3>
				<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty 
and skin care services will suit every beauty need.</p>
			</div>
			<div class="gallery-info">
				<div class="col-md-3 gallery-grids">
					<a href="{{asset('frontend_assets/images/p1.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('frontend_assets/images/p1.jpg')}}" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="{{asset('frontend_assets/images/p2.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('frontend_assets/images/p2.jpg')}}" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="{{asset('frontend_assets/images/p3.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('frontend_assets/images/p3.jpg')}}" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="{{asset('frontend_assets/images/p4.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('frontend_assets/images/p4.jpg')}}" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="{{asset('frontend_assets/images/p5.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('frontend_assets/images/p5.jpg')}}" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="{{asset('frontend_assets/images/p6.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('frontend_assets/images/p6.jpg')}}" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="{{asset('frontend_assets/images/p7.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('frontend_assets/images/p7.jpg')}}" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="{{asset('frontend_assets/images/p8.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('frontend_assets/images/p8.jpg')}}" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="{{asset('frontend_assets/images/p9.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('frontend_assets/images/p9.jpg')}}" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="{{asset('frontend_assets/images/p10.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('frontend_assets/images/p10.jpg')}}" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="{{asset('frontend_assets/images/p11.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('frontend_assets/images/p11.jpg')}}" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="{{asset('frontend_assets/images/p12.jpg')}}" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="{{asset('frontend_assets/images/p12.jpg')}}" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<script src="{{asset('frontend_assets/js/lightbox-plus-jquery.min.js')}}"></script>
		</div>
</div>

<!-- //Team section -->
@include('frontend.layout.footer')
@endsection
