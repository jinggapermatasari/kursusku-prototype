<?php

require __DIR__ . '/data.php';
require __DIR__ . '/helpers.php';

?>

<!doctype html>
<html lang="id">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>Form Pendaftaran 2 - KursusKu</title>

    <link
        rel="stylesheet"
        href="assets/css/style.css?v=2"
    >

</head>

<body class="registration-page">

<!-- ================= HEADER ================= -->

<header class="site-header">

    <div class="container nav-wrap">

        <a
            class="brand"
            href="index.php"
        >
            <span class="brand-star">★</span>
            KursusKu
        </a>

        <nav aria-label="Navigasi utama">

            <a href="index.php">
                Beranda
            </a>

            <a href="index.php#katalog">
                Katalog
            </a>

            <a href="index.php#cara-daftar">
                Cara Daftar
            </a>

            <a href="registration.php">
                Pendaftaran 1
            </a>

        </nav>

    </div>

</header>


<!-- ================= HERO PENDAFTARAN ================= -->

<section class="registration-hero">

    <div class="container">

        <div class="registration-hero-content">

            <div class="registration-badge">
                ✦ WEEK 06 · FORM PENDAFTARAN 2
            </div>

            <h1>
                Mulai Belajar
                <span>Bersama KursusKu</span>
            </h1>

            <p>
                Lengkapi data pendaftaranmu dan pilih program
                belajar yang sesuai dengan kebutuhanmu.
            </p>

            <div class="registration-features">

                <div>
                    <span>✓</span>
                    Pilihan Kursus
                </div>

                <div>
                    <span>✓</span>
                    Diskon Peserta
                </div>

                <div>
                    <span>✓</span>
                    Metode Belajar
                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= FORM ================= -->

<main>

