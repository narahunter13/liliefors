<?= $this->extend('admin/_layout'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <form class="container-fluid" action="#" method="post">
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan Judul">
        </div>
        <div class="form-group">
            <label for="isi">Isi Pengumuman</label>
            <textarea name="konten" id="summernote"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Kirim</button>
    </form>
</div>
<?= $this->endSection(); ?>