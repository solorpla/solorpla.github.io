<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<div class="mt-3 mb-3">
	<button type="button" class="btn waves-effect waves-light btn-rounded btn-warning" data-toggle="modal"
		data-target="#signup-modal">Tambah konten
	</button>
	<div class="modal fade" id="signup-modal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
				<div class="modal-content">
					<div class="modal-header">
						<a class="text-primary">
							<span>Tambah konten</span>
						</a>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col mb-3">
								<h4 class="form-label">Judul konten</h4>
								<input type="text" class="form-control" placeholder="Judul" name="judul" required />
							</div>
						</div>
						<div class="row">
							<div class="col mb-3">
								<h4 class="form-label">Kategori</h4>
								<select name="id_kategori" class="form-control">
									<?php foreach($kategori as $aa) {?>
									<option value="<?= $aa['id_kategori']?>"><?= $aa['nama_kategori']?></option>
									<?php ;}  ?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col mb-3">
								<h4 class="form-label">Keterangan</h4>
								<textarea name="keterangan" class="form-control"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col mb-3">
								<h4 class="form-label">Foto</h4>
								<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-secondary" data-dismiss="modal"
								aria-label="Close">
								Close
							</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
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
					<th>Judul</th>
					<th>Kategori konten</th>
					<th>Tanggal</th>
					<th>Kreator</th>
					<th>Foto</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody class="table-border-botton-0">
				<?php $no=1; foreach($konten as $aa) {?>
				<tr>
					<td><?=$no ?></td>
					<td><?= $aa['judul']?></td>
					<td><?= $aa['nama_kategori']?></td>
					<td><?= $aa['tanggal']?></td>
					<td><?= $aa['nama']?></td>
					<td>
						<a href="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>" target="_blank">
							<span class="fas fa-camera-retro"></span>Lihat foto
						</a>
					</td>
					<td>
						<a href="<?= base_url('admin/konten/delete_data/'.$aa['foto']);?>"
							class="btn btn-circle btn-warning"
							onClick="return confirm('Apakah anda yakin menghapus data ini?')"><span
								class=" far fa-trash-alt"></span>
						</a>

						<button type="button" class="btn btn-circle btn-warning" data-toggle="modal"
							data-target="#konten<?=$no ?>">
							<span class="fas fa-pencil-alt">
						</button>
						<div class="modal fade" id="konten<?=$no ?>" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
								<form action="<?= base_url('admin/konten/update') ?>" method="post"
									enctype='multipart/form-data'>
									<input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<a class="text-primary">
													<span><?= $aa['judul']?></span>
												</a>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col mb-3">
														<h4 class="form-label">Judul</h4>
														<input type="text" class="form-control"
															value="<?= $aa['judul']?>" name="judul" />
													</div>
												</div>
												<div class="row">
													<div class="col mb-3">
														<h4 class="form-label">Kategori</h4>
														<select name="id_kategori" class="form-control">
															<?php foreach($kategori as $uu) {?>
															<option
																<?php if($uu['id_kategori']==$aa['id_kategori']){echo"selected";}?>
																value="<?= $uu['id_kategori']?>">
																<?= $uu['nama_kategori']?></option>
															<?php ;}  ?>
														</select>
													</div>
												</div>
												<div class="row">
													<div class="col mb-3">
														<h4 class="form-label">Keterangan</h4>
														<textarea name="keterangan"
															class="form-control"><?= $aa['keterangan']?></textarea>
													</div>
												</div>
												<div class="row">
													<div class="col mb-3">
														<h4 class="form-label">Foto</h4>
														<input type="file" name="foto" class="form-control"
															accept="image/png, image/jpeg">
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
