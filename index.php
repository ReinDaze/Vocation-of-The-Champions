<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocation Of the Champions 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
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
            position: fixed;
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
        }

        main {
            margin-bottom: 40px;
        }

        .highlighted {
            position: relative;
            color: black;
            font-weight: bold;
            display: inline-block;
        }

        .tebal {
            color: black;
            font-weight: bold;
        }


        .highlighted::before {
            content: '';
            position: absolute;
            left: 10px;
            right: 0;
            bottom: 5px;
            height: 10px;
            background-color: orange;
            border-radius: 2px;
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
            background-position: center;
            background-repeat: no-repeat;
            padding: 20px;
        }

        #kategori {
            background-image: url('./Asset/bg2.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header class="navbar" data-aos="fade-down">
        <nav class="container mx-auto p-4 flex justify-between items-center">
            <div class="logo-section">
                <img src="./Asset/voc1.png" alt="Logo VOC" class="h-10">
                <span class="logo-text">VOC</span>
            </div>
            <ul class="flex space-x-4">
                <li><a href="index.php" class="hover:text-gray-300">Beranda</a></li>
                <li><a href="index.php#tentang" class="hover:text-gray-300">Tentang</a></li>
                <li><a href="index.php#maskot" class="hover:text-gray-300">Maskot</a></li>
                <li><a href="index.php#kategori" class="hover:text-gray-300">Kategori</a></li>
                <li><a href="index.php#timeline" class="hover:text-gray-300">Timeline</a></li>
                <li><a href="index.php#kontak" class="hover:text-gray-300">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <?php
    if (!isset($_GET['target'])) {
      require('home.php');
    } elseif ($_GET['target'] == 'mobile-legend') {
      require('mobile-legend.php');
    } elseif ($_GET['target'] == 'solo-vocal') {
      require('solo-vocal.php');
    } elseif ($_GET['target'] == 'ui-ux-design') {
      require('ui-ux-design.php');
    } elseif ($_GET['target'] == 'fotografi') {
      require('fotografi.php');
    } elseif ($_GET['target'] == 'business-plan') {
      require('business-plan.php');
    } elseif ($_GET['target'] == 'fashion-design') {
      require('fashion-design.php');
    } else {
      require('error.php');
    }
    ?>
</body>
<body>
    <footer id="kontak" class="text-gray-200 body-font" data-aos="fade-up">
        <div class="container px-10 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
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
                    <a href="https://twitter.com/vokasiuns" rel="noopener noreferrer" class="text-gray-200 ml-1" target="_blank">@voc_2024_</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37a4 4 0 11-4.75-4.75"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none" d="M16 8a6 6 0 01-9.33 5.2l-3.52.93a1 1 0 01-1.23-1.23l.93-3.52A6 6 0 1116 8z"></path>
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
            months.forEach(function(elem) {
                elem.classList.remove('active');
            });
            element.classList.add('active');

            var details = document.querySelectorAll('.details > div');
            details.forEach(function(detail) {
                detail.style.display = 'none';
            });
            var targetId = element.getAttribute('data-target');
            document.getElementById(targetId).style.display = 'block';
        }

        document.getElementById("vico-image").addEventListener("click", function() {
            this.classList.add("clicked-animation");
            setTimeout(() => {
                this.classList.remove("clicked-animation");
            }, 1000); // 1000 ms = 1 detik
        });
    </script>
    </body>
</html>
