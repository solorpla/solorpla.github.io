<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $judul ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href="<?= base_url('assets/front/')?>img/favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&amp;family=Lora:wght@600;700&amp;display=swap"
		rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= base_url('assets/front/')?>lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/')?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('assets/front/')?>css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?= base_url('assets/front/')?>css/style.css" rel="stylesheet">
</head>

<body>
	<!-- Spinner Start -->
	<div id="spinner"
		class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
		<div class="spinner-border text-primary" role="status"></div>
	</div>
	<!-- Spinner End -->


	<!-- Navbar Start -->
	<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s"
		style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn; top: 0px;">
		<div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
			<div class="col-lg-6 px-5 text-start">
				<small class="ms-4"><i class="fa fa-envelope me-2"></i><?= $konfig->email ?></small>
			</div>
		</div>

		<nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s"
			style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
			<a href="<?= base_url() ?>" class="navbar-brand ms-4 ms-lg-0">
				<img src="<?= base_url('assets/drakor.png'); ?>" alt="" width="170px">
			</a>
			<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
				data-bs-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav ms-auto p-4 p-lg-0">
					<a href="<?= base_url() ?>" class="nav-item nav-link active">Home</a>
					<a href="<?= base_url('home/galeri')?>" class="nav-item nav-link">Galeri</a>
					<?php foreach ($kategori as $kate){ ?>
					<a href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>"
						class="nav-item nav-link"><?= $kate['nama_kategori'] ?></a>
					<?php }?>
				</div>
				<div class="d-none d-lg-flex ms-2">

					<a href="<?= base_url('auth')?>"
						class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Login</a>

				</div>
			</div>
		</nav>
	</div>
	<!-- Navbar End -->


	<!-- Carousel Start -->
	<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s"
		style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
		<div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<?php foreach ($caraousel as $index => $aa) { ?>
				<div class="carousel-item <?= $index === 0 ? 'active' : ''; ?>">
					<img class="w-100" src="<?= base_url('assets/upload/caraousel/' . $aa['foto']) ?>" alt="Image">
					<div class="carousel-caption">
						<div class="container">
							<div class="row justify-content-start">
								<div class="col-lg-7">
									<h1 class="display-2 mb-5 slideInDown" style="color: white;">
										<?= $konfig->judul_website ?>
									</h1>
									<a href="#content" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">
										Lihat artikel
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>

		<div id="header-carousel-secondary" class="carousel slide mt-5" data-bs-ride="carousel">
			<div class="carousel-inner">
				<?php foreach ($caraousel as $index => $aa) { ?>
				<div class="carousel-item">
					<img class="w-100" src="<?= base_url('assets/upload/caraousel/' . $aa['foto']) ?>" alt="Image">
				</div>
				<?php } ?>
			</div>
		</div>
	</div>

	<button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
	</div>
	</div>
	<!-- Carousel End -->





	<!-- Blog Start -->
	<div class="container-xxl py-5" id="content">
		<div class="row g-4 align-items-stretch">
		<?php 
    // Batasi hanya 3 konten yang ditampilkan
    $konten_terbatas = array_slice($konten, 0, 3);
    foreach ($konten_terbatas as $uu) { ?>
		<div class="col-md-6 col-lg-4" style="padding: 0 px;">
			<!-- Tambahkan padding horizontal -->
			<div class="site"
				style="height: 500px; width: 95%; box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3); margin: 20px auto; overflow: hidden; background: #fff;">
				<!-- Gambar -->
				<a href="single.html" style="display: block; margin: 0; padding: 0;">
					<img src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>"
						style="width: 100%; height: 300px; object-fit: cover; display: block; margin: 0; "
						alt="Image">
				</a>
				<!-- Konten Teks -->
				<div class="text" style="padding: 15px;">
					<h5><a  style="text-decoration: none; color: #333;"><?= $uu['judul'] ?></a></h5>
					<p class="sched-time" style="font-size: 14px; color: #888; margin-bottom: 10px;">

						<span><i class="fa fa-user"></i> <?= $uu['nama'] ?></span>
					</p>
					<p style="font-size: 13px; color: #777; margin-bottom: 30px;">
						<i class="fa fa-calendar"></i> <span> <?= $uu['nama_kategori'] ?></span><br>
					</p>
					<p><a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill"
							href="<?= base_url('home/artikel/'.$uu['slug']) ?>">Baca sinopsis</a></p>
				</div>
			</div>
		</div>
		<?php } ?>

		</div>
		<style>
			.konten-item img {
				width: 100%;
				height: 250px;
				object-fit: cover;
				display: block;
			}

		</style>
	</div>
	<div class="d-flex justify-content-center mb-10 mt-30">
		<p><a href="<?= base_url('home/blog/')?>" class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill">Lihat semua artikel</a></p>
	</div>

	<!-- Blog End -->


	<!-- Footer Start -->
	<div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s"
		style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
		<div class="container py-5">
			<div class="row g-5">
				<div class="col-lg-3 col-md-6">
					<h1 class="fw-bold text-primary mb-4"><?= $konfig->judul_website ?></h1>
					<p><?= $konfig->profil_website ?></p>

				</div>
				<div class="col-lg-3 col-md-6">
					<h4 class="text-light mb-4">Contact us</h4>
					<p><i class="fa fa-envelope me-3"></i><?= $konfig->email ?></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h4 class="text-light mb-4">Quick Links</h4>
					<a href="<?= base_url() ?>" class="nav-item nav-link active">Home</a>
					<a href="<?= base_url('home/galeri')?>" class="nav-item nav-link">Galeri</a>
					<?php foreach ($kategori as $kate){ ?>
					<a href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>"
						class="nav-item nav-link"><?= $kate['nama_kategori'] ?></a>
					<?php }?>
				</div>
				<div class="col-lg-3 col-md-6">
					<h4 class="text-light mb-4">Follow us</h4>
					<div class="d-flex pt-2">
						<a class="btn btn-square btn-outline-light rounded-circle me-1"
							href="<?= $konfig->instagram ?>">
							<i>
								<img src="<?= base_url('assets/front/ig.png') ?>" style="width: 20px; height: 24px;">
							</i>
						</a>
						<a class="btn btn-square btn-outline-light rounded-circle me-1" href="<?= $konfig->tiktok ?>">
							<i>
								<img src="<?= base_url('assets/front/tiktok.png') ?>"
									style="width: 20px; height: 24px;">
							</i>
						</a>

					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
						© <a href="#"><?= $konfig->judul_website?></a>, 2024
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->


	<!-- Back to Top -->
	<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top" style="display: none;"><i
			class="bi bi-arrow-up"></i></a>


	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/front/')?>lib/wow/wow.min.js"></script>
	<script src="<?= base_url('assets/front/')?>lib/easing/easing.min.js"></script>
	<script src="<?= base_url('assets/front/')?>lib/waypoints/waypoints.min.js"></script>
	<script src="<?= base_url('assets/front/')?>lib/owlcarousel/owl.carousel.min.js"></script>

	<!-- Template Javascript -->
	<script src="<?= base_url('assets/front/')?>js/main.js"></script>


</body>

</html>
