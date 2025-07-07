<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotografi</title>
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
    $durasi_program = "19 Oktober 2024 - 3 November 2024";
    $peserta_lolos = "16 November 2024";

    // Gelombang pendaftaran
    $gelombang_1 = "15 September 2024 - 30 September 2024";
    $gelombang_2 = "1 Oktober 2024 - 15 Oktober 2024";
    ?>

    <div class="container mx-auto p-6">
        <!-- Main Section -->
        <div class="bg-white shadow-md rounded-lg p-6 content-wrapper flex flex-col md:flex-row">
            <div class="left-content order-2 md:order-1 md:w-1/2">
                <h1 class="text-4xl font-bold mb-6">Fotografi</h1>
                <p class="text-gray-700 mb-4 text-justify">
                    Lomba Fotografi adalah salah satu cabang kompetisi baru dalam Vocation of the
                    Champion (VOC). VOC ini merupakan ajang perlombaan untuk mahasiswa/i Vokasi
                    se-Indonesia dengan berbagai kategori lomba, termasuk Seni, olahraga dan Penalaran. Kompetisi
                    Vocation of the Champion (VOC) kali ini di bidang seni, yang menekankan pada komposisi
                    visual dan pesan informatif.

                    Tujuan dari lomba ini adalah untuk Mengadakan kompetisi dan acara di bidang akademik
                    dan non-akademik sesuai dengan minat dan bakat Mahasiswa/i Sekolah Vokasi seluruh Indonesia
                    serta Menciptakan sinergi yang berkelanjutan antar Mahasiswa/i Vokasi se-Indonesia melalui
                    komunikasi yang efektif dan terbuka. Lomba ini diadakan secara online untuk mahasiswa Vokasi
                    di seluruh Indonesia. Tema lomba fotografi ini mencakup pendidikan dan isu sosial. Diharapkan
                    melalui subtema tersebut, peserta dapat merancang ide-ide kreatif dan inovatif.


                </p>
                <!-- Guidebook Button -->
                <a href="Asset/Fotografi.pdf" target="_blank" class="guidebook-button">Guidebook Lomba</a>
            </div>

            <!-- Right Image Section -->
            <div class="right-image order-1 md:order-2 md:w-1/2 mb-6 md:mb-0">
                <img src="./Asset/fotografi-image.png" alt="Program Image" class="w-full rounded-lg">
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
                <li><a href="#" onclick="showContent('detail-program', this); return false;" class="block py-2">Detail
                        Lomba</a></li>
                <li><a href="#" onclick="showContent('persyaratan', this); return false;" class="block py-2">Persyaratan
                        Peserta</a></li>
                        <li><a href="#cp" onclick="showContent('cp', this); return false;" class="block py-2">Contact
                            Person</a></li>
            </ul>

            <div class="pendaftaran mt-6">
                <a href="http://uns.id/PENDAFTARANFOTOGRAFI2024" target="_blank">
                    <button class="bg-red-600 text-white py-2 px-4 rounded-lg w-full">Pendaftaran Fotografi</button>
                </a> 
            </div>
        </div>

        <!-- Main Content Section -->
        <div class="main-content flex-1 bg-white p-6 rounded-lg shadow-md">
            <div id="detail-program" class="active-content">
                <h1 class="text-2xl font-bold mb-4">Mekanisme Lomba</h1>
                <ol>
                    <li>Peserta adalah Mahasiswa Vokasi seluruh Indonesia yang telah mendaftarkan diri dan melakukan
                        registrasi ulang.</li>
                    <li>Peserta wajib mengikuti tahapan seleksi, yaitu seleksi online pengumpulan karya.</li>
                </ol>
                <ol class="mt-4">
                    <li>Terdapat dua tahap dalam perlombaan Fotografi ini, yaitu Tahap Online dan Tahap Offline</li>
                </ol>

                <h2 class="text-2xl font-bold mt-4 mb-4">Tahap Online</h2>
                <ol class="list-decimal pl-5">
                    <li>Pendaftaran dan Pengumpulan Karya Pendaftaran peserta lomba Fotografi dilakukan
                        secara online dengan mengisi formulir pendaftaran, serta membaca ketentuan juklak dan juknis
                        untuk perlombaan.
                    </li>
                    <li>Pengiriman Karya Peserta lomba fotografi dapat mengirimkan karya sesuai dengan
                        ketentuan yang ada di buku panduan ini. Pastikan Karya yang dikirim memiliki kualitas yang
                        baik dan sesuai dengan tema yang telah ditentukan.
                    </li>
                    <li>Pengumpulan Pengumpulan karya dilakukan melalui link Google Drive yang
                        disediakan oleh panitia Karya yang diunggah harus diberi nama dengan format (Nama Lomba
                        Fotografi)
                    </li>
                    <li>Penilaian oleh Juri: Juri akan menilai semua karya yang masuk berdasarkan
                        kreativitas, teknik, kesesuaian tema, dan estetika
                    </li>
                    <li>Pengumuman Finalis. Sepuluh besar finalis yang lolos seleksi akan diumumkan
                        melalui website resmi VOC dan media sosial panitia. Finalis yang terpilih akan melaju ke
                        tahap selanjutnya (Grand Final)
                    </li>
                </ol>

                <h2 class="text-2xl font-bold mt-4 mb-4">Tahap Offline</h2>
                <ol class="list-decimal pl-5">
                    <li>Presentasi Karya. Sepuluh besar finalis akan mempresentasikan karya mereka secara live selama 10
                        menit pada Grand Final di Universitas Sebelas Maret Presentasi ini akan mencakup penjelasan
                        komep. teknik, dan cerita di balil karya fotografi tersebut.</li>
                    <li>Penilaian oleh Dewan Juri Dewan juri akan menilai presentasi berdasarkan kemampuan finalis dalam
                        menjelaskan karya, kreativitas, serta keunikan dari setiap karya foto</li>
                    <li>Pengumuman Pemenang Pengumuman juara 1, 2, dan 3 akan dilakukan pada saat Closing Ceremony VOC
                        2034. Pemenang akan mendapatkan hadiah berupa uang tunai, trofi, dan sertifikat penghargaan</li>
                    <ol class="mt-4">
                        <li><b>Seleksi pertama </b> merupakan babak penyisihan untuk mencari 10 besar finalis yang akan
                            terus melaju pada Grand Final. Peserta diwajibkan untuk melakukan pendaftaran dan
                            menyelesaikan berkas administrasi untuk syarat dan ketentuan lomba Fotografi. Peserta
                            diwajibkan untuk mengupload file karya fotografi pada link yang telah disediakan oleh
                            panitia dan diharapkan dapat sesuai dengan ketentuan lomba. Kesesuaian karya dengan tema,
                            kreativitas, komposisi dan estetika, teknis Fotografi serta pesan dan makna akan menjadi
                            kriteria penilaian pada babak pertama dan kedua. Setelah peserta dinyatakan lolos pada tahap
                            pertama, yaitu telah didapatkan 10 besar finalis lomba fotografi setelah itu ke-10 besar
                            finalis diwajibkan untuk bisa datang ke Solo dan tampil live mempresentasikan makna dari
                            karya tersebut di Universitas Sebelas Maret. Pengumuman juara 1.2.3. akan dilakukan pada
                            babak Grand Final.</li>
                    </ol>
            </div>

            <div id="persyaratan" class="hidden-content">
                <h1 class="text-2xl font-bold mb-4">Syarat & Ketentuan</h1>
                <ol class="list-decimal pl-5">
                    <li> Format lomba Fotografi VOC 2024 adalah format online, di mana peserta wajib mengikuti tahapan
                        seleksi dengan penuh tanggung jawab. Keputusan juri tidak dapat diganggu gugat dan akan ada
                        transparansi nilai.
                    </li>
                    <li> Ide lomba harus sesuai dengan sub tema yang ditentukan sebagai berikut: Pendidikan Isu Sosial.
                    </li>
                    <li> Karya yang mengandung unsur SARA, pornografi, dan kekerasan akan langsung didiskualifikasi
                        untuk menjaga etika dan kualitas perlombaan.
                    </li>
                    <li> Setiap peserta hanya boleh mengirimkan satu karya fotografi untuk memastikan fokus dan kualitas
                        penilaian.
                    </li>
                    <li> Peserta menjamin bahwa karya yang dikirimkan adalah hasil orisinal dan tidak melanggar hak
                        cipta pihak lain. Plagiarisme atau penggunaan karya orang lain akan mengakibatkan
                        diskualifikasi.
                    </li>
                    <li> Peserta tidak diperbolehkan mengirimkan karya yang sudah pernah dipublikasikan atau
                        diikutsertakan dalam kompetisi lain. Karya harus bersifat eksklusif untuk lomba ini</li>
                </ol>
            </div>
            <div id="cp" class="hidden-content">
            <h2 id="cp-text" class="text-2xl font-bold mb-4">Contact Person</h2>
                <ol class="list-decimal pl-5">
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mb-4"
                    onclick="window.open('https://wa.me/+6281546511460', '_blank')">Contact Person 1 (Caca)</button>
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