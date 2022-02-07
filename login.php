<?php 
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->


    <title>Halaman Login</title>
  </head>
  <body>
  <!-- Form Login -->
  <div class="container">
      <div class="card login-form my-auto">
        <div class="car-body">
          <h2 class="card-title text-center"><img src="images/icon/logo.png" alt="">  FORM LOGIN</h2>
        </div>
        <div class="card-text">
          <form method="POST" action="">
            <div class="mb-3">
              <label for="exampleInputEmail1">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user mt-1"></i></div>
                  </div>
                  <input type="text" class="form-control" name="username" required autocomplete="off">
                </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1">Password</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-unlock-alt mt-1"></i></div>
                  </div>
                  <input type="password" class="form-control" name="password">
              </div>
            </div>
            <div class="mb-3" >
              <small><a href="register.php" class="text-light">Belum Punya Akun ? Buat Akun Anda !</a></small>
            </div>
            <div class="d-grid">
              <button type="submit" name="submit" class="btn btn-custom">LOGIN</button>
            </div>
          </form>
        </div>
      </div>
    </div> 


  <!-- Eksekusi Form Login -->
      <?php 
        if(isset($_POST['submit'])) {
          $user = $_POST['username'];
          $password = $_POST['password'];

          // Query untuk memilih tabel
          $cek_data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$user' AND password = '$password'");
          $hasil = mysqli_fetch_array($cek_data);
          $status = $hasil['status'];
          $login_user = $hasil['username'];
          $row = mysqli_num_rows($cek_data);

          // Pengecekan Kondisi Login Berhasil/Tidak
            if ($row > 0) {
                session_start();   
                $_SESSION['login_user'] = $login_user;

                if ($status == 'admin') {
                  header('location: admin.php');
                }elseif ($status == 'user') {
                  header('location: user.php'); 
                }
            }else{
                header("location: login.php");
            }
        }
       ?>
    </div>
  <!-- Akhir Eksekusi Form Login -->







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>
</html>