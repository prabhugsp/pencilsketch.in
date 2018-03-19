<!DOCTYPE html>
<html>
<head>
	<title>Pencil Sketch - Orders to sketch, Order Drawing, Order an Artwork, Sketch my photo.</title>
	<link href="styles/main.css" rel="stylesheet" type="text/css" />
	<link href="styles/fonts.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
<div class="site-wrapper">
	
	<!-- [[ START HEADER -->
	<header class="header-container">
		<div class="header-content clearfix">
			<h1 class="logo"><a href="index.html"><img src="images/pencil-sketch-logo.png" alt="Pencil Sketch" /></a></h1>
			<nav class="user-nav">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html" class="active">About</a></li>
					<li><a href="artfolio.html">Gallery</a></li>
					<li><a href="recent-orders.html">Recent</a></li>
					<li><a href="sketch-me.php">Sketch-Me</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- END HEADER ]] -->
	
	<!-- [[ START SERVICES -->
	<section class="subpage-container">
		<div class="subpage-content sketchMe-page clearfix">
		
			<h2>So you want me to sketch?</h2>
		
			<div class="full-width-content clearfix">
				<div class="sketchme-left">
					<h3>How to order:</h3>
					<p>Fill up the order form on right. <strong>Add high-resolution photo (1200px and more / it is recommended to send the close-up image)</strong> and enter a brief description of what you want to be in your artwork.</p>
					
					<p>The photo can be a portrait, a landscape, a pet or any other thing of your discretion.</p>
					<p>The default size of the drawing will be making up to A4 format for portrait that will cost you INR 3500. If you are looking for a slightly bigger version, then an A3 size (420x297mm) sketch would cost you INR 5000. Or, If your option is to purchase an already drawn artwork from my gallery, mention the name of the artwork in your message.</p>
					
					<span class="color-purple important-notes">
					<h3>Important Note: </h3>
					<ul>
						<li>Let me know your choice of medium for the artwork - you can choose between a realistic hand made pencil sketch or a beautiful painting filled with colors for your artwork. The artwork will be delivered to you within 4 days (usually) from the date of your order.</li>
						<li>Disclaimer: Based on the specification and choice of your order the above described cost may commensurate with the size of the sketch.</li>
					</ul>
					</span>
					
					<div class="artist-contact">
					
						<h3>Contact Information</h3>
						
						<p><b>Artist : Prabhu Gsp</b><br/>
						Phone    : +91 8971214863 <br/>
						Email    : pencilsketch.in@gmail.com<br/>
						Location : Bangalore<br/>
						Country  : India<br/>
						</p>
					<br/>
						<p>
						Other Artist Recommendation:<br/>
						Phone : +91 9448803049<br/>
						</p>

					</div>
				</div>
				
				<div class="sketchme-right">
					
					<div id="orderForm" class="order-form clearfix">
						<h3>Order Form</h3>
						<form name="orderForm" action="sendmail.php" method="post" enctype="multipart/form-data">
							<p>
								<label for="name">Name:<span class="mandatory">*</span></label>
								<input name="name" id="name" type="text" class="text-style" placeholder="Full Name" />
								<label class="error" for="name" id="name_error">This field is required.</label>
							</p>
							<p>
								<label for="email">Email:<span class="mandatory">*</span></label>
								<input name="email" id="email" type="text" class="text-style" placeholder="youname@example.com" />
								<label class="error" for="email" id="email_error">This field is required.</label>
							</p>
							<p>
								<label for="mobile">Mobile:</label>
								<input name="mobile" id="mobile" type="text" class="text-style" placeholder="Your contact number" />
							</p>
							<p>
								<label class="message">Message:<span class="mandatory">*</span></label>
								<textarea name="message" id="message" class="textarea-style" placeholder="Your Message"></textarea>
								<label class="error" for="message" id="message_error">This field is required.</label>
							</p>
							<p>
								<label for="uploaded_file">Image to be sketched:<span class="mandatory">*</span></label>
								<input name="uploaded_file" id="uploaded_file" type="file" />
								<label class="error" for="upload_file" id="upload_file_error">This field is required.</label>
							</p>
							
							<div class="order-btn-wrp clearfix">
								<span><span class="mandatory">*</span> indicates mandatory fields</span>
								<input name="submitOrder" id="submitOrder" type="submit" class="submit-button" value="Submit Order">
							</div>
							
						</form>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	<!-- END SERVICES ]] -->
	
	<!-- [[ START SITE NAVIGATION -->
	<section class="site-navigation-container">
		<div class="site-navigation clearfix">
			<ul>
				
				<li>
					<h2>Site Navigation</h2>
					<ul class="site-nav clearfix">
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="artfolio.html">Gallery</a></li>
						<li><a href="recent-orders.html">Recent</a></li>
						<li><a href="sketch-me.html">Sketch-Me</a></li>
					</ul>
					<p><span>Contact information</span></p>
					<p>Artist: Gsp Prabhu</p>
					<p>Mobile: +91 8971214863</p>
					<p>email : <a href="mailto:pencilsketch.in@gmail.com">pencilsketch.in@gmail.com</a></p>
				</li>
				
				<li class="middle">
					<h2>pencil sketch on facebook</h2>
					<div class="pencil-sketch-fb">
						<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like-box" data-href="https://www.facebook.com/pencilsketching" data-width="220" data-show-faces="true" data-stream="false" data-header="false"></div>
					</div>
				</li>
				
				<li>
					<h2>Follow us</h2>
					<ul class="follow-us">
						<li><a href="https://www.facebook.com/pencilsketching" target="_blank" class="facebook">Facebook</a></li>
						<li><a href="http://twitter.com/#!/pencilsketching"  target="_blank" class="twitter">Twitter</a></li>
						<li><a href="#"  target="_blank" class="rss">Rss Feeds</a></li>
						<li><a href="#"  target="_blank" class="blogger">Blogger</a></li>
					</ul>
				</li>

			</ul>
		</div>
	</section>
	<!-- END SITE NAVIGATION ]] -->
	
	<!-- [[ START FOOTER -->
	<footer class="footer-container">
		<div class="footer-content clearfix">
			<p class="footer-info">
				&copy; 2016, <a href="http://www.pencilsketch.in">Pencil Sketch</a> All rights reserved.
			</p>
			
			<p class="footer-ad">
				Designed by <a href="http://www.logeshpaul.com" target="_blank">Logesh Paul</a>
			</p>
		</div>
	</footer>
	<!-- END FOOTER ]] -->

	<script type="text/javascript" src="scripts/jquery.js"></script>
	<script type="text/javascript" src="scripts/application.js"></script>

	<script>

	// $("#uploaded_file").change(function() {
	// 	updatedPath = $("#uploaded_file").val().replace("C:\\fakepath\\", "");

	// 	document.getElementById("uploaded_file").value = updatedPath;


	// 	// inputNode = $("#uploaded_file");
	// 	// $("#uploaded_file").value = $("#uploaded_file").val().replace("C:\\fakepath\\", "");

 //        //uploadedFileName = document.getElementById("uploaded_file").files[0].name;
 //        //$("#uploaded_file").val().replace("C:\\fakepath\\", "");
 //        //console.log(uploadedFileName);
 //        //$(this).attr("val", uploadedFileName);
 //    });

	

		//document.getElementById("uploaded_file").files[0].fileName;
	</script>
</div>
</body>
</html>