
<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="utf-8">
		<title>Affärsmarknad</title>
		<meta name="viewport" content="width=1200, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">

		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
	</head>
	<body class="home">

		<?php include 'nav.html'; ?>

		<div id="company-of-the-day" class="carousel slide">
			<div class="carousel-inner">
				<div class="active item slide1">
					<div class="container">
						<div class="hero-unit highlighted-company">
							<h2>DigiBook</h2>
							<p>Företaget som låter dig digitalisera alla dina skolböcker. Glöm tunga skolväskor - allt får plats i mobilen, datorn eller läsplattan. Syncas automatiskt i molnet!</p>
							<p><a class="btn btn-success">Mer om dagens företag &raquo;</a></p>
						</div>
					</div>
				</div>
				<div class="item">Bild nummer två i bildspelet</div>
				<div class="item">Bild nummer tre i bildspelet</div>
			</div>
			<a class="carousel-control left" href="#company-of-the-day" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#company-of-the-day" data-slide="next">&rsaquo;</a>
		</div>
		<div class="be-a-member align-center"><a href="#"><i>Vill ert företag också synas här?</i></a></div>

		<div class="container">
			<div class="introduction">

				<h1>Välkommen till UF-marknad</h1>
				<p class="marketing-byline">Låt oss presentera möjligheterna med vår tjänst!</p>

				<div class="row">
					<div class="span4">
						<img src="assets/img/icon1.png">
						<h3>Sök företag</h3>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					</div>
					<i class="icon1"></i>
					<div class="span4">
						<img src="assets/img/icon1.png">
						<h3>Hitta spännande produkter</h3>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					</div>
					<i class="icon1"></i>
					<div class="span4">
						<img src="assets/img/icon1.png">
						<h3>Anlita unga entreprenörer</h3>
						<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
					</div>
				</div>
			</div>
		</div>

		<?php include 'footer.html'; ?>

		<!-- Login modal -->
		<div class="modal fade hide" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel">Logga in</h3>
			</div>
			<div class="modal-body">

				<form class="form-horizontal">
					<div class="control-group">
						<label class="control-label" for="inputEmail">Org. nr. UF</label>
						<div class="controls">
							<input type="text" id="inputRegnr" placeholder="Organisationsnummer">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">Lösenord</label>
						<div class="controls">
							<input type="password" id="inputPassword" placeholder="Lösenord">
						</div>
					</div>
				</form>
			</div>

			<div class="modal-footer">
				<button class="btn btn-primary">Logga in</button>
			</div>

		</div>

		<!-- Sign up modal -->
		<div class="modal fade hide" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel">Bli medlem</h3>
			</div>
			<div class="modal-body">
				<p>One fine body…</p>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button class="btn btn-primary">Save changes</button>
			</div>
		</div>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

	</body>
</html>