<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>Data Warga</h5>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <a href="<?= base_url('/data_warga/create'); ?>" class="btn btn-primary"> <i class="fa-solid fa-plus"></i> Tambah</a>
			<a href="<?= base_url('/'); ?>" class="btn btn-warning"> <i class="fa-solid fa-angles-left"></i> Kembali</a>
            <hr />
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
							<th>ID</th>
							<th>NIK</th>
                            <th>Nama</th>
							<th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No Rumah</th>
							<th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$no = 1;
						foreach ($warga as $row) {
						?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $row->id; ?></td>
								<td><?= $row->nik; ?></td>
								<td><?= $row->nama; ?></td>
								<td><?= $row->kelamin; ?></td>
								<td><?= $row->alamat; ?></td>
								<td><?= $row->no_rumah; ?></td>
								<td><?= $row->status; ?></td>
								<td>
									<a title="Edit" href="<?= base_url("data_warga/edit/$row->id"); ?>" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
									<a title="Delete" href="<?= base_url("data_warga/delete/$row->id") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')"><i class="fa-solid fa-trash-can"></i></a>
								</td>
							</tr>
						<?php
						}
						?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>