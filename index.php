<?php
$siteName = "KursusKu";
$year = date("Y");
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KursusKu - Platform Kursus Online</title>

    <link rel="stylesheet" href="assets/css/style.css?v=1">
</head>

<body>

<header class="site-header">

    <div class="container nav-wrap">

        <a class="brand" href="index.php">
            <span class="brand-star">★</span>
            KursusKu
        </a>

        <nav aria-label="Navigasi utama">

            <a href="#beranda">Beranda</a>

            <a href="#katalog">Katalog</a>

            <a href="#cara-daftar">Cara Daftar</a>

            <a href="#keunggulan">Keunggulan</a>

            <a href="#media">Media</a>

            <a href="#kontak">Kontak</a>

            <a href="#history">History</a>

            <!-- PENDAFTARAN 1 - WEEK 05 -->
            <a href="registration.php" class="nav-button">
                Pendaftaran 1
            </a>

            <!-- PENDAFTARAN 2 - WEEK 06 -->
            <a href="register.php" class="nav-button">
                Pendaftaran 2
            </a>

        </nav>

    </div>

</header>


<main>

<!-- ================= HERO ================= -->

<section class="hero" id="beranda">

    <div class="container hero-grid">

        <div class="hero-content">

            <p class="eyebrow">
                PLATFORM KURSUS ONLINE
            </p>

            <h1>
                Tingkatkan Skill,
                <span>Raih Masa Depan.</span>
            </h1>

            <p class="hero-description">
                Belajar berbagai keterampilan digital dengan
                materi yang praktis, mudah dipahami, dan sesuai
                dengan kebutuhan pembelajaran.
            </p>

            <div class="hero-buttons">

                <a href="#katalog" class="btn-primary">
                    Lihat Katalog
                </a>

                <!-- PENDAFTARAN 1 - WEEK 05 -->
                <a href="registration.php" class="btn-secondary">
                    Pendaftaran 1
                </a>

                <!-- PENDAFTARAN 2 - WEEK 06 -->
                <a href="register.php" class="btn-secondary">
                    Pendaftaran 2
                </a>

            </div>

        </div>


        <div class="hero-image">

            <img
                src="assets/images/hero-beranda.jpg"
                alt="Mahasiswa sedang mengikuti kegiatan kursus komputer"
            >

        </div>

    </div>

</section>


<!-- ================= KEUNGGULAN ================= -->

<section class="section" id="keunggulan">

    <div class="container">

        <div class="section-heading">

            <p class="section-label">
                KEUNGGULAN
            </p>

            <h2>
                Mengapa Memilih KursusKu?
            </h2>

            <p>
                KursusKu membantu peserta belajar secara
                bertahap melalui materi dan praktik.
            </p>

        </div>


        <div class="card-grid">

            <article class="info-card">

                <div class="card-number">
                    01
                </div>

                <h3>
                    Materi Terarah
                </h3>

                <p>
                    Materi disusun bertahap dari dasar
                    hingga praktik.
                </p>

            </article>


            <article class="info-card">

                <div class="card-number">
                    02
                </div>

                <h3>
                    Belajar dengan Proyek
                </h3>

                <p>
                    Setiap tahap menghasilkan bagian nyata
                    dari aplikasi.
                </p>

            </article>


            <article class="info-card">

                <div class="card-number">
                    03
                </div>

                <h3>
                    Pendampingan Praktik
                </h3>

                <p>
                    Peserta belajar melalui demonstrasi,
                    latihan, dan evaluasi.
                </p>

            </article>

        </div>

    </div>

</section>


<!-- ================= KATALOG ================= -->

