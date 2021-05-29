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
                        <p class="font-lapif-primary"><?= $question['nama']; ?> - <?= $question['kategori']; ?> - <?= $question['waktu']; ?></p>
                        <hr>
                        <p class="lead">
                            <?php echo $question['deskripsi']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <?php 
                $count_query = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM komentar WHERE id_pertanyaan='$kode'");
                $count = mysqli_fetch_assoc($count_query);
            ?>
            <div class="card-header table-ungu">
                <h5 class="text-center">Komentar Lainnya <span>(<?= $count['jumlah']; ?>)</span></h5>
            </div>
            <div class="card-body">
                <?php 
                    $comment_query = mysqli_query($koneksi, "SELECT * FROM komentar WHERE id_pertanyaan='$kode' 
                    ORDER BY waktu DESC");

                    while ($comment = mysqli_fetch_array($comment_query)) {
                ?>
                    <div class="card mb-3 shadow">
                        <h6 class="card-header"><span class="fst-italic"><?= $comment['nama']; ?></span> - <span><?= $comment['waktu']; ?></span></h6>
                        <div class="card-body">
                            <p class="card-text"><?php echo $comment['teks_komentar']; ?></p>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header table-ungu">
                <h5 class="text-center">Bantu Menjawab dengan Berkomentar</h5>
            </div>
            <div class="card-body">
                <form action="../process/comment-process.php?kode=<?= $kode; ?>" class="row p-2" method="POST">
                    <div class="col-12 ">
                        <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" />
                    </div>
                    <div class="col-12 mt-3">
                        <textarea class="form-control deskripsi" id="deskripsi" placeholder="Komentar" rows="3"
                            name="komentar" cols="50"></textarea>
                    </div>
                    <div class="col-12 mt-3">
                        <input type="submit" name="form-komentar" class="btn btn-primary btn-lapif-primary float-end" value="Kirim">
                    </div>
                </form>
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