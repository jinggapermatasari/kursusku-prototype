<?php
function tampilkanPesan(string $message): void
{
    echo '<p>' . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . '</p>';
}
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Procedure Style Test - KursusKu</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .procedure-card {
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

        .procedure-card h1 {
            color: #800020;
            margin-bottom: 10px;
        }

        .procedure-description {
            color: #666666;
            margin-bottom: 25px;
            line-height: 1.7;
        }

        .procedure-result {
            padding: 20px;
            margin: 20px 0;
            background: #fff3f6;
            border: 1px solid #f0d4dd;
            border-left: 5px solid #800020;
            border-radius: 12px;
        }

        .procedure-result h2 {
            margin-top: 0;
            color: #800020;
            font-size: 19px;
        }

        .procedure-result p {
            margin-bottom: 0;
            color: #333333;
            line-height: 1.7;
        }

        .procedure-note {
            padding: 16px;
            background: #faf7f8;
            border-radius: 10px;
            color: #555555;
            line-height: 1.7;
        }

        .procedure-button {
            display: inline-block;
            margin-top: 15px;
            padding: 12px 22px;
            background: #800020;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.2s;
        }

        .procedure-button:hover {
            background: #5c0017;
        }

        @media (max-width: 480px) {
            .procedure-card {
                padding: 20px;
                margin: 20px auto;
            }
        }
    </style>
</head>

<body class="utility-page">
<main class="procedure-card">
    <h1>Function vs Procedure-style</h1>

    <p class="procedure-description">
        Halaman ini menguji fungsi PHP yang mencetak pesan secara langsung
        tanpa mengembalikan nilai.
    </p>

    <section class="procedure-result">
        <h2>Hasil Pengujian</h2>

        <?php
        tampilkanPesan('Pesan ini dicetak langsung oleh function bertipe void.');
        ?>
    </section>

    <section class="procedure-note">
        <strong>Catatan:</strong>
        Untuk perhitungan utama KursusKu, function yang mengembalikan nilai
        tetap diprioritaskan agar hasilnya dapat digunakan kembali dalam
        proses lain.
    </section>

    <a class="procedure-button" href="index.php">
        Kembali ke Beranda
    </a>
</main>
</body>
</html>
