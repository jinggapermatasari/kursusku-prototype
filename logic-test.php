<?php
$quota = 30;
$registered = 18;

$isFull = $registered >= $quota;
$hasSeat = $registered < $quota;
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logic Test - KursusKu</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .logic-card {
            width: 100%;
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(80, 0, 25, 0.12);
            border-top: 6px solid #800020;
            box-sizing: border-box;
        }

        .logic-card h1 {
            color: #800020;
            margin-bottom: 10px;
        }

        .logic-card .description {
            color: #666666;
            margin-bottom: 24px;
        }

        .logic-info {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 15px;
            margin-bottom: 22px;
        }

        .logic-item {
            padding: 18px;
            background: #fff3f6;
            border-radius: 12px;
            border: 1px solid #f0d4dd;
        }

        .logic-item span {
            display: block;
            color: #666666;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .logic-item strong {
            color: #800020;
            font-size: 24px;
        }

        .logic-result {
            padding: 18px;
            margin-bottom: 12px;
            border-radius: 12px;
            background: #f8f8f8;
            border-left: 5px solid #800020;
        }

        .logic-result p {
            margin: 5px 0;
        }

        .logic-result strong {
            color: #800020;
        }

        .logic-status {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            background: #e5f7eb;
            color: #176b36;
            font-weight: bold;
        }

        .logic-button {
            display: inline-block;
            margin-top: 15px;
            padding: 11px 22px;
            background: #800020;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.2s;
        }

        .logic-button:hover {
            background: #5c0017;
        }

        @media (max-width: 480px) {
            .logic-card {
                padding: 20px;
                margin: 20px auto;
            }

            .logic-info {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body class="utility-page">
<main class="logic-card">
    <h1>Logic Test</h1>
    <p class="description">
        Pengujian logika untuk mengetahui ketersediaan kursi kursus.
    </p>

    <section class="logic-info">
        <div class="logic-item">
            <span>Kuota Kursus</span>
            <strong><?= $quota; ?></strong>
            <span>kursi tersedia maksimal</span>
        </div>

        <div class="logic-item">
            <span>Peserta Terdaftar</span>
            <strong><?= $registered; ?></strong>
            <span>peserta sudah mendaftar</span>
        </div>
    </section>

    <h2>Hasil Pengujian</h2>

    <div class="logic-result">
        <p>Apakah kursus penuh?</p>
        <strong><?= $isFull ? 'TRUE' : 'FALSE'; ?></strong>
        <p>
            <?= $isFull
                ? 'Kuota kursus sudah penuh.'
                : 'Kuota kursus belum penuh.'; ?>
        </p>
    </div>

    <div class="logic-result">
        <p>Apakah kursi masih tersedia?</p>
        <strong><?= $hasSeat ? 'TRUE' : 'FALSE'; ?></strong>
        <p>
            <?= $hasSeat
                ? 'Peserta masih bisa mendaftar.'
                : 'Kursi kursus sudah habis.'; ?>
        </p>
    </div>

    <p>Status:
        <span class="logic-status">
            <?= $hasSeat ? 'Tersedia' : 'Penuh'; ?>
        </span>
    </p>

    <a class="logic-button" href="index.php">Kembali ke Beranda</a>
</main>
</body>
</html>