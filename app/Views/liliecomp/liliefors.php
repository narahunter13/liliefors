<?= $this->extend('liliecomp/_layout'); ?>
<?php
$session = \Config\Services::session();
$errors = $session->getFlashdata('errors');
?>
<?= $this->section('content'); ?>
<div class="rounded-sm shadow-lg px-4 py-2 bg-white w-full lg:w-6/12">
    <h5 class="text-lg text-center font-black">FORM PENDAFTARAN LILIEFORS</h5>
</div>

<div class="rounded-sm shadow-lg p-4 bg-white w-full mt-4 lg:w-6/12">
    <form action="/liliefors/daftar" method="post">
        <label for="nama_lengkap">Nama Lengkap</label><br>
        <small class="text-red-500"><?= isset($errors['nama']) ? $errors['nama'] : ""; ?></small>
        <input value="<?= old('nama_lengkap') ? old('nama_lengkap') : $session->get('nama'); ?>" class="mb-8 w-full rounded-none border border-black p-1 focus:outline-none" type="text" name="nama_lengkap" id="nama_lengkap" readonly>
        <label for="email">Email</label><br>
        <small class="text-red-500"><?= isset($errors['email']) ? $errors['email'] : ""; ?></small>
        <input value="<?= old('email') ? old('email') : $user['email']; ?>" class="mb-8 w-full rounded-none border border-black p-1 focus:outline-none" type="email" name="email" id="email" readonly>
        <label for="asal_daerah">Asal Daerah (Kabupaten/Kota, Provinsi)</label><br>
        <small class="text-red-500"><?= isset($errors['asal_daerah']) ? $errors['asal_daerah'] : ""; ?></small>
        <input value="<?= old('asal_daerah'); ?>" class="w-full rounded-none border border-black p-1 focus:outline-none" type="text" name="asal_daerah" id="asal_daerah">
        <p class="mb-8 text-sm font-thin my-1">Contoh: Palembang, Sumatera Selatan</p>
        <label for="jenjang">Jenjang</label><br>
        <small class="text-red-500"><?= isset($errors['jenjang']) ? $errors['jenjang'] : ""; ?></small>
        <select class="mb-8 py-2 w-full border border-black" name="jenjang" id="jenjang">
            <option value="1" selected>Umum</option>
            <option value="2">SMA</option>
        </select><br>
        <label for="instansi">Nama Instansi</label><br>
        <small class="text-red-500"><?= isset($errors['instansi']) ? $errors['instansi'] : ""; ?></small>
        <input value="<?= old('instansi'); ?>" class="w-full rounded-none border border-black p-1 focus:outline-none" type="text" name="instansi" id="instansi">
        <p class="mb-8 text-sm font-thin my-1 text-justify">Untuk umum yang bukan mahasiswa boleh dikosongkan</p>
        <label for="nomor_wa">No. WA yang Aktif</label><br>
        <small class="text-red-500"><?= isset($errors['no_wa']) ? $errors['no_wa'] : ""; ?></small>
        <input value="<?= old('nomor_wa'); ?>" class="mb-8 w-full rounded-none border border-black p-1 focus:outline-none" type="text" name="nomor_wa" id="nomor_wa">
        <label for="sosial_media">Sosial Media</label><br>
        <small class="text-red-500"><?= isset($errors['sosial_media']) ? $errors['sosial_media'] : ""; ?></small>
        <input value="<?= old('sosial_media'); ?>" class="w-full rounded-none border border-black p-1 focus:outline-none" type="text" name="sosial_media" id="sosial_media">
        <p class="mb-8 text-sm font-thin my-1 text-justify">Contoh: Instagram:@abcxyz</p>
        <label for="kode_referal">Kode Referal (jika ada)</label><br>
        <small class="text-red-500"><?= isset($errors['kode_referal']) ? $errors['kode_referal'] : ""; ?></small>
        <input class="mb-8 w-full rounded-none border border-black p-1 focus:outline-none" type="text" name="kode_referal" id="kode_referal">
        <button class="w-full bg-blue-500 text-white font-bold py-2" type="submit">KIRIM</button>
    </form>
</div>
<?= $this->endSection(); ?>