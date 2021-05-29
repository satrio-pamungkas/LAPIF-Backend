<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <title>404 Not Found</title>
</head>

<body>
  <div class="pt-5">
    <?php $path = ""; ?>
    <!-- navbar -->
    <?php include "templates/navbar.php"; ?>
    <!-- end navbar -->

    <!-- img -->
    <div class="container">
      <div class="text-center">
        <img class="img-fluid" src="img/404.svg" alt="404" />
      </div>
    </div>
    <!-- end of img -->

    <!-- Footer -->
    <?php include "templates/footer.php"; ?>

  <!-- end of footer -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>
</body>

</html>