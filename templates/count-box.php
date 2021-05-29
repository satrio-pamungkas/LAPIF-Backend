<div class="row">
    <div class="col-md-4 mb-3">
        <div class="card text-center">
            <div class="card-body dashboard-bg-card">
                <p class="card-text fs-4">ASPIRASI</p>
                <h5 class="card-title fs-1">
                    <?php
                        $query = "SELECT count_aspirasi()";

                        $result = mysqli_query($koneksi, $query);
                        $num = mysqli_fetch_assoc($result);

                        echo $num['count_aspirasi()'];
                    ?>
                </h5>
                <p class="card-text fs-5">JUMLAH ASPIRASI</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card text-center">
            <div class="card-body dashboard-bg-card">
                <p class="card-text fs-4">PENGADUAN</p>
                <h5 class="card-title fs-1">
                    <?php
                        $query = "SELECT count_laporan()";

                        $result = mysqli_query($koneksi, $query);
                        $num = mysqli_fetch_assoc($result);

                        echo $num['count_laporan()'];
                    ?>
                </h5>
                <p class="card-text fs-5">JUMLAH LAPORAN</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card text-center">
            <div class="card-body dashboard-bg-card">
                <p class="card-text fs-4">FORUM</p>
                <h5 class="card-title fs-1">
                    <?php
                        $query = "SELECT count_forum()";

                        $result = mysqli_query($koneksi, $query);
                        $num = mysqli_fetch_assoc($result);

                        echo $num['count_forum()'];
                    ?>
                </h5>
                <p class="card-text fs-5">JUMLAH DISKUSI</p>
            </div>
        </div>
    </div>
</div>