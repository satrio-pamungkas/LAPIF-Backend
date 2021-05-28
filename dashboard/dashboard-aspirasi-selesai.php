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

<body class="mt-5">
    <?php include "../config/connection.php"; ?>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">
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
                <a href="login.php"><button class="nav-font-custom btn btn-primary text-white"
                        onclick="redirect()">MASUK</button></a>
            </div>
        </div>
    </nav>
    <!-- end navbar-->

    <!-- Header-->
    <?php include "../templates/header.php"; ?>

    <!-- Konten-->
    <div class="container mt-5">
        
        <?php include "../templates/count-box.php"; ?>
        <!-- pilihan tabel -->
        <div class="row text-center mt-5">
            <hr>
            <div class="col-12 col-sm-2"><a class="btn-sub-nav" href="dashboard-aspirasi.php">Data Aspirasi</a></div>
            <div class="col-12 col-sm-2"><a class="btn-sub-nav" href="dashboard-pengaduan.php">Data Pengaduan</a></div>
            <div class="col-12 col-sm-2"><a class="btn-sub-nav" href="dashboard-forum.php">Data Forum Diskusi</a></div>
            <div class="col-12 col-sm-2"><a class="btn-sub-nav unactive" href="#">Data Aspirasi Selesai</a></div>
            <div class="col-12 col-sm-2"><a class="btn-sub-nav" href="dashboard-pengaduan-selesai.php">Data Pengaduan
                    Selesai</a>
            </div>
            <div class="col-12 col-sm-2"><a class="btn-sub-nav" href="dashboard-peringkat.php">Data Peringkat</a></div>
            <hr>
        </div>
        <!-- table aspirasi -->
        <div id="dataAsp" class="my-3">
            <h6 class="fw-bold table-title mt-3">DATA LAPORAN ASPIRASI SELESAI</h6>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-ungu">
                        <th>NAMA</th>
                        <th>RUJUKAN</th>
                        <th>JUDUL</th>
                        <th>AKSI</th>
                    </thead>
                    <tbody>
                        <?php 
                            $limit = 5;
                            $page = isset($_GET['page'])?(int)$_GET['page'] : 1;
                            $first_page = ($page > 1) ? ($page * $limit) - $limit : 0;

                            $previous = $page - 1;
                            $next = $page + 1;

                            $count = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM aspirasiSelesai");
                            $total_count = mysqli_fetch_assoc($count);
                            $total_page = ceil($total_count['jumlah']/$limit);

                            $data = mysqli_query($koneksi, "SELECT * FROM aspirasiSelesai LIMIT $first_page, $limit");
                            $number = $first_page + 1;

                            while ($row = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $row['nama_aspirator']; ?></td>
                                <td><?php echo $row['rujukan']; ?></td>
                                <td><?php echo $row['judul']; ?></td>
                                <td id="button-col">
                                    <button class="expand" data-bs-toggle="modal" data-bs-target="#aspModal<?php echo $row['id_aspirasi']; ?>"></button>
                                    <button <?php echo "onclick='location.href=\"../process/delete-process.php?form=aspirasiSelesai&kode=".$row['id_aspirasi']."\"'"; ?> 
                                    class="delete"></button>
                                </td>
                            </tr>
                            <div class="modal fade" id="aspModal<?php echo $row['id_aspirasi']; ?>" tabindex="-1" aria-labelledby="aspExpandedModal" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="aspExpandedModal">Substansial Data Aspirasi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                            <?php 
                                                $ref = $row['id_aspirasi'];
                                                $query_detail = mysqli_query($koneksi, "SELECT * FROM aspirasiSelesai WHERE id_aspirasi='$ref'");
                                                while ($col = mysqli_fetch_array($query_detail)) {
                                            ?>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <fieldset disabled>
                                                        <div class="row">
                                                            <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                                                                <label for="idAspDisabled" class="form-label">ID Aspirasi</label>
                                                                <input type="text" class="form-control" id="idAspDisabled"
                                                                    value="<?php echo $col['id_aspirasi']; ?>" name="idAspDisabled">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-lg-4 col-md-12 col-sm-12 pt-3">
                                                                <label for="namaAspDisabled" class="form-label">Nama Aspirator</label>
                                                                <input type="text" class="form-control" id="namaAspDisabled"
                                                                    value="<?php echo $col['nama_aspirator']; ?>" name="namaAspDisabled">
                                                            </div>
                                                            <div class="col-12 col-lg-4 col-md-12 col-sm-12 pt-3">
                                                                <label for="noIdentitasDisabled" class="form-label">Nomor NIM/NIDN/NIK</label>
                                                                <input type="text" class="form-control" id="noIdentitasDisabled"
                                                                    value="<?php echo $col['no_identitas']; ?>"name="noIdentitasDisabled">
                                                            </div>
                                                            <div class="col-12 col-lg-4 col-md-12 col-sm-12 pt-3">
                                                                <div class="col">
                                                                    <label for="statusAspDisabled" class="form-label">Status</label>
                                                                    <input type="text" class="form-control" id="statusAspDisabled"
                                                                    value="<?php echo $col['status']; ?>"name="statusAspDisabled">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-lg-4 col-md-12 col-sm-12 pt-3">
                                                                <label for="emailAspDisabled" class="form-label">Email</label>
                                                                <input type="email" class="form-control" id="emailAspDisabled"
                                                                value="<?php echo $col['email']; ?>">
                                                            </div>
                                                            <div class="col-12 col-lg-4 col-md-12 col-sm-12 pt-3">
                                                                <label for="noAspTlpDisabled" class="form-label">No Telepon</label>
                                                                <input type="text" class="form-control" id="noAspTlpDisabled"
                                                                value="<?php echo $col['no_telepon']; ?>" name="noAspTlpDisabled">
                                                            </div>
                                                            <div class="col-12 col-lg-4 col-md-12 col-sm-12 pt-3">
                                                                <label for="rujukanAspDisabled" class="form-label">Rujukan</label>
                                                                <input type="text" class="form-control" id="rujukanAspDisabled"
                                                                value="<?php echo $col['rujukan']; ?>" name="rujukanAspDisabled">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-lg-6 col-md-12 col-sm-12 pt-3">
                                                                <label for="kategoriAspDisabled" class="form-label">Kategori</label>
                                                                <input type="text" class="form-control" id="kategoriAspDisabled"
                                                                value="<?php echo $col['kategori']; ?>" name="kategoriAspDisabled">
                                                            </div>
                                                            <div class="col-12 col-lg-6 col-md-12 col-sm-12 pt-3">
                                                                <label for="tanggalAspDisabled" class="form-label">Tanggal</label>
                                                                <input type="date" id="tanggalAspDisabled" class="form-control"
                                                                value="<?php echo $col['tanggal'];?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-lg-12 col-md-12 col-sm-12 pt-3">
                                                                <label for="judulAspDisabled" class="form-label">Judul</label>
                                                                <input type="text" class="form-control" id="judulAspDisabled" placeholder="Judul"
                                                                value="<?php echo $col['judul'];?>" name="judulAspDisabled">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-lg-12 col-md-12 col-sm-12 pt-3">
                                                                <label for="deskripsiAspDisabled" class="form-label">Deskripsi</label>
                                                                <textarea class="form-control deskripsi" id="deskripsiAspDisabled"
                                                                 rows="8" cols="50"><?php echo $col['deskripsi']; ?></textarea>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <?php 
                                                }
                                            ?>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <!-- Modal Aspirasi -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script-dashboard.js"></script>
</body>

</php>