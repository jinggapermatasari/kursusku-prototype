<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Kursus - KursusKu</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<header class="site-header">

    <div class="container nav-wrap">

        <a href="index.php" class="brand">
            KursusKu
        </a>

        <nav class="nav-links" aria-label="Navigasi utama">

            <a href="index.php">
                Katalog
            </a>

            <a href="registration.php">
                Daftar Kursus
            </a>

        </nav>

    </div>

</header>


<main class="container">

    <section class="page-intro">

        <p class="eyebrow">
            Pendaftaran
        </p>

        <h1>
            Daftar Kursus
        </h1>

        <p>
            Isi data berikut dengan benar untuk melakukan pendaftaran
            kursus di KursusKu.
        </p>

    </section>


    <section class="form-card">

        <form
            action="process-registration.php"
            method="POST"
            class="registration-form"
        >

            <input
                type="hidden"
                name="source"
                value="week-05"
            >


            <div class="form-grid">

                <!-- Nama -->

                <div class="form-group">

                    <label for="name">
                        Nama Lengkap
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Masukkan nama lengkap"
                        minlength="3"
                        maxlength="100"
                        autocomplete="name"
                        required
                    >

                </div>


                <!-- Email -->

                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="nama@email.com"
                        autocomplete="email"
                        required
                    >

                </div>


                <!-- No HP -->

                <div class="form-group">

                    <label for="phone">
                        Nomor HP
                    </label>

                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        placeholder="08xxxxxxxxxx"
                        autocomplete="tel"
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
                        placeholder="Contoh: PTIK"
                        required
                    >

                </div>


                <!-- Kursus -->

                <div class="form-group">

                    <label for="course">
                        Pilih Kursus
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
                        Minat
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

            </div>


            <!-- Catatan -->

            <div class="form-group">

                <label for="note">
                    Catatan
                </label>

                <textarea
                    id="note"
                    name="note"
                    rows="5"
                    maxlength="500"
                    placeholder="Tulis catatan jika ada..."
                ></textarea>

            </div>


            <p class="help">
                Pastikan data yang dimasukkan sudah benar sebelum
                mengirim pendaftaran.
            </p>


            <button
                type="submit"
                class="btn-primary"
            >
                Kirim Pendaftaran
            </button>

        </form>

    </section>

</main>

</body>
</html>