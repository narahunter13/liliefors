<?= $this->extend('_layout') ?>

<?= $this->section('content') ?>
<div x-show="open" class="z-50 overlay h-screen w-screen fixed bg-black opacity-40 inset-0"></div>
<div x-show="open" class="z-50 modal p-4 h-screen w-screen fixed inset-0 text-lilie-primary overflow-y-auto">
    <div class="modal-body w-full rounded-sm bg-lilie-bg flex flex-col sm:w-3/4 sm:mx-auto lg:w-3/5">
        <div class="p-4 flex justify-between items-center border-b border-lilie-primary flex-initial">
            <p class="text-base-font-bold">Pengumuman</p>
            <span @click="open = false" class="font-extrabold text-lg cursor-pointer">&times;</span>
        </div>
        <div class="p-4 flex-grow">
            <img class="w-full h-auto" src="/assets/img/poster.jpg" alt="Poster">
        </div>
    </div>
</div>

<section class="grid grid-cols-12 text-lilie-primary">
    <h1 class="col-span-12 text-center font-extrabold text-xl lg:text-2xl">LILIEFORS 2021</h1>
    <h2 class="col-span-12 text-center italic lg:text-xl">"Be Confident and Impact Others"</h2>
    <svg class="col-span-12 w-full h-auto my-4 sm:w-3/4 sm:justify-self-center lg:col-span-4" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150.71 173.53">
        <defs>
            <style>
                .cls-1 {
                    fill: #d24635;
                }

                .cls-1,
                .cls-2,
                .cls-3,
                .cls-4,
                .cls-5,
                .cls-6,
                .cls-7 {
                    fill-rule: evenodd;
                }

                .cls-2 {
                    fill: #e6664d;
                }

                .cls-3 {
                    fill: #0b4269;
                }

                .cls-4 {
                    fill: #5795a0;
                }

                .cls-5 {
                    fill: #4f4039;
                }

                .cls-6 {
                    fill: #bf9d6f;
                }

                .cls-7 {
                    fill: #e4e5c6;
                }
            </style>
        </defs>
        <title>Logo</title>
        <polygon class="cls-1" points="0 45.22 0 129.97 75.45 173.53 75.45 86.89 0 45.22" />
        <polygon class="cls-2" points="4.81 53.4 4.81 127.34 70.64 165.35 70.64 89.75 4.81 53.4" />
        <polygon class="cls-3" points="150.71 45.22 150.71 129.97 75.27 173.53 75.27 86.89 150.71 45.22" />
        <polygon class="cls-4" points="146.19 52.91 146.19 127.5 79.79 165.84 79.79 89.58 146.19 52.91" />
        <polygon class="cls-5" points="75.3 0 0 45.22 75.45 86.89 150.71 45.22 75.3 0" />
        <polygon class="cls-6" points="75.31 6.41 11.11 44.96 75.43 80.48 139.6 44.96 75.31 6.41" />
        <path class="cls-7" d="M114.63,96.44c-.27.49-5.73,3.49-6.65,4l-6.82,4c-2.8,1.63-4.12,2.18-5.75,4.94-1.53,2.6-1.32,6.17-1.29,9.59,0,3.65-.53,18.74.37,20.89,1.26,3,5.43,0,7.18-1.06,6.35-3.92,13.94-8,20.46-11.88,2.75-1.64,11.85-6.59,13.28-8.23,1.87-2.12,2.37-4.58,2.43-8.3l.1-21.51c0-6.47-5.23-2.72-5.85-2.51-.2-2.93.74-7.6-3.17-6.84-2.07.41-5.1,2.59-6.79,3.61-2.62,1.58-4.2,2.12-5.79,4.59C114.47,90.65,114.64,92.49,114.63,96.44Z" />
        <path class="cls-1" d="M128,82.25c-1.23.46-6.28,3.55-7.79,4.43-3.68,2.14-3.5,3.54-3.52,8.71,0,2.54-.46,2.74-2.25,3.73-2.82,1.56-13.37,7.62-15.47,9a5.28,5.28,0,0,0-2.68,3.49c-.59,2.54-.16,9-.15,12,0,4.07,0,8.13,0,12.19,0,2.48.63,3.28,2.89,2.14,1.42-.71,2.5-1.46,3.89-2.28,1.74-1,29.41-16.9,30.9-18,2.47-1.84,2-6.36,2-10.14,0-4,.27-14.75,0-18.21-.2-2.69-2.43-1.24-3.7-.53-2.81,1.57-2.24.18-2.16-2.63C130,84.46,130.37,81.39,128,82.25Z" />
        <path class="cls-7" d="M120.08,98.5c-8.94,1.42-17,15-15.46,23.91,1.85,10.56,15.39,5.8,21-7.19,1.27-3,2.49-7.28,1.82-11.08C126.78,100.6,124.34,97.83,120.08,98.5Z" />
        <path class="cls-1" d="M119.71,101c-5.31.76-9.55,6.16-11.44,10.43a16.44,16.44,0,0,0-1.67,9c1.48,9.69,13.05,4.45,17.12-5.28,1.08-2.57,2.17-5.67,1.68-9C125,103.24,123.05,100.54,119.71,101Z" />
        <path class="cls-7" d="M118.67,103.89c-4.17.71-7.08,4.7-8.68,8.07-2.21,4.67-1.85,11.68,3.52,10.74s10.65-9.47,9.69-15.11C122.82,105.38,121.32,103.44,118.67,103.89Z" />
        <path class="cls-1" d="M117.35,107.08c-6.59,1.77-8.76,14.3-2.53,12.42,2.36-.72,4.48-3.44,5.39-5.75C121.62,110.15,120.92,106.12,117.35,107.08Z" />
        <path class="cls-7" d="M54,100.26c1.6.18,3.59,2.5,3.65,4.49.08,2.68-1.75,3.58-3.63,4.46-3.37,1.58-7.47,4.31-6.09,9.55,1.17,4.4,6.24,8.92,8.59,5.74,1.33-1.8.44-4.83-.47-6.5-1.69-3.11-2.81-3.14-3.72-4.35,2.05-1.94,6.68-1.93,7.37-6.54.57-3.85-2.44-7.93-4.75-8.88.22-2,5.41-13.35-5.42-12.66C42.35,86,26,94.11,22.86,101.47c-1.07,2.49-2.73,4.24-4.08,6.58-4.68,8.07-2.49,10.48-3.94,11.94-3.67,3.71-.89,10,3.74,8,2.36-1,.41-1.3,3.73-.9,5.82.7,11.2-4.06,15.57-5.58a9.81,9.81,0,0,0,3.35-2.07,31,31,0,0,0,2.56-2.67A81.65,81.65,0,0,0,52.27,104C52.94,102.73,53.4,101.4,54,100.26Z" />
        <path class="cls-5" d="M50,88.41c-8,1.29-20.72,7.8-24.45,13.82a7.9,7.9,0,0,0-1.12,6.15c.66,3.16,3.87,7.85,6,9.49,6.73,5.22,13.18-5.18,16.75-10.68,2.64-4.06,6.27-10.93,7.06-16C54.64,88.52,53.8,87.8,50,88.41Z" />
        <path class="cls-5" d="M31.48,121.2A24.7,24.7,0,0,1,23.89,112c-.72-1.49-1.11-3.47-1.64-4-1.65,1.64-6.16,10.3-4.31,14.06C20.63,127.53,31,121.82,31.48,121.2Z" />
        <path class="cls-5" d="M51.17,116.12c-3.21.72-.13,7,2.65,6.63C56.87,122.32,53.72,115.55,51.17,116.12Z" />
        <path class="cls-7" d="M61.51,57.36c-.7,1.14-1.35,1.66-.72,3.63S65,68.92,66,70.48c1.47,2.31,2.27,3.82,5.66,4.21,5.26.61,9.57-2.86,14.14-5.45,12.33-7,25.19-14.91,37.51-21.79,1.88-1.06,4.88-2.5,5.53-4.35,1.16-3.28-2.76-4-5.13-4.51-4.62-1.1-16.59-3.6-21.12-3.57-2.2,0-2.5.47-4.24.87.15-3.69-.86-5-3-6.61a63.71,63.71,0,0,0-6.1-3.59c-3.39-2-8.5-5.43-12.65-6.52-10.46-2.75-22.41,3-29.8,7.07a56.67,56.67,0,0,0-11.31,7.88c-3.19,3-6.72,8.43-1.65,12.28A59.15,59.15,0,0,0,39.79,50c3.08,1.79,9.52,5.72,12.72,6.65C56.22,57.74,58,57,61.51,57.36Z" />
        <path class="cls-3" d="M68.74,20.29c-10,1-25.34,8.88-32.22,16.34-2,2.15-3.51,5.55-.88,8.23,1.24,1.26,13,7.91,15.32,9.1,3.31,1.68,6,2.07,10.17,1.62,4.65-.5,5.6-1,8.91-3.08l15.3-8.93c2.5-1.46,5.15-3.09,7.73-4.47,1-.52,1-.49,1.44-1.46,1.38-2.68,1.73-4.22-.43-6.44C92.65,29.75,81.34,23.38,78.82,22A16.41,16.41,0,0,0,68.74,20.29Z" />
        <path class="cls-7" d="M67.29,23.15c-9.57,1-22.54,8.46-26.55,13.63-4.67,6,1.52,8.39,5.75,10.8,4.74,2.69,7.88,5.42,15,4.76,7.45-.69,15.41-4.9,21.2-8.86a25.73,25.73,0,0,0,5.42-4.66c4.63-6.26-1.35-8.32-5.73-10.87S74.15,22.42,67.29,23.15Z" />
        <path class="cls-3" d="M101.91,36.8c-2.17.43-6.2,3.15-8.2,4.3l-27.44,16c-3.82,2.21-3.5,2.24-.68,7.45,1.15,2.13,3.21,5.95,4.78,7.62,3,3.15,10.14-2.24,12.95-3.84,5.29-3,10.41-6.11,15.68-9.12,7.79-4.43,15.94-9.44,23.57-13.64,1.23-.68,3-1.65,3.47-2.74.78-1.8-1.64-2.23-3.16-2.59C119.27,39.34,105,36.18,101.91,36.8Z" />
        <path class="cls-3" d="M68.32,24.73C58.13,25.82,38.75,36.66,42.48,42.28c1,1.58,3.48,2.59,5.28,3.64,4.69,2.76,7.5,5.19,13,4.76,6.6-.51,19.82-6.87,23.84-11.56,4.89-5.72,1.51-6.68-3.56-9.58C77.61,27.59,73.39,24.19,68.32,24.73Z" />
        <path class="cls-7" d="M103,49.9c-3.83,1.06-.86,4,2.44,3.07C108.84,52,106.51,48.92,103,49.9Z" />
        <path class="cls-7" d="M77.14,52c-4.18.63-2.38,3.67,1,3.34C82.26,54.92,80.69,51.47,77.14,52Z" />
        <path class="cls-7" d="M73.43,67.29c-4.11.59-2.45,3.73,1,3.37C78.42,70.24,77,66.79,73.43,67.29Z" />
        <path class="cls-7" d="M78.53,57.6c-1.14.32-2.83,1-1.47,2.42a4.14,4.14,0,0,0,3.7.67C84.28,59.8,81.86,56.66,78.53,57.6Z" />
        <path class="cls-7" d="M91.88,43.29c-4,1-1.54,3.8,1.79,3.2C97.44,45.82,95.42,42.44,91.88,43.29Z" />
        <path class="cls-7" d="M108.53,40.13c-.83.3-2.71,1-1.15,2.38a4.37,4.37,0,0,0,3.82.56C114.5,42.15,112,38.89,108.53,40.13Z" />
        <path class="cls-7" d="M84.78,47.59c-4.22.7-2.52,3.71.94,3.35C89.84,50.5,88.06,47.05,84.78,47.59Z" />
        <path class="cls-7" d="M71.17,61.91c-3.9.78-1.85,3.79,1.65,3.24C76.53,64.57,74.84,61.17,71.17,61.91Z" />
        <path class="cls-7" d="M118.6,41.05c-4.28.73-2.08,3.8,1.38,3.25C123.67,43.71,122.18,40.44,118.6,41.05Z" />
        <path class="cls-7" d="M99.51,38.88c-4.06.9-1.65,3.79,1.67,3.23C105,41.47,102.94,38.11,99.51,38.88Z" />
        <path class="cls-7" d="M101,44.48c-3.88,1.11-.66,3.93,2.42,3C106.89,46.52,104.51,43.48,101,44.48Z" />
        <path class="cls-7" d="M84.21,54.18c-.28,3.18,5.3,2.55,5.75,1S87.12,51.79,84.21,54.18Z" />
        <path class="cls-7" d="M69,56.49c-3.74.94-1.17,3.81,2.15,3.14C74.8,58.89,72.65,55.57,69,56.49Z" />
        <path class="cls-7" d="M88.08,58.64c-4.1,1.14-1.19,3.83,2.08,3.12C93.76,61,91.38,57.72,88.08,58.64Z" />
        <path class="cls-7" d="M95.7,54.24c-4,.89-1.58,3.85,2,3.16S99.3,53.44,95.7,54.24Z" />
        <path class="cls-7" d="M110.62,45.52c-4.06,1.07-.91,4,2.39,3S114.06,44.62,110.62,45.52Z" />
        <path class="cls-7" d="M80.29,63.08c-3.81,1.15-.58,3.9,2.43,3C86.27,65.09,83.69,62.06,80.29,63.08Z" />
        <path class="cls-7" d="M93.75,48.8c-4.19,1-1.25,3.83,1.93,3.16C99.38,51.17,97,48,93.75,48.8Z" />
    </svg>
    <p class="col-span-12 text-justify leading-relaxed lg:col-span-8 lg:self-center"><b>Liliefors</b> adalah akronim dari Klinik Penulisan, Desain Grafis, dan Fotografi STIS. Acara Liliefors 2021 merupakan rangkaian kegiatan <i>Online Talkshow</i> yang mempertemukan peserta dengan para pembicara sesuai dengan bidangnya. Mengusung tema <b><i>“Be Confident and Impact Others”</i></b>, Liliefors diharapkan dapat memberikan kepercayaan diri dan meningkatkan motivasi peserta untuk berkarya dan memberi manfaat bagi sesama. Selain itu, Liliefors juga dikemas secara interaktif, menarik, dan tentunya menginspirasi.</p>
