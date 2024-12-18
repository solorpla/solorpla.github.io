<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $judul ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('assets/front/') ?>img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/front/') ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/front/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/front/') ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/front/') ?>css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


  


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="<?= base_url('assets/upload/konten/'.$konten->foto)?>">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4"><?= $konten->judul?></h1>
					 <p small class="me-3"><i class="fa fa-user text-primary me-2"></i><?= $konten->nama?></p></small>
                      <p small class="me-3"><i class="fa fa-folder text-primary me-2"></i><?= $konten->nama_kategori?></p></small>
                    <p style="text-align:justify; text-indent:30px;"><?= $konten->keterangan ?></p>
					
                          
							
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>lib/wow/wow.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets/front/') ?>js/main.js"></script>
</body>

</html>
