<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
	<div class=" hero container">
		<div class="card">
			<div class="card-header">
				<h3>Tambah Data Warga</h3>
			</div>
			<hr>
			<div class="card-body">
				<?php if (!empty(session()->getFlashdata('error'))) : ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<h4>Periksa Entrian Form</h4>
						</hr />
						<?php echo session()->getFlashdata('error'); ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>
				<form method="post" action="<?= base_url('data_warga/store') ?>">
					<?= csrf_field(); ?>
					<div class="form-group">
						<label for="nik">NIK</label>
						<input type="number" class="form-control" id="nik" name="nik" value="<?= old('nik'); ?>">
					</div>
	 
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>">
					</div>
	 
					<div class="form-group">
						<label for="kelamin">Jenis Kelamin</label>
						<select name="kelamin" class="form-control" id="kelamin">
							<option value="L">Laki-laki</option>
							<option value="P">Perempuan</option>
						</select>
					</div>

					<div class="form-group">
						<label for="alamat">Alamat</label>
						<textarea class="form-control" name="alamat" id="alamat"><?= old('alamat') ?></textarea>
					</div>
					
					<div class="form-group">
						<label for="no_rumah">No Rumah</label>
						<input type="text" class="form-control" id="no_rumah" name="no_rumah" value="<?= old('no_rumah'); ?>">
					</div>
					
					<div class="form-group">
						<label for="status">Status</label>
						<select name="status" class="form-control" id="status">
							<option value="1">Lunas</option>
							<option value="0">Belum bayar</option>
						</select>
					</div>
	 
					<div class="form-group">
						<input type="submit" value="Simpan" class="btn btn-info mt-2" />
						<a class="btn btn-warning mt-2" href="<?= base_url('warga');?>" role="button">Batal</a>
					</div>	 
				</form>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>