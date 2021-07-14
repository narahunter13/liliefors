<?= $this->extend('liliecomp/_layout'); ?>

<?= $this->section('content'); ?>

<div class="rounded-sm shadow-lg px-4 py-2 bg-white w-full lg:w-6/12">
    <h5 class="text-lg text-center font-black">FORM PENDAFTARAN LILIECOMP PENULISAN</h5>
</div>

<div class="rounded-sm shadow-lg p-4 bg-white w-full mt-4 lg:w-6/12">
    <form action="#" method="post">
        <label for="nama-lengkap">Nama Lengkap</label><br>
        <input class="mb-8 w-full rounded-none border border-black p-1 focus:outline-none" type="text" name="nama-lengkap" id="nama-lengkap">
        <label for="email">Email</label><br>
        <input class="mb-8 w-full rounded-none border border-black p-1 focus:outline-none" type="email" name="email" id="email">
        <label for="asal-daerah">Asal Daerah (Kabupaten/Kota, Provinsi)</label><br>
        <input class="w-full rounded-none border border-black p-1 focus:outline-none" type="text" name="asal-daerah" id="asal-daerah">
        <p class="mb-8 text-sm font-thin my-1">Contoh: Palembang, Sumatera Selatan</p>
        <label for="asal-daerah">Jenjang</label><br>
        <select class="mb-8 py-2 w-full border border-black" name="intansi" id="instansi">
            <option value="UMUM">Umum</option>
            <option value="PT">Perguruan Tinggi</option>
            <option value="SMA">SMA</option>
        </select><br>
        <label for="nama-instansi">Nama Instansi</label><br>
        <input class="w-full rounded-none border border-black p-1 focus:outline-none" type="text" name="nama-instansi" id="nama-instansi">
        <p class="mb-8 text-sm font-thin my-1 text-justify">Untuk umum yang bukan mahasiswa boleh dikosongkan</p>
        <label for="nomor-wa">No. WA yang Aktif</label><br>
        <input class="mb-8 w-full rounded-none border border-black p-1 focus:outline-none" type="text" name="nomor-wa" id="nomor-wa">
        <label for="sosial-media">Sosial Media</label><br>
        <input class="w-full rounded-none border border-black p-1 focus:outline-none" type="text" name="sosial-media" id="sosial-media">
        <p class="mb-8 text-sm font-thin my-1 text-justify">Contoh: Instagram:@abcxyz</p>
        <label for="kode-referal">Kode Referal (jika ada)</label><br>
        <input class="mb-8 w-full rounded-none border border-black p-1 focus:outline-none" type="text" name="kode-referal" id="kode-referal">
        <p class="mb-8">Jumlah yang dibayarkan: <span class="font-bold" id="total">35000</span></p>
        <button class="w-full bg-blue-500 text-white font-bold py-2" type="submit">KIRIM</button>
    </form>
</div>

<?= $this->endSection(); ?>