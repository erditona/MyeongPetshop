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

    <title>MYEONG USER</title>
  </head>
  <body id="home">

  <!-- navbar -->
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
                      <a class="nav-link active bg-active link-navbar" href="user.php#home">HOME</a>
                  </li>
                  <li class="nav-item mx-2">
                      <a class="nav-link link-navbar" href="user.php#about">ABOUT</a>
                  </li>
                  <li class="nav-item mx-2">
                      <a class="nav-link link-navbar" href="menu_pembeli.php">SHOP</a>
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
  <!--akhir navbar -->

  <!-- Hero -->
  <header class="">
      <video src="images/Background/herovidio.mp4" class="hero-video " alt="hero-vidio" autoplay loop muted>
  </header>
  <!-- Akhir Hero -->

  <!-- about -->
  <section id="about">
      <div class="container">
        <div class="row flex-lg-row-verse align-items-center py-5">
          <div class="col-md-5">
            <img src="images/Background/maincat.png" class="img-fluid" alt="...">
          </div>
          <div class="col-md-7 my-auto about-tagline">
            <h1>Wecare About Your Cat</h1>
            <P>
            Pets are humanizing. They remind us we have an aboligation and responsibility to preserve and nature and care for all life
            </P>
            <a href="shop.php" class="btn btn-custom3 rounded shadow" id="btn-ordernow">SHOP NOW</a>
            <a href="service.php" class="btn btn-custom3 rounded shadow" id="btn-ordernow">SERVICE NOW</a>
          </div>
        </div>
      </div>
  </section>
  <!--Akhir about -->

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