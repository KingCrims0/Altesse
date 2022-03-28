
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
	<!--====== HEADER PART END ======-->
	<!--====== BREADCRUMBS PART START ======-->
	<section class="breadcrumbs-section mt-90 pt-180 pb-180 bg_cover"
		style="background-image: url(assets/images/services.jpeg);">
		<div class="container">
			<div class="breadcrumbs-text">
				<h1>
					<?php

						$service="";
						if(isset($_GET['service']))
						{
							$service = $_GET['service'];
							
						}
						echo $service;


					?>
				</h1>
				<ul>
					<li><a href="index.php">Accueil</a></li>
					<li><a href="service-1.php">Services</a></li>
					<li><?php echo $service;?></li>
				</ul>
			</div>
		</div>
	</section>
	<!--====== BREADCRUMBS PART END ======-->
	<!--====== DETAILS PART START ======-->
	<section class="service-details-wrap pt-130 pb-130">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 order-2 order-lg-1">
					<div class="sidebar">
						<div class="widgets service-cat">
							<h4 class="widget-title">Nos services</h4>
							<ul class="service-cat-list">
								<li class=""><a href="single-service-bureaux.php?service=<?php echo "Bureaux";?>">Bureaux<i class="far fa-angle-right"></i></a>
								</li>
								<li><a href="single-service-maisons.php?service=<?php echo "Maisons et Condos";?>">Maisons et Condos<i class="far fa-angle-right"></i></a></li>
								<li><a href="single-service-conciergerie.php?service=<?php echo "Conciergerie";?>">Conciergerie<i class="far fa-angle-right"></i></a></li>
								<li><a href="single-service-industriel.php?service=<?php echo "Industriel";?>">Industriel<i class="far fa-angle-right"></i></a></li>
								<li><a href="single-service-hopitaux.php?service=<?php echo "Hôpitaux";?>">Hôpitaux<i class="far fa-angle-right"></i></a></li>
								<li><a href="single-service-apconstruction.php?service=<?php echo "Nettoyage après construction";?>">Nettoyage après construction<i class="far fa-angle-right"></i></a></li>
								<li><a href="single-service-apdemenagement.php?service=<?php echo "Nettoyage après déménagement";?>">Nettoyage après déménagement<i class="far fa-angle-right"></i></a></li>
								<li><a href="single-service-commerce.php?service=<?php echo "Nettoyage de commerce";?>">Nettoyage de commerce<i class="far fa-angle-right"></i></a></li>
								<li><a href="single-service-restauration.php?service=<?php echo "Restauration";?>">Restauration<i class="far fa-angle-right"></i></a></li>
								<li><a href="single-service-parking.php?service=<?php echo "Parking";?>">Parking<i class="far fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!--<div class="widgets contact-form">
							<h4 class="widget-title">Have Any Query?</h4>
							<form>
								<div class="input-wrap">
									<input type="text" placeholder="Your Name" />
								</div>
								<div class="input-wrap mt-20">
									<input type="email" placeholder="Email Address" />
								</div>
								<div class="input-wrap mt-20">
									<textarea placeholder="Write Query"></textarea>
								</div>
								<button type="submit" class="main-btn mt-20">
									Send Message
								</button>
							</form>
						</div>
						<div class="widgets poster-widget">
							<img src="assets/images/poster.jpg" alt="Images" />
						</div>-->
					</div>
				</div>
				<div class="col-lg-8 order-1 order-lg-2">
					<div class="service-details">
						<h2 class="title"><?php echo $service;?></h2>
						<img src="assets/images/sbureau.jpeg" alt="Images" class="mb-35" />
						<p>
							Altesse offre des services d’entretien ménager professionnel pour les bureaux d’entreprise.
						</p>
						<h3>Un Service de Nettoyage pour Bureaux Adapté à Vos Besoins</h3>
						<p>
							Altesse peut vous aider à maintenir un nettoyage quotidien, 
							hebdomadaire ou trimestriel pour répondre à toutes les exigences de propreté. 
							Nous élaborerons un programme de nettoyage adapté à vos besoins pour garantir 
							l’entretien de vos espaces communs, espaces de bureaux, salle de conférence et cafétérias.
						</p>
						<div class="service-list mb-40">
							<ul>
								<li>
									<i class="fas fa-check"></i>Entretien Général
								</li>
								<li>
									<i class="fas fa-check"></i>Désinfection des Surfaces
								</li>
								<li>
									<i class="fas fa-check"></i>Produits D'Entretien
								</li>
								<li>
									<i class="fas fa-check"></i>Lavage de Vitres/Miroirs
								</li>
								<li>
									<i class="fas fa-check"></i>Nettoyage des Toilettes
								</li>
								<li>
									<i class="fas fa-check"></i>Nettoyage de Tapis
								</li>
								<li>
									<i class="fas fa-check"></i>Vider les Poubelles
								</li>
							</ul>
						</div>
						
						<div class="service-list-icon mb-30">
							<div class="row">
								<div class="col-md-6">
									<ul>
											<li>
												<i class="flaticon-avatar"></i>
												<h4>Experts qualifiés</h4>
												<p>
													Quel que soit votre secteur d’activité commerciale, 
													faites confiance à Altesse et au savoir-faire de notre équipe pour des 
													interventions de nettoyage ponctuelles et un 
													niveau de service professionnel à long terme.
												</p>
											</li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul>
									
										<li>
											<i class="flaticon-tag"></i>
											<h4>Nous assurons la qualité</h4>
											<p>
												Altesse vous propose un 
												service de nettoyage de bureaux pour créer une 
												atmosphère de travail à la hauteur des attentes de vos 
												équipes et de vos clients. 
											</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== DETAILS PART END ======-->
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