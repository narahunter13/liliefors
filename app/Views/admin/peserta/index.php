<?= $this->extend('admin/_layout'); ?>

<?= $this->section('content'); ?>

<!-- Modal -->
<div class="modal fade" id="status-bayar" tabindex="-1" role="dialog" aria-labelledby="status-bayarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="status-bayarLabel">Ubah Status Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/peserta/ubah" method="post">
                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    Apakah Anda yakin bahwa peserta sudah melakukan konfirmasi pembayaran?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Yakin</button>
                </div>
            </form>
        </div>
    </div>
</div>

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
                                <th>Kategori</th>
                                <th>Total Pembayaran</th>
                                <th>Ubah Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            helper(['custom_helper']);
                            foreach ($peserta as $row) { ?>
                                <tr>
                                    <td class="text-center"><?= $row['nama'] ?></td>
                                    <td class="text-center"><?= $row['email'] ?></td>
                                    <td class="text-center"><?= lomba_mapping($row['lomba']) ?></td>
                                    <td class="text-center"><?= $row['jumlah_dibayar'] ?></td>
                                    <td class="text-center"><?= status_pembayaran($row['status_pembayaran'], $row['id']); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function pass($params) {
        $('#id').attr('value', $params);
    }
</script>

<?= $this->endSection(); ?>