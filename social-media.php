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
            #cp-text {
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
                <a href="landing.php">VOC</a>
            </div>
        </div>
        <!-- Menu Items -->
        <div class="hidden md:flex space-x-4">
            <a href="landing.php" class="text-gray-700 hover:text-red-600">Home</a>
            <a href="landing.php#kategori" class="text-gray-700 hover:text-red-600">Lomba</a>
            <a href="landing.php#timeline" class="text-gray-700 hover:text-red-600">Timeline</a>
            <a href="landing.php#kontak" class="text-gray-700 hover:text-red-600">Kontak</a>
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
    <a href="landing.php" class="block text-gray-700 hover:text-red-600 py-2">Home</a>
    <a href="landing.php#kategori" class="block text-gray-700 hover:text-red-600 py-2">Lomba</a>
    <a href="landing.php#timeline" class="block text-gray-700 hover:text-red-600 py-2">Timeline</a>
    <a href="landing.php#kontak" class="block text-gray-700 hover:text-red-600 py-2">Kontak</a>
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
                <h1 class="text-4xl font-bold mb-6">Social Media</h1>
                <p class="text-gray-700 mb-4 text-justify">
                    Ikuti akun Instagram Vocation of the Champions (VOC) untuk selalu update informasi terbaru seputar acara dan lomba-lomba menarik yang diadakan. Di sana, kamu bisa menemukan pengumuman penting, tips bermanfaat, dan berbagai konten inspiratif dari tim VOC. Jangan lewatkan kesempatan untuk menyaksikan langsung bakat-bakat luar biasa dan dukung kreativitas mereka dalam setiap kompetisi. Follow sekarang agar kamu tidak ketinggalan informasi dan keseruan dari VOC!
                </p>

                <!-- Guidebook Button -->
                <a href="https://www.instagram.com/voc_2024/" target="_blank" class="guidebook-button">Klik disini</a>
            </div>

            <!-- Right Image Section
            <div class="right-image order-1 md:order-2 md:w-1/2 mb-6 md:mb-0">
                <img src="./Asset/solo-vocal.png" alt="Program Image" class="w-full rounded-lg">
            </div> -->
        </div>
    </div>

    <script>
        // Fungsi untuk menampilkan konten sesuai menu yang diklik
        function showContent(contentId, element) {
            // Sembunyikan semua bagian konten
            var contents = document.querySelectorAll('.main-content > div');
            contents.forEach(function(content) {
                content.classList.add('hidden-content');
                content.classList.remove('active-content');
            });

            // Tampilkan konten yang dipilih
            var activeContent = document.getElementById(contentId);
            activeContent.classList.remove('hidden-content');
            activeContent.classList.add('active-content');

            // Hapus kelas aktif dari semua tautan di sidebar
            var links = document.querySelectorAll('.sidebar ul li a');
            links.forEach(function(link) {
                link.classList.remove('active');
            });

            // Tambahkan kelas aktif ke tautan yang diklik
            element.classList.add('active');
        }

        // Event listener untuk tombol menu pada mobile
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>