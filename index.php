<!doctype html>
<html lang="en-US" class="no-js">
<head>
	<meta charset="utf-8">
	<title>Plant Your Project - Freedom 1st Credit Union</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/main.css?v=1">
	<script src="js/head.js"></script>
</head>
<body>
	<main class="container">
		
		<header>
			<img src="img/header.jpg" class="header">
		</header>
		
		<div class="bg-green group pad no-top">
			<div class="intro">	
				<h2>WIN $250 for your project!</h2>
				<p>Apply for a home equity line of credit and share a photo of your project and you’ll be automatically entered to win! </p>
			</div>
			<form name="upload" action="submit.php" method="post" enctype="multipart/form-data">
			<div class="half">
				<p><labal>Your Name
					<input name="name" type="text" value="" /></labal></p>
				<p><labal>Project Name
					<input name="project-name" type="text" value="" /></labal></p>
				<p><labal>Upload Photo<br>
					<input name="photo" type="file" /></labal></p>
			</div>
			<div class="half">
				<p><labal>Email
					<input name="email" type="text" value="" /></labal></p>
				<p><labal>Phone
					<input name="phone" type="text" value="" /></labal></p>
				<p><input type="submit" name="submit" value="Submit" /></p>
			</div>
			</form>
		</div>

		<div class="bg-white pad projects" style="min-height: 400px;">
			<div class="intro">
				<h2>See The Projects</h2>
			</div>
			<?php
			foreach ( glob( 'project-info/*.txt' ) as $file ) {
				$image_url = str_replace( 'project-info/', 'project-photos/', str_replace( '.txt', '.jpg', $file ) );
				?>
				<div class="third">
					<a href="<?php print $image_url; ?>"><img src="<?php print $image_url; ?>">
					<?php print file_get_contents( $file ); ?></a>
				</div>
				<?php
			}
			?>
		</div>
	
		<div class="bg-yellow text-center">
			<a href="https://www.facebook.com/Freedom1stfcu/" target="_blank"><img src="img/social.png"></a>
		</div>

		<div class="footer-bar group">
			<div class="wrap">

				<div class="fourty">
					<a href="https://www.freedom1stcu.com/"><img src="img/logo.png"></a>
				</div>
				<div class="sixty">
					<div class="address third">
						<strong>Main Office</strong><br>
						1645 Webster Street<br>
						Dayton, OH 45404<br>
						(937) 223-2828
					</div>
					<div class="address third">
						<strong>Eaton Office</strong><br>
						205 North Barron Street<br>
						Eaton, OH 45320<br>
						(937) 456-1197
					</div>
					<div class="address third">
						<strong>Lakengren Office</strong><br>
						4269 State Route 732<br>
						Eaton, OH 45320<br>
						(937) 456-6541
					</div>
				</div>

				<div class="fine-print group">
					*APR = Annual Percentage Rate. Rates as low as 1.99% after 15% discount. Actual rate and repayment terms you receive are based on your individual credit score and history and may be higher than 1.99% APR. Offer ends December 31, 2016. Offer may not be combined with any other offer and applies to new credit union loans only. 15% off refers to 15% off your new or used auto loan rate. Rate reduction pending approval and proof of rate may be required. Loans currently financed with the credit union are not eligible for promotion. Membership eligibility is required.Calculator based on best scenario. Your savings may be different on your unique situation and creditworthiness.  This credit union is federally insured by the National Credit Union Administration.
				</div>

			</div>
		</div>

	</main>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/main.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-38315794-16', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>