<section class="section section-soft" id="katalog">

    <div class="container">

        <div class="section-heading">

            <p class="section-label">
                KATALOG KURSUS
            </p>

            <h2>
                Kursus yang Tersedia
            </h2>

            <p>
                Pilih kursus sesuai dengan kebutuhan
                dan minat belajar.
            </p>

        </div>


        <div class="card-grid">

            <article class="course-card">

                <div class="course-icon">
                    ★
                </div>

                <span class="course-label">
                    PEMULA
                </span>

                <h3>
                    Web Dasar
                </h3>

                <p>
                    Belajar struktur HTML dan dasar
                    pengembangan web.
                </p>

                <a href="register.php">
                    Ikuti Kursus →
                </a>

            </article>


            <article class="course-card">

                <div class="course-icon">
                    ★
                </div>

                <span class="course-label">
                    PROGRAMMING
                </span>

                <h3>
                    PHP Dasar
                </h3>

                <p>
                    Belajar variabel, operator, percabangan,
                    looping, dan form.
                </p>

                <a href="register.php">
                    Ikuti Kursus →
                </a>

            </article>


            <article class="course-card">

                <div class="course-icon">
                    ★
                </div>

                <span class="course-label">
                    LANJUTAN
                </span>

                <h3>
                    Laravel Fundamental
                </h3>

                <p>
                    Mengenal framework, route, controller,
                    view, dan database.
                </p>

                <a href="register.php">
                    Ikuti Kursus →
                </a>

            </article>

        </div>


        <!-- ================= KALKULATOR BIAYA ================= -->

        <div class="calculator-link">

            <h3>
                Ingin mengetahui estimasi biaya kursus?
            </h3>

            <p>
                Gunakan kalkulator untuk melihat subtotal,
                diskon, biaya admin, dan total biaya kursus.
            </p>

            <a href="fee-calculator.php" class="btn-primary">
                Lihat Estimasi Biaya →
            </a>

        </div>

    </div>

</section>


<!-- ================= WEEK 06 ================= -->

<section class="section week06-section">

    <div class="container">

        <div class="section-heading">

            <p class="section-label">
                WEEK 06
            </p>

            <h2>
                Pendaftaran Kursus Lebih Lengkap
            </h2>

            <p>
                Lengkapi data pendaftaran, pilih jenis peserta,
                metode belajar, minat pembelajaran, dan jumlah paket.
            </p>

        </div>


        <div class="card-grid">

            <article class="info-card">

                <div class="card-number">
                    01
                </div>

                <h3>
                    Pilih Program
                </h3>

                <p>
                    Pilih kursus yang tersedia dengan biaya
                    yang ditampilkan secara otomatis.
                </p>

            </article>


            <article class="info-card">

                <div class="card-number">
                    02
                </div>

                <h3>
                    Tentukan Peserta
                </h3>

                <p>
                    Pilih jenis peserta mahasiswa, guru,
                    atau umum untuk mendapatkan perhitungan diskon.
                </p>

            </article>


            <article class="info-card">

                <div class="card-number">
                    03
                </div>

                <h3>
                    Pilih Minat & Metode
                </h3>

                <p>
                    Tentukan minat pembelajaran dan metode
                    belajar yang diinginkan.
                </p>

            </article>

        </div>


        <div class="calculator-link week06-link">

            <h3>
                Siap Melakukan Pendaftaran?
            </h3>

            <p>
                Isi formulir Week 06 untuk melihat
                rincian biaya dan hasil pendaftaran.
            </p>

            <div class="hero-buttons">

                <a
                    href="register.php"
                    class="btn-primary"
                >
                    Pendaftaran 2 →
                </a>

                <a
                    href="history.php"
                    class="btn-secondary"
                >
                    Lihat History
                </a>

            </div>

        </div>

    </div>

</section>


<!-- ================= CARA DAFTAR ================= -->

