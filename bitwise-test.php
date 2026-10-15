<?php
$READ = 1;
$WRITE = 2;
$DELETE = 4;

$permission = $READ | $WRITE;

$canRead = ($permission & $READ) === $READ;
$canWrite = ($permission & $WRITE) === $WRITE;
$canDelete = ($permission & $DELETE) === $DELETE;
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bitwise Permission Test | KursusKu>

    <style>
        :root {
            --burgundy: #800020;
            --deep: #590018;
            --pink: #fff2f5;
            --line: #ead3da;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            padding: 30px 18px;
            font-family: Arial, sans-serif;
            color: #30252a;
            background: var(--pink);
        }

        .utility-card {
            width: 100%;
            max-width: 650px;
            margin: 40px auto;
            padding: 32px;
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 18px;
            box-shadow: 0 12px 30px rgba(89, 0, 24, 0.08);
        }

        .label {
            color: var(--burgundy);
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        h1 {
            margin: 12px 0;
            color: var(--burgundy);
            font-size: 30px;
        }

        .description {
            color: #75666c;
            line-height: 1.7;
        }

        .permission-list {
            display: grid;
            gap: 14px;
            margin: 25px 0;
        }

        .permission-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 16px;
            border: 1px solid var(--line);
            border-radius: 12px;
            background: #fffafb;
        }

        .permission-name {
            font-weight: bold;
        }

        .status {
            padding: 7px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
        }

        .allowed {
            color: #166534;
            background: #dcfce7;
        }

        .denied {
            color: #991b1b;
            background: #fee2e2;
        }

        .code-box {
            overflow-x: auto;
            padding: 16px;
            color: #fff;
            background: var(--deep);
            border-radius: 12px;
            line-height: 1.8;
        }

        .back-link {
            display: inline-block;
            margin-top: 24px;
            padding: 12px 20px;
            color: #fff;
            background: var(--burgundy);
            border-radius: 9px;
            text-decoration: none;
            font-weight: bold;
        }

        .back-link:hover {
            background: var(--deep);
        }

        @media (max-width: 480px) {
            .utility-card {
                padding: 22px;
            }

            h1 {
                font-size: 25px;
            }
        }
    </style>
</head>

<body>
    <main class="utility-card">
        <div class="label">KursusKu · PHP Test</div>

        <h1>Bitwise Permission Test</h1>

        <p class="description">
            Halaman ini menguji hak akses pengguna menggunakan
            operator bitwise PHP.
        </p>

        <div class="code-box">
            Permission = READ | WRITE<br>
            Nilai permission = <?= $permission ?>
        </div>

        <div class="permission-list">
            <div class="permission-item">
                <span class="permission-name">READ</span>
                <span class="status <?= $canRead ? 'allowed' : 'denied' ?>">
                    <?= $canRead ? 'Diizinkan' : 'Ditolak' ?>
                </span>
            </div>

            <div class="permission-item">
                <span class="permission-name">WRITE</span>
                <span class="status <?= $canWrite ? 'allowed' : 'denied' ?>">
                    <?= $canWrite ? 'Diizinkan' : 'Ditolak' ?>
                </span>
            </div>

            <div class="permission-item">
                <span class="permission-name">DELETE</span>
                <span class="status <?= $canDelete ? 'allowed' : 'denied' ?>">
                    <?= $canDelete ? 'Diizinkan' : 'Ditolak' ?>
                </span>
            </div>
        </div>

        <a href="index.php" class="back-link">
            ← Kembali ke KursusKu
        </a>
    </main>
</body>
</html>