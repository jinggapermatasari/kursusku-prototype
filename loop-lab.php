<?php

require __DIR__ . '/data.php';
require __DIR__ . '/helpers.php';

?>

<!doctype html>
<html lang="id">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>Loop Lab - KursusKu</title>

    <link
        rel="stylesheet"
        href="assets/css/style.css?v=2"
    >

</head>

<body class="registration-page">

<header class="site-header">

    <div class="container nav-wrap">

        <a
            class="brand"
            href="index.php"
        >

            <span class="brand-star">
                ★
            </span>

            KursusKu

        </a>

        <nav>

            <a href="index.php">
                Beranda
            </a>

            <a href="register.php">
                Pendaftaran 2
            </a>

            <a href="history.php">
                History
            </a>

        </nav>

    </div>

</header>


<main class="registration-main">

    <div class="container">

        <div class="result-card">

            <span class="section-label">
                 LOOPING
            </span>

            <h1>
                Loop Lab
            </h1>

            <p class="result-description">
                Halaman pengujian looping PHP menggunakan
                foreach dan for.
            </p>


            <!-- FOREACH COURSE -->

            <div class="result-section">

                <h2>
                    Daftar Kursus
                </h2>

                <div class="facility-list">

                    <?php foreach ($courses as $course): ?>

                        <div>

                            <span>
                                ✓
                            </span>

                            <?= e($course['name']) ?>

                            —

                            <?= formatRupiah($course['fee']) ?>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>


            <!-- FOREACH FACILITY -->

            <div class="result-section">

                <h2>
                    Fasilitas
                </h2>

                <div class="facility-list">

                    <?php foreach ($facilities as $facility): ?>

                        <div>

                            <span>
                                ✓
                            </span>

                            <?= e($facility) ?>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>


            <!-- FOR LOOP -->

            <div class="result-section">

                <h2>
                    Pilihan Jumlah Paket
                </h2>

                <div class="result-tags">

                    <?php for ($i = 1; $i <= 3; $i++): ?>

                        <span>
                            <?= $i ?> Paket
                        </span>

                    <?php endfor; ?>

                </div>

            </div>


            <div class="result-actions">

                <a
                    href="register.php"
                    class="btn-primary"
                >
                    Coba Form Pendaftaran →
                </a>

                <a
                    href="index.php"
                    class="btn-secondary"
                >
                    Kembali

                </a>

            </div>

        </div>

    </div>

</main>


<footer class="footer">

    <div class="container">

        <div class="footer-logo">
            ★ KursusKu
        </div>

        <p>
            Platform kursus online untuk mengembangkan
            keterampilan digital.
        </p>

    </div>

</footer>

</body>

</html>