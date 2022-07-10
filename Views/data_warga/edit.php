<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
	<div class=" hero container">
		<div class="card">
			<div class="card-header">
				<h3>Edit Data Warga</h3>
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
				<form method="post" action="<?= base_url('data_warga/update/' . $warga->id) ?>">
                <?= csrf_field(); ?>
				<div class="form-group">
                    <label for="nama">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" value="<?= $warga->nik; ?>">
                </div>
 
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $warga->nama; ?>">
                </div>
 
                <div class="form-group">
                    <label for="kelamin">Jenis Kelamin</label>
                    <select name="kelamin" class="form-control" id="kelamin">
                        <option value="L" <?= ($warga->kelamin == "L" ? "selected" : ""); ?>>Laki-laki</option>
                        <option value="P" <?= ($warga->kelamin == "P" ? "selected" : ""); ?>>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat"><?= $warga->alamat; ?></textarea>
                </div>
				
				<div class="form-group">
                    <label for="no_rumah">No Rumah</label>
                    <input type="number" class="form-control" name="no_rumah" id="no_rumah"value="<?= $warga->no_rumah; ?>">
                </div>
				
				<div class="form-group">
						<label for="status">Status</label>
						<select name="status" class="form-control" id="status">
							<option value="1">Lunas</option>
							<option value="0">Belum bayar</option>
						</select>
				</div>
 
                <div class="form-group">
					<input type="submit" value="Update" class="btn btn-info" />
					<a class="btn btn-warning" href="<?= base_url('warga');?>" role="button">Batal</a>
                </div>
 
            </form>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>