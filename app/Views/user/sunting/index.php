<?= $this->extend('user/_layout'); ?>

<?= $this->section('content'); ?>
<div class="modal fade" id="ganti-nama" tabindex="-1" role="dialog" aria-labelledby="ganti-nama-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ganti-nama-label">Ganti Nama</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama Baru</label>
                        <input type="text" class="form-control" id="nama">
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
<div class="modal fade" id="ganti-password" tabindex="-1" role="dialog" aria-labelledby="ganti-password-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ganti-password-label">Ganti Kata Sandi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Kata Sandi Lama</label>
                        <input type="password" class="form-control" id="password-lama" name="password-lama">
                    </div>
                    <div class="form-group">
                        <label for="nama">Kata Sandi Baru</label>
                        <input type="password" class="form-control" id="password-baru" name="password-baru">
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

<div class="row mb-4">
    <div class="container-fluid">
        <button class="btn btn-primary" data-toggle="modal" data-target="#ganti-nama">Ganti Nama</button>
    </div>
</div>
<div class="row">
    <div class="container-fluid">
        <button class="btn btn-primary" data-toggle="modal" data-target="#ganti-password">Ganti Kata Sandi</button>
    </div>
</div>

<?= $this->endSection(); ?>