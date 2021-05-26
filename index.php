<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
    <title>LAPIF - Layanan Aspirasi Pengaduan Informasi dan Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="pt-5">
    <div class="container-fluid p-0">
        <?php $path = '';?>
        <!-- navbar -->
        <?php include "templates/navbar.php"; 
              include "config/connection.php"; ?>
        <!-- end navbar-->
        <!-- Section Selamat Datang di LAPIF -->
        <section id="banner-1">
            <div class="banner-1-bg">
                <div class="banner-1-bgshadow">
                    <div class="container-xxl">
                        <h1 class="banner-1-title text-center">Selamat Datang di<br>LAPIF</h1>
                        <div class="banner-1-desc text-center py-4">
                            <span>Layanan Aspirasi Pengaduan Informasi dan Forum</span>
                        </div>
                        <div class="row mx-2 mt-5">
                            <div
                                class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-3 mx-auto mb-3 banner-1-box-fitur shadow">
                                <div class="banner-1-fiturImage">
                                    <img src="img/fitur-1.svg" alt="Fitur-1">
                                </div>
                                <span>LAYANAN PELAPORAN DAN ASPIRASI KAMI TELAH BERBASIS DIGITAL</span>
                            </div>
                            <div
                                class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-3 mx-auto mb-3 banner-1-box-fitur shadow">
                                <div class="banner-1-fiturImage">
                                    <img src="img/fitur-2.svg" alt="Fitur-2">
                                </div>
                                <span>LAPORAN DAN ASPIRASI YANG DIBERIKAN AKAN TEPAT SASARAN PADA YANG DITUJU</span>
                            </div>
                            <div
                                class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-3 mx-auto mb-3 banner-1-box-fitur shadow">
                                <div class="banner-1-fiturImage">
                                    <img src="img/fitur-3.svg" alt="Fitur-3">
                                </div>
                                <span>TIDAK PERLU AKUN, SELURUH LAYANAN PELAPORAN DAN FORUM DAPAT DIAKSES</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section id="banner-2">
            <div class="container">
                <div class="row mx-2">
                    <div class="col text-center">
                        <h1 class="banner-2-title-count mt-5 mb-3">Aspirasi</h1>
                        <div class="banner-2-count count-1">
                            <span>
                                <?php
                                    $query = "SELECT (SELECT COUNT(*) FROM aspirasi) + 
                                    (SELECT COUNT(*) FROM aspirasiSelesai) AS total";

                                    $result = mysqli_query($koneksi, $query);
                                    $num = mysqli_fetch_assoc($result);

                                    echo $num['total'];
                                ?>
                            </span>
                        </div>
                        <p class="banner-2-description-count mt-3 mb-5">Jumlah Aspirasi</p>
                    </div>
                    <div class="col text-center">
                        <h1 class="banner-2-title-count mt-5 mb-3">Pengaduan</h1>
                        <div class="banner-2-count count-2">
                            <span>
                                <?php
                                    $query = "SELECT (SELECT COUNT(*) FROM laporan) + 
                                    (SELECT COUNT(*) FROM laporanSelesai) AS total";

                                    $result = mysqli_query($koneksi, $query);
                                    $num = mysqli_fetch_assoc($result);

                                    echo $num['total'];
                                ?>
                            </span>
                        </div>
                        <p class="banner-2-description-count mt-3 mb-5">Jumlah Laporan</p>
                    </div>
                    <div class="col text-center">
                        <h1 class="banner-2-title-count mt-5 mb-3">Forum</h1>
                        <div class="banner-2-count count-3">
                            <span>666</span>
                        </div>
                        <p class="banner-2-description-count mt-3 mb-5">Jumlah Diskusi</p>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <!-- Kami siap membantu mereka -->
        <section id="banner-3">
            <div class="container">
                <div class="row py-3 mx-auto text-center">
                    <div class="col py-3 px-3">
                        <div class="layout-img">
                            <img class="banner-3-img-size" src="img/work.svg" alt="work.svg">
                        </div>
                    </div>
                    <div class="col py-3 px-3">
                        <div class="py-3">
                            <h2 class="banner-3-title">Kami akan siap membantu mereka</h2>
                        </div>
                        <div class="banner-3-desc-layout py-1">
                            <p class="banner-3-desc">Kami akan membantu dalam meneruskan aspirasi dan informasi
                                serta forum</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section id="banner-4">
            <div class="container">
                <div class="row py-3 mx-auto text-center">
                    <div class="col py-3 px-3">
                        <div class="py-3">
                            <h2 class="banner-4-title">Identitas dan data akan terjamin aman</h2>
                        </div>
                        <div class="banner-4-desc-layout py-1">
                            <p class="banner-4-desc">Data pribadi akan aman dengan algoritma yang handal</p>
                        </div>
                    </div>
                    <div class="col py-3 px-3">
                        <div class="layout-img">
                            <img class="banner-4-img-size" src="img/information.svg" alt="work.svg">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <!-- testimonial -->
        <section id="banner-5">
            <div class="container">
                <div class="banner-5-title py-4">
                    <h1>Testimonial</h1>
                </div>
                <div class="banner-5-desc">
                    <p>Testimoni resmi untuk <b>LAPIF, </b>sebagian besar berasal dari mahasiswa</p>
                </div>
                <div class="row">
                    <div class="col-1 slider-next-back-layout px-2">
                        <img src="img/slider-back.svg" alt="slider back">
                    </div>
                    <div class="col">
                        <div class="testimonial mx-auto">
                            <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident
                                omnis
                                nihil
                                molestiae, dolorum voluptate quo, consequatur facere aut expedita porro debitis ratione
                                eius
                                sequi
                                iusto, corrupti autem eum quia ipsum!</p>
                            <div class="testimonial-line"></div>
                            <div class="testimonial-profile">
                                <div class="testimonial-nama">
                                    <img class="testimonial-photo" src="img/testimony-photo.png" alt="testimoni photo">
                                    <div class="testimonial-info">
                                        <h5>Muhammad Raihan Satrio</h5>
                                        <p>Software Engineer</p>
                                    </div>
                                </div>
                                <div class="row testimonial-react">
                                    <div class="row text-center">
                                        <div class="col-1 px-3">
                                            <img class="testimonial-react-icon ms-4" src="img/smile.svg"
                                                alt="smile.svg">
                                        </div>
                                        <div class="col px-3">
                                            <span>Recommended</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 slider-next-back-layout px-2">
                        <img src="img/slider-next.svg" alt="slider next">
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <?php include 'templates/footer.php'; ?>
        <!-- End Footer -->
    </div>
    <script src="js/script-pelaporan.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>

</html>