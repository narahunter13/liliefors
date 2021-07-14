<?= $this->extend('admin/_layout'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Peserta</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="peserta-table" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Total Pembayaran</th>
                                <th>Status Pembayaran</th>
                                <th>Ubah Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td class="text-center">System Architect</td>
                                <td class="text-center">Edinburgh</td>
                                <td class="text-center">Edinburgh</td>
                                <td class="text-center">Ubah</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>