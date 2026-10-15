<?php

declare(strict_types=1);

$name = trim($_GET['name'] ?? '');
$course = trim($_GET['course'] ?? '');
$participantType = trim($_GET['participant_type'] ?? '');
$query = $_SERVER['QUERY_STRING'] ?? '';

function escapeHtml(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eksperimen GET | KursusKu</title>

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
            min-height: 100vh;
            padding: 30px 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #fff7f8, #f0dce2);
            color: var(--text);
            font-family: Arial, sans-serif;
        }

        .utility-card {
            width: 100%;
            max-width: 650px;
            padding: 32px;
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
            margin-bottom: 24px;
            color: #75666b;
            line-height: 1.7;
        }

        .formula-box {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin: 22px 0;
            padding: 20px;
            background: var(--soft);
            border: 1px solid var(--border);
            border-radius: 12px;
        }

        .formula-box strong {
            color: var(--burgundy);
        }

        .formula-box code {
            display: block;
            padding: 12px;
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 8px;
            overflow-wrap: anywhere;
            color: var(--burgundy-dark);
        }

        .result-label {
            color: #75666b;
            font-size: 13px;
        }

        .stack-form {
            display: flex;
            flex-direction: column;
            gap: 18px;
            margin-top: 24px;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 8px;
            min-width: 0;
        }

        .field label,
        .field legend {
            color: var(--burgundy-dark);
            font-weight: bold;
        }

        .field input[type="text"],
        .field select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #d9c2ca;
            border-radius: 9px;
            background: #ffffff;
            color: var(--text);
            font-size: 15px;
        }

        .field input:focus,
        .field select:focus {
            outline: 2px solid #c98a9e;
            outline-offset: 2px;
        }

        fieldset.field {
            padding: 16px;
            border: 1px solid var(--border);
            border-radius: 10px;
        }

        fieldset.field label {
            display: flex;
            align-items: center;
            gap: 9px;
            margin-top: 10px;
            font-weight: normal;
        }

        input[type="radio"] {
            accent-color: var(--burgundy);
        }

        .button {
            display: inline-block;
            width: 100%;
            padding: 14px 20px;
            border: none;
            border-radius: 10px;
            background: var(--burgundy);
            color: var(--white);
            text-align: center;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }

        .button:hover {
            background: var(--burgundy-dark);
        }

        .table-note {
            margin-top: 22px;
            color: #75666b;
            font-size: 13px;
            line-height: 1.7;
        }

        .text-link {
            display: inline-block;
            margin-top: 12px;
            color: var(--burgundy);
            font-weight: bold;
            text-decoration: none;
        }

        .text-link:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .utility-card {
                padding: 23px 18px;
            }

            h1 {
                font-size: 25px;
            }
        }
    </style>
</head>

<body class="utility-page">
<main class="utility-card">

    <span class="eyebrow">MILESTONE 5 · GET VS POST</span>

    <h1>Eksperimen GET</h1>

    <p class="description">
        Form ini menunjukkan cara PHP menerima data menggunakan
        metode GET. Data yang dikirim akan terlihat pada query string URL.
    </p>

    <?php if ($query !== ''): ?>
        <div class="formula-box">
            <strong>Hasil data yang diterima</strong>

            <span class="result-label">Query string pada URL:</span>
            <code>?<?= escapeHtml($query) ?></code>

            <span>Nama: <strong><?= escapeHtml($name) ?></strong></span>
            <span>Kursus: <strong><?= escapeHtml($course) ?></strong></span>
            <span>Peserta: <strong><?= escapeHtml($participantType) ?></strong></span>
        </div>
    <?php endif; ?>

    <form method="GET" action="get-demo.php" class="stack-form">

        <div class="field">
            <label for="get-name">Nama peserta</label>
            <input
                id="get-name"
                name="name"
                type="text"
                required
                value="<?= escapeHtml($name) ?>"
                placeholder="Masukkan nama peserta"
            >
        </div>

        <div class="field">
            <label for="get-course">Pilih kursus</label>
            <select id="get-course" name="course" required>
                <option value="PHP Dasar"
                    <?= $course === 'PHP Dasar' ? 'selected' : '' ?>>
                    PHP Dasar
                </option>

                <option value="Web Dasar"
                    <?= $course === 'Web Dasar' ? 'selected' : '' ?>>
                    Web Dasar
                </option>

                <option value="Laravel Dasar"
                    <?= $course === 'Laravel Dasar' ? 'selected' : '' ?>>
                    Laravel Dasar
                </option>
            </select>
        </div>

        <fieldset class="field">
            <legend>Jenis peserta</legend>

            <label>
                <input
                    type="radio"
                    name="participant_type"
                    value="mahasiswa"
                    <?= ($participantType === '' || $participantType === 'mahasiswa')
                        ? 'checked' : '' ?>
                >
                Mahasiswa
            </label>

            <label>
                <input
                    type="radio"
                    name="participant_type"
                    value="umum"
                    <?= $participantType === 'umum' ? 'checked' : '' ?>
                >
                Umum
            </label>
        </fieldset>

        <button class="button" type="submit">
            Kirim dengan GET →
        </button>
    </form>

    <p class="table-note">
        Catatan: metode GET menampilkan parameter pada URL.
        Form pendaftaran utama tetap menggunakan POST di
        <code>registration.php</code>.
    </p>

    <a class="text-link" href="registration.php">
        ← Kembali ke Form Pendaftaran
    </a>

</main>
</body>
</html>