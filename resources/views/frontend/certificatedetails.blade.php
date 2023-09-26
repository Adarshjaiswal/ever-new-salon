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
		<h3 class="w3l_header">Your <span>Certificate</span></h3>
		
			</div>		
		<div class="gal-btm">
			<div class="map-home">
				<div class="col-md-2 drop-pad sign-gd-two">
					
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
				
 <div class="container pm-certificate-container" style="margin-top: 10px !important;">
    <div class="outer-border"></div>
    <div class="inner-border"></div>
    
    <div class="pm-certificate-border col-xs-12">
      <div class="row pm-certificate-header">
        <div class="pm-certificate-title cursive col-xs-12 text-center">
          <h2>M/S  EVERNEW BEAUTY SALON</h2>
          <p>Harbans Nagar Bathinda-151001(PB.)</p>
        </div>
      </div>

      <div class="row pm-certificate-body">
        
        	<div class="pm-certificate-block">
									<div class="col-xs-12">
										<div class="row">
											<div class="col-xs-2"><!-- LEAVE EMPTY --></div>
											<div class="pm-course-title underline col-xs-8 text-center">
												<span class="pm-credits-text block bold cursive">This is to acknowledge that
													@if($student)
														{{$student->fullname}} S/O / D/O {{$student->fathersname}} has successfully completed the course {{$student->course}}
													@else
														--------------------------- S/O / D/O --------------------------- has successfully completed the course ---------------
													@endif
												</span>
											</div>
											<div class="col-xs-2"><!-- LEAVE EMPTY --></div>
										</div>
									</div>
								</div>      
        
        <div class="col-xs-12">
          <div class="row">
            <div class="pm-certificate-footer">
                <div class="col-xs-4 pm-certified col-xs-4 text-center">
                  <span class="pm-credits-text block sans">EVERNEW BEAUTY SALON</span>
                  <span class="pm-empty-space block underline"></span>
                  <span class="bold block">work experience coordinator</span>
                </div>
                <div class="col-xs-4">
                  <!-- LEAVE EMPTY -->
                </div>
                <div class="col-xs-4 pm-certified col-xs-4 text-center">
                  <span class="pm-credits-text block sans">Date Completed</span>
                  <span class="pm-empty-space block underline">
@if($student)
                  	{{$student->addmissionupto}}
                  	@else
                  	-------------------------------
                  	@endif
                 </span>
                  <span class="bold block">Roll Number # @if($student)
                  {{$student->rollnumber}}
                  	@else
                  	-------------------------------
                  	@endif</span>
                </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>








				</div>
<div class="col-md-2 contact-w3ls">
</div>

				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  font-stretch: normal;
  src: url(https://fonts.gstatic.com/s/opensans/v35/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4gaVc.ttf) format('truetype');
}
@font-face {
  font-family: 'Pinyon Script';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/pinyonscript/v18/6xKpdSJbL9-e9LuoeQiDRQR8WOXaPw.ttf) format('truetype');
}
@font-face {
  font-family: 'Rochester';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/rochester/v18/6ae-4KCqVa4Zy6Fif-UC2FHS.ttf) format('truetype');
}
.cursive {
  font-family: "Cedarville Cursive", cursive;
}
.sans {
  font-family: "Open Sans", sans-serif;
}
.bold {
  font-weight: bold;
}
.block {
  display: block;
}
.underline {
  border-bottom: 1px solid #777;
  padding: 5px;
  margin-bottom: 15px;
}
.margin-0 {
  margin: 0;
}
.padding-0 {
  padding: 0;
}
.pm-empty-space {
  height: 40px;
  width: 100%;
}
body {
 
  
}
.pm-certificate-container {
  position: relative;
  width: 800px;
  height: 600px;
  background-color: #ac0304;
  padding: 30px;
  color: #333;
  font-family: "Open Sans", sans-serif;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
  /*background: -webkit-repeating-linear-gradient(
    45deg,
    #618597,
    #618597 1px,
    #b2cad6 1px,
    #b2cad6 2px
  );
  background: repeating-linear-gradient(
    90deg,
    #618597,
    #618597 1px,
    #b2cad6 1px,
    #b2cad6 2px
  );*/
}
.pm-certificate-container .outer-border {
  width: 794px;
  height: 594px;
  position: absolute;
  left: 50%;
  margin-left: -397px;
  top: 50%;
  margin-top: -297px;
  border: 2px solid #fff;
}
.pm-certificate-container .inner-border {
  width: 730px;
  height: 530px;
  position: absolute;
  left: 50%;
  margin-left: -365px;
  top: 50%;
  margin-top: -265px;
  border: 2px solid #fff;
}
.pm-certificate-container .pm-certificate-border {
  position: relative;
  width: 720px;
  height: 520px;
  padding: 0;
  border: 1px solid #e1e5f0;
  background-color: #ffffff;
  background-image: none;
  left: 50%;
  margin-left: -360px;
  top: 50%;
  margin-top: -260px;
}
.pm-certificate-container .pm-certificate-border .pm-certificate-block {
  width: 650px;
  height: 200px;
  position: relative;
  left: 50%;
  margin-left: -325px;
  top: 70px;
  margin-top: 0;
}
.pm-certificate-container .pm-certificate-border .pm-certificate-header {
  margin-bottom: 10px;
}
.pm-certificate-container .pm-certificate-border .pm-certificate-title {
  position: relative;
  top: 40px;
}
.pm-certificate-container .pm-certificate-border .pm-certificate-title h2 {
  font-size: 34px !important;
}
.pm-certificate-container .pm-certificate-border .pm-certificate-body {
  padding: 20px;
}
.pm-certificate-container .pm-certificate-border .pm-certificate-body .pm-name-text {
  font-size: 20px;
}
.pm-certificate-container .pm-certificate-border .pm-earned {
  margin: 15px 0 20px;
}
.pm-certificate-container .pm-certificate-border .pm-earned .pm-earned-text {
  font-size: 20px;
}
.pm-certificate-container .pm-certificate-border .pm-earned .pm-credits-text {
  font-size: 15px;
}
.pm-certificate-container .pm-certificate-border .pm-course-title .pm-earned-text {
  font-size: 25px;
}
.pm-certificate-container .pm-certificate-border .pm-course-title .pm-credits-text {
  font-size: 15px;
}
.pm-certificate-container .pm-certificate-border .pm-certified {
  font-size: 12px;
}
.pm-certificate-container .pm-certificate-border .pm-certified .underline {
  margin-bottom: 5px;
}
.pm-certificate-container .pm-certificate-border .pm-certificate-footer {
  width: 650px;
  height: 100px;
  position: relative;
  left: 50%;
  margin-left: -325px;
  bottom: -105px;
}



</style>	

<!-- //Team section -->
@include('frontend.layout.footer')
@endsection
