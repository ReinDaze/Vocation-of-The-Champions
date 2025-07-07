<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Legend</title>
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

        .lomba.active {
            background-color: #E3342F;
            color: #FFF;
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
                <h1 class="text-4xl font-bold mb-6">Mobile Legends</h1>
                <p class="text-gray-700 mb-4 text-justify">
                    Mobile legend adalah salah satu cabang perlombaan bidang olahraga dalam vocation of the champion
                    (VOC) yang diselenggarakan
                    oleh Sekolah Vokasi Universitas sebelas maret. Tournament Mobile Legend adalah salah satu kompetisi
                    dalam dunia permainan
                    mobile yang diadakan dengan tujuan untuk mengumpulkan dan mendukung bakat-bakat di kalangan pemain
                    Mobile Legend.
                    Turnamen Mobile Legend ini juga berfungsi sebagai platform seleksi bagi siapa saja yang ingin
                    menunjukkan kemampuan mereka dalam permainan ini.

                    <br><br>Turnamen Mobile Legend ini menjadi wadah yang ideal bagi
                    para peserta untuk mengembangkan minat dan bakat mereka di dunia permainan mobile. Selain itu, acara
                    ini juga menjadi
                    peluang bagi para peserta untuk membangun semangat kompetitif dan mempererat hubungan sosial antar
                    sesama pemain, sekaligus
                    menjalin silaturahmi dalam komunitas Mobile Legend Tema yang diusung dalam voc adalah empowering
                    vocation talents
                    for a brighter future yang bertujuan untuk memberikan platform untuk mahasiswa/i vokasi se Indonesia
                    untuk menunjukkan bakat,
                    keterampilan dan prestasi terbaik mereka di dunia esport mobile legend.
                </p>
                <!-- Guidebook Button -->
                <a href="Asset/MobileLegend.pdf" target="_blank" class="guidebook-button">Guidebook Lomba</a>
            </div>

            <!-- Right Image Section -->
            <div class="right-image order-1 md:order-2 md:w-1/2 mb-6 md:mb-0">
                <img src="./Asset/animasi.ml.png" alt="Program Image" class="w-full rounded-lg">
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
                <a href="http://uns.id/PENDAFTARANMOBILELEGENDS2024" target="_blank">
                    <button class="bg-red-600 text-white py-2 px-4 rounded-lg w-full">Pendaftaran Mobile Legends</button>
                </a>
            </div>
        </div>

        <!-- Main Content Section -->
        <div class="main-content flex-1 bg-white p-6 rounded-lg shadow-md">
            <div id="detail-program" class="active-content">
                <h1 class="text-2xl font-bold mb-4">Tata Tertib</h1>
                <ol class="list-decimal pl-5">
                    <li>Peserta diwajibkan melakukan absensi pada gform yang disediakan oleh panitia. Peserta yang tidak
                        hadir dan tidak melakukan absensi pada saat hari perlombaan, akan didiskualifikasi dan pihak
                        lawan dari team tersebut akan otomatis dinyatakan menang.
                    </li>
                    <li>Peserta diwajibkan standby di Zoom selambat-lambatnya 10 menit sebelum pertandingan di mulai.
                    </li>
                    <li>Apabila salah satu peserta team melakukan sabotase, intimidasi, dan membuat keributan yang dapat
                        menghambat jalannya turnamen, maka team tersebut akan diberi teguran oleh panitia dan jika
                        memungkinkan akan didiskualifikasi dari pertandingan.
                    </li>
                    <li>Peserta dilarang merokok disaat mengikuti zoom.
                    </li>
                    <li>Tim pertama yang berhasil menghancurkan base/markas musuh berarti memenangkan pertandingan
                    </li>
                    <li>Dalam Sesi Semi Final dan Final setiap tim diperbolehkan untuk pause game sebanyak 3 kali dalam
                        1 pertandingan dengan waktu maksimal 5 menit (Chat All: P)</li>
                    <li>Pemenang akan ditentukan ketika,
                        <ol class="list-lower-alpha ml-3">
                            <li class="mb-1">a. Salah satu base diantara kedua tim hancur</li>
                            <li class="mb-1">b. Salah satu tim didiskualifikasi</li>
                            <li class="mb-1">c. Salah satu tim menyerah</li>
                            <li class="mb-1">d. Salah satu tim melanggar peraturan yang membuat tim lain dirugikan
                            </li>
                        </ol>
                    </li>
                    <li>Dilarang menggunakan Cheat/BUG/Script dalam pertandingan
                    </li>
                    <li>Pada Sesi Semifinal Tim wajib menyediakan satu device sebagai kamera untuk LIVE
                    </li>
                    <li>Setiap peserta wajib menaati semua peraturan yang telah dibuat selama acara berlangsung dan bila
                        melanggar akan didiskualifikasi oleh panitia
                    </li>
                </ol>
            </div>

            <div id="persyaratan" class="hidden-content">
                <h1 class="text-2xl font-bold mb-4">Persyaratan Peserta</h1>
                <ol class="list-decimal pl-5">
                    <li>Peserta diwajibkan menggunakan akun dan nickname yang telah didaftarkan saat
                        pendaftaran peserta. Jika saat selesai pertandingan diketahui terdapat perbedaan nickname
                        peserta dengan yang didaftarkan, maka panitia berhak untuk mendiskualifikasi team tersebut.
                    </li>
                    <li>Semua peserta wajib on cam pada saat memasuki ruang Zoom.
                    </li>
                    <li>Peserta wajib me-rename username Zoom dengan format: nama peserta_nama team,
                        contoh: arza_Evos.
                    </li>
                    <li>Peserta wajib menggunakan nickname atau nama team yang tidak mengandung unsur SARA
                        dan kata kata tidak pantas.
                    </li>
                    <li>Jam pertandingan sesuai dengan jadwal yang diberikan oleh panitia.
                    </li>
                    <li>Peserta dapat menggunakan semua hero</li>
                    <li>Jika sebuah team telah pick/ban hero karena kesalahan team, permainan akan tetap
                        dilanjutkan. Tidak akan ada alasan apapun untuk rematch karena salah pick/ ban.
                    </li>
                    <li>Jika terdapat kesalahan karena kelalaian roster saat menukar hero, pertandingan akan terus
                        berlanjut. Tidak akan ada alasan apapun untuk rematch karena salah penukaran hero.
                    </li>
                    <li>Koneksi ditanggung oleh masing-masing peserta. Panitia tidak akan menerima pengaduan
                        atas masalah koneksi yang terjadi pada setiap pemain. <b>(Tidak Ada Rematch).</b>
                    </li>
                    <li>Peserta dilarang melakukan chat all atau radio all dalam pertandingan (match)
                    </li>
                </ol>
            </div>
            <div id="cp" class="hidden-content">
            <h2 id="cp-text" class="text-2xl font-bold mb-4">Contact Person</h2>
                <ol class="list-decimal pl-5">
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mb-4"
                    onclick="window.open('https://wa.me/6285951272723', '_blank')">Contact Person 1 (Fahmi)</button>
                    <br>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                    onclick="window.open('https://wa.me/6285704364288', '_blank')">Contact Person 2 (Naufal)</button>
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