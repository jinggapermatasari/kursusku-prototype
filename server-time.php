<?php
date_default_timezone_set('Asia/Jakarta');

$serverTime = date('H:i:s');
$tanggal = date('d F Y');
$hari = date('l');

$namaHari = [
    'Monday' => 'Senin',
    'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu',
    'Sunday' => 'Minggu'
];

$namaBulan = [
    'January' => 'Januari',
    'February' => 'Februari',
    'March' => 'Maret',
    'April' => 'April',
    'May' => 'Mei',
    'June' => 'Juni',
    'July' => 'Juli',
    'August' => 'Agustus',
    'September' => 'September',
    'October' => 'Oktober',
    'November' => 'November',
    'December' => 'Desember'
];

$tanggalIndonesia = $namaHari[$hari] . ', ' .
    date('d') . ' ' .
    $namaBulan[date('F')] . ' ' .
    date('Y');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waktu Server</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: linear-gradient(
                135deg,
                #4a1025,
                #800f35,
                #a83255
            );
            color: #ffffff;
        }

        .container {
            width: 100%;
            max-width: 650px;
            background: #ffffff;
            color: #4a1025;
            padding: 45px 30px;
            border-radius: 22px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        }

        .icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 30px;
            margin-bottom: 12px;
            color: #800f35;
        }

        .subtitle {
            font-size: 15px;
            color: #777777;
            margin-bottom: 30px;
        }

        .time-box {
            background: linear-gradient(
                135deg,
                #4a1025,
                #800f35
            );
            color: #ffffff;
            padding: 30px 15px;
            border-radius: 16px;
            margin-bottom: 25px;
        }

        .time-label {
            font-size: 14px;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 12px;
            color: #f3dce4;
        }

        .time {
            font-size: clamp(32px, 8vw, 52px);
            font-weight: bold;
            letter-spacing: 3px;
        }

        .date {
            font-size: 17px;
            color: #5b3441;
            margin-bottom: 25px;
        }

        .status {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 30px;
            background: #f8e8ee;
            color: #800f35;
            font-size: 13px;
            font-weight: bold;
        }

        footer {
            margin-top: 30px;
            font-size: 12px;
            color: #999999;
        }

        @media (max-width: 480px) {
            .container {
                padding: 35px 20px;
            }

            h1 {
                font-size: 25px;
            }

            .date {
                font-size: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="icon">🕒</div>

        <h1>Waktu Server</h1>

        <p class="subtitle">
            Informasi tanggal dan waktu server saat ini
        </p>

        <div class="time-box">
            <p class="time-label">Waktu Sekarang</p>
            <div class="time" id="clock">
                <?= htmlspecialchars($serverTime) ?>
            </div>
        </div>

        <p class="date">
            <?= htmlspecialchars($tanggalIndonesia) ?>
        </p>

        <div class="status">
            ● SERVER AKTIF
        </div>

        <footer>
            &copy; <?= date('Y') ?> Kursusku Prototype
        </footer>
    </div>

    <script>
        function updateClock() {
            const now = new Date();

            const waktu = new Intl.DateTimeFormat('id-ID', {
                timeZone: 'Asia/Jakarta',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: false
            }).format(now);

            document.getElementById('clock').textContent =
                waktu.replace(/\./g, ':');
        }

        updateClock();
        setInterval(updateClock, 1000);
    </script>
</body>
</html>