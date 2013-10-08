
<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="utf-8">
		<title>Affärsmarknad</title>
		<meta name="viewport" content="width=1200, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">

		<link href="assets/css/style.css" rel="stylesheet">
	</head>
	<body class="home page">

		<?php include 'nav.html'; ?>
		<div class="container">
			<div class="row">
				<div class="companygrid">
					<div class="span2">
						<div>
							<div class="body">
								<img src="assets/companys/novium.png">
								<h5>Novium Designbyrå</h5>
								<p>
									Vi hjälper företag att synas i mängden och bli valda.
								</p>
							</div>
							<div class="footer">
								<div class="social">
									<a class="btn btn-small" href="#"><i class="icon-thumbs-up"></i> Gilla</a>
									<a class="btn btn-small" href="#"><i class="icon-retweet"></i> Tweeta</a>
								</div>
								<ul class="unstyled">
									<li><i class="icon-arrow-up"></i> Aktiekurs +4,9%</li>
									<li><i class="icon-list-alt"></i> Ny pressrelese</li>
									<li><i class="icon-ok-circle"></i> Uppdaterad profil</li>
									<li><i class="icon-briefcase"></i> IT, media & hemelektronik</li>
									<li><i class="icon-tags"></i> Taggar:</li>
									<li>
										<span class="label label-info">Branding</span>
										<span class="label label-info">Webbdesign</span>
										<span class="label label-info">Logotyper</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="span3">
						<div>
							<div class="body">
								<img src="assets/companys/novium.png">
								<h5>Novium Designbyrå</h5>
								<p>
									Vi hjälper företag att synas i mängden och bli valda.
								</p>
							</div>
							<div class="footer">
								<div class="social">
									<a class="btn btn-small" href="#"><i class="icon-thumbs-up"></i> Gilla</a>
									<a class="btn btn-small" href="#"><i class="icon-retweet"></i> Tweeta</a>
								</div>
								<ul class="unstyled">
									<li><i class="icon-arrow-up"></i> Aktiekurs +4,9%</li>
									<li><i class="icon-list-alt"></i> Ny pressrelese</li>
									<li><i class="icon-ok-circle"></i> Uppdaterad profil</li>
									<li><i class="icon-briefcase"></i> IT, media & hemelektronik</li>
									<li><i class="icon-tags"></i> Taggar:</li>
									<li>
										<span class="label label-info">Branding</span>
										<span class="label label-info">Webbdesign</span>
										<span class="label label-info">Logotyper</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					</div>
					<div class="span2">
						<div>
							content
						</div>
					</div>
					<div class="span2">
						<div>
							content
						</div>
					</div>
					<div class="span2">
						<div>
							content
						</div>
					</div>
					<div class="span2">
						<div>
							content
						</div>
					</div>
					<div class="span2">
						<div>
							content
						</div>
					</div>
					<div class="span2">
						<div>
							content
						</div>
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
						<label class="control-label" for="inputEmail">Org. nr.</label>
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