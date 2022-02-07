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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>MYEONG Menu Pembeli</title>
  </head>
  <body id="shop">


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg mt-3 fixed-top" id="navbar" >
      <div class="container">
          <a class="navbar-brand" href="user.php">
            <img src="images/icon/logo.png" alt=""> MYEONG
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class='bx bxs-down-arrow'></i>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="nav mx-auto">
                  <li class="nav-item mx-2">
                      <a class="nav-link link-navbar" href="user.php#home">HOME</a>
                  </li>
                  <li class="nav-item mx-2">
                      <a class="nav-link link-navbar" href="user.php#about">ABOUT</a>
                  </li>
                  <li class="nav-item mx-2">
                      <a class="nav-link active bg-active link-navbar" href="menu_pembeli.php">SHOP</a>
                  </li>
                  <li class="nav-item mx-2">
                      <a class="nav-link link-navbar" href="contact.php">CONTACT</a>
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
  <section id="shop">
    <div class="container shadow-XL p-3 mb-5 rounded" style="background-color :#c53362">
      <a class="navbar-brand bg-white rounded ps-3 pe-3 " href="pesanan_pembeli.php">
        <img src="images/icon/shopping-cart.png" alt="" style="width: 35px"> 
      </a>
      <h2 class="text-center mb-5 text-white">MYEONG SHOP</h2>
      <div class="row text-center justify-content-center">
          <?php 

          include('koneksi.php');

          $query = mysqli_query($koneksi, 'SELECT * FROM produk');
          $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
            

          ?>

          <?php foreach($result as $result) : ?>

          <div class="col-md-3 mb-3">
            <div class="card brder-dark">
              <img src="upload/<?php echo $result['gambar'] ?>" class="card-img-top p-5" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold"><?php echo $result['nama_menu'] ?></h5>
               <label class="card-text harga mb-3"><strong>Rp.</strong> <?php echo number_format($result['harga']); ?></label><br>
               <a href="beli.php?id_menu=<?php echo $result['id_menu']; ?>" class="btn btn-custom3 rounded shadow">BELI</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
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

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- js onscroll navbar -->
    <script src="js/onscroll.js"></script>
  </body>
</html>
<?php } ?>