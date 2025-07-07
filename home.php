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
            VOC, singkatan dari Vocation Of The Champions, adalah kompetisi nasional bagi mahasiswa Vokasi se-Indonesia
            dengan berbagai bidang lomba meliputi seni, olahraga, dan penalaran. Acara ini bertujuan untuk mengasah dan
            menampilkan bakat dan potensi terbaik dari mahasiswa Vokasi seluruh Indonesia.<br><br>
            Dengan tema "<span class="highlight">Empowering Vocational Talents for a Brighter Future</span>," VOC
            berkomitmen untuk memberdayakan talenta vokasi agar berkontribusi positif di masa depan. Melalui kompetisi
            ini, peserta diharapkan dapat menunjukkan kemampuan mereka dan mendapatkan pengalaman berharga.<br><br>
            Tagline "<span class="highlight">Bersaing, Berkreasi, Berinovasi Bersama Vokasi</span>" mencerminkan
            semangat kolaborasi dan inovasi. VOC bukan hanya tentang kompetisi, tetapi juga tentang menciptakan sinergi
            yang kuat di antara peserta untuk bersama-sama mengembangkan dan memamerkan bakat mereka.
        </p>
    </section>
    <section id="maskot" class="my-6">
        <div class="section-title">
            <h2 class="highlighted" data-aos="fade-in">Maskot</h2>
        </div>
        <div class="flex flex-col items-center justify-center gap-[1rem] w-full">
            <!-- TEXT -->
            <p class="section-content text-center" data-aos="fade-in" data-aos-delay="100">
                "<span class="highlight">VICO</span>" merupakan nama dari maskot VOC 2024 yang diambil dari kata <span
                    class="highlight">Vision, Inspiration, Courage dan, Optimism.</span> <br> <br>
                Diharapkan Vico ini dapat menggambarkan acara dari VOC itu sendiri yaitu memiliki visi yang jelas, dapat
                menginspirasi, berani menghadapi setiap tantangan, dan selalu optimis untuk meraih kemenangan. Maskot
                Vico menjadi simbol motivasi dan harapan bagi semua orang yang melihatnya.
            </p>

            <!-- PICTURE -->
            <div class="h-[8rem] 1111111w-[8rem] mx-auto relative fade-in ">
                <div class="w-full h-full bg-white rounded-[1rem] p-[0.25rem] drop-shadow-xl z-[2]">
                    <img id="vico-image" src="./Asset/maskott.png"
                        class="w-full h-full object-cover rounded-[3rem] opacity-[0.7]" alt="Maskot VOC"
                        style="transform: scale(0.8);" />
                </div>
            </div>
        </div>
    </section>

    <?php
// home.php
?>
    <section id="kategori" class="py-16 px-4">
        <div class="container mx-auto text-center">
            <div class="section-title">
                <h2 class="highlighted" data-aos="fade-in">Kategori Lomba</h2>
            </div>
            <div class="categories-container" data-aos="fade-in" data-aos-delay="100">
                <!-- Row 1 -->
                <a href="index.php?target=mobile-legend" class="category-card" data-aos="flip-left">
                    <h3>Mobile Legend</h3>
                    <p>Kompetisi game Mobile Legend bagi tim terbaik.</p>
                </a>
                <a href="index.php?target=solo-vocal" class="category-card" data-aos="flip-left" data-aos-delay="100">
                    <h3>Solo Vocal</h3>
                    <p>Perlombaan menyanyi solo untuk menemukan suara terbaik.</p>
                </a>
                <a href="index.php?target=ui-ux-design" class="category-card" data-aos="flip-left" data-aos-delay="200">
                    <h3>UI/UX Design</h3>
                    <p>Desain antarmuka dan pengalaman pengguna terbaik.</p>
                </a>
                <!-- Row 2 -->
                <a href="index.php?target=fotografi" class="category-card" data-aos="flip-left" data-aos-delay="300">
                    <h3>Fotografi</h3>
                    <p>Pertandingan fotografi untuk menangkap momen terindah.</p>
                </a>
                <a href="index.php?target=fashion-design" class="category-card" data-aos="flip-left"
                    data-aos-delay="500">
                    <h3>Fashion Design</h3>
                    <p>Kompetisi desain mode dengan kreasi yang unik dan kreatif.</p>
                </a>
            </div>
        </div>
    </section>


    <section id="timeline">
        <div class="section-title">
            <h2 class="highlighted" data-aos="fade-in">Timeline</h2>
        </div>
        <div class="timeline">
            <div class="timeline-container" data-aos="fade-up" data-aos-delay="100">
                <div class="months">
                    <div class="month" data-target="september" onclick="selectMonth(this)">September 2024</div>
                    <div class="month" data-target="october" onclick="selectMonth(this)">Oktober 2024</div>
                    <div class="month" data-target="november" onclick="selectMonth(this)">November 2024</div>
                    <div class="month" data-target="december" onclick="selectMonth(this)">Desember 2024</div>
                </div>
                <div class="details">
                    <div id="september" style="display:none;">
                        <h3 class="details-title">Pendaftaran dan Pengumpulan Karya</h3>
                        <p class="details-description">Pendaftaran resmi dibuka pada awal September. Peserta dapat mulai
                            mengumpulkan karya mereka. Periode pengumpulan karya berlangsung selama 28-41 hari,
                            tergantung pada kategori lomba yang diikuti. Pastikan semua karya terkirim sebelum batas
                            waktu yang ditetapkan.</p>
                    </div>
                    <div id="october" style="display:none;">
                        <h3 class="details-title">Proses Seleksi Awal</h3>
                        <p class="details-description">Setelah pengumpulan karya selesai, proses seleksi awal akan
                            dimulai. Panel juri akan mengevaluasi setiap karya berdasarkan kreativitas, orisinalitas,
                            dan relevansi dengan tema yang ditentukan. Proses seleksi ini berlangsung selama beberapa
                            minggu.</p>
                    </div>
                    <div id="november" style="display:none;">
                        <h3 class="details-title">Pengumuman Semi-Finalis dan Finalis</h3>
                        <p class="details-description">Setelah proses seleksi awal, semi-finalis akan diumumkan di awal
                            bulan November. Para semi-finalis akan berkompetisi dalam babak tambahan untuk menentukan
                            finalis. Pengumuman finalis akan dilakukan pada akhir November, dan mereka akan melanjutkan
                            ke babak final.</p>
                    </div>
                    <div id="december" style="display:none;">
                        <h3 class="details-title">Final dan Penghargaan</h3>
                        <p class="details-description">Babak final akan berlangsung pada awal Desember. Para finalis
                            akan mempresentasikan karya mereka secara langsung di hadapan panel juri. Acara puncak
                            berupa pengumuman pemenang dan pemberian penghargaan akan diadakan pada pertengahan
                            Desember.</p>
                        <h3 class="details-title">Penutupan dan Evaluasi</h3>
                        <p class="details-description">Setelah acara puncak selesai, tim panitia akan melakukan evaluasi
                            menyeluruh terhadap pelaksanaan VOC 2024. Feedback dari peserta dan juri akan digunakan
                            untuk meningkatkan kualitas acara di masa depan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>