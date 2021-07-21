<?= $this->extend('liliecomp/_layout'); ?>

<?php
$session = \Config\Services::session();
$errors = $session->getFlashdata('errors');
?>

<?= $this->section('content'); ?>

<?php if ($terdaftar < 1) { ?>
    <div class="rounded-sm shadow-lg px-4 py-2 bg-white w-full lg:w-6/12">
        <h5 class="text-lg text-center font-black">FORM PENDAFTARAN LILIECOMP PENULISAN</h5>
    </div>

    <div class="rounded-sm shadow-lg p-4 bg-white w-full mt-4 lg:w-6/12">
        <form action="/liliecomp/penulisan/daftar" method="post" enctype="multipart/form-data">
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
            <label for="identitas">Tanda Pengenal</label><br>
            <small class="text-red-500"><?= isset($errors['identitas']) ? $errors['identitas'] : ""; ?><br></small>
            <input type="file" name="identitas" id="identitas">
            <p class="mb-8 text-sm font-thin my-1 text-justify">Kartu Pelajar bagi siswa SMA</p>
            <label for="kode_referal">Kode Referal (jika ada)</label><br>
            <small class="text-red-500"><?= isset($errors['kode_referal']) ? $errors['kode_referal'] : ""; ?></small>
            <input class="mb-8 w-full rounded-none border border-black p-1 focus:outline-none" type="text" name="kode_referal" id="kode_referal">
            <button class="w-full bg-blue-500 text-white font-bold py-2" type="submit">KIRIM</button>
        </form>
    </div>
<?php } else { ?>
    <div class="flex flex-col justify-center items-center w-full px-4 md:h-screen md:w-6/12">
        <?php if ($terbayar['status_pembayaran'] == 1) { ?>
            <p class="text-xl font-italic text-white">Anda telah mendaftar lomba ini. Silahkan menuju dashboard</p>
        <?php } else { ?>
            <p class="text-xl font-italic text-white">Anda telah mendaftar lomba ini. Silahkan melakukan pembayaran sebesar Rp. <?= $terbayar['jumlah_dibayar'] ?> ke salah satu media pemabayaran berikut:</p>
            <ul class="text-xl text-white mt-4 list-disc">
                <li>BRI: 613001017517530 (Alya Faradila)</li>
                <li>GOPAY: 081385699804 (Alya Faradila)</li>
                <li>OVO: 081385699804 (Alya Faradila)</li>
                <li>LINK AJA: 081385699804 (Alya Faradila)</li>
                <li>BCA: 7065007258 (Gloria Stephany)</li>
                <li>DANA: 081225088876 (Gloria Stephany)</li>
                <li>SHOPEE PAY: 081225088876 (Gloria Stephany)</li>
                <li>MANDIRI : 1320021491114 Daffa Fadhila Hidayat</li>
            </ul>
            <p class="text-xl font-italic text-white mt-4">Setelah itu dimohon untuk melakukan konfirmasi pembayaran pada salah satu kontak di bawah:</p>
            <ul class="text-xl text-white mt-2 list-disc">
                <li>Alya: <a href="http://wa.me/6281385699804">http://wa.me/6281385699804</a></li>
                <li>Gloria: <a href="http://wa.me/6281225088876">http://wa.me/6281225088876</a></li>
            </ul>
        <?php } ?>
    </div>
<?php } ?>

<script>
    $(document).ready(function() {
        $('#kode_referal').on('keyup', function() {
            $kode = $(this).val();
            $.ajax({
                dataType: 'json',
                url: '<?= base_url('api/referal') ?>/' + $kode,
                success: function(data) {
                    if(data.data.isValid == true) {
                        $('#kode_referal').removeClass('border-red-500');
                        $('#kode_referal').addClass('border-green-500');
                    } else {
                        $('#kode_referal').removeClass('border-green-500');
                        $('#kode_referal').addClass('border-red-500');
                    }
                }
            });
        });
    });
</script>

<?= $this->endSection(); ?>