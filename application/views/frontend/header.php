<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?= $title; ?></title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="Unicat project" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="<?= base_url('frontend/styles/bootstrap4/bootstrap.min.css') ?>"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
		<link href="<?= base_url('') ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="<?= base_url('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css') ?>"/>
		<link rel="stylesheet" type="text/css" href="<?= base_url('frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') ?>"/>
		<link rel="stylesheet" type="text/css" href="<?= base_url('frontend/plugins/OwlCarousel2-2.2.1/animate.css') ?>"/>
		<link href="<?= base_url('assets/'); ?> vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

   		<!-- Custom styles for this template-->
    	<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?= base_url('frontend/styles/main_styles.css') ?>" />
		<link rel="stylesheet" type="text/css" href="<?= base_url('frontend/styles/responsive.css') ?>" />
		<link rel="stylesheet" href="<?= base_url('frontend/icofont/icofont.css') ?>"/>
		<link rel="stylesheet" href="<?= base_url('frontend/icofont/icofont.min.css') ?>">
	</head>
	<body>
		<div>
			<header class="header">
				<!-- Top Bar -->
				<div class="top_bar">
					<div class="top_bar_container">
						<div class="container">							
							<div class="row">
								<div class="col">
									<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
										<ul class="top_bar_contact_list">
											<li>
												<div class="question"><i class="icofont-question-square icofont-1-2x mr-2"></i>
													Frequently Asked Questions (FAQ)
												</div>
											</li>
											<li>
												<div>Informasi: <i class="icofont-phone-circle icofont-1-2x mr-2"></i>0274-513538</div>
											</li>
											<li>
												<div><i class="icofont-email icofont-1-2x  mr-2"></i>lldikti5@kemdikbud.go.id</div>
											</li>
										</ul>
										<div class="top_bar_login ml-auto">
											<div class="login_button">
												<a href="<?= base_url('auth') ?>"> Login</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Header Content -->
				<div class="container-fluid d-flex flex-row justify-content-center  navbar-expand-lg navbar-light bg-light">
					<nav class="navbar ">
						<img src="<?= base_url() ?>frontend/images/logonew.png" class="mr-auto" style="height: 70px" alt=""/>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav " style="gap: 44px; font-family: Roboto, sans-serif; font-size: 14px;text-transform: uppercase;">
								<li class="nav-link  <?php if($this->uri->segment(1) == 'home') echo 'active' ?>">
									<a class="text-dark font-weight-bold"  href="<?= base_url('home') ?>">Home</a>
								</li>
								<li class="nav-item dropdown <?php if($this->uri->segment(1) == 'profile') echo 'active' ?>">
									<a class="nav-link dropdown-toggle text-dark font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown" >
										<a class="dropdown-item" href="<?= base_url('profile') ?>">Profile LLDIKTI V</a>
										<a class="dropdown-item" href="<?= base_url('profile/p_ppid') ?>">Profile PPID LLDIKTI V</a>
										<a class="dropdown-item" href="<?= base_url('profile/struktur') ?>">Struktur Organisasi PPID LLDIKTI V</a>
										<a class="dropdown-item" href="<?= base_url('profile/fungsi_ppid') ?>">Tugas dan Fungsi PPID LLDIKTI V</a>
										<a class="dropdown-item" href="<?= base_url('profile/p_visimisi') ?>">Visi dan Misi PPID LLDIKTI V</a>
									</div>
								</li>
								<li class="nav-link <?php if($this->uri->segment(1) == 'regulasi') echo 'active' ?>">
										<a class="text-dark font-weight-bold" href="<?= base_url('regulasi') ?>">Regulasi</a>
										<li class="nav-item dropdown <?php if($this->uri->segment(1) == 'standar_layanan') echo 'active' ?>">
									<a class="nav-link dropdown-toggle text-dark font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Standar Layanan</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown" >
										<a class="dropdown-item" href="<?= base_url('s_layanan/index') ?>">Permohonan Informasi</a>
										<a class="dropdown-item" href="<?= base_url('s_layanan/sengketa') ?>"">Permohonan Sengketa</a>
										<a class="dropdown-item" href="<?= base_url('s_layanan/keberatan') ?>"">Permohonan Keberatan</a>
									</div>
								</li>
								<li class="nav-link <?php if($this->uri->segment(1) == 'Informasi_publik') echo 'active' ?>">
										<a class="text-dark font-weight-bold" href="<?= base_url('Informasi_publik') ?>">Informasi Publik</a>
								<li class="nav-link <?php if($this->uri->segment(1) == 'faq') echo 'active' ?>">
										<a class="text-dark font-weight-bold" href="<?= base_url('faq') ?>">Faq</a>
								<div class="search_button">
								<i class="icofont-search-1" aria-hidden="true"></i>
							</div>

							<div class="hamburger menu_mm">
								<i class="icofont-listing-box" aria-hidden="true"></i>
							</div>
							</ul>
						</div>
					</nav>
				</div>
					<!-- Header Search Panel -->
				<div class="header_search_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_search_content d-flex flex-row align-items-center justify-content-end" >
									<form action="#" class="header_search_form">
										<input type="search" class="search_input" placeholder="Search" required="required" />
										<button class="header_search_button d-flex flex-column align-items-center justify-content-center" >
										<i class="icofont-search-1"></i>
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>
    	
			<!-- Header -->

			

			<!-- Menu -->

			
		<!-- Footer -->

		