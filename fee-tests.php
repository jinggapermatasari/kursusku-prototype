<?php

declare(strict_types=1);

$tests = [
    ['fee' => 350000, 'participants' => 1, 'discount' => 0, 'admin' => 25000, 'expected' => 375000],
    ['fee' => 350000, 'participants' => 1, 'discount' => 10, 'admin' => 25000, 'expected' => 340000],
    ['fee' => 350000, 'participants' => 2, 'discount' => 25, 'admin' => 25000, 'expected' => 550000],
    ['fee' => 0, 'participants' => 1, 'discount' => 10, 'admin' => 0, 'expected' => 0],
    ['fee' => 2500000, 'participants' => 3, 'discount' => 10, 'admin' => 50000, 'expected' => 6800000],
];

foreach ($tests as $index => $test) {
    $subtotal = $test['fee'] * $test['participants'];
    $discountAmount = intdiv(
        $subtotal * $test['discount'],
        100
    );

    $actual = $subtotal - $discountAmount + $test['admin'];

    $tests[$index]['actual'] = $actual;
    $tests[$index]['status'] =
        $actual === $test['expected'] ? 'PASS' : 'FAIL';
}

function rupiah(int $amount): string
{
    return 'Rp ' . number_format($amount, 0, ',', '.');
}
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fee Tests | KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        :root {
            --burgundy: #800020;
            --burgundy-dark: #5c0017;
            --white: #ffffff;
            --soft: #fff7f8;
            --border: #ead5dc;
            --text: #33252a;
        }

        * {
            box-sizing: border-box;
        }

        body.utility-page {
            margin: 0;
            padding: 35px 18px;
            min-height: 100vh;
            background: linear-gradient(135deg, #fff7f8, #f0dce2);
            color: var(--text);
            font-family: Arial, sans-serif;
        }

        .wide-card {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px;
            background: var(--white);
            border: 1px solid var(--border);
            border-top: 6px solid var(--burgundy);
            border-radius: 18px;
            box-shadow: 0 12px 35px rgba(92, 0, 23, 0.12);
        }

        .eyebrow {
            display: inline-block;
            padding: 8px 13px;
            margin-bottom: 12px;
            border-radius: 20px;
            background: #f6e6eb;
            color: var(--burgundy);
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        h1 {
            margin: 0 0 12px;
            color: var(--burgundy);
            font-size: 30px;
        }

        .description {
            margin-bottom: 25px;
            color: #75666b;
            line-height: 1.7;
        }

        .summary {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 22px;
        }

        .summary-item {
            flex: 1;
            min-width: 140px;
            padding: 17px;
            background: var(--soft);
            border: 1px solid var(--border);
            border-radius: 12px;
        }

        .summary-item span {
            display: block;
            margin-bottom: 8px;
            color: #75666b;
            font-size: 13px;
        }

        .summary-item strong {
            color: var(--burgundy);
            font-size: 23px;
        }

        .table-wrap {
            width: 100%;
            overflow-x: auto;
            margin-bottom: 25px;
            border: 1px solid var(--border);
            border-radius: 12px;
        }

        .test-table {
            width: 100%;
            min-width: 850px;
            border-collapse: collapse;
            background: var(--white);
        }

        .test-table th {
            padding: 15px 12px;
            background: var(--burgundy);
            color: var(--white);
            text-align: left;
            white-space: nowrap;
        }

        .test-table td {
            padding: 14px 12px;
            border-bottom: 1px solid var(--border);
            white-space: nowrap;
        }

        .test-table tbody tr:nth-child(even) {
            background: var(--soft);
        }

        .test-table tbody tr:hover {
            background: #f6e6eb;
        }

        .badge {
            display: inline-block;
            padding: 7px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }

        .badge-available {
            background: #e4f5e9;
            color: #176534;
        }

        .badge-full {
            background: #fde7e7;
            color: #9d2020;
        }

        .button {
            display: inline-block;
            padding: 13px 20px;
            border-radius: 10px;
            background: var(--burgundy);
            color: var(--white);
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.2s;
        }

        .button:hover {
            background: var(--burgundy-dark);
        }

        .footer-note {
            margin-top: 25px;
            color: #8b7a80;
            text-align: center;
            font-size: 12px;
        }

        @media (max-width: 600px) {
            body.utility-page {
                padding: 18px 10px;
            }

            .wide-card {
                padding: 22px 15px;
            }

            h1 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body class="utility-page">
<main class="utility-card wide-card">

    <span class="eyebrow">PENGUJIAN PHP · KURSUSKU</span>

    <h1>Test Matrix Kalkulator Biaya</h1>

    <p class="description">
        Halaman ini menguji lima skenario perhitungan biaya kursus.
        Hasil aktual dibandingkan dengan nilai yang diharapkan
        untuk mengetahui apakah setiap pengujian berhasil.
    </p>

    <?php
    $passed = 0;

    foreach ($tests as $test) {
        if ($test['status'] === 'PASS') {
            $passed++;
        }
    }
    ?>

    <div class="summary">
        <div class="summary-item">
            <span>Total pengujian</span>
            <strong><?= count($tests) ?></strong>
        </div>

        <div class="summary-item">
            <span>Berhasil (PASS)</span>
            <strong><?= $passed ?></strong>
        </div>

        <div class="summary-item">
            <span>Gagal (FAIL)</span>
            <strong><?= count($tests) - $passed ?></strong>
        </div>
    </div>

    <div class="table-wrap">
        <table class="course-table test-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Fee</th>
                    <th>Peserta</th>
                    <th>Diskon</th>
                    <th>Admin</th>
                    <th>Expected</th>
                    <th>Actual</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($tests as $i => $test): ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= rupiah($test['fee']) ?></td>
                        <td><?= $test['participants'] ?></td>
                        <td><?= $test['discount'] ?>%</td>
                        <td><?= rupiah($test['admin']) ?></td>
                        <td><?= rupiah($test['expected']) ?></td>
                        <td><?= rupiah($test['actual']) ?></td>
                        <td>
                            <span class="badge <?= $test['status'] === 'PASS'
                                ? 'badge-available'
                                : 'badge-full' ?>">
                                <?= $test['status'] ?>
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <a class="button" href="fee-calculator.php">
        &larr; Kembali ke Kalkulator
    </a>

    <p class="footer-note">
        KursusKu — Pengujian Perhitungan Biaya Kursus
    </p>

</main>
</body>
</html>