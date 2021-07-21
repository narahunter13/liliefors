<?= $this->extend('user/_layout'); ?>

<?php
$session = \Config\Services::session();
$error = $session->getFlashdata('error');
?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <?php if ($status['status_pengumpulan'] == 0) { ?>
        <form action="/user/unggah-videografi/send" method="post" enctype="multipart/form-data">
            <!-- Modal -->
            <div class="modal fade" id="karya" tabindex="-1" role="dialog" aria-labelledby="karyaLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="karyaLabel">Kirim Karya</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah Anda yakin ingin mengirim karya Anda?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Yakin</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->

            <div class="row">
                <?php if (isset($error)) { ?>
                    <div class="alert alert-danger alert-dismissible fade show col-6" role="alert">
                        <?= $error ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 custom-file">
                    <input type="file" name="karya" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Pilih Karya</label>
                </div>
            </div>
            <div class="row mt-2">
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#karya">Kirim</button>
            </div>
        </form>
    <?php } else { ?>
        <p class="lead text-center font-italic">Anda sudah mengunggah karya</p>
    <?php } ?>
</div>

<script>
    $('#customFile').on('change', function() {
        //get the file name
        var fileName = $(this).val();
        fileName = fileName.split("\\");
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName[fileName.length - 1]);
    })
</script>

<?= $this->endSection(); ?>