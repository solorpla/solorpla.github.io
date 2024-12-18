<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets/adminmart/') ?>/assets2/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/adminmart/') ?>/assets2/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url('assets/adminmart/') ?>/assets2/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url('assets/adminmart/') ?>/assets2/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Silahkan Login 📲</h3>
								<form class="mb-3" action="<?= base_url('auth/login')?>" method="POST">
                <form>
                  <div class="form-group">
                    <label>Username</label>
                    <input 
						type="text" 
						class="form-control"
						name="username"
						placeholder="Masukkan username"
						autofocus 
						/>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input 
						type="password" 
						class="form-control"
						name="password"
						aria-describedby="password"
						/>
                  </div>
                  <div class="input-group input-group-merge">
									<div class="row pb-30">
								<p>Belum punya akun? <a href="<?= base_url('registrasi')?>">Registrasi</a></p>
									</div>
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <div id="ngilang">
					<?= $this->session->flashdata('alert')?>
				</div>
                
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <script src="<?= base_url('assets/adminmart/') ?>/assets2/vendors/js/vendor.bundle.base.js"></script>
   
    <script src="<?= base_url('assets/adminmart/') ?>/assets2/js/off-canvas.js"></script>
    <script src="<?= base_url('assets/adminmart/') ?>/assets2/js/hoverable-collapse.js"></script>
    <script src="<?= base_url('assets/adminmart/') ?>/assets2/js/misc.js"></script>
    <script src="<?= base_url('assets/adminmart/') ?>/assets2/js/settings.js"></script>
    <script src="<?= base_url('assets/adminmart/') ?>/assets2/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
