<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Nimue's Grotto">
	<title>Nimue's Grotto - </title>
	<link href="https://fonts.googleapis.com/css?family=Griffy" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="css/site.css">
	<link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body>
	<?php include 'partials/header.html' ?>

	<main class="container-fluid">
		<section class="row">
			<?php $active = '' ?>
			<?php include 'partials/issue-menu.html' ?>			
			<section class="col-md-6">
				<article>
					<h1>Title</h1>
					<p class="author">by Author</p>

				</article>
				<h2>About the Author</h2>
				<p></p>
			</section>
		</section>
	</main>

	<?php include 'partials/footer.html' ?>

	<!-- End of Content -->
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>