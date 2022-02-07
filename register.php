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


    <title>Halaman Registrasi</title>
  </head>
  <body id="register">
 
 <!-- Form Registrasi -->
  <div class="container">
    <a href="daftar_menu.php"><img src="images/icon/back.png" alt=""></a>
    <h3 class="text-center mt-3 mb-5">HALAMAN REGISTRASI</h3>
    <div class="card p-5 mb-5">
    <form method="POST" action="simpan_register.php">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="user">Username</label>
          <input type="text" class="form-control" id="user" name="username" placeholder="Masukan Username">
        </div>
        <div class="form-group col-md-6">
          <label for="pass">Password</label>
          <input type="password" class="form-control" id="pass" name="password" placeholder="Masukan Password">
        </div>
      </div>
      <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" name="nama_lengkap" placeholder="Masukan Nama Lengkap">
      </div>
      <div class="form-group">
        <label for="jk">Jenis Kelamin</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" value="Laki-Laki">
          <label class="form-check-label" for="jk">Laki-Laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" value="Perempuan">
          <label class="form-check-label" for="jk">Perempuan</label>
        </div>
      </div>
      <div class="form-group">
        <label for="tgl">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl" name="tanggal_lahir">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="rumah">Alamat</label>
          <input type="text" class="form-control" id="rumah" name="alamat" placeholder="Masukan Alamat">
        </div>
        <div class="form-group col-md-2">
          <label for="telp">No. Telephone</label>
          <input type="text" class="form-control" id="telp" name="hp" placeholder="No. Telephone">
        </div>
      <div class="form-group col-md-4">
          <label for="sts">Status Registrasi</label>
          <select id="sts" class="form-control" name="status">
            <option selected>Pilih...</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
        </div>
      </div>     
      <button type="register" class="btn btn-primary">Register</button>
      <button type="reset" class="btn btn-danger">Reset</button>
    </form>
  </div>
  </div>
  <!-- Akhir Form Registrasi -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>
</html>