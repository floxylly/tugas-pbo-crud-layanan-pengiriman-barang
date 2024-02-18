<?php

  include_once 'classes/Register.php';
  $re = new Register();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $register = $re->addRegister($_POST, $_FILES);
  }

?>


<!doctype html>
<html lang="id">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>jasa pengiriman barang</title>
  </head>
  <body>
    
    <br>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-8">
          <div class="card shadow">
           <?php
            if (isset($register)) {
              ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong><?=$register?></strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php
            }
           ?>
            <div class="card-header">
            <div class="row">
                <div class="col-md-6"><h3>Formulir Pengiriman Barang</h3></div>
                <div class="col-md-7">
                  <a href="index.php" class="btn btn-info float-right" >Lihat Data</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data">
                <label for="">Nomor Resi</label>
                <input type="text" name="no_resi" placeholder="Masukkan Nomor resi" class="form-control">

                <label for="">Tanggal Resi</label>
                <input type="date" name="tgl_resi" placeholder="Masukkan Nomor resi" class="form-control">

                <label for="">Nama Pengirim</label>
                <input type="text" name="nama_pengirim" placeholder="Masukkan Nama Pengirim" class="form-control">

                <label for="">Alamat Pengirim</label>
                <textarea name= "alamat_pengirim" class="form-control"></textarea>

                <label for="">Nomor Handphone Pengirim</label>
                <input type="number" name="no_hp_pengirim" placeholder="Masukkan Nomor Handphone" class="form-control">

                <label for="">Jenis Barang</label>
                <input type="text" name="jenis_barang" placeholder="Masukkan Jenis Barang" class="form-control">

                <label for="">Jenis Paket</label>
                <input type="text" name="jenis_paket" placeholder="Masukkan Jenis Paket" class="form-control">

                <label for="">Berat Barang</label>
                <input type="text" name="berat_barang" placeholder="Masukkan Berat Barang" class="form-control">

                <label for="">Nama Penerima</label>
                <input type="text" name="nama_penerima" placeholder="Masukkan Nama Penerima" class="form-control">

                <label for="">Alamat Penerima</label>
                <textarea name= "alamat_penerima" class="form-control"></textarea>

                <label for="">Nomor Handphone Penerima</label>
                <input type="number" name="no_hp_penerima" placeholder="Masukkan Nomor Handphone" class="form-control">


                <label for="">Total Biaya</label>
                <input type="text" name="total_biaya" placeholder="Masukkan Total Biaya" class="form-control">
                <br>
                <input type="submit" value="Daftar" class="btn btn-success form-control">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>