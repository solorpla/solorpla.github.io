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
			<a href="<?= base_url('home/blog') ?>" class="navbar-brand ms-4 ms-lg-0">
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
				<?php foreach ($caraousel as $aa){ ?>
				<div class="carousel-item">
					<img class="w-100" src="<?= base_url('assets/upload/caraousel/' .$aa['foto'])?>" alt="Image">
					<div class="carousel-caption">
						<!-- ... konten lainnya ... -->
					</div>
				</div>
				<?php } ?>

				<div class="carousel-item active">
					<img class="w-100" src="<?= base_url('assets/upload/caraousel/').$aa['foto']?>">
					<div class="carousel-caption">
						<!-- ... konten lainnya ... -->
					</div>
				</div>

				<div class="carousel-item active">
					<img class="w-100" src="<?= base_url('assets/upload/caraousel/').$aa['foto']?>">
					<div class="carousel-caption">
						<div class="container">
							<div class="row justify-content-start">
								<div class="col-lg-7">
									<h1 class="display-2 mb-5 slideInDown" style="color: white;">
										<?= $nama_kategori ?>
									</h1>
									<a href="#content" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Lihat
										artikel</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Carousel End -->

	<!-- Blog Start -->
	<div class="container-xxl py-5" id="content">
		<div class="container">
			<div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
				style="max-width: 500px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
				<h1 class="display-5 mb-3">Artikel K-Drama</h1>
			</div>
			<div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
				style="max-width: 500px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
				<!-- Tambahkan judul atau deskripsi jika perlu -->
			</div>
			<div class="col-6 col-sm-4">
				<div class="mb-3">
					<div class="top-social-area">
						<input type="text" id="searchInput" name="judul" class="form-control mr-2"
							placeholder="Cari K-Drama" required>
					</div>
				</div>
				<br>
			</div>
			<div class="container-xxl py-5" id="content">
				<div class="row g-4 align-items-stretch">
					<?php foreach ($konten as $uu) { ?>
					<div class="col-md-6 col-lg-4" style="padding: 0 px;">
						<!-- Tambahkan padding horizontal -->
						<div class="site"
							style="height: 510px; width: 95%; box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3); margin: 20px auto; overflow: hidden; background: #fff;">
							<!-- Gambar -->
							<a style="display: block; margin: 0; padding: 0;">
								<img src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>"
									style="width: 100%; height: 300px; object-fit: cover; display: block; margin: 0; "
									alt="Image">
							</a>
							<!-- Konten Teks -->
							<div class="text" style="padding: 15px; ">
								<h5 class="searchable"><a
										style="text-decoration: none; font-size: 18px; color: black;"><?= $uu['judul'] ?></a>
								</h5>

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
					<div class="col-12">
						<div id="noResultsMessage"
							style="display: none; color: purple; text-align: center; margin-top: 20px;">
							K-Drama tidak ditemukan.
						</div>
					</div>
				</div>
			</div>
		</div>
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

	<script>
		// Ambil elemen input pencarian dan elemen-elemen yang dapat dicari
		let searchInput = document.getElementById('searchInput');
		let searchableItems = document.querySelectorAll('.searchable');
		let noResultsMessage = document.getElementById('noResultsMessage');

		// Event listener untuk pencarian
		searchInput.addEventListener('input', function () {
			let filter = searchInput.value.toLowerCase().trim(); // Normalisasi input
			let hasResults = false; // Indikator hasil pencarian

			searchableItems.forEach(item => {
				let text = item.textContent.toLowerCase(); // Ambil teks elemen
				let parentBox = item.closest('.col-md-6'); // Penyesuaian container item
				if (text.includes(filter)) {
					if (parentBox) parentBox.style.display = ''; // Tampilkan jika cocok
					hasResults = true;
				} else {
					if (parentBox) parentBox.style.display = 'none'; // Sembunyikan jika tidak cocok
				}
			});

			// Tampilkan pesan "Film tidak ditemukan"
			noResultsMessage.style.display = hasResults ? 'none' : 'block';
		});

	</script>


</body>

</html>
