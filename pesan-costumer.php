<?php 
    include("koneksi.php");

    $queryPesan = mysqli_query($koneksi, "SELECT * FROM contact");
    $jumlahPesan = mysqli_num_rows($queryPesan);
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

    <title>MYEONG PESAN</title>
  </head>
<body id="list-pesanan">

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg mt-3 fixed-top" id="navbar">
        <div class="container">
        <a class="navbar-brand" href="admin.php">
          <img src="images/icon/logo.png" alt=""> MYEONG
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarpesan" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class='bx bxs-down-arrow'></i>
       </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarpesan">
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
    <!--akhir navbar -->

    <!-- tabel -->
    <section id="list-pesan-table">
      <div class="container bg-dark shadow-XL p-3 mb-5 rounded">
        <div class="table-responsive tabelku">
            <table class="table table-hover" style="color: white;">
                <thead class="text-dark">
                    <tr class="table-info">
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>CONTACT</th>
                        <th>PESAN</th>
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if($jumlahPesan==0){
                ?>
                    <tr>
                    <td colspan="5" class="text-center">Data Pesan Tidak Tersedia</td>
                    </tr> 
                <?php   
                }
                else{
                    $jumlah = 1;
                    while($data=mysqli_fetch_array($queryPesan)){
                    ?>
                        <tr>
                        <td><?php echo $jumlah ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['no_email']; ?></td>
                        <td><?php echo $data['isi_pesan']; ?></td>
                        <td><a href="clear_pesan.php?id=<?php echo $data['id'] ?>" class="btn btn-custom">Hapus Data</a></td>
                        </tr>
                    <?php  
                    $jumlah++; 
                    }
                }
                ?> 
                </tbody>
            </table>
        </div>
      </div>
    </section>
    <!-- tabel -->
    
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

