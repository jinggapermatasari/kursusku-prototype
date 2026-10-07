<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Kursus - KursusKu</title>

    <!-- CSS utama KursusKu -->
    <link rel="stylesheet" href="assets/css/style.css?v=5">
</head>

<body>

<header class="site-header">
    <div class="container nav-wrap">

        <a href="index.php" class="brand">
            ★ KursusKu
        </a>

        <nav aria-label="Navigasi utama">
            <a href="index.php#beranda">Beranda</a>
            <a href="index.php#katalog">Kursus</a>
            <a href="index.php#cara-daftar">Cara Daftar</a>
            <a href="index.php#keunggulan">Keunggulan</a>
            <a href="index.php#media">Media</a>
            <a href="index.php#kontak">Kontak</a>
            <a href="index.php#history">History</a>

            <a href="registration.php" class="nav-button">
                Daftar Sekarang
            </a>
        </nav>

    </div>
</header>


<main>

    <!-- Judul halaman -->
    <section class="page-intro container">

        <p class="eyebrow">
            PENDAFTARAN KURSUS
        </p>

        <h1>
            Mulai Belajar Bersama KursusKu
        </h1>

        <p>
            Isi data berikut untuk melakukan pendaftaran kursus.
            Pastikan data yang dimasukkan sudah benar.
        </p>

    </section>


    <!-- Form pendaftaran -->
    <section class="form-card container">

        <form
            action="process-registration.php"
            method="POST"
            class="registration-form"
        >

            <!-- Hidden -->
            <input
                type="hidden"
                name="source"
                value="week-05"
            >


            <!-- Nama dan Email -->
            <div class="form-grid">

                <div class="form-group">

                    <label for="name">
                        Nama Lengkap
                    </label>

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


                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

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


                <!-- Nomor HP -->
                <div class="form-group">

                    <label for="phone">
                        Nomor HP
                    </label>

                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        maxlength="15"
                        autocomplete="tel"
                        placeholder="081234567890"
                        required
                    >

                </div>


                <!-- Program Studi -->
                <div class="form-group">

                    <label for="study_program">
                        Program Studi
                    </label>

                    <input
                        type="text"
                        id="study_program"
                        name="study_program"
                        maxlength="100"
                        placeholder="Contoh: PTIK"
                        required
                    >

                </div>

            </div>


            <!-- Pilihan kursus -->
            <div class="form-group">

                <label for="course">
                    Kursus yang Dipilih
                </label>

                <select
                    id="course"
                    name="course"
                    required
                >

                    <option value="">
                        -- Pilih Kursus --
                    </option>

                    <option value="web-dasar">
                        Web Dasar
                    </option>

                    <option value="php-dasar">
                        PHP Dasar
                    </option>

                    <option value="laravel-fundamental">
                        Laravel Fundamental
                    </option>

                </select>

            </div>


            <!-- Jenis Peserta -->
            <fieldset class="form-group">

                <legend>
                    Jenis Peserta
                </legend>

                <label class="choice">

                    <input
                        type="radio"
                        name="participant_type"
                        value="mahasiswa"
                        required
                    >

                    Mahasiswa

                </label>


                <label class="choice">

                    <input
                        type="radio"
                        name="participant_type"
                        value="umum"
                    >

                    Umum

                </label>

            </fieldset>


            <!-- Minat -->
            <fieldset class="form-group">

                <legend>
                    Minat Tambahan
                </legend>

                <label class="choice">

                    <input
                        type="checkbox"
                        name="interests[]"
                        value="ui-ux"
                    >

                    UI/UX

                </label>


                <label class="choice">

                    <input
                        type="checkbox"
                        name="interests[]"
                        value="database"
                    >

                    Database

                </label>


                <label class="choice">

                    <input
                        type="checkbox"
                        name="interests[]"
                        value="backend"
                    >

                    Backend

                </label>

            </fieldset>


            <!-- Catatan -->
            <div class="form-group">

                <label for="note">
                    Catatan
                </label>

                <textarea
                    id="note"
                    name="note"
                    rows="5"
                    maxlength="300"
                    placeholder="Tuliskan kebutuhan belajar Anda (opsional)"
                ></textarea>

                <small class="help">
                    Maksimal 300 karakter.
                </small>

            </div>


            <!-- Tombol -->
            <button
                type="submit"
                class="btn-primary"
            >
                Kirim Pendaftaran
            </button>

        </form>

    </section>

</main>


<footer class="site-footer">

    <div class="container">

        <p>
            © <?= date("Y") ?> KursusKu. Semua hak dilindungi.
        </p>

    </div>

</footer>

</body>
</html>