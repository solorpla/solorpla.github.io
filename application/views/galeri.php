<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title><?= $judul ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="<?= base_url('assets/spa/') ?>lib/animate/animate.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/spa/') ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/spa/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?= base_url('assets/spa/') ?>css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?= base_url('assets/spa/') ?>css/style.css" rel="stylesheet">
    </head>

    <body>

      


        <!-- Navbar start -->
        <div class="container-fluid sticky-top px-0">
           
            <div class="container-fluid bg-light">
                <div class="container px-0">
				<nav class="navbar navbar-light navbar-expand-xl">
					<a href="<?= base_url('home/galeri') ?>" class="navbar-brand">
						<img
						src="<?= base_url('assets/front/'); ?>img/drakor.png" alt="" width="170px">
					</a>
                        <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="fa fa-bars text-primary"></span>
                        </button>
                        <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                            <div class="navbar-nav mx-auto border-top">
                                <a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
                                <a href="<?= base_url('home/galeri') ?>" class="nav-item nav-link">Galeri</a>
								<?php foreach ($kategori as $kate){ ?>
								<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>" class="nav-item nav-link"><?= $kate['nama_kategori'] ?></a>
								<?php } ?>
                            </div>
                        </div>
						<small class="ms-4"><i class="fa fa-envelope me-2"></i><?= $konfig->email ?></small>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->

        
      <!-- Gallery Start -->
	<div class="container-fluid gallery py-5">
		<div class="container py-5">
			<div class="text-center mx-auto mb-5">
				<h1 class="display-4 mb-4 text-primary">Galeri Kami</h1>
			</div>
			<div class="tab-class text-center">
				<div class="tab-content">
					<div id="tab-1" class="tab-pane fade show p-0 active">
						<div class="row g-4">
							<?php $no = 1; foreach ($galeri as $aa) { ?>
							<!-- Kolom untuk setiap gambar -->
							<div class="col-lg-4 col-md-4 col-sm-6" >
								<div class="gallery-img" style="max-height :250px">
									<!-- Gambar -->
									<img class=" rounded w-100"
										src="<?= base_url('assets/upload/galeri/'.$aa['foto_galeri']) ?>" style="width: 300px; height: auto;">

									<!-- Overlay dan Judul -->
									<div class="gallery-overlay p-4">
										<h4 class="text-secondary"><?= $aa['judul'] ?></h4>
									</div>

									<!-- Ikon pencarian -->
									<div class="search-icon">
										<a href="<?= base_url('assets/upload/galeri/'.$aa['foto_galeri']) ?>"
											data-lightbox="Gallery-1">
											<i
												class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i>
										</a>
									</div>
								</div>
							</div>
							<?php $no++; } ?>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- gallery End -->



	<!-- Footer Start -->
	<div class="container-fluid footer py-5">
		<div class="container py-5">
			<div class="row g-5">
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="footer-item">
						<h4 class="mb-4 text-white"><?= $konfig->judul_website ?></h4>
						<p class="text-white"><?= $konfig->profil_website ?></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="footer-item">
						<h4 class="mb-4 text-white">Contact us</h4>
						<small class="text-white"><i  class="fa fa-envelope me-2"></i><?= $konfig->email ?></small>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="footer-item d-flex flex-column">
						<h4 class="mb-4 text-white">Quick Links</h4>
						<a href="<?= base_url() ?>"><i class="fas fa-angle-right me-2"></i>Home</a>
						<a href="<?= base_url('home/galeri') ?>"><i class="fas fa-angle-right me-2"></i>Galeri</a>
						<?php foreach ($kategori as $kate){ ?>
						<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
							<i class="fas fa-angle-right me-2"></i> <?= $kate['nama_kategori'] ?>
						</a>
						<?php }?>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-3">
					<div class="footer-item d-flex flex-column">
						<h4 class="mb-4 text-white">Follow Us</h4>
						<a href="<?= $konfig->instagram ?>"><i class="fas fa-angle-right me-2"></i> Instagram</a>
						<a href="<?= $konfig->tiktok ?>"><i class="fas fa-angle-right me-2"></i> TikTok</a>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->



	<!-- Copyright Start -->
	<div class="container-fluid copyright py-4">
		<div class="container">
			<div class="row g-4 align-items-center">
				<div class="col-md-4 text-center text-md-start mb-md-0">

				</div>
				<div class="col-md-4 text-center text-md-start mb-md-0">
					<div class="d-flex justify-content-center">
						<span class="text-light"><i
								class="fas fa-copyright text-light me-2"></i><?=$konfig->judul_website?>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Copyright End -->



	<!-- Back to Top -->
	<a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square rounded-circle back-to-top"><i
			class="fa fa-arrow-up"></i></a>


	<!-- JavaScript Libraries -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/spa/')?>lib/wow/wow.min.js"></script>
	<script src="<?= base_url('assets/spa/')?>lib/easing/easing.min.js"></script>
	<script src="<?= base_url('assets/spa/')?>lib/waypoints/waypoints.min.js"></script>
	<script src="<?= base_url('assets/spa/')?>lib/counterup/counterup.min.js"></script>
	<script src="<?= base_url('assets/spa/')?>lib/lightbox/js/lightbox.min.js"></script>
	<script src="<?= base_url('assets/spa/')?>lib/owlcarousel/owl.carousel.min.js"></script>

	<!-- Template Javascript -->
	<script src="js/main.js"></script>
</body>

</html>
