<?php 
    include('koneksi.php');
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
?>

<!doctype html>
<?php 
 
  // $queryPesanan = mysqli_query($koneksi, "SELECT * FROM pemesanan_service");
  // $jumlahPesanan = mysqli_num_rows($queryPesanan);
?>

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

    <title>List Pesanan</title>
  </head>
  <body id="list-pesanan">

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg mt-3 fixed-top" id="navbar" >
        <div class="container">
            <a class="navbar-brand" href="admin.php">
              <img src="images/icon/logo.png" alt=""> MYEONG
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class='bx bxs-down-arrow'></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link link-navbar" href="admin.php">HOME</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link link-navbar" href="daftar_menu.php">PRODUK</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active bg-active link-navbar" href="pesanan.php">LIST PESANAN</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link link-navbar" href="pesan-costumer.php">PESAN COSTUMER</a>
                    </li>
                </ul>    
                <a class="navbar-brand" href="logout.php">
                    <img src="images/icon/logout.png" alt="">
                </a>
            </div>
        </div>
    </nav>
    <!--akhir navbar -->



    <!-- Pesanan Produk -->
    <section id="list-pesanan-table">
      <div class="container bg-dark shadow-XL p-3 mb-5 rounded">
        <div class="table-responsive tabelku">
        <div class="judul-pesanan m-3">
            <h3 class="text-center font-weight-bold">DATA PESANAN PRODUK</h3>
        </div>
        <table class="table table-hover" style="color: white;">
        <thead class="thead-light">
          <tr class="table-info">
            <th scope="col">No.</th>
            <th scope="col">ID Pemesanan</th>
            <th scope="col">Tanggal Pesan</th>
            <th scope="col">Tanggal Pesan</th>
            <th scope="col">Total Bayar</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php $nomor=1; ?>
          <?php 
            $ambil = mysqli_query($koneksi, 'SELECT * FROM pemesanan');
            $result = mysqli_fetch_all($ambil, MYSQLI_ASSOC);
          ?>
          <?php foreach($result as $result) : ?>

          <tr>
            <th scope="row"><?php echo $nomor; ?></th>
            <td><?php echo $result["id_pemesanan"]; ?></td>
            <td><?php echo $result["tanggal_pemesanan"]; ?></td>
            <td><?php echo $result["tanggal_pemesanan"]; ?></td>
            <td>Rp. <?php echo number_format($result["total_belanja"]); ?></td>
            <td>
              
              <a href="detail_pesanan.php?id=<?php echo $result['id_pemesanan'] ?>" class="badge badge-primary">Detail</a>
              <a href="clear_pesanan.php?id=<?php echo $result['id_pemesanan'] ?>" class="badge badge-danger">Hapus Data</a>
            </td>
          </tr>
          <?php $nomor++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </section>
  <!-- Akhir Pesanan Produk -->

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
  
  <!-- js bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- js onscroll navbar -->
  <script src="js/onscroll.js"></script>

  </body>
</html>
<?php } ?>