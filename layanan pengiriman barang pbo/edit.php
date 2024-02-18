<?php
include_once 'classes/Register.php';
$re = new Register();

/*$id = ""; // Inisialisasi variabel $no_resi untuk menghindari kesalahan jika tidak ada parameter $_GET['no_resi']
*/
if (isset($_GET['id'])) {
    $id = base64_decode($_GET['id']); // Perbaikan: Tambahkan titik koma di akhir baris
}

// Perbaikan: Aktifkan penanganan data POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $register = $re->databaru($_POST, $_FILES, $id);
}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

    <title>Formulir Jasa pengiriman Barang</title>
</head>
<body>

<br><br>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7">
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
                <div class="col-md-6"><h3>Perbaharui Data</h3>
                </div>
                <div class="col-md-7">
                  <a href="index.php" class="btn btn-info float-right" >Lihat Data</a>
                </div>
              </div>
            </div>
                <div class="card-body">
                    <?php
                    $getinfo = $re->getinfoById($id);
                    if ($getinfo) {
                        while ($row = mysqli_fetch_assoc($getinfo)) {
                            ?>
                            <form method="POST" enctype="multipart/form-data">
                                <label for="">No Resi</label>
                                <input type="text" name="no_resi" value="<?= $row['no_resi'] ?>"
                                       class="form-control">

                                <label for="">Tanggal Resi</label>
                                <input type="date" name="tgl_resi" value="<?= $row['tgl_resi'] ?>"
                                       class="form-control">

                                <label for="">Nama Pengirim</label>
                                <input type="text" name="nama_pengirim" value="<?= $row['nama_pengirim'] ?>"
                                       class="form-control">

                                <label for="">Alamat Pengirim</label>
                                <textarea name="alamat_pengirim" class="form-control"><?= $row['alamat_pengirim'] ?></textarea>

                                <label for="">Nomor Handphone</label>
                                <input type="number" name="no_hp_pengirim" value="<?= $row['no_hp_pengirim'] ?>"
                                       class="form-control">

                                <label for="">Jenis Barang</label>
                                <input type="text" name="jenis_barang" value="<?= $row['jenis_barang'] ?>"
                                       class="form-control">

                                <label for="">Jenis Paket</label>
                                <input type="text" name="jenis_paket" value="<?= $row['jenis_paket'] ?>"
                                       class="form-control">

                                <label for="">Berat Barang</label>
                                <input type="text" name="berat_barang" value="<?= $row['berat_barang'] ?>"
                                       class="form-control">

                                <label for="">Nama Penerima</label>
                                <input type="text" name="nama_penerima" value="<?= $row['nama_penerima'] ?>"
                                       class="form-control">

                                <label for="">Alamat Penerima</label>
                                <textarea name="alamat_penerima" class="form-control"><?= $row['alamat_penerima'] ?></textarea>

                                <label for="">Nomor Handphone</label>
                                <input type="number" name="no_hp_penerima" value="<?= $row['no_hp_penerima'] ?>"
                                       class="form-control">

                                <label for="">Total Biaya</label>
                                <input type="text" name="total_biaya" value="<?= $row['total_biaya'] ?>"
                                       class="form-control"><br>

                                <input type="submit" value="Simpan Data" class="btn btn-success form-control">
                            </form>

                        <?php
                            }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
</html>