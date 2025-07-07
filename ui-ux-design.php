<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI/UX Design</title>
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

        #menu-toggle {
            z-index: 9999;
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
    $durasi_program = "16 Oktober 2024 - 23 Oktober 2024";
    $peserta_lolos = "16 November 2024";
    ?>

    <div class="container mx-auto p-6">
        <!-- Main Section -->
        <div class="bg-white shadow-md rounded-lg p-6 content-wrapper flex flex-col md:flex-row">
            <div class="left-content order-2 md:order-1 md:w-1/2">
                <h1 class="text-4xl font-bold mb-6">UI/UX Design</h1>
                <p class="text-gray-700 mb-4 text-justify">
                    Lomba UI/UX ini mengajak peserta merancang solusi digital untuk pendidikan tinggi di Indonesia
                    dengan tema "Inovasi, Kreativitas, dan Pendidikan". Peserta harus mengidentifikasi masalah di
                    perguruan tinggi dan menciptakan desain inovatif untuk situs web, aplikasi, atau sistem
                    interaktif yang meningkatkan kualitas pendidikan. Lomba ini juga membuka kesempatan untuk
                    memperluas jaringan dan menarik perhatian perusahaan di bidang desain.
                </p>
                <!-- Guidebook Button -->
                <a href="Asset/UIUX.pdf" target="_blank" class="guidebook-button">Guidebook Lomba</a>
            </div>

            <!-- Right Image Section -->
            <div class="right-image order-1 md:order-2 md:w-1/2 mb-6 md:mb-0">
                <img src="./Asset/ui-ux.png" alt="Program Image" class="w-full rounded-lg">
            </div>
        </div>


        <!-- Red Info Box -->
        <div class="red-box w-full">
            <div>
                <div class="icon">
                    <img src="./Asset/durasi-pendaftaran.png" alt="calendar icon">
                    <p>Durasi Pendaftaran</p>
                </div>
                <p><?php echo $durasi_pendaftaran; ?></p>
            </div>
            <div>
                <div class="icon">
                    <img src="./Asset/game.png" alt="program icon">
                    <p>Babak Penyisihan</p>
                </div>
                <p><?php echo $durasi_program; ?></p>
            </div>
            <div>
                <div class="icon">
                    <img src="./Asset/final.png" alt="users icon">
                    <p>Grand Final</p>
                </div>
                <p><?php echo $peserta_lolos; ?> Grand Final</p>
            </div>
        </div>
    </div>

    <section class="container mx-auto flex flex-col md:flex-row gap-5 mt-10">
        <!-- Sidebar Section -->
        <div class="sidebar flex-none w-full md:w-1/4 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold mb-4">Menu Program</h2>
            <ul>
                <li><a href="#detail-program" onclick="showContent('detail-program', this); return false;"
                        class="block py-2">Detail
                        Lomba</a></li>
                <li><a href="#persyaratan" onclick="showContent('persyaratan', this); return false;"
                        class="block py-2">Persyaratan
                        Peserta</a></li>
                <li><a href="#cp" onclick="showContent('cp', this); return false;"
                        class="block py-2">Contact Person</a></li>
            </ul>

            <div class="pendaftaran mt-6">
                <a href="http://uns.id/PENDAFTARANUIUX2024" target="_blank">
                    <button class="bg-red-600 text-white py-2 px-4 rounded-lg w-full">Pendaftaran UI/UX</button>
                </a>
            </div>
        </div>

        <!-- Main Content Section -->
        <div class="main-content flex-1 bg-white p-6 rounded-lg shadow-md">
            <div id="detail-program" class="active-content">
                <h1 class="text-2xl font-bold mb-4">Detail Lomba</h1>
                <ol class="list-decimal pl-5">
                    <li>Peserta hanya diperbolehkan mengambil satu platform (web atau mobile) untuk dijadikan sebagai
                        studi kasus.</li>
                    <li>Karya yang diusulkan merupakan karya orisinil peserta dan belum pernah diikutsertakan dalam
                        kompetisi sejenis serta belum pernah dipublikasikan dalam bentuk apapun.</li>
                    <li>Karya tidak boleh mengandung unsur pornografi, SARA, sadisme atau hal-hal yang bersifat
                        merendahkan atau melecehkan pihak lain.</li>
                    <li>Karya dibatasi untuk pengguna software berbasis mobile application.</li>
                    <li>Karya harus sesuai dengan tema "Innovation, Creativity, and Education: Designing Digital
                        Solutions for Higher Education in Indonesia".</li>
                    <li>Karya yang diterima adalah karya yang dikirimkan sesuai dengan batas waktu yang telah
                        ditentukan.</li>
                    <li>Penilaian dilakukan oleh dewan juri yang telah ditetapkan oleh panitia.</li>
                    <li>Dewan Juri adalah pihak yang memiliki wewenang memberikan penilaian sesuai dengan kriteria yang
                        telah ditetapkan.</li>
                    <li>Penilaian dari dewan juri bersifat mutlak dan tidak dapat diganggu gugat.</li>
                    <li>Pemenang perlombaan merupakan tim dengan nilai tertinggi dari semua aspek penilaian yang telah
                        ditetapkan oleh panitia. Keputusan juri tidak dapat diganggu gugat.</li>
                </ol>
            </div>

            <div id="persyaratan" class="hidden-content">
                <h1 class="text-2xl font-bold mb-4">Persyaratan Peserta</h1>
                <ol class="list-decimal pl-5">
                    <li>Peserta merupakan seorang mahasiswa/i aktif program Diploma (D1-D4) dari Perguruan Tinggi
                        Negeri/Swasta yang dibuktikan dengan Kartu Tanda Mahasiswa (KTM).</li>
                    <li>Peserta dikenakan biaya pendaftaran.</li>
                    <li>Perlombaan bersifat tim dengan minimal anggota 2 orang dan maksimal 5 orang dari institusi atau
                        perguruan tinggi yang sama. Selain itu, diperbolehkan untuk lintas program studi bagi
                        mahasiswa/i perguruan tinggi.</li>
                    <li>Setiap peserta hanya diperbolehkan mengirimkan satu file karya terbaik.</li>
                    <li>Peserta hanya boleh mendaftar pada satu tim yang mengikuti lomba.</li>
                    <li>Peserta bersedia mengikuti seluruh rangkaian kegiatan yang telah dijadwalkan oleh panitia.</li>
                    <li>Peserta yang tidak memenuhi persyaratan dinyatakan gugur.</li>
                </ol>
            </div>
            <div id="cp" class="hidden-content">
            <h2 id="cp-text" class="text-2xl font-bold mb-4">Contact Person</h2>
                <ol class="list-decimal pl-5">
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mb-4"
                    onclick="window.open('https://wa.me/+62895392891287', '_blank')">Contact Person 1 (Naufal Tsaqif)</button>
                    <br>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                    onclick="window.open('https://wa.me/+6289681797587', '_blank')">Contact Person 2 (Maulia)</button>
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