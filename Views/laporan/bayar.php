<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>Data Pembayaran</h5>
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
            <a href="<?= base_url('/laporan/create'); ?>" class="btn btn-primary"> <i class="fa-solid fa-plus"></i> Tambah</a>
			<a href="<?= base_url('/'); ?>" class="btn btn-warning"> <i class="fa-solid fa-angles-left"></i> Kembali</a>
            <hr />
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
							<th>NIK</th>
                            <th>Nama</th>
							<th>Status</th>
							<th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$no = 1;
						foreach ($bayar as $row) {
						?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $row->nik; ?></td>
								<td><?= $row->nama; ?></td>
								<td><?= $row->status; ?></td>
								<td><?= $row->jumlah; ?></td>
							</tr>
						<?php
						}
						?>
                    </tbody>
					<tfoot>
						<tr>
							<td colspan="4">Total</td>
							<td>312000.00</td>
						<tr>
					</tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>