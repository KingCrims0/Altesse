
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
								<li><a href="single-service-hopitaux.php?service=<?php echo "H??pitaux";?>">H??pitaux<i class="far fa-angle-right"></i></a></li>
								<li><a href="single-service-apconstruction.php?service=<?php echo "Nettoyage apr??s construction";?>">Nettoyage apr??s construction<i class="far fa-angle-right"></i></a></li>
								<li><a href="single-service-apdemenagement.php?service=<?php echo "Nettoyage apr??s d??m??nagement";?>">Nettoyage apr??s d??m??nagement<i class="far fa-angle-right"></i></a></li>
								<li><a href="single-service-commerce.php?service=<?php echo "Nettoyage de commerce";?>">Nettoyage de commerce<i class="far fa-angle-right"></i></a></li>
								<li><a href="single-service-demenagement.php?service=<?php echo "Restauration";?>">Restauration<i class="far fa-angle-right"></i></a></li>
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
						<img src="assets/images/shopitaux.jpeg" alt="Images" class="mb-35" />
						<p>
							Un service complet de nettoyage et de d??sinfection pour r??duire l???exposition aux risques. Altesse maintient votre environnement de travail propre et sain pour employ??s et patients.
						</p>
						<h3>On s'occupe de vous.</h3>
						<p>
							Le Service d'Entretien est responsable du nettoyage ?? l'h??pital. 
							Son travail consiste en un nettoyage r??gulier, 
							quotidien et de toutes les surfaces de l'h??pital ainsi que du maintien d'un 
							niveau ??lev?? d'hygi??ne dans l'??tablissement.
						</p>
						<div class="service-list mb-40">
							<ul>
								<li>
									<i class="fas fa-check"></i>Respect des distances
								</li>
								<li>
									<i class="fas fa-check"></i>D??sinfection compl??te du milieu
								</li>
								<li>
									<i class="fas fa-check"></i>Votre s??curit?? avant tout
								</li>
								
							</ul>
						</div>
						
						<div class="service-list-icon mb-30">
							<div class="row">
								<div class="col-md-6">
									<ul>
											<li>
												<i class="flaticon-avatar"></i>
												<h4>Experts en nettoyage</h4>
												<p>
													Assurance qualit??. S??curit?? ?? chaque ??tape. 
													Service client 24/7. Respect des distances.
												</p>
											</li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul>
									
										<li>
											<i class="flaticon-tag"></i>
											<h4>Nous assurons la qualit??</h4>
											<p>
												Chez Altesse la satisfaction de nos services est primordiale et tr??s importante pour nous.
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