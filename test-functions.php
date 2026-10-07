<?php

require_once __DIR__ . '/helpers.php';

$tests = [
    [
        'name' => 'rupiah(250000)',
        'expected' => 'Rp 250.000',
        'actual' => rupiah(250000)
    ],
    [
        'name' => 'statusKursus(25, 25)',
        'expected' => 'Penuh',
        'actual' => statusKursus(25, 25)
    ],
    [
        'name' => 'statusKursus(30, 29)',
        'expected' => 'Tersedia',
        'actual' => statusKursus(30, 29)
    ],
    [
        'name' => 'sisaKursi(20, 0)',
        'expected' => 20,
        'actual' => sisaKursi(20, 0)
    ],
    [
        'name' => 'sisaKursi(25, 25)',
        'expected' => 0,
        'actual' => sisaKursi(25, 25)
    ],
    [
        'name' => "formatTanggal('2026-09-15')",
        'expected' => '15-09-2026',
        'actual' => formatTanggal('2026-09-15')
    ]
];

?>

<!doctype html>
<html lang="id">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test Functions - KursusKu</title>

    <style>

        body {
            margin: 0;
            padding: 40px 20px;
            font-family: Arial, sans-serif;
            background: #fff8f9;
            color: #2d1b21;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        .box {
            background: #ffffff;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(128, 0, 32, 0.10);
        }

        h1 {
            color: #800020;
        }

        p {
            color: #706267;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        th {
            background: #800020;
            color: #ffffff;
            padding: 13px;
        }

        td {
            padding: 13px;
            text-align: center;
            border-bottom: 1px solid #ead9de;
        }

        tr:nth-child(even) td {
            background: #fff8f9;
        }

        .pass {
            color: #800020;
            font-weight: bold;
        }

        .fail {
            color: #5c0018;
            font-weight: bold;
        }

        .back {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 20px;
            background: #800020;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
        }

        .back:hover {
            background: #5c0018;
        }

    </style>

</head>

<body>

<div class="container">

    <div class="box">

        <h1>
            Test Functions KursusKu
        </h1>

        <p>
            Pengujian function yang digunakan pada katalog KursusKu.
        </p>

        <table>

            <tr>

                <th>No</th>
                <th>Function</th>
                <th>Expected</th>
                <th>Actual</th>
                <th>Status</th>

            </tr>

            <?php foreach ($tests as $index => $test): ?>

                <?php
                $status = ($test['expected'] == $test['actual'])
                    ? 'PASS'
                    : 'FAIL';
                ?>

                <tr>

                    <td>
                        <?= $index + 1 ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($test['name']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars((string) $test['expected']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars((string) $test['actual']) ?>
                    </td>

                    <td class="<?= $status === 'PASS' ? 'pass' : 'fail' ?>">
                        <?= $status ?>
                    </td>

                </tr>

            <?php endforeach; ?>

        </table>

        <a href="index.php" class="back">
            ← Kembali ke Beranda
        </a>

    </div>

</div>

</body>

</html>