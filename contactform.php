<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Contact page for Nimue's Grotto">
  <title>Nimue's Grotto - Contact Us</title>
  
	<link href="https://fonts.googleapis.com/css?family=Griffy" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="css/site.css">
	<link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body>
	<?php include 'partials/header.html' ?>
	<main class="container-fluid">
		<section class="row">
			<?php $active = 'contact' ?>
			<?php include 'partials/issue-menu.html' ?>
			<section class="col-md-6">
				<article>
					<h1>Contact Us</h1>
					<p>We would love to hear from you. Have a comment or a question? Please fill out the form below. We will get back to you as quickly as possible.</p>
					<form action="feedback.php" method="post" accept-charset="UTF-8">
						<div class="form-group">
							<label for="tswname">Name</label> <input class="form-control" type="text" name="fullname" style="max-width: 100%;" id="tswname" size="39">
						</div>
						<div class="form-group">
							<label for="tswemail">Email</label> <input class="form-control" type="text" style="max-width: 100%;" id="tswemail" name="email" size="39">
						</div>
						<label for="tswcomments">Comments</label><br>
						<textarea class="form-control" rows="5" name="comments" id="tswcomments"></textarea>
						&nbsp;<br>
						<div class="g-recaptcha" data-sitekey="6LeQsxcUAAAAAJ8Zp3zGPIlvxgh01zzh8unvnkHt"></div>
						<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
						<noscript>
							<div style="width: 302px; height: 352px;">
								<div style="width: 302px; height: 352px; position: relative;">
									<div style="width: 302px; height: 352px; position: absolute;">
										<iframe src="https://www.google.com/recaptcha/api/fallback?hl=en&amp;k=6LeQsxcUAAAAAJ8Zp3zGPIlvxgh01zzh8unvnkHt"
										frameborder="0" scrolling="no" style="width: 302px; height:352px; border-style: none;" title="Test for Homo Sapiens"></iframe>
									</div>
									<label for="g-recaptcha-response">Please enter the information requested into the box below</label>
									<div style="width: 250px; height: 80px; position: absolute; border-style: none; bottom: 21px; left: 25px; margin: 0px; padding: 0px; right: 25px;">
										<textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"
										style="width: 250px; height: 80px; border: 1px solid #c1c1c1; margin: 0px; padding: 0px; resize: none;" cols="20" rows="5"></textarea>
									</div>
								</div>
							</div>
						</noscript>
						&nbsp;<br>
						<input class="btn btn-primary" type="submit" value="Send Feedback">
						<br>&nbsp;<br>
					</form>					
				</article>
			</section>
		</section>
	</main>

	<?php include 'partials/footer.html' ?>
</body>
</html>