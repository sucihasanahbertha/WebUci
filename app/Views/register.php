<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>
    Register
    </title>
  </head>
  <body>
  <div class="container">
    <h2 class="text-center text-primary mt-3">Register</h2>
    <form class="col-lg-5 mx-auto">
       <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control shadow p-3 mb-5 bg-white rounded" id="nama" placeholder="Masukkan Nama "required>
       </div>

       <div class="row">
         <div class="col-md-7">
          <div class="form-group">
            <label for="kota">Jenis Kelamin</label>
            <input type="text" class="form-control shadow p-3 mb-5 bg-white rounded" id="kota" placeholder="Masukkan Jenis Kelamin"required>
          </div>
         </div>
         <div class="col-md-6">
         <div class="form-group">
            <label for="tanggal">Tanggal Lahir</label>
            <input type="date" id="tanggal" class="form-control shadow p-3 mb-5 bg-white rounded">
          </div>
       </div>
    </div>

         <div class="form-group">
            <label for="exampleInputEmail">Email</label>
            <input type="email" class="form-control shadow p-3 mb-5 bg-white rounded" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Alamat Email"required>
         </div>

         <div class="form-group">
            <label for="exampleInputPassword">Password</label>
            <input type="password" class="form-control shadow p-3 mb-5 bg-white rounded" id="exampleInputPassword" placeholder="Masukkan Password"required>
         </div>

       <div class="row mx-auto">
       <button type="submit" class="btn btn-primary">Submit</button>
       <button type="submit" class="btn btn-link"><a href="<?= base_url('Auth/login'); ?>">Saya Memiliki Akun</button>
       </div>
    </form>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>