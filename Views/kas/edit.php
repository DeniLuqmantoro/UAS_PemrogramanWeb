<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
	<div class=" hero container">
		<div class="card">
			<div class="card-header">
				<h3>Edit Iuran Warga</h3>
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
				<form method="post" action="<?= base_url('kas/update/' . $iuran['id']) ?>">
                <?= csrf_field(); ?>
				<div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $iuran['keterangan']; ?>">
                </div>
 
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $iuran['tanggal']; ?>">
                </div>
				
				<div class="form-group">
                    <label for="bulan">Bulan</label>
                    <input type="month" class="form-control" id="bulan" name="bulan" value="<?= $iuran['bulan']; ?>">
                </div>
				
				<div class="form-group">
                    <label for="tahun">Tanggal</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $iuran['tahun']; ?>">
                </div>
				
				<div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $iuran['jumlah']; ?>">
                </div>
				
				<div class="form-group">
                    <label for="warga_id">Tanggal</label>
                    <input type="number" class="form-control" id="warga_id" name="warga_id" value="<?= $iuran['warga_id']; ?>">
                </div>
 
                <div class="form-group">
					<input  type="submit" value="Update" class="btn btn-info" />
					<a class="btn btn-warning" href="<?= base_url('iuran');?>" role="button">Batal</a>
                </div>
 
            </form>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>