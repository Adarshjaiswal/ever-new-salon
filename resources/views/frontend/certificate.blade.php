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
			<h3 class="w3l_header">Check <span>Certificate</span></h3>
			<p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty 
				and skin care services will suit every beauty need.</p>
			</div>		
		<div class="gal-btm">
			<div class="map-home">
				<div class="col-md-4 drop-pad sign-gd-two">
					
				</div>
				<div class="col-md-4 contact-w3ls">
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
				<form action="{{ route('certificate.check') }}" method="post">
    @csrf
  
    <div class="col-md-12 col-sm-12 contact-right agileits-w3layouts">
       <div class="f-control">
            <label class="header">Roll number <span>:</span></label>
            <input type="text" class="email" name="rollnumber" placeholder="Roll number" required="">
             
        </div>
         @if ($errors->has('rollnumber'))
                            <span class="text-danger">
                                <p>Enter Valid Roll Number</p>
                            </span>
                            @endif
    </div>
    <div class="clearfix"></div>
    <input type="submit" value="Check">
</form>

				</div>
<div class="col-md-4 contact-w3ls">
</div>

				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>

	

<!-- //Team section -->
@include('frontend.layout.footer')
@endsection
