@extends('frontend.layout.app')
@section('content')
<div class="banner-1 jarallax" id="home">
		<img class="jarallax-img" src="{{asset('frontend_assets/images/22.jpg')}}" alt="">

		@include('frontend.layout.header')
	</div>
	<!-- contact -->
<div class="contact">
	<div class="container">
		<div class="wthree_head_section">
			<h3 class="w3l_header">Contact <span>Us</span></h3>
			<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty 
				and skin care services will suit every beauty need.</p>
			</div>		
		<div class="gal-btm">
			<div class="map-home">
				<div class="col-md-4 drop-pad sign-gd-two">
					<h3>Contact Us</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i> St. No: 3, Harban Nagar, Near ITI 
 <span>Bhatinda(PB).</span></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> +91 9876608195</li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> +91 9815680902</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
					</ul>
					<h3 class="connect">Get Connected</h3>
					<ul class="top-links">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="col-md-8 contact-w3ls">
					   @if(\Session::get('success'))
        <div class="alert alert-success" role="alert">
            <div class="alert-body">
                {{ \Session::get('success') }}
            </div>
        </div>
        {{ \Session::forget('success') }}
    @endif

    @if(\Session::get('error'))
        <div class="alert alert-danger" role="alert">
            <div class="alert-body">
                {{ \Session::get('error') }}
            </div>
        </div>
    @endif
				<form action="{{ route('contact.submit') }}" method="post">
    @csrf
    <div class="col-md-5 col-sm-5 contact-left agileits-w3layouts">
        <div class="f-control">
            <label class="header">Full Name <span>:</span></label>
            <input type="text" name="name" placeholder="Name" >
             @if ($errors->has('name'))
                            <span class="text-danger">
                                <p>{{ $errors->first('name') }}</p>
                            </span>
                            @endif
        </div>
        <div class="f-control">
            <label class="header">Email <span>:</span></label>
            <input type="email" class="email" name="email" placeholder="Email" required="">
              @if ($errors->has('email'))
                            <span class="text-danger">
                                <p>{{ $errors->first('email') }}</p>
                            </span>
                            @endif
        </div>
        <div class="f-control">
            <label class="header">Mobile Number <span>:</span></label>
            <input type="text" name="phone" placeholder="Mobile Number" required="">
              @if ($errors->has('phone'))
                            <span class="text-danger">
                                <p>{{ $errors->first('phone') }}</p>
                            </span>
                            @endif
        </div>
    </div>
    <div class="col-md-7 col-sm-7 contact-right agileits-w3layouts">
        <label class="header">Message <span>:</span></label>
        <textarea name="message" placeholder="Message" required=""></textarea>
          @if ($errors->has('message'))
                            <span class="text-danger">
                                <p>{{ $errors->first('message') }}</p>
                            </span>
                            @endif
    </div>
    <div class="clearfix"></div>
    <input type="submit" value="Send">
</form>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<!-- //contact -->
<!-- map -->
	<div class="frame">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110335.75030996023!2d74.95868684999999!3d30.208770149999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39173297173abbcd%3A0xa00033c0a58a5ac8!2sBathinda%2C%20Punjab!5e0!3m2!1sen!2sin!4v1687968894621!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		
	</div>

<!-- //Team section -->
@include('frontend.layout.footer')
@endsection