<section class="registration-main">

    <div class="container">

        <div class="registration-layout">


            <!-- INFO SAMPING -->

            <aside class="registration-info">

                <div class="info-intro">

                    <div class="info-icon">
                        ★
                    </div>

                    <h2>
                        Form Pendaftaran 2
                    </h2>

                    <p>
                        Isi formulir dengan data yang benar
                        untuk mendapatkan ringkasan biaya
                        pendaftaran.
                    </p>

                </div>


                <div class="info-list">

                    <div class="info-list-item">

                        <span>
                            01
                        </span>

                        <div>

                            <strong>
                                Pilih Kursus
                            </strong>

                            <p>
                                Tentukan program yang ingin
                                kamu ikuti.
                            </p>

                        </div>

                    </div>


                    <div class="info-list-item">

                        <span>
                            02
                        </span>

                        <div>

                            <strong>
                                Tentukan Peserta
                            </strong>

                            <p>
                                Pilih kategori peserta
                                untuk mendapatkan diskon.
                            </p>

                        </div>

                    </div>


                    <div class="info-list-item">

                        <span>
                            03
                        </span>

                        <div>

                            <strong>
                                Lengkapi Pilihan
                            </strong>

                            <p>
                                Tentukan minat, metode,
                                dan jumlah paket.
                            </p>

                        </div>

                    </div>


                    <div class="info-list-item">

                        <span>
                            04
                        </span>

                        <div>

                            <strong>
                                Lihat Hasil
                            </strong>

                            <p>
                                Sistem akan menampilkan
                                rincian biaya.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="discount-box">

                    <span>
                        INFO DISKON
                    </span>

                    <strong>
                        Mahasiswa 20%
                    </strong>

                    <strong>
                        Guru 15%
                    </strong>

                    <p>
                        Peserta umum tidak mendapatkan
                        diskon khusus.
                    </p>

                </div>

            </aside>


            <!-- FORM UTAMA -->

            <div class="registration-card">

                <div class="form-header">

                    <div>

                        <span class="form-label">
                            DATA PENDAFTAR
                        </span>

                        <h2>
                            Lengkapi Formulir
                        </h2>

                        <p>
                            Semua data yang bertanda
                            <b>*</b> wajib diisi.
                        </p>

                    </div>

                    <div class="form-number">
                        02
                    </div>

                </div>


                <form
                    method="POST"
                    action="process.php"
                    class="modern-registration-form"
                >


                    <!-- DATA DIRI -->

                    <div class="form-section-title">

                        <span>
                            01
                        </span>

                        <div>
                            <h3>
                                Data Diri
                            </h3>

                            <p>
                                Masukkan informasi dasar peserta.
                            </p>
                        </div>

                    </div>


                    <div class="form-row">

                        <div class="modern-form-group">

                            <label for="name">
                                Nama Lengkap
                                <b>*</b>
                            </label>

                            <div class="input-wrap">

                                <span class="input-icon">
                                    👤
                                </span>

                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    minlength="3"
                                    maxlength="100"
                                    autocomplete="name"
                                    placeholder="Masukkan nama lengkap"
                                    required
                                >

                            </div>

                        </div>


                        <div class="modern-form-group">

                            <label for="email">
                                Email
                                <b>*</b>
                            </label>

                            <div class="input-wrap">

                                <span class="input-icon">
                                    ✉
                                </span>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    maxlength="120"
                                    autocomplete="email"
                                    placeholder="contoh@email.com"
                                    required
                                >

                            </div>

                        </div>

                    </div>


                    <!-- KURSUS -->

                    <div class="form-section-title form-section-space">

                        <span>
                            02
                        </span>

                        <div>
                            <h3>
                                Pilihan Kursus
                            </h3>

                            <p>
                                Pilih program yang ingin kamu ikuti.
                            </p>
                        </div>

                    </div>


                    <div class="modern-form-group">

                        <label for="course_code">
                            Program Kursus
                            <b>*</b>
                        </label>

                        <select
                            id="course_code"
                            name="course_code"
                            required
                        >

                            <option value="">
                                -- Pilih Program Kursus --
                            </option>

                            <?php foreach ($courses as $course): ?>

                                <option
                                    value="<?= e($course['code']) ?>"
                                >

                                    <?= e($course['name']) ?>
                                    —
                                    <?= formatRupiah($course['fee']) ?>

                                </option>

                            <?php endforeach; ?>

                        </select>

                    </div>


                    <!-- PESERTA -->

                    <div class="form-section-title form-section-space">

                        <span>
                            03
                        </span>

                        <div>
                            <h3>
                                Jenis Peserta
                            </h3>

                            <p>
                                Pilih kategori peserta.
                            </p>
                        </div>

                    </div>


                    <div class="choice-grid">

                        <label class="choice-card">

                            <input
                                type="radio"
                                name="participant_type"
                                value="mahasiswa"
                                required
                            >

                            <span class="choice-content">

                                <span class="choice-icon">
                                    🎓
                                </span>

                                <span>
                                    <strong>
                                        Mahasiswa
                                    </strong>

                                    <small>
                                        Diskon 20%
                                    </small>
                                </span>

                            </span>

                        </label>


                        <label class="choice-card">

                            <input
                                type="radio"
                                name="participant_type"
                                value="guru"
                            >

                            <span class="choice-content">

                                <span class="choice-icon">
                                    👨‍🏫
                                </span>

                                <span>
                                    <strong>
                                        Guru
                                    </strong>

                                    <small>
                                        Diskon 15%
                                    </small>
                                </span>

                            </span>

                        </label>


                        <label class="choice-card">

                            <input
                                type="radio"
                                name="participant_type"
                                value="umum"
                            >

                            <span class="choice-content">

                                <span class="choice-icon">
                                    👤
                                </span>

                                <span>
                                    <strong>
                                        Umum
                                    </strong>

                                    <small>
                                        Tanpa diskon
                                    </small>

                                </span>

                            </span>

                        </label>

                    </div>


                    <!-- MINAT -->

                    <div class="form-section-title form-section-space">

                        <span>
                            04
                        </span>

                        <div>
                            <h3>
                                Minat Pembelajaran
                            </h3>

                            <p>
                                Pilih satu atau beberapa minat.
                            </p>
                        </div>

                    </div>


                    <div class="interest-grid">

                        <?php foreach (
                            $interestOptions
                            as $key => $label
                        ): ?>

                            <label class="interest-card">

                                <input
                                    type="checkbox"
                                    name="interests[]"
                                    value="<?= e($key) ?>"
                                >

                                <span class="interest-check">
                                    ✓
                                </span>

                                <span>

                                    <strong>
                                        <?= e($label) ?>
                                    </strong>

                                    <small>
                                        Bidang pembelajaran
                                    </small>

                                </span>

                            </label>

                        <?php endforeach; ?>

                    </div>


                    <!-- METODE DAN PAKET -->

                    <div class="form-section-title form-section-space">

                        <span>
                            05
                        </span>

                        <div>
                            <h3>
                                Pengaturan Belajar
                            </h3>

                            <p>
                                Tentukan metode dan jumlah paket.
                            </p>
                        </div>

                    </div>


                    <div class="form-row">

                        <div class="modern-form-group">

                            <label for="learning_mode">
                                Metode Belajar
                                <b>*</b>
                            </label>

                            <select
                                id="learning_mode"
                                name="learning_mode"
                                required
                            >

                                <option value="">
                                    -- Pilih Metode --
                                </option>

                                <option value="offline">
                                    Tatap Muka
                                </option>

                                <option value="online">
                                    Online
                                </option>

                                <option value="hybrid">
                                    Hybrid
                                </option>

                            </select>

                        </div>


                        <div class="modern-form-group">

                            <label for="package_count">
                                Jumlah Paket
                                <b>*</b>
                            </label>

                            <select
                                id="package_count"
                                name="package_count"
                                required
                            >

                                <?php for (
                                    $i = 1;
                                    $i <= 3;
                                    $i++
                                ): ?>

                                    <option value="<?= $i ?>">
                                        <?= $i ?> Paket
                                    </option>

                                <?php endfor; ?>

                            </select>

                        </div>

                    </div>


                    <!-- CATATAN -->

                    <div class="form-section-title form-section-space">

                        <span>
                            06
                        </span>

                        <div>
                            <h3>
                                Catatan Tambahan
                            </h3>

                            <p>
                                Tambahkan catatan jika diperlukan.
                            </p>
                        </div>

                    </div>


                    <div class="modern-form-group">

                        <label for="notes">
                            Catatan
                        </label>

                        <textarea
                            id="notes"
                            name="notes"
                            maxlength="300"
                            rows="5"
                            placeholder="Tuliskan kebutuhan atau catatan tambahan..."
                        ></textarea>

                        <small class="field-hint">
                            Maksimal 300 karakter.
                        </small>

                    </div>


                    <!-- SUBMIT -->

                    <div class="submit-area">

                        <div class="submit-info">

                            <span>
                                ✓
                            </span>

                            <p>
                                Pastikan semua data sudah
                                benar sebelum dikirim.
                            </p>

                        </div>

                        <button
                            type="submit"
                            class="registration-submit"
                        >

                            <span>
                                Kirim Pendaftaran
                            </span>

                            <strong>
                                →
                            </strong>

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</section>

</main>


<!-- ================= FOOTER ================= -->

<footer class="footer">

    <div class="container">

        <div class="footer-logo">
            ★ KursusKu
        </div>

        <p>
            Platform kursus online untuk mengembangkan
            keterampilan digital.
        </p>

    </div>


    <div class="copyright">

        &copy; <?= date("Y") ?> KursusKu.
        Semua hak dilindungi.

    </div>

</footer>


</body>

</html>