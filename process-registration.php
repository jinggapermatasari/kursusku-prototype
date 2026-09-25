<?php

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$studyProgram = trim($_POST['study_program'] ?? '');

$course = $_POST['course'] ?? '';

$participantType = $_POST['participant_type'] ?? '';

$interests = $_POST['interests'] ?? [];

$note = trim($_POST['note'] ?? '');

$source = $_POST['source'] ?? '';


// Memastikan interests selalu berupa array

if (!is_array($interests)) {
    $interests = [];
}


// Mengubah array minat menjadi teks

$interestText = implode(', ', $interests);


// Fungsi keamanan output

function e($value): string
{
    return htmlspecialchars(
        (string) $value,
        ENT_QUOTES,
        'UTF-8'
    );
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Pendaftaran Berhasil - KursusKu</title>

    <link
        rel="stylesheet"
        href="assets/css/style.css"
    >

</head>

<body>

<header class="site-header">

    <div class="container nav-wrap">

        <a
            href="index.php"
            class="brand"
        >
            KursusKu
        </a>

        <nav
            class="nav-links"
            aria-label="Navigasi utama"
        >

            <a href="index.php">
                Katalog
            </a>

            <a href="registration.php">
                Daftar Kursus
            </a>

        </nav>

    </div>

</header>


<main class="container">

    <div class="alert-success">

        <h1>
            Pendaftaran Berhasil!
        </h1>

        <p>
            Data pendaftaran kamu berhasil diterima.
        </p>

    </div>


    <section class="summary-card">

        <h2>
            Ringkasan Pendaftaran
        </h2>


        <dl class="summary-list">

            <dt>
                Nama
            </dt>

            <dd>
                <?= e($name) ?>
            </dd>


            <dt>
                Email
            </dt>

            <dd>
                <?= e($email) ?>
            </dd>


            <dt>
                No. HP
            </dt>

            <dd>
                <?= e($phone) ?>
            </dd>


            <dt>
                Program Studi
            </dt>

            <dd>
                <?= e($studyProgram) ?>
            </dd>


            <dt>
                Kursus
            </dt>

            <dd>
                <?= e($course) ?>
            </dd>


            <dt>
                Jenis Peserta
            </dt>

            <dd>
                <?= e($participantType) ?>
            </dd>


            <dt>
                Minat
            </dt>

            <dd>
                <?= e($interestText ?: '-') ?>
            </dd>


            <dt>
                Catatan
            </dt>

            <dd>
                <?= e($note ?: '-') ?>
            </dd>


            <dt>
                Source
            </dt>

            <dd>
                <?= e($source) ?>
            </dd>

        </dl>


        <div class="result-action">

            <a
                href="registration.php"
                class="btn-primary"
            >
                Kembali ke Form
            </a>

            <a
                href="index.php"
                class="btn-secondary"
            >
                Kembali ke Katalog
            </a>

        </div>

    </section>

</main>

</body>
</html>