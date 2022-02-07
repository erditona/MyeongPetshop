<?php 
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>MYEONG ADMIN</title>
  </head>
  <body id="dashboard">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg mt-3 fixed-top" id="navbar">
        <div class="container">
        <a class="navbar-brand" href="admin.php">
          <img src="images/icon/logo.png" alt=""> MYEONG
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class='bx bxs-down-arrow'></i>
       </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="nav mx-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link active bg-active link-navbar" href="#dashboard">HOME</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link link-navbar" href="daftar_menu.php">PRODUK</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link link-navbar" href="pesanan.php">PESANAN</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link link-navbar" href="pesan-costumer.php">COSTUMER</a>
                </li>
            </ul>    
            <a class="navbar-brand" href="logout.php">
              <img src="images/icon/logout.png" alt="">
            </a>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->

  <!-- Menu -->  
  <?php 
  include("koneksi.php");
  $queryPesan = mysqli_query($koneksi, "SELECT * FROM contact");
  $jumlahPesan = mysqli_num_rows($queryPesan);
  $queryPemesananShop = mysqli_query($koneksi, "SELECT * FROM pemesanan");
  $jumlahPesananShop = mysqli_num_rows($queryPemesananShop);
  $queryContact = mysqli_query($koneksi, "SELECT * FROM contact");
  $queryProduk = mysqli_query($koneksi, "SELECT * FROM produk");
  $jumlahProduk = mysqli_num_rows($queryProduk);
  ?>
  <section id="dashboard-admin">
    <div class="container text-light shadow p-3 mb-5 rounded bg-dark">
        <div class="row text-center mx-auto justify-content-center cardku">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="images/background/admin1.png" class="card-img-top p-5" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Pesanan</h5>
                        <p class="card-text"><?php echo $jumlahPesananShop; ?> Pesanan</p>
                        <a href="pesanan.php" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="images/background/admin2.png" class="card-img-top p-5" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Produk</h5>
                        <p class="card-text"><?php echo $jumlahProduk; ?> Produk</p>
                        <a href="daftar_menu.php" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="images/background/admin3.png" class="card-img-top p-5" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pesan Customer</h5>
                        <p class="card-text"><?php echo $jumlahPesan; ?> Pesan</p>
                        <a href="pesan-costumer.php" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        </div>       
    </div>
    </section>
  <!-- Akhir Menu -->

  <!-- footer -->
  <footer id="footer">
      <div class="footer-content">
          <h3>Myeong PetShop</h3>
          <p>Wecare About Your Cat</p>
          <ul class="socials">
              <li><a href="https://www.instagram.com/myeong_pet_shop/"><i class='bx bxl-instagram'></i></a></li>
              <li><a href="#"><i class='bx bxl-facebook-square'></i></a></li>
              <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
          </ul>
      </div>
      <div class="footer-bottom">
         <p>copyright &copy;2022 MYEONG </p>
      </div>
  </footer>
  <!-- footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/onscroll.js"></script>
  </body>
</html>
<?php } ?>