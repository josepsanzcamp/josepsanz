<?php include("php/langs.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $labels[$lang]["description"]; ?>">
	<meta name="author" content="<?php echo $labels[$lang]["author"]; ?>">

	<title><?php echo $labels[$lang]["title"]; ?></title>
	<link rel="shortcut icon" href="img/favicon.ico" />

	<!-- Custom fonts for this theme -->
	<link href="css/fontawesome.min.css" rel="stylesheet">
	<link href="css/solid.min.css" rel="stylesheet">
	<link href="css/brands.min.css" rel="stylesheet">
	<link href="css/font-montserrat.css" rel="stylesheet">
	<link href="css/font-lato.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="css/freelancer.css" rel="stylesheet">
	<link href="css/sanz.css" rel="stylesheet">

	<!-- PDFJS feature -->
	<link href="pdfjs/pdf_viewer.min.css" rel="stylesheet">
	<link href="css/pdfjs.css" rel="stylesheet">
	<meta name="theme-color" content="#2c3e50"/>
</head>

<body id="page-top">

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger text-truncate" href="#page-top"><?php echo $labels[$lang]["navbar"]; ?></a>
			<button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="<?php echo $labels[$lang]["toggle"]; ?>">
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio"><?php echo $labels[$lang]["portfolio"]; ?></a>
					</li>
					<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about"><?php echo $labels[$lang]["about"]; ?></a>
					</li>
					<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact"><?php echo $labels[$lang]["contact"]; ?></a>
					</li>
					<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.ca.html" title="<?php echo $labels[$lang]["catala"]; ?>">CA</a>
					</li>
					<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.es.html" title="<?php echo $labels[$lang]["castellano"]; ?>">ES</a>
					</li>
					<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.en.html" title="<?php echo $labels[$lang]["english"]; ?>">EN</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Masthead -->
	<header class="masthead bg-primary text-white text-center">
		<div class="container d-flex align-items-center flex-column">

			<!-- Masthead Avatar Image -->
			<img class="masthead-avatar mb-5" src="img/profile.png">

			<!-- Masthead Heading -->
			<h1 class="masthead-heading text-uppercase mb-0"><?php echo $labels[$lang]["name"]; ?></h1>

			<!-- Icon Divider -->
			<div class="divider-custom divider-light">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon">
					<i class="fas fa-user"></i>
				</div>
				<div class="divider-custom-line"></div>
			</div>

			<!-- Masthead Subheading -->
			<p class="masthead-subheading font-weight-light mb-0"><?php echo $labels[$lang]["skills"]; ?></p>

		</div>
	</header>

	<!-- Portfolio Section -->
	<section class="page-section portfolio" id="portfolio">
		<div class="container">

			<!-- Portfolio Section Heading -->
			<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><?php echo $labels[$lang]["myportfolio"]; ?></h2>

			<!-- Icon Divider -->
			<div class="divider-custom">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon">
					<i class="fas fa-th-large"></i>
				</div>
				<div class="divider-custom-line"></div>
			</div>

			<!-- Portfolio Grid Items -->
			<div class="row">

				<?php foreach($labels[$lang]["portfolios"] as $key=>$val) { ?>
				<!-- Portfolio Item X -->
				<div class="col-md-6 col-lg-4">
					<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolio_<?php echo $key; ?>">
						<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
							<div class="portfolio-item-caption-content text-center text-white">
								<i class="fas fa-plus fa-3x"></i>
							</div>
						</div>
						<img class="img-fluid" src="<?php echo $val["image"] ?>" alt="">
					</div>
				</div>
				<?php } ?>

			</div>
			<!-- /.row -->

		</div>
	</section>

	<!-- About Section -->
	<section class="page-section bg-primary text-white mb-0" id="about">
		<div class="container">

			<!-- About Section Heading -->
			<h2 class="page-section-heading text-center text-uppercase text-white"><?php echo $labels[$lang]["aboutme"]; ?></h2>

			<!-- Icon Divider -->
			<div class="divider-custom divider-light">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon">
					<i class="fas fa-file-alt"></i>
				</div>
				<div class="divider-custom-line"></div>
			</div>

			<!-- About Section Content -->
			<div class="row">
				<div class="col-lg-12">
					<div id="viewerContainer" data-file="<?php echo str_replace(".pdf","_preview.pdf",$labels[$lang]["downloadlink"]); ?>">
						<div id="viewer" class="pdfViewer"></div>
					</div>
				</div>
			</div>

			<!-- About Section Button -->
			<div class="text-center mt-4">
				<a class="btn btn-xl btn-outline-light" href="<?php echo str_replace(".pdf","_full.pdf",$labels[$lang]["downloadlink"]); ?>">
					<i class="fas fa-download mr-2"></i>
					<?php echo $labels[$lang]["downloadtext"]; ?>
				</a>
			</div>

		</div>
	</section>

	<!-- Contact Section -->
	<section class="page-section" id="contact">
		<div class="container">

			<!-- Contact Section Heading -->
			<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><?php echo $labels[$lang]["contactme"]; ?></h2>

			<!-- Icon Divider -->
			<div class="divider-custom">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon">
					<i class="fas fa-envelope"></i>
				</div>
				<div class="divider-custom-line"></div>
			</div>

			<!-- Contact Section Form -->
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
					<form name="sentMessage" id="contactForm" novalidate="novalidate" data-validation-ok-message="<?php echo $labels[$lang]["sendok"]; ?>" data-validation-ko-message="<?php echo $labels[$lang]["sendko"]; ?>">
						<div class="control-group">
							<div class="form-group floating-label-form-group controls mb-0 pb-2">
								<label><?php echo $labels[$lang]["fieldname"]; ?></label>
								<input class="form-control" id="name" type="text" placeholder="<?php echo $labels[$lang]["fieldname"]; ?>" required="required" data-validation-required-message="<?php echo $labels[$lang]["requiredname"]; ?>">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="control-group">
							<div class="form-group floating-label-form-group controls mb-0 pb-2">
								<label><?php echo $labels[$lang]["fieldemail"]; ?></label>
								<input class="form-control" id="email" type="email" placeholder="<?php echo $labels[$lang]["fieldemail"]; ?>">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="control-group">
							<div class="form-group floating-label-form-group controls mb-0 pb-2">
								<label><?php echo $labels[$lang]["fieldphone"]; ?></label>
								<input class="form-control" id="phone" type="tel" placeholder="<?php echo $labels[$lang]["fieldphone"]; ?>">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="control-group">
							<div class="form-group floating-label-form-group controls mb-0 pb-2">
								<label><?php echo $labels[$lang]["fieldmessage"]; ?></label>
								<textarea class="form-control" id="message" rows="5" placeholder="<?php echo $labels[$lang]["fieldmessage"]; ?>" required="required" data-validation-required-message="<?php echo $labels[$lang]["requiredmessage"]; ?>"></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<br>
						<div id="success"></div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton"><?php echo $labels[$lang]["buttonsend"]; ?></button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</section>

	<!-- Footer -->
	<footer class="footer text-center">
		<div class="container">
			<div class="row">

				<!-- Footer Social Icons -->
				<div class="col-lg-12 mb-12 mb-lg-0">
					<h4 class="text-uppercase mb-4"><?php echo $labels[$lang]["footer"]; ?></h4>
					<a class="btn btn-outline-light btn-social mx-1" href="https://github.com/josepsanzcamp" target="_blank">
						<i class="fab fa-fw fa-github"></i>
					</a>
					<a class="btn btn-outline-light btn-social mx-1" href="https://sourceforge.net/u/josepsanzcamp/profile" target="_blank">
						<i class="fab fa-fw fa-sourceforge"><i class="fa-sourceforge1">s</i><i class="fa-sourceforge2">f</i></i>
					</a>
					<a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/josepsanz" target="_blank">
						<i class="fab fa-fw fa-linkedin"></i>
					</a>
					<a class="btn btn-outline-light btn-social mx-1" href="https://mastodont.cat/@josepsanzcamp" target="_blank">
						<i class="fab fa-fw fa-mastodon"></i>
					</a>
					<a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/josep.sanz.56" target="_blank">
						<i class="fab fa-fw fa-facebook-f"></i>
					</a>
					<a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/josepsanzcamp" target="_blank">
						<i class="fab fa-fw fa-twitter"></i>
					</a>

				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright Section -->
	<section class="copyright py-4 text-center text-white">
		<div class="container">
			<small><?php echo $labels[$lang]["copyright"]; ?></small>
			|
			<small><?php echo $labels[$lang]["template"]; ?></small>
		</div>
	</section>

	<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
	<div class="scroll-to-top d-lg-none position-fixed ">
		<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
			<i class="fa fa-chevron-up"></i>
		</a>
	</div>

	<!-- Portfolio Modals -->

	<?php foreach($labels[$lang]["portfolios"] as $key=>$val) { ?>
	<!-- Portfolio Modal X -->
	<div class="portfolio-modal modal fade" id="portfolio_<?php echo $key; ?>" tabindex="-1" role="dialog" aria-labelledby="portfolio_<?php echo $key; ?>Label" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						<i class="fas fa-times"></i>
					</span>
				</button>
				<div class="modal-body text-center">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<!-- Portfolio Modal - Title -->
								<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?php echo $val["title"]; ?></h2>
								<!-- Icon Divider -->
								<div class="divider-custom">
									<div class="divider-custom-line"></div>
									<div class="divider-custom-icon">
										<i class="fas fa-star"></i>
									</div>
									<div class="divider-custom-line"></div>
								</div>
								<!-- Portfolio Modal - Image -->
								<img class="img-fluid rounded mb-5" src="<?php echo $val["image"] ?>" alt="">
								<!-- Portfolio Modal - Text -->
								<p class="mb-3">
									<?php echo $val["description"]; ?>
								</p>
								<p class="mb-5">
									<?php echo $labels[$lang]["moreinfo"]; ?>
									<?php $first=1; ?>
									<?php foreach($val["links"] as $key2=>$val2) { ?>
										<?php if($first) { ?>&nbsp;<?php } ?>
										<?php if(!$first) { ?> | <?php } ?>
										<?php $first=0; ?>
										<strong><a href="<?php echo $val2; ?>" target="_blank"><?php echo $key2; ?></a></strong>
									<?php } ?>
								</p>
								<button class="btn btn-primary" href="#" data-dismiss="modal">
									<i class="fas fa-times fa-fw"></i>
									<?php echo $labels[$lang]["close"]; ?>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>

	<!-- Bootstrap core JavaScript -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="js/jquery.easing.min.js"></script>

	<!-- Contact Form JavaScript -->
	<script src="js/jqBootstrapValidation.js"></script>
	<script src="js/contact_me.js"></script>

	<!-- Custom scripts for this template -->
	<script src="js/freelancer.js"></script>

	<!-- Custom scripts for sanz -->
	<script src="js/jquery.cookie.min.js"></script>
	<script src="js/sanz.js"></script>

	<!-- PDFJS feature -->
	<script src="pdfjs/pdf.min.js"></script>
	<script src="pdfjs/pdf_viewer.min.js"></script>
	<script src="js/pdfjs.js"></script>

</body>

</html>
