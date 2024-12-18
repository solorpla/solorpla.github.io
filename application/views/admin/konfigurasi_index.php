<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
	<div class="modal-content">
		<div class="modal-header">
			<a class="text-primary">
				<span>Konfigurasi</span>
			</a>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col mb-3">
					<h4 class="form-label">Judul website</h4>
					<input type="text" class="form-control" placeholder="Judul" name="judul" value="<?= $konfig->judul_website; ?>" />
				</div>
			</div>
			<div class="row">
				<div class="col mb-3">
					<h4 class="form-label">Profil website</h4>
					<textarea name="profil_website" class="form-control"><?= $konfig->profil_website; ?></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col mb-3">
					<h4 class="form-label">Instagram</h4>
					<input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>" />
				</div>
			</div>
			<div class="row">
				<div class="col mb-3">
					<h4 class="form-label">Tiktok</h4>
					<input type="text" class="form-control" name="tiktok" value="<?= $konfig->tiktok; ?>" />
				</div>
			</div>
			<div class="row">
				<div class="col mb-3">
					<h4 class="form-label">Email</h4>
					<input type="email" class="form-control" name="email" value="<?= $konfig->email; ?>" />
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</div>
</form>
