@extends('frontend.layout.app')
@section('content')
<div class="banner-1 jarallax" id="home">
		<img class="jarallax-img" src="{{asset('frontend_assets/images/22.jpg')}}" alt="">

		@include('frontend.layout.header')
	</div>
	<div class="about">
	<div class="container">
	<div class="wthree_head_section">
				<h3 class="w3l_header">About <span>Us</span></h3>
				<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty 
and skin care services will suit every beauty need.</p>
			</div>
		<div class="ab-agile">
			<div class="col-md-6 aboutleft">
				<h4>Welcome to Evernew Beauty Salon,</h4>
				<p class="para1">We believe that beauty is not just about appearance; it's about the experience and the feeling of confidence and self-care it brings. Step into our salon and immerse yourself in a world of exceptional beauty and wellness services tailored to your unique needs. </p>
				<p><i class="fa fa-check" aria-hidden="true"></i> A salon experience that goes beyond beauty, focusing on holistic well-being and self-care. </p>
				<p><i class="fa fa-check" aria-hidden="true"></i> A commitment to enhancing your natural beauty and boosting your confidence. </p>
				<p><i class="fa fa-check" aria-hidden="true"></i> A comprehensive range of services including hair, nails, skincare, makeup, and more. </p>
				</div>
			<div class="col-md-6 aboutright">
				<img src="{{asset('frontend_assets/images/p1.jpg')}}" class="img-responsive" alt="" />
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- wthree-mid -->
	<div class="wthree-mid jarallax">
		<img class="jarallax-img" src="{{asset('frontend_assets/images/33.jpg')}}" alt="">
		<div class="container">
			<h3>Reveal Your Inner Glow</h3>
			<p>At Evernew Beauty Salon, we believe that true beauty emanates from a combination of self-care, confidence, and a vibrant complexion. Step into our salon and let us guide you on a transformative journey towards a revitalized and radiant complexion.</p>
			<div class="botton">
				<a href="about.html">About Us</a>
			</div>
		</div>
	</div>
<!-- //wthree-mid -->

<!-- Team section -->
<section class="team" >
	<div class="container">
		<div class="wthree_head_section">
				<h3 class="w3l_header">Our <span>Certificates</span></h3>
				<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty 
and skin care services will suit every beauty need.</p>
			</div>
		<div class="team-grid-top">
			<div class="col-md-6 team1">
				<div class="inner-team1">
				<img src="{{asset('frontend_assets/images/cert1.jpg')}}" alt="" />
				
				</div>
			</div>
			<div class="col-md-6 team1">
				<div class="inner-team1">
				<img src="{{asset('frontend_assets/images/cert2.jpg')}}" alt="" />
				
					
				</div>
			</div>
		
		
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		
	</div>
</section>

<!-- //Team section -->
@include('frontend.layout.footer')
@endsection
