<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<div class="mt-3 mb-3">
	<button type="button" class="btn waves-effect waves-light btn-rounded btn-warning" data-toggle="modal"
		data-target="#signup-modal">Tambah kategori
	</button>
	<div class="modal fade" id="signup-modal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<a class="text-primary">
                            <span>Tambah kategori</span>
                        </a>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col mb-3">
								<h4 class="form-label">Nama kategori</h4>
								<input type="text" class="form-control" placeholder="Nama" name="nama_kategori" required />
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-secondary" data-dismiss="modal" aria-label="Close">
							Close
						</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
			</form>
		</div>
	</div>
</div>
</div>
</div>
</div>

<div class="card">
	<h3 class="card-title">Kategori konten</h3>
	<div class="table-responsive">
		<table class="table">
			<thead class="bg-info text-white">
				<tr>
					<th>No</th>
					<th>Nama kategori konten</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody class="table-border-botton-0">
				<?php $no=1; foreach($kategori as $aa) {?>
				<tr>
					<td><?=$no ?></td>
					<td><?= $aa['nama_kategori']?></td>
					<td>
					<a href="<?= base_url('admin/kategori/delete_data/'.$aa['id_kategori']);?>" class="btn btn-circle btn-warning"
						onClick="return confirm('Apakah anda yakin menghapus data ini?')"><span
							class=" far fa-trash-alt"></span></a>

						<button type="button" class="btn btn-circle btn-warning" data-toggle="modal"
							data-target="#edit<?= $aa['id_kategori'] ?>">
							<span class="fas fa-pencil-alt"></span>
						</button>
						<div class="modal fade" id="edit<?= $aa['id_kategori'] ?>" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
								<form action="<?= base_url('admin/kategori/update') ?>" method="post">
									<input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<a class="text-primary">
													<span>Perbarui nama kategori</span>
												</a>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col mb-3">
														<h4 class="form-label">Nama kategori</h4>
														<input type="text" class="form-control"
															value="<?= $aa['nama_kategori']?>" name=nama_kategori required />
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-outline-secondary"
													data-dismiss="modal" aria-label="Close">
													Close
												</button>
												<button type="submit" class="btn btn-primary">Simpan</button>
											</div>
										</div>
								</form>
							</div>
						</div>
				</td>
				</tr>
				<?php $no++ ;}  ?>
			</tbody>
		</table>
	</div>
</div>

