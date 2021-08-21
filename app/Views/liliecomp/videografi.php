<?= $this->extend('liliecomp/_layout'); ?>
<?php
$session = \Config\Services::session();
$errors = $session->getFlashdata('errors');
?>
<?= $this->section('content'); ?>
<div class="px-4 py-2 w-full lg:w-6/12">
    <h5 class="text-base text-center font-black">FORM PENDAFTARAN LILIECOMP VIDEOGRAFI</h5>
</div>

<div class="rounded-sm shadow p-4 bg-white w-full mt-2 text-lilie-primary lg:w-6/12">
    <form action="/liliecomp/videografi/daftar" method="post" enctype="multipart/form-data">
        <!-- Ketua Tim -->
        <h5 class="text-base font-bold mb-2">Data Ketua Tim</h5>
        
        <label for="nama_lengkap">Nama Lengkap</label><br>
        <small class="text-red-500"><?= isset($errors['nama']) ? $errors['nama'] : ""; ?></small>
        <input value="<?= old('nama_lengkap') ? old('nama_lengkap') : $session->get('nama'); ?>" class="mb-8 w-full rounded-sm border border-lilie-primary p-1 focus:outline-none" type="text" name="nama_lengkap" id="nama_lengkap" readonly>
        
        <label for="email">Email</label><br>
        <small class="text-red-500"><?= isset($errors['email']) ? $errors['email'] : ""; ?></small>
        <input value="<?= old('email') ? old('email') : $user['email']; ?>" class="mb-8 w-full rounded-sm border border-lilie-primary p-1 focus:outline-none" type="email" name="email" id="email" readonly>
        
        <label for="asal_daerah">Asal Daerah (Kabupaten/Kota, Provinsi)</label><br>
        <small class="text-red-500"><?= isset($errors['asal_daerah']) ? $errors['asal_daerah'] : ""; ?></small>
        <input value="<?= old('asal_daerah'); ?>" class="w-full rounded-sm border border-lilie-primary p-1 focus:outline-none" type="text" name="asal_daerah" id="asal_daerah">
        <p class="mb-8 text-sm font-thin my-1">Contoh: Palembang, Sumatera Selatan</p>
        
        <label for="nomor_wa">No. WA yang Aktif</label><br>
        <small class="text-red-500"><?= isset($errors['no_wa']) ? $errors['no_wa'] : ""; ?></small>
        <input value="<?= old('nomor_wa'); ?>" class="mb-8 w-full rounded-sm border border-lilie-primary p-1 focus:outline-none" type="text" name="nomor_wa" id="nomor_wa">
        
        <label for="sosial_media">Sosial Media</label><br>
        <small class="text-red-500"><?= isset($errors['sosial_media']) ? $errors['sosial_media'] : ""; ?></small>
        <input value="<?= old('sosial_media'); ?>" class="w-full rounded-sm border border-lilie-primary p-1 focus:outline-none" type="text" name="sosial_media" id="sosial_media">
        <p class="mb-8 text-sm font-thin my-1 text-justify">Contoh: Instagram:@abcxyz</p>

        <!-- Anggota Tim 1 -->
        <h5 class="text-base font-bold mb-2">Data Anggota 1 (jika ada, maka semuanya harus diisi)</h5>
        
        <label for="nama_lengkap_2">Nama Lengkap</label><br>
        <input value="<?= old('nama_lengkap_2') ?>" class="mb-8 w-full rounded-sm border border-lilie-primary p-1 focus:outline-none" type="text" name="nama_lengkap_2" id="nama_lengkap_2">
        
        <label for="email_2">Email</label><br>
        <input value="<?= old('email_2') ?>" class="mb-8 w-full rounded-sm border border-lilie-primary p-1 focus:outline-none" type="email" name="email_2" id="email_2">
        
        <label for="asal_daerah_2">Asal Daerah (Kabupaten/Kota, Provinsi)</label><br>
        <input value="<?= old('asal_daerah'); ?>" class="w-full rounded-sm border border-lilie-primary p-1 focus:outline-none" type="text" name="asal_daerah_2" id="asal_daerah_2">
        <p class="mb-8 text-sm font-thin my-1">Contoh: Palembang, Sumatera Selatan</p>
        
        <label for="nomor_wa_2">No. WA yang Aktif</label><br>
        <input value="<?= old('nomor_wa'); ?>" class="mb-8 w-full rounded-sm border border-lilie-primary p-1 focus:outline-none" type="text" name="nomor_wa_2" id="nomor_wa_2">
        
        <label for="sosial_media_2">Sosial Media</label><br>
        <input value="<?= old('sosial_media'); ?>" class="w-full rounded-sm border border-lilie-primary p-1 focus:outline-none" type="text" name="sosial_media_2" id="sosial_media_2">
        <p class="mb-8 text-sm font-thin my-1 text-justify">Contoh: Instagram:@abcxyz</p>

        <!-- Anggota Tim 2 -->
        <h5 class="text-base font-bold mb-2">Data Anggota 2 (jika ada, maka semuanya harus diisi)</h5>
        
        <label for="nama_lengkap_3">Nama Lengkap</label><br>
        <input value="<?= old('nama_lengkap_3') ?>" class="mb-8 w-full rounded-sm border border-lilie-primary p-1 focus:outline-none" type="text" name="nama_lengkap_3" id="nama_lengkap_3">
        
        <label for="email_3">Email</label><br>
        <input value="<?= old('email_3') ?>" class="mb-8 w-full rounded-sm border border-lilie-primary p-1 focus:outline-none" type="email" name="email_3" id="email_3">
        
        <label for="asal_daerah_3">Asal Daerah (Kabupaten/Kota, Provinsi)</label><br>
        <input value="<?= old('asal_daerah'); ?>" class="w-full rounded-sm border border-lilie-primary p-1 focus:outline-none" type="text" name="asal_daerah_3" id="asal_daerah_3">
        <p class="mb-8 text-sm font-thin my-1">Contoh: Palembang, Sumatera Selatan</p>
        
        <label for="nomor_wa_3">No. WA yang Aktif</label><br>
        <input value="<?= old('nomor_wa'); ?>" class="mb-8 w-full rounded-sm border border-lilie-primary p-1 focus:outline-none" type="text" name="nomor_wa_3" id="nomor_wa_3">
        
        <label for="sosial_media_3">Sosial Media</label><br>
        <input value="<?= old('sosial_media'); ?>" class="w-full rounded-sm border border-lilie-primary p-1 focus:outline-none" type="text" name="sosial_media_3" id="sosial_media_3">
        <p class="mb-8 text-sm font-thin my-1 text-justify">Contoh: Instagram:@abcxyz</p>

        <!-- Info Umum -->
        <h5 class="text-base font-bold mb-2">Data Tim</h5>
        
        <label for="jenjang">Jenjang</label><br>
        <small class="text-red-500"><?= isset($errors['jenjang']) ? $errors['jenjang'] : ""; ?></small>
        <select class="mb-8 py-2 w-full border border-black" name="jenjang" id="jenjang">
            <option value="1" selected>Umum</option>
            <option value="2">SMA</option>
        </select><br>
        
        <label for="instansi">Nama Instansi</label><br>
        <small class="text-red-500"><?= isset($errors['nama_instansi']) ? $errors['nama_instansi'] : ""; ?></small>
        <input value="<?= old('instansi'); ?>" class="w-full rounded-sm border border-lilie-primary p-1 focus:outline-none mb-4" type="text" name="instansi" id="instansi">
        <br>
        
        <label for="identitas">Tanda Pengenal (.pdf)</label>
        <small class="text-red-500"><?= isset($errors['identitas']) ? $errors['identitas'] : ""; ?><br></small>
        <input type="file" name="identitas" id="identitas">
        <p class="text-sm font-thin my-1 text-justify">Kartu Pelajar bagi siswa SMA</p>
        <p class="text-sm font-thin my-1 text-justify">Untuk umum yang bukan mahasiswa boleh dikosongkan</p>
        <p class="text-sm font-thin my-1 text-justify">Ketua tim dan anggota (jika ada) harus memasukkan tanda pengenal dan dijadikan satu file pdf</p>
        
        <label for="kode_referal">Kode Referal (jika ada)</label><br>
        <small class="text-red-500"><?= isset($errors['kode_referal']) ? $errors['kode_referal'] : ""; ?></small>
        <input class="mb-8 w-full rounded-sm border border-lilie-primary p-1 focus:outline-none" type="text" name="kode_referal" id="kode_referal">
        <button class="w-full bg-lilie-warning text-lilie-primary font-bold py-2" type="submit">KIRIM</button>
    </form>
</div>
<?= $this->endSection(); ?>