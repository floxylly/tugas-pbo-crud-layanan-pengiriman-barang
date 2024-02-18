<?php

  include_once 'classes/Register.php';
  $re = new Register();

  if (isset($_GET['delInfo'])) {
    $id = base64_decode($_GET['delInfo']);
    $delInfor = $re->delInfor($id);
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
        <div class="col-md-15">
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
                <div class="col-md-6"><h3>Semua Data Formulir</h3></div>
                <div class="col-md-7">
                  <a href="addform.php" class="btn btn-info float-right" >Tambah Data</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <tr>
                  <th>nomor resi</th>
                  <th>tanggal resi</th>
                  <th>nama pengirim</th>
                  <th>alamat pengirim</th>
                  <th>no hp pengirim</th>
                  <th>jenis barang</th>
                  <th>jenis paket</th>
                  <th>berat barang</th>
                  <th>nama penerima</th>
                  <th>alamat penerima</th>
                  <th>no hp penerima</th>
                  <th>total biaya</th>
                </tr>
                <?php
                $allinfo = $re->allinfo();
                if($allinfo){
                  while($row = mysqli_fetch_assoc($allinfo)){
                    ?>
                    <tr>
                      <td><?=$row['no_resi']?></td>
                      <td><?=$row['tgl_resi']?></td>
                      <td><?=$row['nama_pengirim']?></td>
                      <td><?=$row['alamat_pengirim']?></td>
                      <td><?=$row['no_hp_pengirim']?></td>
                      <td><?=$row['jenis_barang']?></td>
                      <td><?=$row['jenis_paket']?></td>
                      <td><?=$row['berat_barang']?></td>
                      <td><?=$row['nama_penerima']?></td>
                      <td><?=$row['alamat_penerima']?></td>
                      <td><?=$row['no_hp_penerima']?></td>
                      <td><?=$row['total_biaya']?></td>
                      <td>
                      <a href="edit.php?id=<?=base64_encode($row['id'])?>" class="btn btn-warning">Ubah</a>
                      <a href="?delInfo=<?=base64_encode($row['id'])?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini??')" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                    <?php
                  }
                }
                ?>
                
              </table>
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