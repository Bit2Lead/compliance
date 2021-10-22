@extends('frontend.layouts.master')
@section('content')
<br><br><br><br>

<div class="contact1">
	
		<div class="container-contact1">
		<div >
		<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.4204558667373!2d90.3868567699383!3d23.788678797835132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c76febebbf05%3A0xb2265ee108074b57!2sShahidullah%20palace!5e0!3m2!1sen!2sbd!4v1633448657912!5m2!1sen!2sbd" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
			<div class="contact1-pic js-tilt" data-tilt>
				<div class="text-left">
					<h3>Office Info</h3><hr>
					<p class="text-bold">Telephone: 02-9832867<br>
					Cell:<br>
					01739-138399<br>
					01312-138399<br>
					01772-825678<br>
					01839-920810<br>
					E-mail:<br>
					compliancetrainingbd2019@gmail.com</p>
				</div>
			</div>

			<form class="contact1-form validate-form" action="{{ route('contact_submit') }}" method="post">
				@csrf
				<br><br><br>
				<span class="contact1-form-title">
					Get in touch
				</span>
				@if(Session::has('status'))
				<div class="alert alert-primary" role="alert">
				  {{ Session::get('status') }}
				</div>
				@endif
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" placeholder="Name">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="email" placeholder="Email">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Phone number is required">
					<input class="input1" type="tel" name="phone" placeholder="Phone number">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="subject" placeholder="Subject">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" placeholder="Message"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button type="submit" class="contact1-form-btn">
						<span>
							Send inquiry
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>

@endsection

@section('style')
<link rel="icon" type="image/png" href="{{ asset('assets/contact/images/icons/favicon.ico') }}"/>
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/contact/vendor/animate/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/contact/vendor/css-hamburgers/hamburgers.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/contact/vendor/select2/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/contact/css/util.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/contact/css/main.css') }}">
@endsection

@section('script')
	<!-- <script src="{{ asset('assets/contact/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/contact/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('assets/contact/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/contact/vendor/select2/select2.min.js') }}"></script>

	<script src="{{ asset('assets/contact/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<script src="{{ asset('assets/contact/js/main.js') }}"></script> -->
@endsection