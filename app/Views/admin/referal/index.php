<?= $this->extend('admin/_layout'); ?>

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
            <div class="modal-body">
                <form action="#" method="post">
                    <label for="email-pemilik">Email Pemilik</label>
                    <br>
                    <select name="email-pemilik" id="email-pemilik" class="email-pemilik custom-select">
                        <option value="1">A@A</option>
                        <option value="2">B@B</option>
                        <option value="3">C@C</option>
                    </select>
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" class="form-control" id="kode">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="container-fluid">
        <button id="modal-button" data-toggle="modal" data-target="#kode-referal" class="btn btn-primary col-12 col-md-2 mb-4">Buat Kode</button>
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