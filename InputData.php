<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>

  <body>

    <?php include('header.php'); ?>
    
    <h1>Masukkan Biodata</h1>
    <form method="post" action="OutputData.php" enctype="multipart/form-data">
   
        <div class="container">
            <!-- UNGGAH FOTO -->
            <div class="login-group2302">
                <img src="asset/user2.png" alt="Ellipse18145"/>
            </div>

            <div class="unggah">
                <label class="form-label">Unggah Foto</label><br>
                <label for="file-upload" class="unggah"></label>
                <input input type="file" name="file">
            </div>
            
            <!-- NAMA -->
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input class="form-control" type="text" name="nama" aria-label="default input example">

            </div>

            <!-- JENIS KELAMIN -->
                <label class="form-label">Jenis Kelamin</label> <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="laki" id="inlineRadio1" value="Laki - Laki">
                        <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="laki" id="inlineRadio1" value="Perempuan">
                        <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                    </div>
                    
            <!-- TANGGAL LAHIR -->
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" name="date" class="form-control" id="date">
                </div>

                <!-- ALAMAT -->
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
            </div>

            <!-- MOTIVASI -->
            <div class="mb-3">
                <label class="form-label">Motivasi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="motivasi"></textarea>
            </div>

            <!-- BUTTON -->
                <div class="button">
                    <button class="btn btn-outline-primary" type="submit" name="hasil">Daftar</button>
                </div>
            
        </div>
    </form>

    <?php include('footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>

</html>
