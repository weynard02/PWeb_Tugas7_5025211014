<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        * {
            text-align: justify;
        }
    </style>
</head>

<body>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <header>
            <h3>Formulir Pendaftaran Siswa Baru</h3>
        </header>

        <form action="proses-pendaftaran.php" method="POST">

            <fieldset>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama: </label>
                    <input type="text" class="form-control" name="nama" placeholder="nama lengkap" />
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat: </label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>
                <div class="mb-3 form-check">
                    <label for="jenis_kelamin" class="form-check-label">Jenis Kelamin: </label>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">Agama: </label>
                    <select class="form-select" name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sekolah_asal" class="form-label">Sekolah Asal: </label>
                    <input class="form-control" type="text" name="sekolah_asal" placeholder="nama sakolah" />
                </div>
                <div class="mb-3">
                    <input class="btn btn-success" type="submit" value="Daftar" name="daftar" />
                </div>
            </fieldset>
        </form>
    </div>
    <div class="position-absolute bottom-0 start-0">
        <a href="./" class="btn btn-secondary">
            << Back</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>