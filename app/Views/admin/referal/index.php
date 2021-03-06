<?= $this->extend('admin/_layout'); ?>

<?php
$session = \Config\Services::session();
$success = $session->getFlashdata('success');
?>

<?= $this->section('content'); ?>
<div class="modal fade" id="kode-referal" tabindex="-1" role="dialog" aria-labelledby="kode-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kode-label">Buat Kode Referal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/referal/store" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email-pemilik">Email Pemilik</label>
                        <input type="text" name="email-pemilik" class="form-control" id="email-pemilik">
                    </div>
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" name="kode" class="form-control" id="kode">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="container-fluid mb-4">
        <button id="modal-button" data-toggle="modal" data-target="#kode-referal" class="btn btn-primary col-12 col-md-2">Buat Kode</button>
        <?= isset($success) ? "<div class='alert alert-success alert-dismissible fade show mt-4' role='alert'>
            " . $success . "
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>" : ''; ?>
    </div>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Kode</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="pengumuman-table" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>Kode Referal</th>
                                <th>Pemilik Kode</th>
                                <th>Pengguna Kode</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kode_referal as $kode) { ?>
                                <tr>
                                    <td class="text-center"><?= $kode['kode_referal'] ?></td>
                                    <td><?= $kode['pemilik'] ?></td>
                                    <td class="text-center"><?= $kode['penggunaan'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>