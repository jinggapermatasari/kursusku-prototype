<?php
$start = new DateTimeImmutable('2026-09-15');
$now = new DateTimeImmutable('now', new DateTimeZone('Asia/Jakarta'));
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Date/Time Test | KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        :root {
            --burgundy: #800020;
            --burgundy-dark: #5c0017;
            --white: #ffffff;
            --soft: #fff7f8;
            --text: #33252a;
        }

        * {
            box-sizing: border-box;
        }

        body.utility-page {
            margin: 0;
            min-height: 100vh;
            padding: 30px 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #fff7f8, #f0dce2);
            font-family: Arial, sans-serif;
            color: var(--text);
        }

        .utility-card {
            width: 100%;
            max-width: 560px;
            padding: 35px;
            background: var(--white);
            border-radius: 18px;
            border: 1px solid #ead5dc;
            border-top: 6px solid var(--burgundy);
            box-shadow: 0 12px 35px rgba(92, 0, 23, 0.12);
        }

        .utility-card .label {
            display: inline-block;
            padding: 7px 13px;
            margin-bottom: 12px;
            border-radius: 20px;
            background: #f6e6eb;
            color: var(--burgundy);
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .utility-card h1 {
            margin: 0 0 10px;
            color: var(--burgundy);
            font-size: 28px;
        }

        .utility-card .description {
            margin-bottom: 25px;
            color: #75666b;
            line-height: 1.6;
        }

        .date-result {
            margin: 14px 0;
            padding: 17px;
            background: var(--soft);
            border: 1px solid #f0dce2;
            border-radius: 12px;
        }

        .date-result .caption {
            display: block;
            margin-bottom: 8px;
            color: #75666b;
            font-size: 13px;
        }

        .date-result strong {
            color: var(--burgundy);
            font-size: 18px;
            overflow-wrap: anywhere;
        }

        .utility-card a {
            display: block;
            margin-top: 25px;
            padding: 13px 20px;
            border-radius: 10px;
            background: var(--burgundy);
            color: var(--white);
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.2s;
        }

        .utility-card a:hover {
            background: var(--burgundy-dark);
        }

        .footer-note {
            margin-top: 20px;
            text-align: center;
            color: #8b7a80;
            font-size: 12px;
        }

        @media (max-width: 480px) {
            .utility-card {
                padding: 24px 18px;
            }

            .utility-card h1 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body class="utility-page">
    <main class="utility-card">
        <span class="label">KURSUSKU · PENGUJIAN PHP</span>

        <h1>Date/Time Test</h1>

        <p class="description">
            Pengujian format tanggal dan waktu menggunakan PHP
            dengan zona waktu Asia/Jakarta.
        </p>

        <div class="date-result">
            <span class="caption">Tanggal sumber</span>
            <strong><?= $start->format('Y-m-d') ?></strong>
        </div>

        <div class="date-result">
            <span class="caption">Tanggal tampilan</span>
            <strong><?= $start->format('d-m-Y') ?></strong>
        </div>

        <div class="date-result">
            <span class="caption">Waktu saat ini · Asia/Jakarta</span>
            <strong><?= $now->format('d-m-Y H:i:s') ?></strong>
        </div>

        <a href="index.php">← Kembali ke KursusKu</a>

        <p class="footer-note">
            KursusKu — Halaman pengujian tanggal dan waktu
        </p>
    </main>
</body>
</html>