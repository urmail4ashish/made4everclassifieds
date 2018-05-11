<?php include "header.php"; ?>

<?php
 if (isset($_POST["fsubmit"])){
			$subject = 'Query for contact form';
			
			$message = 'Name: ' . $_REQUEST['fname'] . "\r\n\r\n";	
			$message .= 'Email: ' . $_REQUEST['femail'] . "\r\n\r\n";
			$message .= 'Message: ' . $_REQUEST['fmsg'] . "\r\n\r\n";	
			
			$headers = 'From: '."support@made4everclassifieds.in"."\r\n";
			
			mail('support@made4everclassifieds.in', $subject, $message, $headers);
 } 
?>




<div id="fh5co-page">
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/Contact.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2 style="background-color:#27E1CE; opacity: 0.6;">Get in touch.</h2>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-md-push-2 animate-box">
					<h2>Get In Touch</h2>
				</div>
				<div class="col-md-3">
					<h3>Contact Info.</h3>
					<ul class="contact-info">
						<li><i class="icon-map"></i>Pragati Tower, 26, Govind Lal Sikka Marg, Prasad Nagar, Karol Bagh, New Delhi, Delhi 110008</li>
						<li><i class="icon-phone"></i>+011 41451718</li>
						<li><i class="icon-envelope"></i><a href="#">info@made4everclassifieds.in</a></li>
					</ul>
				</div>
				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<div class="row">
					<form action="#"  method="POST" style="width:100%"> 
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Name" type="text" name="fname">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Email" type="text" name="femail">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="fmsg" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<button name="fsubmit" value="Send Message" class="btn btn-primary" type="submit">
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>

<div id="map" class="animate-box" ></div>

<?php include "footer.php"; ?>