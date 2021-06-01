<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Masuk Admin - LAPIF</title>
    <link rel="shortcut icon" href="../favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
</head>

<?php 
    session_start();

    if (isset($_SESSION['user'])) {
        header("Location: ../dashboard/dashboard-aspirasi.php");
    }
?>

<body class="bg-login">
    <div class="pt-5">
        <div class="container-xxl p-0">
            <?php $path = "../"; ?>
            <!-- navbar -->
            <?php include '../templates/navbar.php'; ?>
            <!-- end navbar-->

            <!-- FORM LOGIN -->
            <div class="formlog my-5 col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
                <h3>Masuk</h3>
                <p>Khusus untuk Admin</p>
                <form action="../process/login-process.php" method="POST" onsubmit="return validateForm()">
                    <div class="my-3">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" placeholder="Username" name="username" id="username"
                        value="<?php if(isset($_COOKIE['username'])) { echo $_COOKIE['username']; }?>">
                    </div>
                    <div class="my-3">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" placeholder="Password" name="password" id="password" 
                        value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; }?>">
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="checkbox" id="rememberPasswd" name="remember">
                        <label class="form-check-label" for="rememberPasswd">Ingat Password</label>
                    </div>
                    <input type="submit" class="btn btn-primary" id="btnMasuk" value="Masuk" name="login">
                    <div class="text-decoration-underline text-center mt-3">
                        <a class="forgot" href="forgot-password.php">Lupa
                            Password</a>
                    </div>
                </form>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="js/script-login.js"></script>
        </div>
    </div>
</body>

</html>