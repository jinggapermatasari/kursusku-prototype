<?php
session_start();

$tests = [
    [
        'no' => 1,
        'scenario' => 'Pendaftaran mahasiswa',
        'input' => 'Mahasiswa, Web Dasar, 1 peserta',
        'expected' => 'Total Rp240.000',
    ],
    [
        'no' => 2,
        'scenario' => 'Pendaftaran guru',
        'input' => 'Guru, PHP Dasar, 1 peserta',
        'expected' => 'Total Rp340.000',
    ],
    [
        'no' => 3,
        'scenario' => 'Pendaftaran umum',
        'input' => 'Umum, Laravel Dasar, 1 peserta',
        'expected' => 'Total Rp500.000',
    ],
    [
        'no' => 4,
        'scenario' => 'Pendaftaran mahasiswa 2 peserta',
        'input' => 'Mahasiswa, Web Dasar, 2 peserta',
        'expected' => 'Total Rp480.000',
    ],
    [
        'no' => 5,
        'scenario' => 'Nama dikosongkan',
        'input' => 'Nama kosong',
        'expected' => 'Pesan nama wajib diisi',
    ],
    [
        'no' => 6,
        'scenario' => 'Email tidak valid',
        'input' => 'Email bukan format email',
        'expected' => 'Pesan email tidak valid',
    ],
    [
        'no' => 7,
        'scenario' => 'Tidak memilih minat',
        'input' => 'Tidak ada checkbox dipilih',
        'expected' => 'Belum memilih minat',
    ],
    [
        'no' => 8,
        'scenario' => 'Memilih 3 minat',
        'input' => 'Frontend, Backend, Database',
        'expected' => '3 minat tampil',
    ],
    [
        'no' => 9,
        'scenario' => 'Metode belajar offline',
        'input' => 'Metode offline',
        'expected' => 'Label Tatap Muka',
    ],
    [
        'no' => 10,
        'scenario' => 'Metode hybrid',
        'input' => 'Metode hybrid',
        'expected' => 'Label Hybrid',
    ],
    [
        'no' => 11,
        'scenario' => 'Mengakses process.php langsung',
        'input' => 'Membuka process.php dengan GET',
        'expected' => 'Redirect ke register.php',
    ],
    [
        'no' => 12,
        'scenario' => 'Menambahkan fasilitas',
        'input' => 'Tambah item pada array fasilitas',
        'expected' => 'Fasilitas tampil melalui looping',
    ],
];

if (!isset($_SESSION['test_matrix'])) {
    $_SESSION['test_matrix'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    foreach ($tests as $test) {
        $no = $test['no'];

        $_SESSION['test_matrix'][$no] = [
            'actual' => trim($_POST['actual'][$no] ?? ''),
            'status' => $_POST['status'][$no] ?? 'PASS',
        ];
    }

    $_SESSION['matrix_saved'] = true;

    header('Location: test-matrix.php');
    exit;
}

function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Test Matrix Pertemuan 6 - KursusKu</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            color: #222;
        }

        .container {
            width: 94%;
            max-width: 1250px;
            margin: 40px auto;
        }

        .card {
            background: #ffffff;
            border-radius: 18px;
            padding: 28px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin-top: 0;
            font-size: 28px;
        }

        .line {
            width: 40px;
            height: 4px;
            background: #800020;
            border-radius: 5px;
            margin-bottom: 25px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 950px;
            border-collapse: collapse;
        }

        thead th {
            background: #800020;
            color: #ffffff;
            padding: 14px 10px;
            font-size: 13px;
            text-align: left;
        }

        tbody td {
            padding: 12px 10px;
            border-bottom: 1px solid #ead9de;
            vertical-align: middle;
            font-size: 13px;
        }

        tbody tr:nth-child(even) {
            background: #fff8f9;
        }

        .no {
            width: 45px;
            text-align: center;
            font-weight: bold;
        }

        .actual-input {
            width: 100%;
            min-width: 150px;
            padding: 9px 10px;
            border: 1px solid #d8c8cd;
            border-radius: 7px;
            outline: none;
        }

        .actual-input:focus {
            border-color: #800020;
        }

        select {
            width: 100%;
            min-width: 90px;
            padding: 9px;
            border: 1px solid #d8c8cd;
            border-radius: 7px;
            background: #ffffff;
        }

        .actions {
            display: flex;
            gap: 12px;
            margin-top: 25px;
            flex-wrap: wrap;
        }

        button,
        .btn {
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-save {
            background: #800020;
            color: white;
        }

        .btn-home {
            background: #f1e5e8;
            color: #800020;
        }

        .success {
            background: #eaf7ed;
            color: #237333;
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .info {
            color: #706267;
            margin-bottom: 25px;
        }

        @media (max-width: 700px) {
            .container {
                width: 96%;
                margin: 20px auto;
            }

            .card {
                padding: 18px;
            }

            h1 {
                font-size: 22px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <h1>Test Matrix Pertemuan 6</h1>

        <div class="line"></div>

        <?php if (!empty($_SESSION['matrix_saved'])): ?>
            <div class="success">
                Test Matrix berhasil disimpan.
            </div>
            <?php unset($_SESSION['matrix_saved']); ?>
        <?php endif; ?>

        <p class="info">
            Isi hasil aktual berdasarkan pengujian Week 06, kemudian tentukan status PASS atau FAIL.
        </p>

        <form method="POST" action="test-matrix.php">

            <div class="table-wrapper">

                <table>

                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Skenario Pengujian</th>
                            <th>Data Uji</th>
                            <th>Hasil yang Diharapkan</th>
                            <th>Hasil Aktual</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php foreach ($tests as $test): ?>

                        <?php
                        $no = $test['no'];

                        $actual = $_SESSION['test_matrix'][$no]['actual']
                            ?? '';

                        $status = $_SESSION['test_matrix'][$no]['status']
                            ?? 'PASS';
                        ?>

                        <tr>

                            <td class="no">
                                <?= $no ?>
                            </td>

                            <td>
                                <?= e($test['scenario']) ?>
                            </td>

                            <td>
                                <?= e($test['input']) ?>
                            </td>

                            <td>
                                <?= e($test['expected']) ?>
                            </td>

                            <td>
                                <input
                                    type="text"
                                    class="actual-input"
                                    name="actual[<?= $no ?>]"
                                    value="<?= e($actual) ?>"
                                    placeholder="Isi hasil aktual"
                                >
                            </td>

                            <td>
                                <select name="status[<?= $no ?>]">

                                    <option value="PASS"
                                        <?= $status === 'PASS' ? 'selected' : '' ?>>
                                        PASS
                                    </option>

                                    <option value="FAIL"
                                        <?= $status === 'FAIL' ? 'selected' : '' ?>>
                                        FAIL
                                    </option>

                                </select>
                            </td>

                        </tr>

                    <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

            <div class="actions">

                <button
                    type="submit"
                    class="btn btn-save">
                    Simpan Matrix
                </button>

                <a
                    href="index.php"
                    class="btn btn-home">
                    Kembali ke Beranda
                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>