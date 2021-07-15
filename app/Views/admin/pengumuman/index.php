<?= $this->extend('admin/_layout'); ?>

<?php
$session = \Config\Services::session();
$success = $session->getFlashdata('success');
?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="container-fluid">
        <a href="/admin/pengumuman/new" class="btn btn-primary col-12 col-md-2 mb-4">Buat Pengumuman</a>
        <?= isset($success) ? "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  " . $success . "
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>" : ''; ?>
    </div>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Pengumuman</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="pengumuman-table" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>Judul</th>
                                <th>Terakhir Diedit</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pengumuman as $row) { ?>
                                <tr class="text-center">
                                    <td><?= $row['judul'] ?></td>
                                    <td><?= $row['last_edited'] ?></td>
                                    <td>
                                        <a href="/admin/pengumuman/sunting/<?= $row['id'];?>" class="btn btn-primary">Detail</a>
                                    </td>
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