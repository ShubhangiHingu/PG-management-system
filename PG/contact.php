<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CLICKDOTPG</title>
	<link rel = "icon" href =	"img/logo.png" type = "image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="http://code4berry.com" />
	<!-- css --> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
	<link href="css/flexslider.css" rel="stylesheet" /> 
	<link href="css/style.css" rel="stylesheet" />
</head>
<body>
	<div id="wrapper"> 

		<!-- start header -->
		<?php include('includes/header.php') ?>
		<!-- end header -->
		<section id="inner-headline">
		
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="pageTitle">Contact Us</h2>
					</div>
				</div>
			</div>
		</section>
		<br/>
<!-- <pre style="background-color:white;">          
   <a href="tel:7096289031"><i class="fa fa-phone fa-2x"  aria-hidden="true" style=""></i></a>                                                                                                                                                                                                                              <a href="mailto:shubhangi@gmail.com"><i class="fa fa-envelope fa-4x"  aria-hidden="true"></i></a>
</pre> -->

		<section id="content">

			<div class="container">
				<div class="row"> 
					<div class="col-md-12">
						<div class="about-logo">
							<h3>Get<span class="color"> in Touch</span></h3>
							<hr width="180" size="px" style="border-top: 2px solid black;    margin-left: 1px;"/>
							<p>Please Feel Free to Contact us for any PG Booking related Issues, Complaints and for any support needed for moving to the PG you have Booked through us.</p>
							<hr/>
						</div>  
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p> </p>
<br/><br/>
						<!-- Form itself -->
						<form name="sentMessage" id="contactForm"  validate> 
						
							<div class="input-field"> 
								<input type="text" name="name" class="form-control" 
								id="name" required
								data-validation-required-message="Please enter your name" />
								<label for="name" class="">   Name </label> 
								<p class="help-block"></p>

							</div> 	
							<div class="input-field"> 
								<input type="email" class="form-control" id="email" required
								data-validation-required-message="Please enter your email" /> 
								<label for="name" class="">   Email </label> 
							</div> 	

							<div class="input-field"> 
								<textarea rows="10" cols="100" required class="form-control materialize-textarea" 
								idation-required-message="Please enter your message" minlength="5" 
								data-validation-minlength-message="Min 5 characters" 
								maxlength="999" style="resize:none"></textarea>
								<label for="name" class="">   Message </label> 
							</div>
							
							<div id="success"> </div> <!-- For success/fail messages -->
							<button type="submit" class="btn btn-primary waves-effect waves-dark pull-right">Send</button><br />
						</form>
					</div>
					<br/>
					<div class="col-lg-6 map"style=" margin-left: 693px;
   							 margin-top: -480px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.496674974301!2d72.62776101444398!3d23.115514018649726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c4a9e3deea261%3A0xbc05c1601bdba993!2sShree%20Swaminarayan%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1646494848336!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
				</div>
			</div>
		</section>
		<?php include('includes/footer.php') ?>
	</div>
	<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up HillSide"></i></a>
<!-- javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="materialize/js/materialize.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>  
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/animate.js"></script>
	<!-- Vendor Scripts -->
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/animate.js"></script> 
	<script src="js/custom.js"></script>
	<script src="contact/jqBootstrapValidation.js"></script>
	<script src="contact/contact_me.js"></script>
</body>
</html>