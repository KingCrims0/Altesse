<!DOCTYPE html>
<html lang="en">

<head>
	<!--====== Required meta tags ======-->
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!--====== Title ======-->
	<title>Altesse</title>
	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png" />
	<!--====== Bootstrap css ======-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<!--====== Fontawesome css ======-->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
	<!--====== flaticon css ======-->
	<link rel="stylesheet" href="assets/css/flaticon.css" />
	<!--====== nice select css ======-->
	<link rel="stylesheet" href="assets/css/nice-select.css" />
	<!--====== Magnific Popup css ======-->
	<link rel="stylesheet" href="assets/css/magnific-popup.css" />
	<!--====== Slick css ======-->
	<link rel="stylesheet" href="assets/css/slick.css" />
	<!--====== Default css ======-->
	<link rel="stylesheet" href="assets/css/default.css" />
	<!--====== Style css ======-->
	<link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
	<!--====== HEADER PART START ======-->
	<?php include "header.php";?>

	<!--====== BREADCRUMBS PART START ======-->
	<section class="breadcrumbs-section mt-90 pt-180 pb-180 bg_cover"
		style="background-image: url(assets/images/apropos.png);">
		<div class="container">
			<div class="breadcrumbs-text">
				<h1>Contact</h1>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
		</div>
	</section>
	<!--====== BREADCRUMBS PART END ======-->
	<!--====== CONTACT PAGE WRAP START ======-->
	<section class="contact-page-wrap pt-130 pb-130">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contact-information">
						<span>Informations de contact</span>
						<h2 class="title">
							Une question ? Contactez nous
						</h2>
						<ul class="mt-60">
							<li>
								<i class="fas fa-phone"></i>07 49 21 95 70
							</li>
							<li>
								<i class="fas fa-map-marker-alt"></i>54 rue Maréchal Leclerc rombas 57120
							</li>
							<li>
								<i class="fas fa-envelope-open"></i>Contact@altesse-france.fr
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="contact-form">
						<h3 class="title">Ecrivez nous</h3>
						<form method="post" action="traitements/message.php">
							<div class="row">
								<div class="col-12 mb-30">
									<textarea name="message" placeholder="Votre Message"></textarea>
								</div>
								<div class="col-6 mb-30">
									<input name="name" type="text" placeholder="Nom et Prénom" />
								</div>
								<div class="col-6 mb-30">
									<input name="mail" type="email" placeholder="Votre Email" />
								</div>
								<div class="col-6 mb-30">
									<input name="where" type="hidden" value="fromContact" />
								</div>
								<div class="col-12">
									<button type="submit" formnovalidate class="main-btn">
										Envoyer
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="contact-maps">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2604.5281563642584!2d6.108343015652134!3d49.247434481188506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47952633a201fe73%3A0x2cf48eebbd526fe7!2s54%20Rue%20Mar%C3%A9chal%20Leclerc%2C%2057120%20Rombas!5e0!3m2!1sfr!2sfr!4v1637795632756!5m2!1sfr!2sfr"
					style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			
		</div>
	</section>
	<!--====== CONTACT PAGE WRAP END ======-->
	<!--====== FOOTER PART START ======-->
	<?php include "footer.php";?>
	<!--====== FOOTER PART ENDS ======-->
	<!--====== GO TO TOP PART START ======-->
	<div class="go-top-area">
		<div class="go-top-wrap">
			<div class="go-top-btn-wrap">
				<div class="go-top go-top-btn">
					<i class="fal fa-angle-double-up"></i>
					<i class="fal fa-angle-double-up"></i>
				</div>
			</div>
		</div>
	</div>
	<!--====== GO TO TOP PART ENDS ======-->

	<!--====== jquery js ======-->
	<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
	<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
	<!--====== Bootstrap js ======-->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<!--====== Slick js ======-->
	<script src="assets/js/slick.min.js"></script>
	<!--====== Isotope js ======-->
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<!--====== Images Loaded js ======-->
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<!--====== nice select js ======-->
	<script src="assets/js/jquery.nice-select.min.js"></script>
	<!--====== Magnific Popup js ======-->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!--====== counterup js ======-->
	<script src="assets/js/jquery.counterup.min.js"></script>
	<!--====== appear js ======-->
	<script src="assets/js/jquery.appear.min.js"></script>
	<!--====== waypoints js ======-->
	<script src="assets/js/waypoints.min.js"></script>
	<!--====== Ajax Contact js ======-->
	<script src="assets/js/ajax-contact.js"></script>
	<!--====== Main js ======-->
	<script src="assets/js/main.js"></script>
</body>

</html>