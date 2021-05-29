<?php
    echo '
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="'.$path.'index.php">
                <div class="logo">
                    <img class="logo" src="'.$path.'img/logo.svg" alt="logo.svg" />
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
                            href="'.$path.'form/pengaduan.php">PENGADUAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-font-custom nav-link active text-primary" href="'.$path.'form/aspirasi.php">ASPIRASI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-font-custom nav-link text-primary" href="'.$path.'forum/forum-diskusi.php">FORUM</a>
                    </li>
                </ul>
                <a href="'.$path.'account/login.php"><button class="nav-font-custom btn btn-primary text-white"
                        onclick="redirect()">MASUK</button></a>
            </div>
        </div>
    </nav>
    ';

?>