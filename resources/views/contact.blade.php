@extends('layouts.main')
	<!-- Primary Page Layout
	================================================== -->
@section('primary-layout')
	<div class="section big-65-height over-hide">
		<div class="hero-center-wrap z-bigger">
			<div class="container">
				<div class="row">
					<div class="col-md-12 parallax-fade-top">
						<p>get in touch</p>	
						<h2>Always Ready<br>to Work</h2>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<div class="section padding-bottom-big">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="sec-titile">
						<div class="subtitle">
							 drop us a line
						</div>	
					</div>	
				</div>
				<div class="col-md-8 mt-5 mt-md-0">
					<form name="ajax-form" id="ajax-form" action="mail-it.php" method="post">
						<div class="row">
							<div class="col-lg-6">
								<label for="name"> 
									<span class="error" id="err-name">please enter name</span>
								</label>
								<input name="name" id="name" type="text"   placeholder="Your Name: *"/>
							</div>
							<div class="col-lg-6 mt-4 mt-lg-0">
								<label for="email"> 
									<span class="error" id="err-email">please enter e-mail</span>
									<span class="error" id="err-emailvld">e-mail is not a valid format</span>
								</label>
								<input name="email" id="email" type="text"  placeholder="E-Mail: *"/>
							</div>
							<div class="col-lg-12 mt-4">
								<label for="message"></label>
								<textarea name="message" id="message" placeholder="Tell Us Everything"></textarea>
							</div>
							<div class="col-lg-12 mt-4">
								<div id="button-con"><button class="send_message js-tilt" id="send" data-lang="en" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>submit</span></button></div>					
							</div>	
							<div class="col-lg-12 mt-4">
								<div class="error" id="err-form"><span>There was a problem validating the form please check!</span></div>
								<div class="error" id="err-timedout">The connection to the server timed out!</div>
								<div class="error" id="err-state"></div>
								<div id="ajaxsuccess">Successfully sent!!</div>
							</div>	
						</div>	
					</form>	
				</div>
			</div>
		</div>
	</div>

	<div class="section padding-bottom-big">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="sec-titile">
						<div class="subtitle">
							contact details
						</div>	
					</div>	
				</div>
				<div class="col-md-8 mt-5 mt-md-0">
					<div class="row">
						<div class="col-lg-6 con-det">
							<h6>Email:</h6>
							<p>office@elpis.com</p>
							<p>support@elpis.com</p>
						</div>
						<div class="col-lg-6 mt-4 mt-lg-0 con-det">
							<h6>Tel:</h6>
							<p>+1 234 78364236</p>
							<p>+1 173 83559208</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section">
		<div id="cd-google-map">
			<div id="google-container"></div>
			<div id="cd-zoom-in"></div>
			<div id="cd-zoom-out"></div>
		</div>
	</div>

	<div class="section padding-top-big">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="sec-titile">
						<div class="subtitle">
							stay tunned
						</div>	
					</div>	
				</div>
				<div class="col-md-8 mt-5 mt-md-0">
					<div class="subscribe">
						<input type="text" placeholder="your e-mail here"/>
						<button data-lang="en"><span class="fa-long-arrow-right"></span></button>
					</div>
					<div class="subscribe-text">
						<p>* we promise that we won´t spam you, never.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection