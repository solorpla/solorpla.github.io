<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<div class="mt-3 mb-3">
	<button type="button" class="btn waves-effect waves-light btn-rounded btn-warning" data-toggle="modal"
		data-target="#signup-modal">Tambah user
	</button>
	<div class="modal fade" id="signup-modal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<form action="<?= base_url('admin/user/simpan') ?>" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<a class="text-primary">
							<span>Tambah user</span>
						</a>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col mb-3">
								<h4 class="form-label">Nama</h4>
								<input type="text" class="form-control" placeholder="Nama" name="nama" required />
							</div>
						</div>
						<div class="row">
							<div class="col mb-3">
								<h4 class="form-label">Username</h4>
								<input type="text" class="form-control" placeholder="Username" name="username"
									required />
							</div>
						</div>
						<div class="row">
							<div class="col mb-3">
								<h4 class="form-label">Password</h4>
								<input type="password" class="form-control" placeholder="Password" name="password"
									required />
							</div>
						</div>
						<div class="row">
							<div class="col mb-3">
								<h4 class="form-label">Level</h4>
								<select name="level" id="" class="form-control">
									<option value="Admin">Admin</option>
									<option value="Kontributor">Kontributor</option>
								</select>
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
	<h3 class="card-title">Data Pengguna</h3>
	<div class="table-responsive">
		<table class="table">
			<thead class="bg-info text-white">
				<tr>
					<th>No</th>
					<th>Username</th>
					<th>Nama</th>
					<th>Level</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody class="table-border-botton-0">
				<?php $no=1; foreach($user as $aa) {?>
				<tr>
					<td><?=$no ?></td>
					<td><?= $aa['username']?></td>
					<td><?= $aa['nama']?></td>
					<td><?= $aa['level']?></td>
					<td>
						<a href="<?= base_url('admin/user/delete_data/'.$aa['id_user']);?>"
							class="btn btn-circle btn-warning"
							onClick="return confirm('Apakah anda yakin menghapus data ini?')"><span
								class=" far fa-trash-alt"></span></a>
						<button type="button" class="btn btn-circle btn-warning" data-toggle="modal"
							data-target="#edit<?= $aa['id_user'] ?>">
							<span class="fas fa-pencil-alt">
						</button>
						<div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
								<form action="<?= base_url('admin/user/update') ?>" method="post">
									<input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<a class="text-primary">
													<span>Perbarui nama user</span>
												</a>
											</div>

											<div class="modal-body">
												<div class="row">
													<div class="col mb-3">
														<h4 class="form-label">Nama</h4>
														<input type="text" class="form-control"
															value="<?= $aa['nama']?>" name=nama required />
													</div>
												</div>
												<div class="row">
													<div class="col mb-3">
														<h4 class="form-label">Username</h4>
														<input type="text" class="form-control"
															value="<?= $aa['username']?>" name=username readonly />
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
