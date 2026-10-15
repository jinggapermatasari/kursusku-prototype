<?php
$fee = 350000;
$participants = 2;

$subtotal = $fee * $participants;
$comparisonPositive = $fee > 0;
$comparisonStrict = $fee === 350000;
$message = 'Biaya: Rp ' . $fee;
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Operator Test - KursusKu</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .operator-card {
            width: 100%;
            max-width: 650px;
            margin: 40px auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 18px;
            border-top: 6px solid #800020;
            box-shadow: 0 8px 25px rgba(80, 0, 25, 0.12);
            box-sizing: border-box;
        }

        .operator-card h1 {
            color: #800020;
            margin-bottom: 10px;
        }

        .operator-description {
            color: #666666;
            margin-bottom: 25px;
        }

        .operator-summary {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 15px;
            margin-bottom: 25px;
        }

        .summary-item {
            padding: 18px;
            background: #fff3f6;
            border: 1px solid #f0d4dd;
            border-radius: 12px;
        }

        .summary-item span {
            display: block;
            color: #666666;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .summary-item strong {
            color: #800020;
            font-size: 22px;
        }

        .operator-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .operator-list li {
            padding: 16px;
            margin-bottom: 12px;
            background: #faf7f8;
            border-left: 5px solid #800020;
            border-radius: 8px;
            overflow-wrap: anywhere;
        }

        .operator-list strong {
            color: #800020;
        }

        .result-value {
            display: inline-block;
            margin-top: 8px;
            padding: 5px 12px;
            background: #f4e3e9;
            color: #800020;
            border-radius: 20px;
            font-weight: bold;
        }

        .operator-button {
            display: inline-block;
            margin-top: 18px;
            padding: 12px 22px;
            background: #800020;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.2s;
        }

        .operator-button:hover {
            background: #5c0017;
        }

        @media (max-width: 480px) {
            .operator-card {
                padding: 20px;
                margin: 20px auto;
            }

            .operator-summary {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body class="utility-page">
<main class="operator-card">
    <h1>Operator Test PHP</h1>
    <p class="operator-description">
        Pengujian operator aritmatika, perbandingan, dan penggabungan teks.
    </p>

    <section class="operator-summary">
        <div class="summary-item">
            <span>Biaya per Peserta</span>
            <strong>Rp <?= number_format($fee, 0, ',', '.'); ?></strong>
        </div>

        <div class="summary-item">
            <span>Jumlah Peserta</span>
            <strong><?= $participants; ?> orang</strong>
        </div>
    </section>

    <h2>Hasil Pengujian Operator</h2>

    <ul class="operator-list">
        <li>
            <strong>1. Operator Perkalian (*)</strong>
            <p>Biaya × jumlah peserta</p>
            <span class="result-value">
                Rp <?= number_format($subtotal, 0, ',', '.'); ?>
            </span>
        </li>

        <li>
            <strong>2. Operator Perbandingan (&gt;)</strong>
            <p>Apakah biaya lebih besar dari nol?</p>
            <span class="result-value">
                <?= $comparisonPositive ? 'TRUE' : 'FALSE'; ?>
            </span>
        </li>

        <li>
            <strong>3. Operator Identik (===)</strong>
            <p>Apakah biaya identik dengan 350000?</p>
            <span class="result-value">
                <?= $comparisonStrict ? 'TRUE' : 'FALSE'; ?>
            </span>
        </li>

        <li>
            <strong>4. Operator Penggabungan (.)</strong>
            <p>Hasil penggabungan teks:</p>
            <span class="result-value">
                <?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>
            </span>
        </li>
    </ul>

    <a class="operator-button" href="fee-calculator.php">
        Kembali ke Kalkulator
    </a>
</main>
</body>
</html>