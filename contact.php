<?php  
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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

    <title>MYEONG CONTACT</title>
  </head>
  <body id="body-contact">

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


    <!-- Awal Contact Form -->
    <section id="contact">
    <div class="container text-light shadow p-3 mb-5 rounded" style="background-color: #c53362;">
        <div class="row text-center mt-5 justify-content-center">
            <div class="col-4 text-center">
            <h2>CONTACT US</h2>
            </div>
        </div>
        <div class="col-md-6 text-center mt-2 mx-auto">
        <?php
            $status = isset($_GET['status']) ? $_GET['status'] : NULL;
            if ($status == 'sukses') :
                ?><div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Yaayyy !</strong> Pesan kamu berhasil terkirim.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            elseif ($status == 'gagal') :
                ?><div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Mohon Maaf</strong> Pesan Anda Gagal Terkirim.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php
            endif;
            ?>
        </div>
        <div class="row justify-content-center mb-3 text">
            <div class="col-md-6 mb-3">
                <div class="card-body m-5 mt-0">
                    <form action="proses-contact.php" method="post" name="contact-from">
                        <div class="mb-3">
                            <label for="Inputnama" class="form-label">Name</label>
                            <input type="text" class="form-control" id="InputNama" name="tnama" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="Inputnohpemail" class="form-label">Phone Number or Email</label>
                            <input type="text" class="form-control" id="Inputnohpemail" name="tnoemail" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                        <div class="mb-3">
                            <label for="Inputpesan" class="form-label">Message</label>
                            <textarea type="text" class="form-control" id="Inputpesan" name="tisipesan" required autocomplete="off"></textarea>
                        </div>
                        <br>
                        <div class="text-center">
                        <button type="submit" class="btn btn-custom2 btn-xl" name="btnkirim" >SEND MASSAGE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	<!-- Akhir Contact Form -->

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
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/onscroll.js"></script>
  </body>
</html>
<?php } ?>