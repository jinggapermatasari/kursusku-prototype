<?php
$courseName = 'Laravel Fundamental';
$fee = 350000;
$participantCount = 2;
$discountPercent = 10;
$adminFee = 25000;
$isActive = true;
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Type Data Test - KursusKu</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .type-card {
            width: 100%;
            max-width: 700px;
            margin: 40px auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 18px;
            border-top: 6px solid #800020;
            box-shadow: 0 8px 25px rgba(80, 0, 25, 0.12);
            box-sizing: border-box;
        }

        .type-card h1 {
            color: #800020;
            margin-bottom: 10px;
        }

        .type-description {
            color: #666666;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .type-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 15px;
        }

        .type-item {
            padding: 18px;
            background: #fff3f6;
            border: 1px solid #f0d4dd;
            border-radius: 12px;
            overflow-wrap: anywhere;
        }

        .type-item span {
            display: block;
            color: #666666;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .type-item strong {
            color: #800020;
            font-size: 18px;
        }

        .type-label {
            display: inline-block;
            margin-top: 10px;
            padding: 5px 10px;
            background: #ffffff;
            color: #800020;
            border-radius: 6px;
            font-size: 12px;
            font-weight: bold;
        }

        .type-code {
            margin-top: 25px;
            padding: 18px;
            background: #2b2024;
            color: #ffffff;
            border-radius: 12px;
            overflow-x: auto;
            font-size: 14px;
            line-height: 1.7;
        }

        .type-button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 22px;
            background: #800020;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.2s;
        }

        .type-button:hover {
            background: #5c0017;
        }

        @media (max-width: 480px) {
            .type-card {
                padding: 20px;
                margin: 20px auto;
            }

            .type-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body class="utility-page">
<main class="type-card">
    <h1>Variabel dan Tipe Data</h1>

    <p class="type-description">
        Halaman ini menampilkan contoh variabel PHP yang digunakan
        dalam sistem KursusKu beserta tipe datanya.
    </p>

    <section class="type-grid">
        <div class="type-item">
            <span>Nama Kursus</span>
            <strong><?= htmlspecialchars($courseName, ENT_QUOTES, 'UTF-8'); ?></strong>
            <span class="type-label">String</span>
        </div>

        <div class="type-item">
            <span>Biaya Kursus</span>
            <strong>Rp <?= number_format($fee, 0, ',', '.'); ?></strong>
            <span class="type-label">Integer</span>
        </div>

        <div class="type-item">
            <span>Jumlah Peserta</span>
            <strong><?= $participantCount; ?> orang</strong>
            <span class="type-label">Integer</span>
        </div>

        <div class="type-item">
            <span>Diskon</span>
            <strong><?= $discountPercent; ?>%</strong>
            <span class="type-label">Integer</span>
        </div>

        <div class="type-item">
            <span>Biaya Administrasi</span>
            <strong>Rp <?= number_format($adminFee, 0, ',', '.'); ?></strong>
            <span class="type-label">Integer</span>
        </div>

        <div class="type-item">
            <span>Status Kursus</span>
            <strong><?= $isActive ? 'Aktif' : 'Tidak Aktif'; ?></strong>
            <span class="type-label">Boolean</span>
        </div>
    </section>

    <h2>Hasil var_dump()</h2>

    <pre class="type-code"><?php
var_dump(
    $courseName,
    $fee,
    $participantCount,
    $discountPercent,
    $adminFee,
    $isActive
);
?></pre>

    <a class="type-button" href="fee-calculator.php">
        Kembali ke Kalkulator
    </a>
</main>
</body>
</html>