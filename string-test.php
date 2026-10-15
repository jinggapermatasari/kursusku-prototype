<?php
$rawName = ' Laravel Fundamental ';
$cleanName = trim($rawName);
$upperName = strtoupper($cleanName);
$lowerName = strtolower($cleanName);
$length = strlen($cleanName);
$short = substr($cleanName, 0, 7);
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>String Test - KursusKu</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .string-card {
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

        .string-card h1 {
            color: #800020;
            margin-bottom: 10px;
        }

        .string-description {
            color: #666666;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .string-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .string-list li {
            padding: 16px;
            margin-bottom: 12px;
            background: #fff3f6;
            border: 1px solid #f0d4dd;
            border-left: 5px solid #800020;
            border-radius: 10px;
            overflow-wrap: anywhere;
        }

        .string-list strong {
            display: block;
            color: #800020;
            margin-bottom: 8px;
        }

        .string-result {
            display: inline-block;
            padding: 7px 12px;
            background: #ffffff;
            color: #333333;
            border-radius: 7px;
            font-family: monospace;
            font-size: 15px;
        }

        .string-button {
            display: inline-block;
            margin-top: 18px;
            padding: 12px 22px;
            background: #800020;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.2s;
        }

        .string-button:hover {
            background: #5c0017;
        }

        @media (max-width: 480px) {
            .string-card {
                padding: 20px;
                margin: 20px auto;
            }
        }
    </style>
</head>

<body class="utility-page">
<main class="string-card">
    <h1>String Function Test</h1>

    <p class="string-description">
        Halaman ini menguji fungsi string PHP untuk membersihkan,
        mengubah huruf, menghitung panjang, dan mengambil sebagian teks.
    </p>

    <ul class="string-list">
        <li>
            <strong>1. trim()</strong>
            <span class="string-result"><?= htmlspecialchars($cleanName, ENT_QUOTES, 'UTF-8'); ?></span>
        </li>

        <li>
            <strong>2. strtoupper()</strong>
            <span class="string-result"><?= htmlspecialchars($upperName, ENT_QUOTES, 'UTF-8'); ?></span>
        </li>

        <li>
            <strong>3. strtolower()</strong>
            <span class="string-result"><?= htmlspecialchars($lowerName, ENT_QUOTES, 'UTF-8'); ?></span>
        </li>

        <li>
            <strong>4. strlen()</strong>
            <span class="string-result"><?= $length; ?> karakter</span>
        </li>

        <li>
            <strong>5. substr()</strong>
            <span class="string-result"><?= htmlspecialchars($short, ENT_QUOTES, 'UTF-8'); ?></span>
        </li>
    </ul>

    <a class="string-button" href="index.php">Kembali ke Beranda</a>
</main>
</body>
</html>