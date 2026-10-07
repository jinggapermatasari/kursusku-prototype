<?php

require __DIR__ . '/data.php';
require __DIR__ . '/helpers.php';


/* ================= CEK METHOD ================= */

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    header('Location: register.php');
    exit;

}


/* ================= AMBIL DATA ================= */

$name = trim($_POST['name'] ?? '');

$email = trim($_POST['email'] ?? '');

$courseCode = $_POST['course_code'] ?? '';

$participantType = $_POST['participant_type'] ?? '';

$learningMode = $_POST['learning_mode'] ?? '';

$packageCount = (int) ($_POST['package_count'] ?? 1);

$notes = trim($_POST['notes'] ?? '');

$interests = $_POST['interests'] ?? '';


/* ================= CEK CHECKBOX ================= */

if (!is_array($interests)) {

    $interests = [];

}


/* ================= FILTER MINAT ================= */

$allowedInterestKeys = array_keys($interestOptions);

$interests = array_values(
    array_intersect(
        $interests,
        $allowedInterestKeys
    )
);


/* ================= VALIDASI ================= */

$errors = [];


if ($name === '') {

    $errors[] = 'Nama wajib diisi.';

}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $errors[] = 'Format email tidak valid.';

}


$course = findCourse(
    $courses,
    $courseCode
);


if ($course === null) {

    $errors[] = 'Kursus tidak ditemukan.';

}


if (
    !in_array(
        $participantType,
        ['mahasiswa', 'guru', 'umum'],
        true
    )
) {

    $errors[] = 'Tipe peserta tidak valid.';

}


if (
    !in_array(
        $learningMode,
        ['offline', 'online', 'hybrid'],
        true
    )
) {

    $errors[] = 'Metode belajar tidak valid.';

}


if (
    !in_array(
        $packageCount,
        [1, 2, 3],
        true
    )
) {

    $errors[] = 'Jumlah paket tidak valid.';

}


/* ================= JIKA ADA ERROR ================= */

if (!empty($errors)) {

    ?>

    <!doctype html>

    <html lang="id">

    <head>

        <meta charset="utf-8">

        <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
        >

        <title>Error Pendaftaran - KursusKu</title>

        <link
            rel="stylesheet"
            href="assets/css/style.css?v=2"
        >

    </head>


    <body>

        <main class="result-page">

            <div class="result-card">

                <div class="result-icon">
                    !
                </div>

                <span class="section-label">
                    PENDAFTARAN
                </span>

                <h1>
                    Data Belum Lengkap
                </h1>

                <p>
                    Silakan periksa kembali data
                    yang kamu masukkan.
                </p>


                <div class="result-error-list">

                    <?php foreach ($errors as $error): ?>

                        <div>
                            ⚠
                            <?= e($error) ?>
                        </div>

                    <?php endforeach; ?>

                </div>


                <a
                    href="register.php"
                    class="btn-primary"
                >
                    ← Kembali ke Form
                </a>

            </div>

        </main>

    </body>

    </html>

    <?php

    exit;

}


/* ================= HITUNG DISKON ================= */

$discountPercent =
    getDiscountPercent(
        $participantType
    );


/* ================= HITUNG TOTAL ================= */

$grossTotal =
    $course['fee'] * $packageCount;


$discountAmount =
    intdiv(
        $grossTotal * $discountPercent,
        100
    );


$finalTotal =
    $grossTotal - $discountAmount;


/* ================= METODE BELAJAR ================= */

$learningModeLabel =
    getLearningModeLabel(
        $learningMode
    );


/* ================= TAMPILKAN HASIL ================= */

?>

<!doctype html>

<html lang="id">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>
        Hasil Pendaftaran - KursusKu
    </title>

    <link
        rel="stylesheet"
        href="assets/css/style.css?v=2"
    >

</head>


<body class="registration-page">


<!-- ================= HEADER ================= -->

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


<!-- ================= HASIL ================= -->

<main class="registration-main">

    <div class="container">

        <div class="result-card">


            <div class="result-success-icon">
                ✓
            </div>


            <span class="section-label">
                PENDAFTARAN BERHASIL
            </span>


            <h1>
                Terima Kasih,
                <?= e($name) ?>!
            </h1>


            <p class="result-description">

                Data pendaftaran kamu berhasil
                diproses oleh KursusKu.

            </p>


            <!-- DATA PESERTA -->

            <div class="result-section">

                <h2>
                    Data Peserta
                </h2>


                <div class="result-grid">

                    <div class="result-item">

                        <span>
                            Nama
                        </span>

                        <strong>
                            <?= e($name) ?>
                        </strong>

                    </div>


                    <div class="result-item">

                        <span>
                            Email
                        </span>

                        <strong>
                            <?= e($email) ?>
                        </strong>

                    </div>


                    <div class="result-item">

                        <span>
                            Jenis Peserta
                        </span>

                        <strong>
                            <?= e(ucfirst($participantType)) ?>
                        </strong>

                    </div>


                    <div class="result-item">

                        <span>
                            Metode Belajar
                        </span>

                        <strong>
                            <?= e($learningModeLabel) ?>
                        </strong>

                    </div>

                </div>

            </div>


            <!-- DETAIL KURSUS -->

            <div class="result-section">

                <h2>
                    Detail Kursus
                </h2>


                <div class="result-course">

                    <div>

                        <span>
                            PROGRAM KURSUS
                        </span>

                        <h3>
                            <?= e($course['name']) ?>
                        </h3>

                    </div>


                    <div class="result-course-price">

                        <?= formatRupiah($course['fee']) ?>

                    </div>

                </div>


                <div class="result-calculation">

                    <div>

                        <span>
                            Jumlah Paket
                        </span>

                        <strong>
                            <?= $packageCount ?> Paket
                        </strong>

                    </div>


                    <div>

                        <span>
                            Subtotal
                        </span>

                        <strong>
                            <?= formatRupiah($grossTotal) ?>
                        </strong>

                    </div>


                    <div>

                        <span>
                            Diskon
                        </span>

                        <strong>
                            <?= $discountPercent ?>%
                            (-<?= formatRupiah($discountAmount) ?>)
                        </strong>

                    </div>


                    <div class="result-total">

                        <span>
                            Total Pembayaran
                        </span>

                        <strong>
                            <?= formatRupiah($finalTotal) ?>
                        </strong>

                    </div>

                </div>

            </div>


            <!-- MINAT -->

            <div class="result-section">

                <h2>
                    Minat Pembelajaran
                </h2>


                <?php if (empty($interests)): ?>

                    <p class="empty-result">
                        Belum memilih minat.
                    </p>

                <?php else: ?>

                    <div class="result-tags">

                        <?php foreach ($interests as $interest): ?>

                            <span>

                                <?= e(
                                    $interestOptions[$interest]
                                ) ?>

                            </span>

                        <?php endforeach; ?>

                    </div>

                <?php endif; ?>

            </div>


            <!-- CATATAN -->

            <?php if ($notes !== ''): ?>

                <div class="result-section">

                    <h2>
                        Catatan
                    </h2>

                    <div class="result-note">

                        <?= e($notes) ?>

                    </div>

                </div>

            <?php endif; ?>


            <!-- FASILITAS -->

            <div class="result-section">

                <h2>
                    Fasilitas Kursus
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


            <!-- BUTTON -->

            <div class="result-actions">

                <a
                    href="register.php"
                    class="btn-primary"
                >
                    ← Daftar Lagi
                </a>


                <a
                    href="history.php"
                    class="btn-secondary"
                >
                    Lihat History →
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