<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<div class="col-xl-12"></div>
<div class="card">
	<form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype='multipart/form-data'>
		<h5 class="card-header">File input</h5>
		<div class="card-body">
			<div class="row">
				<div class="col mb-3">
					<label>Judul foto</label>
					<input type="text" class="form-control" placeholder="Judul" name="judul" required />
				</div>
			</div>
			<div class="mb-3">
				<label>Pilih foto</label>
				<input class="form-control" type="file" name="foto">
			</div>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>
	</form>
</div>

<?php foreach ($caraousel as $aa){?>
<div class="col-md-12 mb-3 mt-3">
	<div class="card h-100">
		<img class="card-img-top" src="<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>">
		<div class="card-body">
			<h5 class="card-title"><?= $aa['judul'] ?></h5>
			<a href="<?= base_url('admin/caraousel/delete_data/'.$aa['foto']);?>" class="btn btn-circle btn-warning"
				onClick="return confirm('Apakah anda yakin menghapus data ini?')"><span
					class=" far fa-trash-alt"></span>
			</a>
		</div>
	</div>
</div>
<?php } ?>
