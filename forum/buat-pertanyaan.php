<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Buat Pertanyaan Forum - LAPIF</title>
    <link rel="shortcut icon" href="../favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <div class="container-fluid p-0">
        <?php $path = "../"; ?>
        <!-- navbar -->
        <?php include "../templates/navbar.php"; ?>
        <!-- end navbar-->

        <!-- content -->
        <section id="banner-1-asp-pengaduan">
            <div class="banner-1-bgshadow-asp-pengaduan">
                <!-- header -->
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <div class="text-header m-asp-pengaduan-custom">
                            <p class="title-asp-pgd">Buat Pertanyaan Forum</p>
                            <p class="description-asp-pgd">Membuat pertanyaan untuk ditampilkan pada Forum</p>
                        </div>
                    </div>
                </div>
                <!-- end of header -->

                <!-- new form -->
                <div class="container new-form shadow rounded bg-light">
                    <form action="../process/question-process.php" class="row p-3" style="position: relative;" method="POST">
                        <div class="col-12 mb-3">
                            <label for="nama" class="form-label">Nama Penanya</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" />
                        </div>
                        <div class="col-12 mb-3">
                            <label for="judul" class="form-label">Judul Pertanyaan</label>
                            <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" />
                        </div>
                        <div class="col-12 mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Pelengkap</label>
                            <textarea class="form-control deskripsi" id="deskripsi" placeholder="Deskripsi" rows="8"
                                name="deskripsi" cols="50"></textarea>
                        </div>
                        <div class="col-md-3 mt-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select name="kategori" id="kategori" class="form-select"
                                aria-label="form-selected example">
                                <option selected>Kategori</option>
                                <option value="pembelajaran">Pembelajaran</option>
                                <option value="administrasi">Administrasi</option>
                            </select>
                        </div>
                        <div class="col-md-9 mt-5 mb-4">
                            <input type="submit" name="pertanyaan" class="btn btn-primary float-end" value="Buat Pertanyaan"></input>
                        </div>
                        <br>
                    </form>
                </div>
                <!-- end of new form -->

            </div>
        </section>
        <!-- end of content -->
        <!-- Background-->
        <div class="white-background"></div>
        <!-- end of backround -->

        <!-- Footer -->
        <?php include "../templates/footer.php"; ?>
        <!-- end of footer -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
        </script>
        <script src="js/script-pelaporan.js"></script>

    </div>
</body>

</html>