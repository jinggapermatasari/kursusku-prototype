<?php

$courseName = 'Laravel Fundamental';
$fee = 350000;
$participantCount = 2;
$discountPercent = 10;
$adminFee = 25000;
$isActive = true;

// Perhitungan
$subtotal = $fee * $participantCount;
$discount = $subtotal * $discountPercent / 100;
$total = $subtotal - $discount + $adminFee;

function rupiah($number)
{
    return 'Rp ' . number_format($number, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Biaya KursusKu</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff8f9;
            color: #2d1b21;
            margin: 0;
            padding: 40px 20px;
        }

        .container {
            max-width: 850px;
            margin: auto;
        }

        .box {
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(128, 0, 32, 0.10);
        }

        h1 {
            color: #800020;
            margin-bottom: 10px;
        }

        .description {
            color: #706267;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 14px;
            border-bottom: 1px solid #ead9de;
            text-align: left;
        }

        th {
            background: #800020;
            color: white;
        }

        .total {
            font-size: 20px;
            font-weight: bold;
            color: #800020;
        }

        .button {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 20px;
            background: #800020;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .button:hover {
            background: #5c0018;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="box">

        <h1>Kalkulator Estimasi Biaya KursusKu</h1>

        <p class="description">
            Perhitungan estimasi biaya berdasarkan kursus, jumlah peserta,
            diskon, dan biaya administrasi.
        </p>

        <table>
            <tr>
                <th>Data</th>
                <th>Hasil</th>
            </tr>

            <tr>
                <td>Nama Kursus</td>
                <td><?= $courseName ?></td>
            </tr>

            <tr>
                <td>Biaya per Peserta</td>
                <td><?= rupiah($fee) ?></td>
            </tr>

            <tr>
                <td>Jumlah Peserta</td>
                <td><?= $participantCount ?></td>
            </tr>

            <tr>
                <td>Subtotal</td>
                <td><?= rupiah($subtotal) ?></td>
            </tr>

            <tr>
                <td>Diskon <?= $discountPercent ?>%</td>
                <td><?= rupiah($discount) ?></td>
            </tr>

            <tr>
                <td>Biaya Admin</td>
                <td><?= rupiah($adminFee) ?></td>
            </tr>

            <tr>
                <td class="total">Total Akhir</td>
                <td class="total"><?= rupiah($total) ?></td>
            </tr>
        </table>

        <a href="index.php" class="button">
            ← Kembali ke Beranda
        </a>

    </div>

</div>

</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Test Case - KursusKu</title>

    <style>
        body {
            margin: 0;
            padding: 40px;
            font-family: Arial, sans-serif;
            background: #fff8f9;
            color: #2d1b21;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: #ffffff;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(128, 0, 32, 0.10);
        }

        h1 {
            color: #800020;
            margin-bottom: 8px;
        }

        .description {
            color: #706267;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #800020;
            color: #ffffff;
            padding: 13px 10px;
            text-align: center;
        }

        td {
            padding: 13px 10px;
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

    <h1>Test Case</h1>

    <p class="description">
        Pengujian dilakukan dengan membandingkan hasil yang diharapkan
        dengan hasil perhitungan program.
    </p>

    <table>

        <tr>
            <th>No</th>
            <th>Biaya/Peserta</th>
            <th>Peserta</th>
            <th>Diskon</th>
            <th>Admin</th>
            <th>Expected</th>
            <th>Actual</th>
            <th>Status</th>
        </tr>

        <tr>
            <td>1</td>
            <td>Rp 350.000</td>
            <td>1</td>
            <td>0%</td>
            <td>Rp 25.000</td>
            <td>Rp 375.000</td>
            <td>Rp 375.000</td>
            <td class="pass">PASS</td>
        </tr>

        <tr>
            <td>2</td>
            <td>Rp 350.000</td>
            <td>1</td>
            <td>10%</td>
            <td>Rp 25.000</td>
            <td>Rp 340.000</td>
            <td>Rp 340.000</td>
            <td class="pass">PASS</td>
        </tr>

        <tr>
            <td>3</td>
            <td>Rp 350.000</td>
            <td>2</td>
            <td>25%</td>
            <td>Rp 25.000</td>
            <td>Rp 550.000</td>
            <td>Rp 550.000</td>
            <td class="pass">PASS</td>
        </tr>

        <tr>
            <td>4</td>
            <td>Rp 0</td>
            <td>1</td>
            <td>10%</td>
            <td>Rp 0</td>
            <td>Rp 0</td>
            <td>Rp 0</td>
            <td class="pass">PASS</td>
        </tr>

        <tr>
            <td>5</td>
            <td>Rp 2.500.000</td>
            <td>3</td>
            <td>10%</td>
            <td>Rp 50.000</td>
            <td>Rp 6.800.000</td>
            <td>Rp 6.800.000</td>
            <td class="pass">PASS</td>
        </tr>

    </table>

    <a href="fee-calculator.php" class="back">
        ← Kembali ke Kalkulator
    </a>

</div>

</body>
</html>