</section>

<!-- <section class="mt-16" id="kompetisi">
    <h2 class="text-center text-lg text-lilie-primary font-bold">KOMPETISI</h2>
    <div class="grid grid-cols-12">
        <p class="leading-relaxed col-span-12 text-justify text-lilie-primary text-sm my-8"><b><i>Liliefors Competition</i></b> merupakan ajang perlombaan tingkat nasional yang meliputi bidang kepenulisan (cerita pendek), fotografi (foto), desain grafis (desain poster), dan videografi (video kreatif). Kompetisi dengan tema <i>"Be Confident and Impact Others"</i> ini bertujuan agar para peserta berani berkarya dalam menuangkan ide dan kreativitasnya. Selain itu, ajang yang terbuka untuk SMA/sederajat dan umum ini bermaksud untuk menemukan karya terbaik yang bermanfaat bagi banyak orang. Karya-karya yang disalurkan akan diseleksi dan dipilih menjadi juara satu, dua, tiga, dan favorit untuk setiap cabang lomba berdasarkan syarat dan ketentuan yang berlaku. Secara otomatis, para peserta Liliecomp akan terdaftar juga dalam kegiatan Liliefors.</p>
    </div>
    <div class="grid grid-cols-12 gap-y-4 md:gap-4">
        <div class="card">
            <= $this->include('svg/dg'); ?>
            <div class="card-body">
                <h4 class="card-title">Desain Grafis</h4>
                <p class="leading-relaxed">Manusia dapat menangkap suatu nilai atau pesan tak hanya melalui kata, tetapi juga rupa. Rangkaian bentuk dan warna yang harmonis dengan sedikit sentuhan tipografi yang apik dapat menjadi sarana penyampai pesan untuk sesama. Dengan tema <i>"I Am Beyond Myself"</i>, sampaikan pesanmu melalui desain poster yang sarat makna.</p>
                <div class="flex justify-end mt-4">
                    <button class="card-button bg-gray-300">Ditutup</button>
                </div>
            </div>
        </div>
        <div class="card">
            <= $this->include('svg/fg'); ?>
            <div class="card-body">
                <h4 class="card-title">Fotografi</h4>
                <p class="leading-relaxed">Keadaan itu dinamis dan terikat waktu. Foto mengubahnya menjadi statis di satu waktu tertentu. Foto adalah media berbentuk dua dimensi yang menangkap momen tanpa suara dengan pesan dan sejarah. Sejalan dengan tema <i>"Inhale Confidence, Exhale Diffidence"</i>, tangkap dan abadikan momen dalam suatu foto nan inspiratif.</p>
                <div class="flex justify-end mt-4">
                    <button class="card-button bg-gray-300">Ditutup</button>
                </div>
            </div>
        </div>
        <div class="card">
            <= $this->include('svg/rp'); ?>
            <div class="card-body">
                <h4 class="card-title">Penulisan</h4>
                <p class="leading-relaxed">Nama manusia dapat abadi dan dikenang melalui karya, tak terkecuali karya tulis. Cerpen hanyalah satu di antara beragam bentuk karya tulis. Cerpen menjadi media untuk meninggalkan tanda melalui cerita fantasi maupun pasti. Bertemakan <i>"Break My Fear, Build My Confidence"</i>, ciptakan cerpen yang menarik dan menginspirasi.</p>
                <div class="flex justify-end mt-4">
                    <button class="card-button bg-gray-300">Ditutup</button>
                </div>
            </div>
        </div>
        <div class="card">
            <= $this->include('svg/vg'); ?>
            <div class="card-body">
                <h4 class="card-title">Videografi</h4>
                <p class="leading-relaxed">Paduan antara visual dan audio dalam suatu jalin cerita dapat menggugah perasaan para pemirsanya. Menyisipkan nilai-nilai baik dalam suatu karya video barangkali dapat menjadikan nilai-nilai tersebut lebih mudah dipahami. Dengan tema <i>"Self Confidence"</i>, tebarkan rasa percaya diri melalui karya video.</p>
                <div class="flex-1 w-full flex justify-end mt-4">
                    <button class="card-button bg-gray-300">Ditutup</button>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section id="karya" class="mt-16">
    <h2 class="text-center text-lg text-lilie-primary font-bold mb-4">KARYA PENULISAN</h2>
    <div class="flex flex-col items-center w-full text-lilie-primary">
        <a class="p-2 bg-white shadow-sm rounded-sm my-2 text-justify font-thin w-full" href="<?= base_url('uploads/1.pdf') ?>">Fobia dan Indahnya Pendakian<br><br>Karya: Aji Santoso</a>
        <a class="p-2 bg-white shadow-sm rounded-sm my-2 text-justify font-thin w-full" href="<?= base_url('uploads/2.pdf') ?>">Cantik<br><br>Karya: Delia Putri Ernanda Cahyono</a>
        <a class="p-2 bg-white shadow-sm rounded-sm my-2 text-justify font-thin w-full" href="<?= base_url('uploads/3.pdf') ?>">Ratapan Positif Gendis, Gadis Pelosok Desa<br><br>Karya: Dliya Fathiyyah Fatin</a>
        <a class="p-2 bg-white shadow-sm rounded-sm my-2 text-justify font-thin w-full" href="<?= base_url('uploads/4.pdf') ?>">Biola<br><br>Karya: Muhammad Zidan Nuralifian</a>
        <a class="p-2 bg-white shadow-sm rounded-sm my-2 text-justify font-thin w-full" href="<?= base_url('uploads/5.pdf') ?>">Nilai Diri<br><br>Karya: Rahmah Dwi Lutfillah</a>
        <a class="p-2 bg-white shadow-sm rounded-sm my-2 text-justify font-thin w-full" href="<?= base_url('uploads/6.pdf') ?>">Alter Ego<br><br>Karya: Siti Nurhaliza S</a>
    </div>