<section class="section" id="cara-daftar">

    <div class="container">

        <div class="section-heading">

            <p class="section-label">
                CARA DAFTAR
            </p>

            <h2>
                Bergabung dengan KursusKu
            </h2>

            <p>
                Hanya membutuhkan beberapa langkah sederhana.
            </p>

        </div>


        <div class="steps">

            <div class="step">

                <span>
                    01
                </span>

                <h3>
                    Pilih Kursus
                </h3>

                <p>
                    Tentukan kursus yang sesuai dengan
                    kebutuhan dan minat.
                </p>

            </div>


            <div class="step">

                <span>
                    02
                </span>

                <h3>
                    Isi Formulir
                </h3>

                <p>
                    Lengkapi data diri pada formulir
                    pendaftaran.
                </p>

            </div>


            <div class="step">

                <span>
                    03
                </span>

                <h3>
                    Periksa Data
                </h3>

                <p>
                    Periksa kembali data sebelum
                    dikirim.
                </p>

            </div>


            <div class="step">

                <span>
                    04
                </span>

                <h3>
                    Kirim Pendaftaran
                </h3>

                <p>
                    Kirim formulir dan tunggu proses
                    selanjutnya.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- ================= MEDIA ================= -->

<section class="section section-soft" id="media">

    <div class="container">

        <div class="section-heading">

            <p class="section-label">
                MEDIA
            </p>

            <h2>
                Kenali Program Kami
            </h2>

            <p>
                Gunakan media pembelajaran untuk membantu
                proses belajar.
            </p>

        </div>


        <div class="media-box">

            <img
                src="assets/images/hero-kursus.jpg"
                alt="Mahasiswa sedang mengikuti kegiatan kursus komputer"
            >


            <div class="media-content">

                <h3>
                    Video Pembelajaran
                </h3>

                <p>
                    Simak video singkat untuk mengenal
                    program pembelajaran KursusKu.
                </p>


                <video controls>

                    <source
                        src="assets/video/intro-kursus.mp4"
                        type="video/mp4"
                    >

                    Browser Anda tidak mendukung
                    video HTML5.

                </video>


                <p class="external-link">

                    <a
                        href="https://www.php.net/"
                        target="_blank"
                        rel="noopener"
                    >
                        Dokumentasi PHP →
                    </a>

                </p>

            </div>

        </div>

    </div>

</section>


<!-- ================= HISTORY ================= -->

<section class="section" id="history">

    <div class="container">

        <div class="section-heading">

            <p class="section-label">
                HISTORY
            </p>

            <h2>
                Sejarah dan Perkembangan KursusKu
            </h2>

            <p>
                Perjalanan KursusKu dalam menyediakan media
                pembelajaran dan pengembangan keterampilan digital.
            </p>

        </div>


        <div class="history-box">

            <div class="history-number">
                01
            </div>

            <div>

                <h3>
                    Awal Berdirinya KursusKu
                </h3>

                <p>
                    KursusKu dikembangkan sebagai sebuah platform
                    pembelajaran yang bertujuan membantu peserta
                    memperoleh pengetahuan dan keterampilan digital
                    dengan cara yang sederhana dan mudah dipahami.
                </p>

                <p>
                    Pada awal pengembangannya, KursusKu berfokus
                    pada penyediaan materi pembelajaran yang dapat
                    digunakan sebagai pendukung proses belajar.
                </p>

            </div>

        </div>


        <div class="history-box history-box-second">

            <div class="history-number">
                02
            </div>

            <div>

                <h3>
                    Perkembangan Program Kursus
                </h3>

                <p>
                    Seiring berkembangnya kebutuhan pembelajaran,
                    KursusKu menyediakan beberapa pilihan kursus
                    yang berkaitan dengan keterampilan teknologi
                    dan komputer.
                </p>

                <p>
                    Beberapa program yang tersedia antara lain
                    Web Dasar, PHP Dasar, dan Laravel Fundamental.
                    Program tersebut disusun agar peserta dapat
                    belajar mulai dari materi dasar hingga tahap
                    yang lebih lanjut.
                </p>

            </div>

        </div>


        <div class="history-box history-box-third">

            <div class="history-number">
                03
            </div>

            <div>

                <h3>
                    Pengembangan Media Pembelajaran
                </h3>

                <p>
                    KursusKu juga dikembangkan dengan memanfaatkan
                    berbagai media pembelajaran seperti materi,
                    video, dan latihan.
                </p>

                <p>
                    Penggunaan berbagai media tersebut diharapkan
                    dapat membantu peserta memahami materi dengan
                    lebih baik serta memberikan pengalaman belajar
                    yang lebih menarik dan praktis.
                </p>

            </div>

        </div>


        <div class="history-box history-box-fourth">

            <div class="history-number">
                04
            </div>

            <div>

                <h3>
                    KursusKu Saat Ini
                </h3>

                <p>
                    Saat ini KursusKu memiliki halaman informasi
                    kursus, katalog program, informasi keunggulan,
                    media pembelajaran, serta halaman pendaftaran
                    peserta.
                </p>

                <p>
                    Melalui pengembangan tersebut, KursusKu
                    diharapkan dapat menjadi media yang membantu
                    mahasiswa maupun masyarakat umum dalam
                    meningkatkan pengetahuan dan keterampilan
                    digital.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- ================= KONTAK ================= -->

