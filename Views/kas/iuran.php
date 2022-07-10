<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Iuran Warga</h3>
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
            <a href="<?= base_url('/kas/create'); ?>" class="btn btn-primary"><i class="fa-solid fa-plus me-1"></i> Tambah</a>
			<a href="<?= base_url('/'); ?>" class="btn btn-warning"><i class="fa fa-angles-left me-1"></i> Kembali</a>
            <hr />
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
							<th>ID</th>
							<th>Keterangan</th>
                            <th>Tanggal</th>
							<th>Bulan</th>
                            <th>Tahun</th>
                            <th>Jumlah</th>
							<th>Warga ID</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$no = 1;
						foreach ($iuran as $row) {
						?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $row['id']; ?></td>
								<td><?= $row['keterangan']; ?></td>
								<td><?= $row['tanggal']; ?></td>
								<td><?= $row['bulan']; ?></td>
								<td><?= $row['tahun']; ?></td>
								<td><?= $row['jumlah']; ?></td>
								<td><?= $row['warga_id']; ?></td>
								
								<td>
									<a title="Edit" href="<?= base_url("kas/edit/$row[id]"); ?>" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
									<a title="Delete" href="<?= base_url("kas/delete/$row[id]"); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')"><i class="fa-solid fa-trash-can"></i></a>
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