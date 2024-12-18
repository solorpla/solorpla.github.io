<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16"
		href="<?= base_url('assets/adminmart/') ?>assets/images/favicon.png">
	<title><?= $judul_halaman ?></title>
	<link href="<?= base_url('assets/adminmart/') ?>assets/extra-libs/c3/c3.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/adminmart/') ?>assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/adminmart/') ?>assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css"
		rel="stylesheet" />
	<link href="<?= base_url('assets/adminmart/') ?>dist/css/style.min.css" rel="stylesheet">
</head>

<body>
	<div class="preloader">
		<div class="lds-ripple">
			<div class="lds-pos"></div>
			<div class="lds-pos"></div>
		</div>
	</div>
	<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
		data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
		<header class="topbar" data-navbarbg="skin6">
			<nav class="navbar top-navbar navbar-expand-md">
				<div class="navbar-header" data-logobg="skin6">
					<a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
							class="ti-menu ti-close"></i></a>
					<div class="navbar-brand">
						<!-- Logo icon -->
						<a href="<?= base_url(); ?>">
							<b class="logo-icon">
								<!-- Dark Logo icon -->
								<img src="<?= base_url('assets/adminmart/') ?>assets/images/logo-icon.png"
									alt="homepage" class="dark-logo" />
								<!-- Light Logo icon -->
								<img src="<?= base_url('assets/adminmart/') ?>assets/images/logo-icon.png"
									alt="homepage" class="light-logo" />
							</b>
							<!--End Logo icon -->
							<!-- Logo text -->
							<span class="logo-text">
								<!-- dark Logo text -->
								<img src="<?= base_url('assets/adminmart/') ?>assets/images/logo-text.png"
									alt="homepage" class="dark-logo" />
								<!-- Light Logo text -->
								<img src="<?= base_url('assets/adminmart/') ?>assets/images/logo-light-text.png"
									class="light-logo" alt="homepage" />
							</span>
						</a>
					</div>
					<!-- End Logo -->
					<a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
						data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
							class="ti-more"></i></a>
				</div>
				<div class="navbar-collapse collapse" id="navbarSupportedContent">
					
					<ul class="navbar-nav float-left mr-auto ml-3 pl-1">
						
					</ul>
					<ul class="navbar-nav float-right">
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<img src="<?= base_url('assets/adminmart/') ?>assets2/images/faces/hc.jpeg"
									alt="user" class="rounded-circle" width="40">
									<span
                                        class="text-dark"><?= $judul_halaman ?></span> <i data-feather="chevron-down"
                                        ></i>
									</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
								<a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
										class="svg-icon mr-2 ml-1"></i>
									<?= $this->session->userdata('nama') ?> (<?= $this->session->userdata('level') ?>)</a>
									<small class="text-muted"> </small>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i data-feather="power"
										class="svg-icon mr-2 ml-1"></i>
									Logout</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- ============================================================== -->
		<!-- End Topbar header -->
		<aside class="left-sidebar" data-sidebarbg="skin6">
			<!-- Sidebar scroll-->
			<div class="scroll-sidebar" data-sidebarbg="skin6">
				<!-- Sidebar navigation-->
				<nav class="sidebar-nav">
					<ul id="sidebarnav">
						<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/home') ?>"
								aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
									class="hide-menu">Dashboard</span></a>
						</li>

						<li class="sidebar-item"> <a class="sidebar-link" href="<?= base_url('admin/konten') ?>"
								aria-expanded="false"><i data-feather="tv" class="feather-icon"></i><span
									class="hide-menu">Konten</span></a>
						</li>
						<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/kategori') ?>"
								aria-expanded="false"><i data-feather="list" class="feather-icon"></i><span
									class="hide-menu">Kategori konten</span></a>
						</li>
						<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/caraousel') ?>"
								aria-expanded="false"><i data-feather="image" class="feather-icon"></i><span
									class="hide-menu">Caraousel</span></a>
						</li>
						<?php if($this->session->userdata('level')=='admin'){ ?>
						<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/konfigurasi') ?>"
								aria-expanded="false"><i data-feather="edit" class="feather-icon"></i><span
									class="hide-menu">Konfigurasi</span></a>
						</li>
						<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/user') ?>"
								aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span
									class="hide-menu">User</span></a>
						</li>
						<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('admin/galeri') ?>"
								aria-expanded="false"><i data-feather="heart" class="feather-icon"></i><span
									class="hide-menu">Galeri</span></a>
						<?php } ?>
						</li>
					</ul>
				</nav>
				<!-- End Sidebar navigation -->
			</div>
		</aside>
		
		<div class="page-wrapper">
			<!-- ============================================================== -->
			<!-- Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<div class="page-breadcrumb">
				<div class="row">
					<div class="col-7 align-self-center">
						<h3 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $contents; ?></h3>
					</div>
				</div>
			</div>

			

		</div>
	</div>
	<script src="<?= base_url('assets/adminmart/') ?>assets/libs/jquery/dist/jquery.min.js"></script>
	<script src="<?= base_url('assets/adminmart/') ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
	<script src="<?= base_url('assets/adminmart/') ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/adminmart/') ?>dist/js/app-style-switcher.js"></script>
	<script src="<?= base_url('assets/adminmart/') ?>dist/js/feather.min.js"></script>
	<script src="<?= base_url('assets/adminmart/') ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
	<script src="<?= base_url('assets/adminmart/') ?>dist/js/sidebarmenu.js"></script>
	<!--Custom JavaScript -->
	<script src="<?= base_url('assets/adminmart/') ?>dist/js/custom.min.js"></script>
	<!--This page JavaScript -->
	<script src="<?= base_url('assets/adminmart/') ?>assets/extra-libs/c3/d3.min.js"></script>
	<script src="<?= base_url('assets/adminmart/') ?>assets/extra-libs/c3/c3.min.js"></script>
	<script src="<?= base_url('assets/adminmart/') ?>assets/libs/chartist/dist/chartist.min.js"></script>
	<script src="<?= base_url('assets/adminmart/') ?>assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
	<script src="<?= base_url('assets/adminmart/') ?>assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="<?= base_url('assets/adminmart/') ?>assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?= base_url('assets/adminmart/') ?>dist/js/pages/dashboards/dashboard1.min.js"></script>
	 <script>
      $('#ngilang').delay('slow').slideDown('slow').delay(1000).slideUp(600);
    </script>
</body>

</html>
