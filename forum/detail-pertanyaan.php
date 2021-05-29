<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forum Diskusi - LAPIF</title>
    <link rel="shortcut icon" href="../favicon.svg" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="style/dashboard.css" /> -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="mt-5">
    <?php $path = "../"; ?>
    <!-- navbar -->
    <?php include "../templates/navbar.php"; ?>
    <!-- end navbar-->

    <!-- Header-->
    <div class="dashboard-head">
        <img class="dashboard-bg" src="../img/background.png" />
        <div class="dashboard-text-header">
            <p id="title">Pertanyaan</p>
        </div>
    </div>

    <!-- Konten-->
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div class="jumbotron jumbotron-fluid">
                    <?php 
                        include "../config/connection.php";

                        $kode = $_GET['kode'];
                        $query = mysqli_query($koneksi, "SELECT * FROM pertanyaan WHERE id_pertanyaan='$kode'");
                        $question = mysqli_fetch_assoc($query);
                    ?>
                    <div class="container">
                        <h1 class="display-6"><b><?php echo $question['judul']; ?></b></h1>
                        <hr>
                        <p class="lead"><?= $question['nama']; ?> - <?= $question['kategori']; ?> - <?= $question['waktu']; ?></p>
                        <hr>
                        <p class="lead">
                            <?php echo $question['deskripsi']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="card">
            <div class="card-header">
                <h3 class=" text-center">Komentar Lainnya</h3>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text"><i>Anonim</i> - 25/05/2021</p>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text"><i>Anonim</i> - 25/05/2021</p>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text"><i>Anonim</i> - 25/05/2021</p>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <h3 class=" text-center">Bantu Menjawab dengan Berkomentar</h3>
            </div>
            <div class="card-body">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <form action="" class="row p-3">
                            <div class="col-12">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" />
                            </div>
                            <div class="col-12">
                                <label for="deskripsi" class="form-label">Komentar</label>
                                <textarea class="form-control deskripsi" id="deskripsi" placeholder="Komentar" rows="3"
                                    cols="50"></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <input type="submit" class="btn btn-primary float-end"></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <br><br>
    <?php include "../templates/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script-dashboard.js"></script>
</body>

</html>