<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
	<div class=" hero container">
		<div class="card">
			<div class="card-header">
				<h3>Tambah Iuran Warga</h3>
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
				<form method="post" action="<?= base_url('kas/store') ?>">
					<?= csrf_field(); ?>
					<div class="form-group">
						<label for="keterangan">Keterangan</label>
						<input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= old('keterangan'); ?>">
					</div>
	 
					<div class="form-group">
						<label for="tanggal">Tanggal Iuran</label>
						<input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= old('tanggal'); ?>">
					</div>
					
					<div class="form-group">
						<label for="bulan">Bulan</label>
						<input type="month" class="form-control" id="bulan" name="bulan" value="<?= old('bulan'); ?>">
					</div>
					
					<div class="form-group">
						<label for="tahun">Tahun</label>
						<input type="year" class="form-control" id="tahun" name="tahun" value="<?= old('tahun'); ?>">
					</div>
					
					<div class="form-group">
						<label for="jumlah">Jumlah</label>
						<input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= old('jumlah'); ?>">
					</div>
					
					<div class="form-group">
						<label for="warga_id">Warga ID</label>
						<input type="number" class="form-control" id="warga_id" name="warga_id" value="<?= old('jumlah'); ?>">
					</div>
	 
					<div class="form-group">
						<input type="submit" value="Simpan" class="btn btn-info mt-2" />
						<a class="btn btn-warning mt-2" href="<?= base_url('iuran');?>" role="button">Batal</a>
					</div>	 
				</form>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>