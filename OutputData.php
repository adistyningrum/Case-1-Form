<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Output Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>

  <body>
  <?php include('header.php'); ?>
  <h1>Biodata</h1>
  <div class="container-output">

  <?php
        if (isset($_POST['hasil'])){
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $gender = $_POST['laki'];
            $tgl_lahir = $_POST['date'];
            $motivasi = $_POST['motivasi'];
            $file = $_FILES['file']['name'];
            $tmp_name = $_FILES['file']['tmp_name'];

            move_uploaded_file($tmp_name, 'images/'.$file);
        }
    ?>

        <div class="output-foto">
        <img src="images/<?php echo $file; ?>" alt="Gambar">
        </div>

        <label class="form-label">Nama Lengkap</label>
        <div class="output">
            <?php echo $nama; ?>
        </div>

        <label class="form-label">Jenis Kelamin</label>
        <div class="output">
            <?php echo $gender; ?>
        </div>

        <label class="form-label">Tanggal Lahir</label>
        <div class="output">
            <?php echo $tgl_lahir; ?>
        </div>

        <label class="form-label">Alamat</label>
        <div class="output">
            <?php echo $alamat; ?>
        </div>

        <label class="form-label">Motivasi</label>
        <div class="output">
            <?php echo $motivasi; ?>
        </div>
  </div>

  <?php include('footer.php'); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>

</html>
