<?= $this->extend('admin/_layout'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="container-fluid">
        <a href="/admin/pengumuman/new" class="btn btn-primary col-12 col-md-2 mb-4">Buat Pengumuman</a>
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
                            <tr>
                                <td>Tiger Nixon</td>
                                <td class="text-center">System Architect</td>
                                <td class="text-center">Edinburgh</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>