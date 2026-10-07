<?php

require __DIR__ . '/helpers.php';

$history = [
    [
        'name' => 'Alya',
        'course' => 'Web Dasar',
        'total' => 240000,
    ],
    [
        'name' => 'Bima',
        'course' => 'PHP Dasar',
        'total' => 340000,
    ],
    [
        'name' => 'Citra',
        'course' => 'Laravel Dasar',
        'total' => 500000,
    ],
];

?>

<!doctype html>
<html lang="id">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>History Pendaftaran - KursusKu</title>

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

            <span class="brand-star">★</span>

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

            <div class="result-success-icon">
                ★
            </div>

            <span class="section-label">
                History Dummy
            </span>

            <h1>
                History Pendaftaran
            </h1>

            <p class="result-description">
                Berikut merupakan contoh data history
                pendaftaran peserta KursusKu.
            </p>


            <div class="history-table">

                <div class="history-table-header">

                    <span>
                        Nama
                    </span>

                    <span>
                        Kursus
                    </span>

                    <span>
                        Total
                    </span>

                </div>


                <?php foreach ($history as $item): ?>

                    <div class="history-table-row">

                        <strong>
                            <?= e($item['name']) ?>
                        </strong>

                        <span>
                            <?= e($item['course']) ?>
                        </span>

                        <strong class="history-price">
                            <?= formatRupiah($item['total']) ?>
                        </strong>

                    </div>

                <?php endforeach; ?>

            </div>


            <div class="result-actions">

                <a
                    href="register.php"
                    class="btn-primary"
                >
                    Daftar Kursus →
                </a>

                <a
                    href="index.php"
                    class="btn-secondary"
                >
                    ← Kembali ke Beranda
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