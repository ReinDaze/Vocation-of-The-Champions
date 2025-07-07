<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Design</title>
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
                <h1 class="text-4xl font-bold mb-6">Fashion Design</h1>
                <p class="text-gray-700 mb-4 text-justify">
                    Lomba Fashion Design dengan tema “Inovasi Warisan Nusantara”. Sebuah ajang kompetisi untuk
                    menyatukan kekayaan budaya Indonesia dengan kreativitas design fashion modern. Kompetisi ini
                    mengundang seluruh mahasiswa vokasi di Indonesia dari berbagai latar belakang untuk menciptakan
                    karya-karya yang tidak hanya menonjolkan unsur tradisional, tetapi juga memadukannya dengan inovasi
                    kontemporer dalam dunia fashion.

                    <br> <br>Lomba ini bertujuan untuk membuka wadah bagi para designer muda untuk menunjukkan
                    kreativitas dan bakat mereka dalam merancang busana yang bernilai seni tinggi. Peserta bebas
                    berkreasi dengan mengeksplorasi berbagai motif, warna, dan teknik tradisional dari berbagai daerah
                    di Indonesia, lalu menginterpretasikannya ke dalam design busana yang relevan dengan tren mode
                    terkini. Karya yang diajukan dalam bentuk portofolio dan harus mencakup berbagai aspek penting,
                    seperti sampul, pendahuluan, proyek/karya, deskripsi, visual, dan penutup.
                </p>
                <!-- Guidebook Button -->
                <a href="Asset/FashionSMK.pdf" target="_blank" class="guidebook-button">Guidebook Lomba (SMK)</a>
                <a href="Asset/FashionVOKASI.pdf" target="_blank" class="guidebook-button">Guidebook Lomba (VOKASI)</a>
            </div>

            <!-- Right Image Section -->
            <div class="right-image order-1 md:order-2 md:w-1/2 mb-6 md:mb-0">
                <img src="./Asset/fashiondesain-img.png" alt="Program Image" class="w-full rounded-lg">
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
                        <li><a href="#cp" onclick="showContent('cp', this); return false;"
                        class="block py-2">Contact Person</a></li>
            </ul>

            <div class="pendaftaran mt-6">
                <a href="http://uns.id/PENDAFTARANFDSMK" target="_blank">
                    <button class="bg-red-600 text-white py-2 px-4 rounded-lg w-full">Pendaftaran Fashion Design SMK</button>
                </a>
            </div>
            <div class="pendaftaran mt-6">
                <a href="http://uns.id/PENDAFTARANFDVOKASI" target="_blank">
                    <button class="bg-red-600 text-white py-2 px-4 rounded-lg w-full">Pendaftaran Fashion Design VOKASI</button>
                </a>
            </div>
        </div>

        <!-- Main Content Section -->
        <div class="main-content flex-1 bg-white p-6 rounded-lg shadow-md">
            <div id="detail-program" class="active-content">
                <h1 class="text-2xl font-bold mb-4">Detail Lomba</h1>
                <p>Tema untuk cabang lomba Fashion Design adalah <b> “Inovasi Warisan Nusantara”</b> mendorong peserta
                    untuk mengeksplorasi dan menafsirkan ulang elemen-elemen budaya tradisional Indonesia dengan
                    pendekatan yang segar dan modern. </p>
                <br>
                <h1 class="text-2xl font-bold mb-4">Ketentuan Karya</h1>
                <ol class="list-decimal pl-5">
                    <li>Karya yang diajukan merupakan hasil orisinal dan belum pernah dipublikasikan/diikutsertakan
                        dalam lomba lain.</li>
                    <li>Setiap peserta wajib menerapkan setiap ketentuan dan struktur dalam pembuatan portofolio yang
                        akan dijelaskan di bawah.</li>
                    <li>Setiap peserta wajib mengirimkan deskripsi singkat karya yang mencakup konsep design, bahan yang
                        digunakan, dan inspirasi di balik design tersebut dalam bentuk portofolio.</li>
                    <li>Peserta dibebaskan untuk berkreasi dalam pembuatan portofolio dengan visual yang semenarik
                        mungkin.</li>
                    <li>Design harus disertai dengan sketsa atau ilustrasi berwarna dalam bentuk digital yang jelas,
                        beresolusi tinggi, dan dikonversi ke dalam format PDF.</li>
                    <li>Karya yang dikirimkan menjadi hak milik peserta, namun panitia berhak menggunakan karya tersebut
                        untuk keperluan promosi lomba dengan tetap mencantumkan nama designer.</li>
                </ol>

            </div>

            <div id="persyaratan" class="hidden-content">
                <h1 class="text-2xl font-bold mb-4">Persyaratan Peserta Vokasi</h1>
                <ol class="list-decimal pl-5">
                    <li>Peserta merupakan mahasiswa aktif dari fakultas vokasi di seluruh Indonesia.</li>
                    <li>Setiap peserta dapat mendaftar secara individu atau berkelompok (maksimal 3 orang/kelompok) dan
                        diperbolehkan lintas prodi.</li>
                    <li>Peserta wajib melampirkan bukti identitas mahasiswa (Kartu Tanda Mahasiswa/KTM) yang masih
                        berlaku.</li>
                    <li>Peserta wajib mengisi formulir pendaftaran, biodata peserta, dan biodata dosen pendamping sesuai
                        template berkas yang sudah disediakan panitia.</li>
                    <li>Setiap peserta/tim hanya diperbolehkan mengirimkan 1 karya.</li>
                    <li>Peserta hanya diperbolehkan mengikuti satu lomba.</li>
                    <li>Peserta yang tidak memenuhi persyaratan dinyatakan gugur.</li>
                    <li>Peserta bersedia mengikuti seluruh rangkaian kegiatan yang telah dijadwalkan oleh panitia.</li>
                </ol>
                <br>
                <br>
                <h1 class="text-2xl font-bold mb-4">Persyaratan Peserta SMK</h1>
                <ol class="list-decimal pl-5">
                    <li>Peserta merupakan siswa/siswi aktif dari SMK di seluruh Indonesia.</li>
                    <li>Setiap peserta dapat mendaftar secara individu atau berkelompok (maksimal 3 orang per kelompok)
                        dan diperbolehkan lintas jurusan.</li>
                    <li>Peserta wajib melampirkan bukti identitas pelajar (Kartu Pelajar) yang masih berlaku, sebagai
                        bukti status pelajar.</li>
                    <li>Peserta wajib mengisi formulir pendaftaran, biodata peserta, dan biodata guru pendamping sesuai
                        template berkas yang sudah disediakan panitia.</li>
                    <li>Setiap peserta/tim hanya diperbolehkan mengirimkan satu karya.</li>
                    <li>Peserta hanya diperbolehkan mengikuti satu lomba.</li>
                    <li>Peserta yang tidak memenuhi persyaratan dinyatakan gugur.</li>
                    <li>Peserta bersedia mengikuti seluruh rangkaian kegiatan yang telah dijadwalkan oleh panitia.</li>
                </ol>
            </div>
            <div id="cp" class="hidden-content">
            <h2 id="cp-text" class="text-2xl font-bold mb-4">Contact Person</h2>
                <ol class="list-decimal pl-5">
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mb-4"
                    onclick="window.open('https://wa.me/+6285747265298', '_blank')">Contact Person SMK (Dini)</button>
                    <br>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                    onclick="window.open('https://wa.me/+6287764710051', '_blank')">Contact Person Vokasi (Fani)</button>
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