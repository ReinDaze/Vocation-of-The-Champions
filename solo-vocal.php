<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solo Vocal</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .red-box {
            background-color: #E3342F;
            padding: 20px;
            border-radius: 10px;
            color: white;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 40px;
        }

        .red-box div {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .red-box div p {
            margin: 5px 0;
        }

        .icon {
            margin-bottom: 5px;
            display: flex;
            align-items: center;
        }

        .icon img {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }

        .content-wrapper {
            display: flex;
            align-items: flex-start;
        }

        .left-content {
            flex: 1;
            margin-right: 20px;
        }

        .right-image {
            flex: 1;
        }

        .right-image img {
            width: 100%;
            border-radius: 10px;
        }

        /* Sidebar */
        .sidebar {
            flex-basis: 25%;
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .sidebar h2 {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .sidebar ul {
            list-style-type: none;
            padding-left: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            color: #333;
            text-decoration: none;
            padding: 10px;
            display: block;
            border-radius: 5px;
            background-color: #F7FAFC;
        }

        .sidebar ul li a:hover {
            background-color: #E3342F;
            color: #FFF;
        }

        .pendaftaran {
            text-align: center;
            margin-top: 20px;
        }

        .pendaftaran button {
            background-color: #E3342F;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            border: none;
            cursor: pointer;
        }

        /* Main Content */
        .main-content {
            flex-basis: 70%;
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .main-content h1 {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .main-content p {
            line-height: 1.8;
            color: #333;
        }

        .hidden-content {
            display: none;
        }

        .active-content {
            display: block;
        }

        /* Guidebook Button */
        .guidebook-button {
            display: block;
            margin: 20px auto;
            background-color: #E3342F;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            font-size: 1rem;
            text-decoration: none;
        }

        .guidebook-button:hover {
            background-color: #C12D2B;
        }

        .sidebar {
            flex-basis: 25%;
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Sidebar Menu */
        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            width: 100%;
        }

        .sidebar ul li {
            margin-bottom: 10px;
            text-align: center;
        }

        .sidebar ul li a {
            color: #333;
            text-decoration: none;
            padding: 10px;
            display: block;
            border-radius: 5px;
            background-color: #F7FAFC;
        }

        .sidebar ul li a:hover {
            background-color: #E3342F;
            color: #FFF;
        }

        .sidebar ul li a.active {
            background-color: #E3342F;
            color: white;
            font-weight: bold;
        }

        @media (max-width: 425px) {
            #cp-text{
                text-align: center;
            }
        }
    </style>
</head>

<nav class="bg-white shadow-md">
    <div class="container mx-auto p-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center">
            <!-- Logo Image -->
            <img src="./Asset/voc1.png" alt="Logo" class="h-10 w-10 mr-2">
            <!-- Text -->
            <div class="text-2xl font-bold text-red-600">
                <a href="#">VOC</a>
            </div>
        </div>
        <!-- Menu Items -->
        <div class="hidden md:flex space-x-4">
            <a href="index.php" class="text-gray-700 hover:text-red-600">Home</a>
            <a href="index.php#kategori" class="text-gray-700 hover:text-red-600">Lomba</a>
            <a href="index.php#timeline" class="text-gray-700 hover:text-red-600">Timeline</a>
            <a href="index.php#kontak" class="text-gray-700 hover:text-red-600">Kontak</a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="menu-toggle" class="focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
    <a href="index.php" class="block text-gray-700 hover:text-red-600 py-2">Home</a>
    <a href="index.php#kategori" class="block text-gray-700 hover:text-red-600 py-2">Lomba</a>
    <a href="index.php#timeline" class="block text-gray-700 hover:text-red-600 py-2">Timeline</a>
    <a href="index.php#kontak" class="block text-gray-700 hover:text-red-600 py-2">Kontak</a>
</div>

<body class="bg-gray-100">
    <?php
    // Data dinamis
    $durasi_pendaftaran = "31 Agustus 2024 - 12 Oktober 2024";
    $durasi_program = "18 Oktober - 27 Oktober 2024";
    $peserta_lolos = "16 November 2024";

    // Gelombang pendaftaran
    $gelombang_1 = "15 September 2024 - 30 September 2024";
    $gelombang_2 = "1 Oktober 2024 - 15 Oktober 2024";
    ?>

    <div class="container mx-auto p-6">
        <!-- Main Section -->
        <div class="bg-white shadow-md rounded-lg p-6 content-wrapper flex flex-col md:flex-row">
            <div class="left-content order-2 md:order-1 md:w-1/2">
                <h1 class="text-4xl font-bold mb-6">Solo Vocal</h1>
                <p class="text-gray-700 mb-4 text-justify">
                    Solo Vocal merupakan salah satu cabang perlombaan bidang seni dalam Vocation of the Champions (VOC)
                    yang diselenggarakan oleh Sekolah Vokasi Universitas Sebelas Maret. Perlombaan Solo Vocal ini
                    diperuntukan bagi mahasiswa/i Vokasi Se-Indonesia. Perlombaan Solo Vocal ini bertujuan untuk
                    mengapresiasi bakat dan potensi seluruh mahasiswa/i Vokasi Se-Indonesia di bidang tarik suara dan
                    olah vokal, untuk mencari potensi-potensi terbaik di Indonesia melalui perlombaan Solo Vocal VOC.
                    Tema umum yang diusung VOC 2024 yaitu Empowering Vocational Talents for a Bright Future. Diharapkan
                    melalui perlombaan Solo Vocal ini nantinya para peserta dapat menciptakan karya-karya terbaiknya di
                    dunia olah vokal.
                </p>
                <!-- Guidebook Button -->
                <a href="Asset/SoloVocal.pdf" target="_blank" class="guidebook-button">Guidebook Lomba</a>
            </div>

            <!-- Right Image Section -->
            <div class="right-image order-1 md:order-2 md:w-1/2 mb-6 md:mb-0">
                <img src="./Asset/solo-vocal.png" alt="Program Image" class="w-full rounded-lg">
            </div>
        </div>


        <!-- Red Info Box -->
        <div class="red-box w-full p-6 bg-red-500 text-white rounded-lg flex justify-around items-start">
            <!-- Durasi Pendaftaran -->
            <div class="flex flex-col items-center text-center w-1/3">
                <div class="icon mb-2">
                    <img src="./Asset/durasi-pendaftaran.png" alt="calendar icon" class="w-8 h-8 mx-auto">
                </div>
                <p class="font-bold mb-2">Durasi Pendaftaran</p>
                <div class="text-left text-sm ml-2"> <!-- Align-left and smaller font size -->
                    <p><strong>Gelombang 1:</strong> <?php echo $gelombang_1; ?></p>
                    <p><strong>Gelombang 2:</strong> <?php echo $gelombang_2; ?></p>
                </div>
            </div>

            <!-- Babak Penyisihan -->
            <div class="flex flex-col items-center text-center w-1/3 mt-4"> <!-- Added margin to lower this section -->
                <div class="icon mb-2">
                    <img src="./Asset/game.png" alt="program icon" class="w-8 h-8 mx-auto">
                </div>
                <p class="font-bold mb-2">Babak Penyisihan</p>
                <p><?php echo $durasi_program; ?></p>
            </div>

            <!-- Grand Final -->
            <div class="flex flex-col items-center text-center w-1/3 mt-4"> <!-- Added margin to lower this section -->
                <div class="icon mb-2">
                    <img src="./Asset/final.png" alt="users icon" class="w-8 h-8 mx-auto">
                </div>
                <p class="font-bold mb-2">Grand Final</p>
                <p><?php echo $peserta_lolos; ?> Grand Final</p>
            </div>
        </div>

        <section class="container mx-auto flex flex-col md:flex-row gap-5 mt-10">
            <!-- Sidebar Section -->
            <div class="sidebar flex-none w-full md:w-1/4 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold mb-4">Menu Program</h2>
                <ul>
                    <li><a href="#" onclick="showContent('detail-program', this); return false;"
                            class="block py-2">Detail
                            Lomba</a></li>
                    <li><a href="#" onclick="showContent('persyaratan', this); return false;"
                            class="block py-2">Persyaratan
                            Peserta</a></li>
                    <li><a href="#cp" onclick="showContent('cp', this); return false;" class="block py-2">Contact
                            Person</a></li>
                </ul>

                <div class="pendaftaran mt-6">
                    <a href="http://uns.id/PENDAFTARANSOLOVOCAL2024" target="_blank">
                        <button class="bg-red-600 text-white py-2 px-4 rounded-lg w-full">Pendaftaran Solo
                            Vocal</button>
                    </a>
                </div>
            </div>

            <!-- Main Content Section -->
            <div class="main-content flex-1 bg-white p-6 rounded-lg shadow-md">
                <div id="detail-program" class="active-content">
                    <h1 class="text-2xl font-bold mb-4">Mekanisme Lomba</h1>
                    <h4>Terdapat dua tahap dalam perlombaan Solo Vocal ini, yaitu tahap Online dan tahap Offline</h4>

                    <h2 class="text-2xl font-bold mt-4 mb-4">Tahap Online</h2>
                    <ol class="list-decimal pl-5">
                        <li>Pendaftaran dan Pengumpulan Karya: Peserta mendaftarkan diri dan mengirimkan karya secara
                            online.
                        </li>
                        <li>Pendaftaran: Pendaftaran peserta lomba Solo Vokal dilakukan secara online dengan mengisi
                            formulir pendaftaran dan membaca ketentuan juklak dan juknis untuk perlombaan.
                        </li>
                        <li>Pengiriman Video: Peserta lomba Solo Vokal dapat mengirimkan video bernyanyi cover lagu
                            wajib
                            dan satu lagu pilihan dengan memperhatikan ketentuan yang ada di buku panduan dan durasi
                            maksimal delapan menit.
                        </li>
                        <li>Pengumpulan Video: Pengumpulan video perlombaan Solo Vokal dilakukan melalui link Google
                            Drive
                            yang disediakan oleh panitia dengan format (Nama_LombaSoVo). Pastikan video yang dikirim
                            memiliki kualitas audio dan visual yang baik.
                        </li>
                        <li>Penyisihan: Panitia akan melakukan penyisihan dan memilih 10 besar finalis yang akan
                            diundang ke
                            Solo untuk mengikuti Grand Final pada tanggal 16 November 2024. Proses seleksi ini dilakukan
                            oleh dewan juri yang berkompeten di bidangnya.</li>
                        <li>Pengumuman Finalis: Pengumuman 10 besar finalis yang akan melaju ke tahap selanjutnya (Grand
                            Final) akan diumumkan melalui website resmi VOC dan media sosial resmi panitia.
                        </li>
                    </ol>

                    <h2 class="text-2xl font-bold mt-4 mb-4">Tahap Offline</h2>
                    <ol class="list-decimal pl-5">
                        <li>Grand Final: Sepuluh besar finalis akan bernyanyi secara live pada Grand Final dengan
                            iringan
                            musik yang bebas dan dinilai oleh dewan juri yang terdiri dari profesional di bidang musik.
                            Penampilan live ini akan menjadi kesempatan bagi finalis untuk menunjukkan bakat terbaik
                            mereka
                            di depan audiens dan juri.
                        </li>
                        <li>Penilaian: Dewan juri akan menilai berdasarkan teknik vokal, penghayatan lagu, penampilan
                            panggung, dan kreativitas. Penilaian ini dilakukan secara objektif dan transparan.
                        </li>
                        <li>Pengumuman Pemenang: Pengumuman juara 1, 2, dan 3 akan dilakukan saat Closing Ceremony pada
                            tanggal 17 November 2024. Pemenang akan mendapatkan hadiah berupa uang tunai, trofi, dan
                            sertifikat penghargaan.
                        </li>
                    </ol>
                    <ol class="mt-4">
                        <li><b>Seleksi pertama </b>merupakan babak penyisihan untuk mencari 10 besar finalis yang akan
                            terus
                            melaju
                            pada Grand Final. Peserta diwajibkan untuk melakukan pendaftaran dan menyelesaikan berkas
                            administrasi sesuai dengan syarat dan ketentuan lomba Solo Vokal. Peserta diwajibkan untuk
                            mengunggah file video bernyanyi lagu wajib dan cover Solo Vokal pada link yang telah
                            disediakan
                            oleh panitia. Video yang diunggah diharapkan sesuai dengan ketentuan lomba, seperti
                            kesesuaian
                            pemilihan lagu, durasi, dan indikator lainnya yang akan menjadi kriteria penilaian pada
                            babak
                            pertama ini.

                            <br><br>Setelah peserta dinyatakan lolos pada tahap pertama dan telah terpilih 10 besar
                            finalis lomba Solo Vokal, ke-10 besar finalis diwajibkan untuk datang ke Solo dan tampil
                            live di
                            Universitas Sebelas Maret. Pada babak Grand Final, pengumuman juara satu, dua, dan tiga akan
                            dilakukan. Finalis yang telah mendapatkan juara nantinya akan diundang untuk tampil
                            memeriahkan
                            acara Grand Closing VOC 2024.
                        </li>
                    </ol>
                </div>

                <div id="persyaratan" class="hidden-content">
                    <h1 class="text-2xl font-bold mb-4">Ketentuan Peserta</h1>
                    <ol class="list-decimal pl-5">
                        <li>Peserta adalah Mahasiswa Vokasi D3/D4 seluruh Indonesia secara Solo tanpa beregu atau
                            kelompok.
                        </li>
                        <li>Peserta yang telah mendaftarkan diri dan melakukan konfirmasi pendaftaran kepada panitia,
                            mengikuti 2 tahapan Seleksi yaitu seleksi penyisihan dan seleksi LIVE. Urutan tampil akan
                            diacak
                            melalui aplikasi saat technical meeting.
                        </li>
                        <li>Alat musik/instrumen diserahkan kepada panitia lomba maksimal H-3 sebelum seleksi LIVE
                        </li>
                    </ol>

                    <h1 class="text-2xl font-bold mt-4 mb-4">Syarat & Ketentuan</h1>
                    <ol class="list-decimal pl-5">
                        <li>Peserta wajib mengikuti 2 tahapan seleksi dengan penuh tanggung jawab dan keputusan juri
                            tidak
                            bisa diganggu gugat.
                        </li>
                        <li>Peserta diwajibkan untuk hadir di Solo saat lolos tahap LIVE <b>(Transportasi akomodasi
                                ditanggung oleh masing-masing peserta).</b>
                        </li>
                        <li>Peserta hanya boleh terdaftar sebagai peserta solo tanpa regu atau kelompok.
                        </li>
                        <li>Setiap peserta hanya diperbolehkan mengirimkan 1 karya video cover yang berisi lagu wajib
                            dan
                            lagu pilihan miliknya sendiri dan durasi yang telah ditentukan oleh panitia.
                        </li>
                        <li>Video cover lomba Solo Vocal dari peserta tidak boleh di dubbing atau di auto tune.
                        </li>
                        <li>Karya merupakan hasil video cover yang belum berjalan.
                        </li>
                        <li>Karya tidak mengandung SARA dan pornografi.
                        </li>
                        <li>Karya bersifat orisinil dan belum pernah dilombakan sebelumnya.
                        </li>
                        <li>Peserta yang telah terdaftar dalam perlombaan Solo Vocal tidak boleh mengundurkan diri atau
                            digantikan oleh peserta lain.
                        </li>
                        <li>Panitia dapat mengubah sebagian atau seluruh ketentuan dalam buku panduan sewaktu waktu.
                            Segala
                            perubahan yang terjadi akan diberitahukan melalui Instagram @voc_2024.
                        </li>
                        <li>Semua jenis kecurangan pada perlombaan ini akan berakibat pada pengurangan penilaian,
                            diskualifikasi, maupun pembatalan juara lomba yang telah ditentukan.
                        </li>
                        <li>Semua peserta wajib mengikuti seluruh ketentuan, peraturan, dan rangkaian acara yang sudah
                            ditentukan panitia.
                        </li>
                    </ol>
                </div>

                <div id="cp" class="hidden-content">
                    <h2 id="cp-text" class="text-2xl font-bold mb-4">Contact Person</h2>
                    <ol class="list-decimal pl-5">
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mb-4"
                            onclick="window.open('https://wa.me/+6285713054121', '_blank')">Contact Person 1 (Ratna)</button>
                        <br>
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                            onclick="window.open('https://wa.me/+6287875077164', '_blank')">Contact Person 2
                            (Inas)</button>
                    </ol>
                </div>
            </div>
        </section>


    </div>

    <script>
        // Fungsi untuk menampilkan konten sesuai menu yang diklik
        function showContent(contentId, element) {
            // Sembunyikan semua bagian konten
            var contents = document.querySelectorAll('.main-content > div');
            contents.forEach(function (content) {
                content.classList.add('hidden-content');
                content.classList.remove('active-content');
            });

            // Tampilkan konten yang dipilih
            var activeContent = document.getElementById(contentId);
            activeContent.classList.remove('hidden-content');
            activeContent.classList.add('active-content');

            // Hapus kelas aktif dari semua tautan di sidebar
            var links = document.querySelectorAll('.sidebar ul li a');
            links.forEach(function (link) {
                link.classList.remove('active');
            });

            // Tambahkan kelas aktif ke tautan yang diklik
            element.classList.add('active');
        }

        // Event listener untuk tombol menu pada mobile
        document.getElementById('menu-toggle').addEventListener('click', function () {
            var mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>