<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocation Of the Champions 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet"> <!-- AOS CSS -->
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .section-title {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-top: 50px;
            text-align: center;
            text-transform: uppercase;
        }

        .section-content {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #666;
            max-width: 800px;
            margin: 20px auto;
            text-align: justify;
        }

        .highlight {
            color: #0056b3;
            font-weight: bold;
        }

        .navbar {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #800000;
            z-index: 2;
            border-bottom: 3px solid black;
        }

        .navbar a {
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            padding: 10px 15px;
            display: inline-block;
        }

        .btn {
            background-color: #800000;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .logo-section {
            display: flex;
            align-items: center;
        }

        .logo-text {
            margin-left: 10px;
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            /* Mencegah geser ke kanan */
        }


        .hero {
            position: relative;
            background-image: url('./Asset/BGVOC1 (1).jpeg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            color: white;
            padding-left: 2rem;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 600px;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .categories-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .category-card {
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: calc(33.33% - 40px);
            /* 33.33% lebar minus gap untuk 3 kartu per baris */
            box-sizing: border-box;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .category-card h3 {
            font-size: 1.4rem;
            color: #0056b3;
            margin: 10px 0;
            font-weight: bold;
        }

        .category-card p {
            font-size: 1rem;
            color: #666;
        }



        .timeline {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            margin-top: 20px;
        }

        .timeline-container {
            display: flex;
            align-items: flex-start;
            width: 100%;
            max-width: 900px;
        }

        .months {
            flex-basis: 20%;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-right: 20px;
        }

        .month {
            cursor: pointer;
            padding: 10px 20px;
            margin-bottom: 5px;
            background-color: #e0e0e0;
            border-radius: 5px;
            text-align: center;
            width: 100%;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .month.active {
            background-color: #0056b3;
            color: white;
        }

        .details {
            flex-grow: 1;
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 5px;
        }

        .details div {
            display: none;
        }

        .details div.active {
            display: block;
        }

        .details-title {
            font-size: 1.6rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .details-description {
            font-size: 1.1rem;
            line-height: 1.5;
            color: #555;
        }

        footer {
            background-color: #800000;
            padding-top: 40px;
            /* Added space */
        }

        main {
            margin-bottom: 40px;
            /* Added space */
        }

        .highlighted {
            position: relative;
            color: black;
            font-weight: bold;
            display: inline-block;
        }

        .highlighted::before {
            content: '';
            position: absolute;
            left: 10px;
            /* Geser ke kanan dengan menambah nilai ini */
            right: 0;
            /* Tetapkan ke 0 atau sesuaikan untuk menjaga ukuran */
            bottom: 5px;
            /* Atur jarak dari bawah */
            height: 10px;
            /* Ketebalan garis oranye */
            background-color: orange;
            border-radius: 2px;
            /* Sesuaikan untuk sudut melengkung */
            z-index: -1;
        }

        .clicked-animation {
            animation: scale-up 1s ease-in-out forwards;
        }

        @keyframes scale-up {
            0% {
                transform: scale(0.8);
                opacity: 0.7;
            }

            50% {
                transform: scale(1.1);
                opacity: 1;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        #tentang {
            background-image: url('./Asset/bg1.png');
            background-size: cover;
            /* Atur ukuran sesuai kebutuhan */
            background-position: center;
            background-repeat: no-repeat;
            /* Gambar tidak akan diulang */
            /* Tambahkan padding atau margin jika diperlukan */
            padding: 20px;
        }

        #kategori {
            background-image: url('./Asset/bg2.png');
            background-size: cover;
            /* Atur ukuran sesuai kebutuhan */
            background-position: center;
            background-repeat: no-repeat;
            /* Gambar tidak akan diulang */
            /* Tambahkan padding atau margin jika diperlukan */
            padding: 20px;
        }

        /* Our Client Section */
        .our-client {
            margin: 50px auto;
            text-align: center;
        }

        .our-client-title {
            font-size: 2rem;
            /* Disesuaikan dengan section-title lainnya */
            font-weight: bold;
            color: #333;
            text-transform: uppercase;
            margin-bottom: 30px;
        }

        .scrolling-logos img {
            margin: 0 15px;
            max-height: 100px;
            transition: transform 0.3s ease;
        }

        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .logos-container {
            display: flex;
            justify-content: center;
            animation: scroll 30s linear infinite;
        }

        /* Sponsor Section */
        .sponsor {
            margin: 50px auto;
            text-align: center;
        }

        .sponsor-title {
            font-size: 2rem;
            /* Disesuaikan dengan section-title lainnya */
            font-weight: bold;
            color: #333;
            text-transform: uppercase;
            margin-bottom: 30px;
        }

        .sponsor-logos img {
            margin: 0 15px;
            max-height: 150px;
            /* Adjustable size */
            transition: transform 0.3s ease;
        }

        .sponsor-logos {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }


        .program-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .program-card:hover {
            transform: translateY(-5px);
        }

        .program-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .program-card-content {
            padding: 20px;
        }

        .program-card h3 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .program-card p {
            font-size: 1rem;
            color: #666;
            margin-bottom: 5px;
        }

        .program-status {
            background-color: #f0f0f0;
            color: #000;
            font-size: 0.8rem;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 10px;
        }

        .btn-lihat {
            display: inline-block;
            background-color: #ff4747;
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            text-align: center;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        .btn-lihat:hover {
            background-color: #ff1f1f;
        }

        .status-berakhir {
            font-size: 0.9rem;
            color: #ff4747;
            margin-top: 10px;
        }

        /* Flexbox for aligning the cards in grid */
        .cards-container {
            display: flex;

            gap: 20px;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .cards-container .program-card {
            width: calc(33.33% - 20px);
            box-sizing: border-box;
        }

        /* Responsive for mobile */
        @media (max-width: 768px) {
            .cards-container .program-card {
                width: calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .cards-container .program-card {
                width: 100%;
            }
        }

        .flex-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .mascot-container {
            max-width: 150px;
            margin-right: 20px;
        }

        @media (max-width: 768px) {
            .flex-container {
                flex-direction: column;
                align-items: center;
            }

            .mascot-container {
                order: -1;
                /* Memindahkan gambar ke atas */
                margin-bottom: 20px;
            }

            .section-content {
                text-align: center;
                /* Agar teks di tengah */
            }
        }

        @media (max-width: 480px) {
            .mascot-container {
                max-width: 100px;
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    <header class="navbar" data-aos="fade-down">
        <nav class="bg-b shadow-md">
            <div class="container mx-auto p-4 flex justify-between items-center">
                <!-- Logo -->
                <div class="text-2xl font-bold text-gray-700">
                    <a href="./">
                        <img src="./Asset/voc1.png" alt="VOC Logo" class="h-12">
                    </a>
                </div>


                <!-- Menu Items -->
                <div class="hidden md:flex space-x-4">
                    <a href="i" class="text-gray-700">Home</a>
                    <a href="#kategori" class="text-gray-700">Lomba</a>
                    <a href="#timeline" class="text-gray-700">Timeline</a>
                    <a href="#kontak" class="text-gray-700">Kontak</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="menu-toggle" class="focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
                <a href="index.php" class="block text-gray-700 py-2">Home</a>
                <a href="kategori" class="block text-gray-700 py-2">Lomba</a>
                <a href="timeline" class="block text-gray-700 py-2">Timeline</a>
                <a href="kontak" class="block text-gray-700 py-2">Kontak</a>
            </div>
        </nav>


    </header>
    <main>
        <section class="hero" data-aos="fade-up">
            <div class="hero-content">
                <h1 class="text-6xl font-bold">Vocation Of the Champions 2024</h1>
                <p class="text-2xl mb-4">September 2024 - November 2024</p>
                <div class="space-y-2">
                    <a href="#" class="btn">Panduan VOC 2024</a>
                    <a href="#" class="btn">Panduan Pendaftaran VOC 2024</a>
                </div>
            </div>
        </section>

        <section id="tentang">
            <div class="section-title">
                <h2 class="highlighted" data-aos="fade-in">Apa itu VOC?</h2>
            </div>
            <p class="section-content" data-aos="fade-in" data-aos-delay="100">
                VOC, singkatan dari Vocation Of The Champions, adalah kompetisi nasional bagi mahasiswa Vokasi
                se-Indonesia dengan berbagai bidang lomba meliputi seni, olahraga, dan penalaran. Acara ini bertujuan
                untuk mengasah dan menampilkan bakat dan potensi terbaik dari mahasiswa Vokasi seluruh
                Indonesia.<br><br>
                Dengan tema "<span class="highlight">Empowering Vocational Talents for a Brighter Future</span>," VOC
                berkomitmen untuk memberdayakan talenta vokasi agar berkontribusi positif di masa depan. Melalui
                kompetisi ini, peserta diharapkan dapat menunjukkan kemampuan mereka dan mendapatkan pengalaman
                berharga.<br><br>
                Tagline "<span class="highlight">Bersaing, Berkreasi, Berinovasi Bersama Vokasi</span>" mencerminkan
                semangat kolaborasi dan inovasi. VOC bukan hanya tentang kompetisi, tetapi juga tentang menciptakan
                sinergi yang kuat di antara peserta untuk bersama-sama mengembangkan dan memamerkan bakat mereka.
            </p>
        </section>

        <section id="maskot" class="my-6">
            <div class="section-title">
                <h2 class="highlighted" data-aos="fade-in">Maskot</h2>
            </div>
            <div class="flex-container">
                <div class="mascot-container">
                    <img id="vico-image" src="./Asset/maskott.png" alt="Maskot VOC" />
                </div>
                <p class="section-content" data-aos="fade-in" data-aos-delay="100">
                    "<span class="highlight">Vico</span>" merupakan nama dari maskot VOC 2024 yang diambil dari kata
                    <span class="highlight">Vision, Inspiration, Courage, dan Optimism.</span><br><br>
                    Diharapkan Vico ini dapat menggambarkan acara dari VOC itu sendiri, yaitu memiliki visi yang jelas,
                    dapat menginspirasi, berani menghadapi setiap tantangan, dan selalu optimis untuk meraih kemenangan.
                    Maskot Vico menjadi simbol motivasi dan harapan bagi semua orang yang melihatnya.
                </p>
            </div>
        </section>


        <main>
            <!-- Kategori Lomba Section -->
            <section id="kategori" class="py-12">
                <div class="container mx-auto text-center">
                    <h2 class="text-3xl font-bold mb-6 highlighted">KATEGORI LOMBA</h2>
                    <div class="cards-container">
                        <!-- Program Card 1 -->
                        <div class="program-card">
                            <img src="./Asset/ui-ux.png" alt="UI/UX Design">
                            <div class="program-card-content">
                                <h3>Lomba UI UX</h3>
                                <p>UI/UX Design</p>
                                <p>Jadwal Program</p>
                                <p>6 September 2024 - 20 Desember 2024</p>
                                <p class="status-berakhir">Pendaftaran Belum Dimulai!</p>
                                <a href="ui-ux-design.php" class="btn-lihat">Daftar</a>
                            </div>
                        </div>

                        <!-- Program Card 2 -->
                        <div class="program-card">
                            <img src="./Asset/mobilelegend-gambar.png" alt="UI/UX Design">
                            <div class="program-card-content">
                                <div class="program-status">Program sedang berlangsung</div>
                                <h3>Lomba Mobile Legend</h3>
                                <p>Jadwal Program</p>
                                <p>29 Juli 2024 - 5 Desember 2024</p>
                                <p class="status-berakhir">Pendaftaran Belum dimulai!</p>
                                <a href="ml.php" class="btn-lihat">Daftar</a>
                            </div>
                        </div>

                        <!-- Program Card 3 -->
                        <div class="program-card">
                            <img src="./Asset/solo-vocal.png" alt="Full Stack Web Development">
                            <div class="program-card-content">
                                <div class="program-status">Program sedang berlangsung</div>
                                <h3>Lomba Solo Vocal</h3>
                                <p>Jadwal Program</p>
                                <p>28 Juli 2024 - 31 Desember 2024</p>
                                <p class="status-berakhir">Pendaftaran Belum Dimulai</p>
                                <a href="solo-vocal.php" class="btn-lihat">Daftar</a>
                            </div>
                        </div>
                        <!-- Program Card 4 -->
                        <div class="program-card">
                            <img src="./Asset/mobilelegend-gambar.png" alt="UI/UX Design">
                            <div class="program-card-content">
                                <div class="program-status">Program sedang berlangsung</div>
                                <h3>Lomba Fashion Desain</h3>
                                <p>Jadwal Program</p>
                                <p>29 Juli 2024 - 5 Desember 2024</p>
                                <p class="status-berakhir">Pendaftaran Belum dimulai!</p>
                                <a href="fashion-design.php" class="btn-lihat">Daftar</a>
                            </div>
                        </div>


                        <!-- Program Card 5 -->
                        <div class="program-card">
                            <img src="./Asset/solo-vocal.png" alt="Full Stack Web Development">
                            <div class="program-card-content">
                                <div class="program-status">Program sedang berlangsung</div>
                                <h3>Lomba Fotografi</h3>
                                <p>Jadwal Program</p>
                                <p>28 Juli 2024 - 31 Desember 2024</p>
                                <p class="status-berakhir">Pendaftaran Belum Dimulai</p>
                                <a href="fotografi.php" class="btn-lihat">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>


        <section id="timeline">
            <div class="section-title">
                <h2 class="highlighted" data-aos="fade-in">Timeline</h2>
            </div>
            <div class="timeline">
                <div class="timeline-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="months">
                        <div class="month active" data-target="august" onclick="selectMonth(this)">Agustus 2024</div>
                        <div class="month" data-target="september" onclick="selectMonth(this)">September 2024</div>
                        <div class="month" data-target="october" onclick="selectMonth(this)">Oktober 2024</div>
                        <div class="month" data-target="november" onclick="selectMonth(this)">November 2024</div>
                        <div class="month" data-target="december" onclick="selectMonth(this)">Desember 2024</div>
                    </div>
                    <div class="details">
                        <div id="august" class="active">
                            <h3 class="details-title">Persiapan dan Sosialisasi</h3>
                            <p class="details-description">Tim panitia melakukan persiapan dan sosialisasi acara kepada
                                calon peserta di seluruh Indonesia. Pendaftaran akan dibuka pada akhir Agustus, dan para
                                peserta dapat mulai mengisi formulir serta mempersiapkan karya mereka.</p>
                        </div>
                        <div id="september" style="display:none;">
                            <h3 class="details-title">Pendaftaran dan Pengumpulan Karya</h3>
                            <p class="details-description">Pendaftaran resmi dibuka pada awal September. Peserta dapat
                                mulai mengumpulkan karya mereka. Periode pengumpulan karya berlangsung selama 28-41
                                hari, tergantung pada kategori lomba yang diikuti. Pastikan semua karya terkirim sebelum
                                batas waktu yang ditetapkan.</p>
                        </div>
                        <div id="october" style="display:none;">
                            <h3 class="details-title">Proses Seleksi Awal</h3>
                            <p class="details-description">Setelah pengumpulan karya selesai, proses seleksi awal akan
                                dimulai. Panel juri akan mengevaluasi setiap karya berdasarkan kreativitas,
                                orisinalitas, dan relevansi dengan tema yang ditentukan. Proses seleksi ini berlangsung
                                selama beberapa minggu.</p>
                        </div>
                        <div id="november" style="display:none;">
                            <h3 class="details-title">Pengumuman Semi-Finalis dan Finalis</h3>
                            <p class="details-description">Setelah proses seleksi awal, semi-finalis akan diumumkan di
                                awal bulan November. Para semi-finalis akan berkompetisi dalam babak tambahan untuk
                                menentukan finalis. Pengumuman finalis akan dilakukan pada akhir November, dan mereka
                                akan melanjutkan ke babak final.</p>
                        </div>
                        <div id="december" style="display:none;">
                            <h3 class="details-title">Final dan Penghargaan</h3>
                            <p class="details-description">Babak final akan berlangsung pada awal Desember. Para finalis
                                akan mempresentasikan karya mereka secara langsung di hadapan panel juri. Acara puncak
                                berupa pengumuman pemenang dan pemberian penghargaan akan diadakan pada pertengahan
                                Desember.</p>
                            <h3 class="details-title">Penutupan dan Evaluasi</h3>
                            <p class="details-description">Setelah acara puncak selesai, tim panitia akan melakukan
                                evaluasi menyeluruh terhadap pelaksanaan VOC 2024. Feedback dari peserta dan juri akan
                                digunakan untuk meningkatkan kualitas acara di masa depan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Client Section -->
        <section class="our-client">
            <div class="our-client-title">Media Partner</div>
            <div class="scrolling-logos">
                <div class="logos-container">
                    <img src="./Asset/logo-sv.png" alt="Microsoft" style="max-height: 60px; width: auto;">
                    <img src="./Asset/LOGO-BEM-SV.png" alt="Airbnb" style="max-height: 60px; width: auto;">
                    <img src="./Asset/LogoBEM.png" alt="Gojek" style="max-height: 60px; width: auto;">
                    <img src="./Asset/Bem-UNS.jpeg" alt="Tokopedia" style="max-height: 60px; width: auto;">
                </div>
            </div>
        </section>


        <!-- Sponsor Section -->
        <section class="sponsor">
            <div class="sponsor-title">Sponsor</div>
            <div class="sponsor-logos">
                <img src="./Asset/Bem-UNS.jpeg" alt="Sponsor 1">
                <img src="./Asset/logo-sv.png" alt="Sponsor 2">
                <img src="./Asset/LogoBEM.png" alt="Sponsor 3">
                <img src="./Asset/LOGO-BEM-SV.png" alt="Sponsor 4">
            </div>
        </section>
    </main>
    <footer id="kontak" class="text-gray-200 body-font" data-aos="fade-up">
        <div
            class="container px-10 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
                    <img src="./Asset/voc.png" class="h-16" alt="">
                    <span class="text-4xl">VOC</span>
                </a>
                <p class="mt-2 text-sm ">
                    Jl. Ir. Sutami No.36 A, Kentingan, Jebres, Surakarta, Jawa Tengah 57126
                </p>
            </div>
            <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                <div class="lg:w-1/3 md:w-1/2 w-full px-8">
                    <h2 id="contact" class="title-font font-medium text-white tracking-widest text-sm mb-3">
                        Contact Us
                    </h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-200 hover:text-gray-300">vocationofthechampions@gmail.com</a>
                        </li>
                        <li>
                            <a class="text-gray-200 hover:text-gray-300">+62 819-1484-3229</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/3 md:w-1/2 w-full px-8">
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">
                        Other
                    </h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-200 hover:text-gray-300">Privacy & Policy</a>
                        </li>
                        <li>
                            <a class="text-gray-200 hover:text-gray-300">Terms & Condition</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/3 md:w-1/2 w-full px-8">
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">
                        Vocation Of the Champions
                    </h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-200 hover:text-gray-300">Copyright ©️ 2024 All rights reserved</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-500 text-sm text-center sm:text-left">
                    ©️ 2024 VOC —
                    <a href="https://twitter.com/vokasiuns" rel="noopener noreferrer" class="text-gray-200 ml-1"
                        target="_blank">@voc_2024_</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37a4 4 0 11-4.75-4.75"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 01-9.33 5.2l-3.52.93a1 1 0 01-1.23-1.23l.93-3.52A6 6 0 1116 8z"></path>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script> <!-- AOS JS -->
    <script>
        AOS.init(); // Initialize AOS

        function selectMonth(element) {
            var months = document.querySelectorAll('.month');
            months.forEach(function (elem) {
                elem.classList.remove('active');
            });
            element.classList.add('active');

            var details = document.querySelectorAll('.details > div');
            details.forEach(function (detail) {
                detail.style.display = 'none';
            });
            var targetId = element.getAttribute('data-target');
            document.getElementById(targetId).style.display = 'block';
        }

        document.getElementById("vico-image").addEventListener("click", function () {
            this.classList.add("clicked-animation");
            setTimeout(() => {
                this.classList.remove("clicked-animation");
            }, 1000);
        });
        document.getElementById('menu-toggle').addEventListener('click', function () {
            var mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>