<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOC Event</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card img {
            aspect-ratio: 1 / 1; /* Membuat gambar persegi */
            object-fit: cover; /* Agar gambar tidak terdistorsi */
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto p-4 flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="./Asset/voc1.png" alt="Logo" class="h-10 w-10 mr-2">
                <div class="text-2xl font-bold text-red-600">
                    <a href="#">VOC</a>
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
        <a href="index.php" class="block text-gray-700 hover:text-red-600 py-2">Home</a>
        <a href="index.php#kategori" class="block text-gray-700 hover:text-red-600 py-2">Lomba</a>
        <a href="index.php#timeline" class="block text-gray-700 hover:text-red-600 py-2">Timeline</a>
        <a href="index.php#kontak" class="block text-gray-700 hover:text-red-600 py-2">Kontak</a>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Mobile Legends Card -->
            <div class="card bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-200">
                <img src="./Asset/animasi.ml.png" alt="Mobile Legends" class="w-full">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4 text-gray-800">Mobile Legends</h2>
                    <ol class="list-decimal ml-4 text-gray-700">
                        <li>AKU BLUETOOTH (SMK NEGERI 7 SURAKARTA)</li>
                        <li>GOPALA (SEKOLAH VOKASI UNS)</li>
                        <li>RAJA ALPHA (SEKOLAH VOKASI UNS)</li>
                        <li>SQUIRT (UNIVERSITAS BRAWIJAYA)</li>
                    </ol>
                </div>
            </div>

            <!-- Fashion Design Card -->
            <div class="card bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-200">
                <img src="./Asset/fashiondesain-img.png" alt="Fashion Design" class="w-full">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4 text-gray-800">Fashion Design</h2>
                    <ol class="list-decimal ml-4 text-gray-700">
                        <li>RASAGAMA (UNIVERSITAS SEBELAS MARET)</li>
                        <li>SASSY SEAMSTERS (UNIVERSITAS SEBELAS MARET)</li>
                        <li>LENGKANG WIJAYA ARTINYA (UNIVERSITAS SEBELAS MARET)</li>
                        <li>KENSHIRO FASHION 2 (SMKN 1 GIRITONTRO)</li>
                        <li>KENSHIRO STYLIST (SMKN 1 GIRITONTRO)</li>
                    </ol>
                </div>
            </div>

            <!-- Solo Vocal Card -->
            <div class="card bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-200">
                <img src="./Asset/solo-vocal.png" alt="Solo Vocal" class="w-full">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4 text-gray-800">Solo Vocal</h2>
                    <ol class="list-decimal ml-4 text-gray-700">
                        <li>AGNES MONICA DEVI (UNIVERSITAS SEBELAS MARET)</li>
                        <li>ALYA NUR KAZHIMAH (UNIVERSITAS SEBELAS MARET)</li>
                        <li>AMANDA MARITZA SALAMATUS (POLITEKKES SURABAYA)</li>
                        <li>UNAISA KHAULANI (UNIVERSITAS SEBELAS MARET)</li>
                    </ol>
                </div>
            </div>

            
            <!-- Fotografi Card -->
            <div class="card bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-200">
                <img src="./Asset/fotografi-img.png" alt="Fotografi" class="w-full">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4 text-gray-800">Fotografi</h2>
                    <ol class="list-decimal ml-4 text-gray-700">
                        <li>ALFEUS ARKA DWIKRISPUTRA (UNIVERSITAS SEBELAS MARET)</li>
                        <li>BIMA IKHSAN SETIAWAN (UNIVERSITAS SEBELAS MARET)</li>
                        <li>DODI CATURINO (POLITEKNIK 'AISYIYAH PONTIANAK)</li>
                    </ol>
                </div>
            </div>

            <!-- UI/UX Design Card -->
            <div class="card bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-200">
                <img src="./Asset/ui-ux.png" alt="UI/UX Design" class="w-full">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4 text-gray-800">UI/UX Design</h2>
                    <ol class="list-decimal ml-4 text-gray-700">
                        <li>DUO AMBIS (UNIVERSITAS SEBELAS MARET)</li>
                        <li>VENERA (UNIVERSITAS SEBELAS MARET)</li>
                        <li>GSN TEAM (INSTITUT PERTANIAN BOGOR)</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Mobile Menu Toggle
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>

</html>
