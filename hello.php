<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        :root {
            --burgundy: #800020;
            --burgundy-dark: #5c0017;
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
            padding: 25px 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #fff7f8, #f0dce2);
            color: var(--text);
            font-family: Arial, sans-serif;
        }

        .utility-card {
            width: 100%;
            max-width: 650px;
            padding: 35px;
            text-align: center;
            background: #ffffff;
            border: 1px solid var(--border);
            border-top: 6px solid var(--burgundy);
            border-radius: 20px;
            box-shadow: 0 12px 35px rgba(92, 0, 23, 0.12);
        }

        .eyebrow {
            display: inline-block;
            padding: 8px 14px;
            margin-bottom: 12px;
            color: var(--burgundy);
            background: #f6e6eb;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        h1 {
            margin: 8px 0 12px;
            color: var(--burgundy);
            font-size: 30px;
        }

        .description {
            margin: 0 auto 24px;
            max-width: 460px;
            color: #75666b;
            line-height: 1.7;
        }

        .hero-image {
            display: block;
            width: 100%;
            max-width: 520px;
            max-height: 300px;
            margin: 0 auto 25px;
            object-fit: cover;
            border-radius: 15px;
            border: 1px solid var(--border);
        }

        .button {
            display: inline-block;
            padding: 14px 24px;
            color: #ffffff;
            background: var(--burgundy);
            border-radius: 10px;
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
            font-size: 12px;
        }

        @media (max-width: 480px) {
            .utility-card {
                padding: 25px 18px;
            }

            h1 {
                font-size: 25px;
            }
        }
    </style>
</head>

<body class="utility-page">
    <main class="utility-card">

        <span class="eyebrow">SELAMAT DATANG</span>

        <h1>Selamat datang di KursusKu</h1>

        <p class="description">
            Temukan kursus teknologi yang sesuai dengan minatmu
            dan mulai perjalanan belajar bersama KursusKu.
        </p>

        <img
            src="assets/img/image1.png"
            alt="Ilustrasi KursusKu"
            class="hero-image"
        >

        <a class="button" href="index.php">
            Buka Prototype →
        </a>

        <p class="footer-note">
            KursusKu — Belajar teknologi, kembangkan kemampuan.
        </p>

    </main>
</body>
</html>