</section>

<section id="seminar" class="mt-16">
    <h2 class="text-center text-lg text-lilie-primary font-bold mb-4">SEMINAR</h2>
    <div class="grid grid-cols-12 my-4">
        <a href="/liliefors" class="card-button bg-lilie-warning col-span-12 flex justify-center md:col-start-5 md:col-end-9 lg:col-start-6 lg:col-end-8">DAFTAR SEMINAR!</a>
    </div>
    <div class="grid grid-cols-12 gap-y-4 md:gap-4">
        <div class="relative rounded-sm col-span-12 overflow-hidden bg-white shadow-sm md:col-span-6 lg:col-span-3">
            <img class="w-full h-auto" src="/assets/img/pembicara-1.jpg" alt="Desain Grafis">
            <div class="card-body">
                <h4 class="card-title">Desain Grafis</h4>
                <h5 class="card-title text-lilie-primary text-sm">Pembicara: Enrico Jonathan</h5>
                <p class="leading-relaxed">Keindahan sebuah desain tak luput dari gagasan dan komposisi yang menyusunnya. Namun, fungsionalitas juga diperlukan agar desain tak hanya memanjakan mata, tetapi menjangkau suatu makna dan tujuan dengan mengombinasikan berbagai elemen visual, seperti tipografi, fotografi, dan ilustrasi secara efektif dan efisien. Desain yang baik mampu mengomunikasikan pesan dan menciptakan persepsi tertentu bagi para penikmatnya. Dalam Seminar Desain Grafis Liliefors 2021, perluas pemahaman dan pandanganmu mengenai desain grafis bersama Enrico Jonathan, <i>The Creative Lead of</i> "Kok Bisa?".</p>
            </div>
        </div>
        <div class="relative rounded-sm col-span-12 overflow-hidden bg-white shadow-sm md:col-span-6 lg:col-span-3">
            <img class="w-full h-auto" src="/assets/img/pembicara-2.jpg" alt="Fotografi">
            <div class="card-body">
                <h4 class="card-title">Fotografi</h4>
                <h5 class="card-title text-lilie-primary text-sm">Pembicara: Ingga Suwandana</h5>
                <p class="leading-relaxed">Selembar foto dapat membekukan waktu, menyimpan memori dan kisah yang kadang tak mampu terungkap dengan kata. Ketika diambil dengan sudut pandang dan komposisi yang tepat, dirangkum dalam gambaran nyata, foto tak lepas dari keseharian hingga peristiwa tak terduga. Satu bingkai mampu mengabadikan peristiwa sesederhana kenangan masa remaja, perjalanan menjelajah nusantara, hingga hari bersejarah negara dan arti suatu bangsa bagi dunia. Bersama Ingga Suwandana, <i>Founder of explore lombok dan Switch On</i>, perkaya wawasanmu akan dunia di balik lensa di Seminar Fotografi Liliefors 2021.</p>
            </div>
        </div>
        <div class="relative rounded-sm col-span-12 overflow-hidden bg-white shadow-sm md:col-span-6 lg:col-span-3">
            <img class="w-full h-auto" src="/assets/img/pembicara-3.jpg" alt="Penulisan">
            <div class="card-body">
                <h4 class="card-title">Penulisan</h4>
                <h5 class="card-title text-lilie-primary text-sm">Pembicara: Alvi Syahrin</h5>
                <p class="leading-relaxed">Menulis menjadi sebuah seni dalam merangkai kata dan memadukan kalimat. Saat mampu mengolaborasikan imajinasi dan fakta ke dalam goresan pena, sebuah karya tercipta. Tulisan bukan sekedar rangkaian kata yang hanya untuk dibaca, tapi harus memiliki pesan dan makna sebagai pembuka pikiran pembaca. Sebuah pertanyaan pun muncul, bagaimana agar sebuah karya tulis bisa diterima oleh banyak orang? Seminar Penulisan Liliefors 2021 bersama Alvi Syahrin, penulis buku "Jika Kita Tak Pernah Jatuh Cinta" akan mengupas hal-hal mengenai kepenulisan dan pembangunan kepercayaan diri dalam menulis.</p>
            </div>
        </div>
        <div class="relative rounded-sm col-span-12 overflow-hidden bg-white shadow-sm md:col-span-6 lg:col-span-3">
            <img class="w-full h-auto" src="/assets/img/pembicara-4.jpg" alt="Videografi">
            <div class="card-body">
                <h4 class="card-title">Videografi</h4>
                <h5 class="card-title text-lilie-primary text-sm">Pembicara: Nazhif Ubaidillah</h5>
                <p class="leading-relaxed">Videografi adalah seni dalam menciptakan dan memproduksi suatu karya visual berupa video. Dalam produksinya, video memerlukan beragam konsep dan teknik agar tujuannya sebagai media komunikasi dapat diterima dengan baik oleh penonton. Kombinasi visual, narasi, hingga latar suara dan suasana yang diramu dengan tepat dapat menciptakan kisah dan pesan yang kuat untuk penonton. Terlepas dari apapun tema yang diangkat, konten fiksi pun mampu mendekati kenyataan yang kita hadapi di keseharian dalam wujud sebuah video. Nazhif Ubaidillah akan membagikan pengalaman dan pengetahuannya di dunia videografi dalam Seminar Videografi Liliefors 2021.</p>
            </div>
        </div>
    </div>
</section>

<section id="galeri" class="my-16 lg:px-12">
    <h2 class="text-center text-lg text-lilie-primary font-bold mb-4">GALERI</h2>
    <div class="px-4 mt-2 relative overflow-hidden rounded lg:w-3/4 lg:mx-auto" style="padding-top: 56.25%">
        <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/-QwbovNzKvE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>
<?= $this->endSection() ?>