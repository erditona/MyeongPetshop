<?php 
include 'koneksi.php';
?>

<!doctype html>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Oswald:wght@300&family=Poppins:wght@400;500;700&family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">

    <title>Tambah Menu</title>
  </head>
  <body id="tambah-produk">
 
  <!-- Form Tambah Produk -->
  <div class="container bg-dark shadow-XL p-3 rounded">
      <a href="daftar_menu.php"><img src="images/icon/back.png" alt=""></a>
      <h3 class="text-center text-light mb-3">TAMBAH PRODUK</h3>
    <div class="row text-dark p-5" style="background-color: #ffe715">
      <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group col-md-12 mb-3">
          <label for="menu1">Nama Produk</label>
          <input type="text" class="form-control" id="menu1" name="nama_menu" autocomplete="off" required>
        </div>
        <div class="form-group col-md-12 mb-3">
          <label for="#">Jenis Produk</label>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" value="Makanan" name="jenis_menu" checked>Makanan 
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" value="Aksesoris" name="jenis_menu">Aksesoris
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" value="Perlengkapan" name="jenis_menu">Perlengkapan
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" value="Service" name="jenis_menu">Service
            </label>
          </div>
        <div class="form-group col-md-12 mb-3">
          <label for="stok1">Stok</label>
          <input type="text" class="form-control" id="stok1" name="stok" autocomplete="off" required>
        </div>
        <div class="form-group col-md-12 mb-3">
          <label for="harga1">Harga Produk</label>
          <input type="text" class="form-control" id="harga1" name="harga" autocomplete="off" required>
        </div>
        <div class="form-group col-md-12 mb-3">
          <label for="gambar">Foto Produk</label>
          <input type="file" class="form-control-file border" id="gambar" name="gambar">
        </div><br>
        <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
        <button type="reset" class="btn btn-danger" name="reset">Hapus</button>
      </form>

      <?php 
  if(isset($_POST['tambah'])){
    $nama = $_POST['nama_menu'];
    $jenis = $_POST['jenis_menu'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $nama_file = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];
    $folder = './upload/';

    move_uploaded_file($source, $folder.$nama_file);
    $insert = mysqli_query($koneksi, "INSERT INTO produk VALUES (NULL, '$nama', '$jenis', '$stok', '$harga', '$nama_file')");

    if($insert){
      header("location: daftar_menu.php");
    }
    else {
      echo "Maaf, terjadi kesalahan saat mencoba menyimpan data ke database";
    }
  }

   ?>

    </div>
  </div>
  <!-- Akhir Form Registrasi -->


  

  <!-- js bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- js onscroll navbar -->
  <script src="js/onscroll.js"></script>
  </body>
</html>



