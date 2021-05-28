<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Layanan Aspirasi - LAPIF</title>
    <link rel="shortcut icon" href="../favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <div class="container-fluid p-0">
        <?php $path = "../"; ?>
        <!-- navbar -->
        <?php include '../templates/navbar.php'; ?>
        <!-- end navbar-->

        <!-- content -->
        <section id="banner-1-asp-pengaduan">
            <div class="banner-1-bgshadow-asp-pengaduan">
                <!-- header -->
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <div class="text-header m-asp-pengaduan-custom">
                            <p class="title-asp-pgd">Layanan Aspirasi</p>
                            <p class="description-asp-pgd">Kirim aspirasi Anda melalui formulir berikut</p>
                        </div>
                    </div>
                </div>
                <!-- end of header -->

                <!-- new form -->
                <div class="container new-form shadow rounded bg-light">
                    <form class="row p-3" action="../process/form-process.php" style="position: relative;" method="POST">
                        <div class="col-12">
                            <label for="nama" class="form-label">Nama Aspirator</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" />
                        </div>
                        <div class="col-md-6">
                            <label for="noIdentitas" class="form-label">Nomor NIM/NIDN/NIK</label>
                            <input type="text" class="form-control" id="noIdentitas" name="noIdentitas" />
                        </div>
                        <div class="col-md-6">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" aria-label="form-select example" name="status">
                                <option selected>Status</option>
                                <option value="mahasiswa">Mahasiswa</option>
                                <option value="dosen">Dosen</option>
                                <option value="civitas">Civitas</option>
                                <option value="Publik">Publik</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email"/>
                        </div>
                        <div class="col-md-6">
                            <label for="notel" class="form-label">No Telepon</label>
                            <input type="text" class="form-control" id="notel" name="notel" />
                        </div>
                        <div class="col-md-6">
                            <label for="rujukan" class="form-label">Rujukan</label>
                            <select name="rujukan" id="rujukan" class="form-select" aria-label="form-select example">
                                <option selected>Rujukan</option>
                                <option value="fakultas">Fakultas</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select name="kategori" id="kategori" class="form-select"
                                aria-label="form-selected example">
                                <option selected>Kategori</option>
                                <option value="fasilitas">Fasilitas</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" />
                        </div>
                        <div class="col-12">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control deskripsi" id="deskripsi" placeholder="Deskripsi" rows="8"
                                cols="50" name="deskripsi"></textarea>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" id="tanggal" class="form-control" name="tanggal"/>
                        </div>
                        <div class="col-md-6 mt-5 mb-5">
                            <button type="submit" class="btn btn-primary float-end" name="aspirasi">Kirim</button>
                        </div>
                    </form>
                </div>
                <!-- end of new form -->

            </div>
        </section>
        <!-- end of content -->
        <!-- Background-->
        <div class="white-background">

        </div>
        <!-- end of backround -->
        <!-- Footer -->
        <?php include '../templates/footer.php'; ?>
        <!-- end of footer -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
        </script>
        <script src="js/script-pelaporan.js"></script>

    </div>
</body>

</html>