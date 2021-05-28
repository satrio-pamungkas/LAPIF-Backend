<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../favicon.svg" type="image/x-icon">
    <title>Forgot Password - LAPIF</title>
</head>

<body class="bg-fg-passwd">
    <div class="pt-5">
        <div class="container-xxl p-0">
            <?php $path = "../"; ?>
            <!-- Nav -->
            <?php include '../templates/navbar.php'; ?>
            <!-- End Nav -->
            <div class="formfgpasswd my-5 col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto position-relative">
                <h3>Reset Password</h3>
                <p>Silahkan isi username pengurus yang terdaftar</p>
                <form action="#" method="POST">
                    <div class="form-layout mb-3">
                        <label for="inputEmail" class="descForm">Username</label>
                        <input id="username" type="username" name="username" class="form-control" required>
                    </div>
                    <div class="layout-btn">
                        <input type="submit" class="btn btn-primary" id="btnFgPasswd" onclick="validasiForgotPassword()"
                            value="Kirim" name="forgot">
                    </div>
                    <hr>
                    <p class="descfgpasswd">Belum punya akun pengurus? Silahkan hubungi administrator</p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="script/script-forgot-password.js"></script>
</body>

</html>