<section class="section contact-section" id="kontak">

    <div class="container">

        <div class="section-heading">

            <p class="section-label">
                KONTAK
            </p>

            <h2>
                Hubungi KursusKu
            </h2>

            <p>
                Jika membutuhkan informasi lebih lanjut mengenai
                program kursus, silakan hubungi kami melalui kontak berikut.
            </p>

        </div>


        <div class="contact-grid">

            <div class="contact-card">

                <div class="contact-icon">
                    👤
                </div>

                <h3>
                    Jingga Permatasari
                </h3>

                <p>
                    KursusKu
                </p>

            </div>


            <div class="contact-card">

                <div class="contact-icon">
                    📞
                </div>

                <h3>
                    Nomor Telepon
                </h3>

                <p>
                    0831 xxxx xxxx
                </p>

            </div>


            <div class="contact-card">

                <div class="contact-icon">
                    📍
                </div>

                <h3>
                    Lokasi
                </h3>

                <p>
                    Indonesia
                </p>

            </div>

        </div>

    </div>

</section>


<!-- ================= SIAP MULAI BELAJAR ================= -->

<section class="start-learning">

    <div class="container">

        <div class="start-learning-box">

            <div class="start-learning-content">

                <span class="start-label">
                    ✨ KURSUSKU
                </span>

                <h2>
                    Siap Mulai Belajar?
                </h2>

                <p>
                    Tingkatkan kemampuan dan pengetahuanmu bersama
                    KursusKu. Pilih program kursus yang sesuai
                    dengan kebutuhanmu dan mulai belajar sekarang.
                </p>

                <a href="register.php" class="start-button">
                    Pendaftaran 2 →
                </a>

            </div>

            <div class="start-learning-decoration">

                <div class="learning-icon">
                    🎓
                </div>

            </div>

        </div>

    </div>

</section>

</main>


<!-- ================= FOOTER ================= -->

<footer class="footer">

    <div class="container footer-grid">

        <div>

            <div class="footer-logo">
                ★ KursusKu
            </div>

            <p>
                Platform kursus online untuk mengembangkan
                keterampilan digital.
            </p>

        </div>


        <div class="footer-links">

            <a href="#beranda">
                Beranda
            </a>

            <a href="#katalog">
                Katalog
            </a>

            <a href="#cara-daftar">
                Cara Daftar
            </a>

            <a href="#keunggulan">
                Keunggulan
            </a>

            <a href="#media">
                Media
            </a>

            <a href="#history">
                History
            </a>

            <a href="#kontak">
                Kontak
            </a>

            <!-- PENDAFTARAN 1 - WEEK 05 -->
            <a href="registration.php">
                Pendaftaran 1
            </a>

            <!-- PENDAFTARAN 2 - WEEK 06 -->
            <a href="register.php">
                Pendaftaran 2
            </a>

            <a href="history.php">
                History Pendaftaran
            </a>

            <a href="loop-lab.php">
                Loop Lab
            </a>

        </div>

    </div>


    <div class="copyright">

        &copy; <?= $year ?> <?= htmlspecialchars($siteName) ?>.
        Semua hak dilindungi.

    </div>

</footer>

</body>
</html>