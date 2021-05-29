<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forum Diskusi - LAPIF</title>
    <link rel="shortcut icon" href="../img/favicon.svg" type="image/x-icon" />
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
            <p id="title">Layanan Forum Diskusi</p>
        </div>
    </div>

    <!-- Konten-->
    <div class="container mt-5">
        <a href="buat-pertanyaan.php" class="btn btn-primary">Ajukan Pertanyaan +</a>
        <br><br>
        <?php 
            include "../config/connection.php";

            $data = mysqli_query($koneksi, "SELECT * FROM pertanyaan ORDER BY waktu DESC");

            while ($row = mysqli_fetch_array($data)) {
        ?>
            <div class="card">
                <div class="card-header">
                    <?php echo $row['nama']; ?> - <?php echo $row['kategori']; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><b><?php echo $row['judul']; ?></b></h5>
                    <p class="card-text">
                        <?php echo $row['deskripsi']; ?>
                    </p>
                    <a href="detail-pertanyaan.php?kode=<?php echo $row['id_pertanyaan']; ?>" class="btn btn-primary">Bantu Jawab</a>
                </div>
                <div class="card-footer text-muted">
                    <?php echo $row['waktu']; ?>
                </div>
            </div>
            <br>
        <?php 
            }
        ?>
    </div>
    <br><br>
    <?php include "../templates/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script-dashboard.js"></script>
</body>

</html>