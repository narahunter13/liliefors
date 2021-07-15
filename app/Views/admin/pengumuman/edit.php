<?= $this->extend('admin/_layout'); ?>

<?php
$session = \Config\Services::session();
$errors = $session->getFlashdata('errors');
?>

<?= $this->section('content'); ?>
<div class="row">
    <form class="container-fluid" action="/admin/pengumuman/update" method="post">
        <input type="hidden" name="id" value="<?= old('id') ? old('id') : $pengumuman['id']; ?>">
        <div class="form-group">
            <label for="judul">Judul</label><br>
            <small class="text-danger mt-0"><?= isset($errors) && isset($errors['judul']) ? $errors['judul'] : '' ?></small>
            <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan Judul" value="<?= old('judul') ? old('judul') : $pengumuman['judul']; ?>">
        </div>
        <div class="form-group">
            <label for="isi">Isi Pengumuman</label><br>
            <small class="text-danger mt-0"><?= isset($errors) && isset($errors['konten']) ? $errors['konten'] : '' ?></small>
            <textarea name="isi" id="summernote"><?= old('isi') ? old('isi') : $pengumuman['konten']; ?></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Kirim</button>
        <a href="/admin/pengumuman/del/<?= $pengumuman['id']; ?>" class="btn btn-danger">Hapus</a>
    </form>
</div>
<?= $this->endSection(); ?>