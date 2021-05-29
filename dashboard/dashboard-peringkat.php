<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - LAPIF</title>
    <link rel="shortcut icon" href="../favicon.svg" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="style/dashboard.css" /> -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<?php 
    session_start();

    if (!isset($_SESSION['user'])) {
        header("Location: ../account/login.php");
    }
?>

<body class="mt-5">
    <?php include "../config/connection.php"; ?>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <div class="logo">
                    <img class="logo" src="../img/logo.svg" alt="logo.svg" />
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-font-custom nav-link text-primary" aria-current="page"
                            href="pengaduan.php">PENGADUAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-font-custom nav-link active text-primary" href="aspirasi.php">ASPIRASI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-font-custom nav-link text-primary" href="#">FORUM</a>
                    </li>
                </ul>
                <a href="../process/logout-process.php"><button class="nav-font-custom btn text-primary"
                        onclick="redirect()">KELUAR</button></a>
            </div>
        </div>
    </nav>
    <!-- end navbar-->

    <!-- Header-->
    <?php include "../templates/header.php"; ?>

    <!-- Konten-->
    <div class="container mt-5">
        <!-- Data --> 
        <?php include "../templates/count-box.php"; ?>
        <!-- pilihan tabel -->
        <div class="row text-center mt-5">
            <hr>
            <div class="col-12 col-sm-2"><a class="btn-sub-nav" href="dashboard-aspirasi.php">Data Aspirasi</a></div>
            <div class="col-12 col-sm-2"><a class="btn-sub-nav" href="dashboard-pengaduan.php">Data Pengaduan</a></div>
            <div class="col-12 col-sm-2"><a class="btn-sub-nav" href="dashboard-forum.php">Data Forum Diskusi</a></div>
            <div class="col-12 col-sm-2"><a class="btn-sub-nav" href="dashboard-aspirasi-selesai.php">Data Aspirasi
                    Selesai</a>
            </div>
            <div class="col-12 col-sm-2"><a class="btn-sub-nav" href="dashboard-pengaduan-selesai.php">Data Pengaduan
                    Selesai</a>
            </div>
            <div class="col-12 col-sm-2"><a class="btn-sub-nav unactive" href="#">Data
                    Peringkat</a></div>
            <hr>
        </div>
        <!-- table pengaduan -->
        <div id="dataPgd" class="my-3">
            <h6 class="fw-bold table-title mt-3">TABEL PERINGKAT LAPORAN TERBANYAK</h6>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-ungu">
                        <th>NAMA</th>
                        <th>JUMLAH</th>
                        <th>PERINGKAT</th>
                    </thead>
                    <tbody>
                        <?php 
                            $limit = 5;
                            $page = isset($_GET['page'])?(int)$_GET['page'] : 1;
                            $first_page = ($page > 1) ? ($page * $limit) - $limit : 0;

                            $previous = $page - 1;
                            $next = $page + 1;

                            $count = mysqli_query($koneksi, "SELECT nama_aspirator, COUNT(nama_aspirator),
                            DENSE_RANK() OVER (ORDER BY COUNT(nama_aspirator) DESC) ranking
                            FROM data_nama
                            GROUP BY nama_aspirator");
                    
                            $total_count = mysqli_num_rows($count);
                            $total_page = ceil($total_count/5);

                            $data = mysqli_query($koneksi, "SELECT nama_aspirator, COUNT(nama_aspirator),
                            DENSE_RANK() OVER (ORDER BY COUNT(nama_aspirator) DESC) ranking
                            FROM data_nama GROUP BY nama_aspirator LIMIT $first_page, $limit");

                            $number = $first_page + 1;

                            while ($row = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $row['nama_aspirator']; ?></td>
                                <td><?php echo $row['COUNT(nama_aspirator)']; ?></td>
                                <td><?php echo $row['ranking']; ?></td>
                            </tr>
                        <?php 
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- navigasi pagination -->
            <ul class="pagination float-end" id="pageLapAsp">
                <li class="page-item">
                    <?php if ($page > 1) : ?>
                        <a class="page-link pagin-primary-unactive" href="?page=<?php echo $previous; ?>">&laquo;</a>
                    <?php endif; ?>
                </li>
                <?php for ($i = 1; $i <= $total_page; $i++) : ?>
                    <?php if ($i == $page) : ?>
                        <li class="page-item pagin-primary-active">
                            <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                    <?php else : ?>
                        <a class="page-link pagin-primary-unactive" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    <?php endif; ?>
                <?php endfor; ?>
                <li class="page-item pagin-primary-unactive">
                    <?php if ($page < $total_page) : ?>
                        <a class="page-link" href="?page=<?php echo $next; ?>">&raquo;</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
        <!-- end of table aspirasi -->
        <!-- end of data -->
    </div>

    <!-- Modal Pengaduan -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script-dashboard.js"></script>
</body>

</php>