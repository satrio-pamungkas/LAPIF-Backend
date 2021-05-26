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
                    <label for="username">Username</label>
                    <input class="form-control" type="text" placeholder="Username" name="username" id="username">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" placeholder="Password" name="password" id="password">
                    <a class="forgot" href="forgot-password.php"><u>Lupa Password</u></a>
                    <input type="submit" value="login">
                </form>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="js/script-login.js"></script>
        </div>
    </div>
</body>

</html>