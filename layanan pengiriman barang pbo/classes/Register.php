<?php

include_once 'lib/Database.php';

class Register{

    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addRegister($data, $file)
    {
        $nomor_resi = $data['no_resi'];
        $tanggal_resi = $data['tgl_resi'];
        $nama_pengirim = $data['nama_pengirim'];
        $alamat_pengirim = $data['alamat_pengirim'];
        $nomor_hp_pengirim = $data['no_hp_pengirim'];
        $jenis_barang = $data['jenis_barang'];
        $jenis_paket = $data['jenis_paket'];
        $berat_barang = $data['berat_barang'];
        $nama_penerima = $data['nama_penerima'];
        $alamat_penerima = $data['alamat_penerima'];
        $nomor_hp_penerima = $data['no_hp_penerima'];
        $total_biaya = $data['total_biaya'];

        if (empty($nomor_resi) || empty($tanggal_resi) || empty($nama_pengirim) || empty($alamat_pengirim) || empty($nomor_hp_pengirim) || empty($jenis_barang) || empty($jenis_paket) || empty($berat_barang) || empty($nama_penerima) || empty($alamat_penerima) || empty($nomor_hp_penerima) || empty($total_biaya)) {
            $msg = "Data Tidak Boleh Kosong";
            return $msg;
        } else {
            $query = "INSERT INTO pengiriman_paket (`no_resi`, `tgl_resi`, `nama_pengirim`, `alamat_pengirim`, `no_hp_pengirim`, `jenis_barang`, `jenis_paket`, `berat_barang`, `nama_penerima`, `alamat_penerima`, `no_hp_penerima`, `total_biaya`)
                VALUES ('$nomor_resi','$tanggal_resi','$nama_pengirim','$alamat_pengirim','$nomor_hp_pengirim','$jenis_barang','$jenis_paket','$berat_barang','$nama_penerima','$alamat_penerima','$nomor_hp_penerima','$total_biaya')";

            $result = $this->db->insert($query);

            if ($result) {
                $msg = "Pendaftaran Berhasil!";
                return $msg;
            } else {
                $msg = "Maaf Pendaftaran Gagal!";
                return $msg;
            }
        }
    }


    public function allinfo(){
        $query = "SELECT * FROM pengiriman_paket ORDER BY id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function getinfoById($id){
        $query = "SELECT * FROM pengiriman_paket WHERE id = '$id'";
        $result = $this->db->select($query);
        return $result;
    }

    //update
    public function databaru($data, $file, $id){
        $nomor_resi = $data['no_resi'];
        $tanggal_resi = $data['tgl_resi'];
        $nama_pengirim = $data['nama_pengirim'];
        $alamat_pengirim = $data['alamat_pengirim'];
        $nomor_hp_pengirim = $data['no_hp_pengirim'];
        $jenis_barang = $data['jenis_barang'];
        $jenis_paket = $data['jenis_paket'];
        $berat_barang = $data['berat_barang'];
        $nama_penerima = $data['nama_penerima'];
        $alamat_penerima = $data['alamat_penerima'];
        $nomor_hp_penerima = $data['no_hp_penerima'];
        $total_biaya = $data['total_biaya'];
    
        if (empty($nomor_resi) || empty($tanggal_resi) || empty($nama_pengirim) || empty($alamat_pengirim) || empty($nomor_hp_pengirim) || empty($jenis_barang) || empty($jenis_paket) || empty($berat_barang) || empty($nama_penerima) || empty($alamat_penerima) || empty($nomor_hp_penerima) || empty($total_biaya)) {
            $msg = "Data Tidak Boleh Kosong";
            return $msg;
        } else {
            $query = "UPDATE pengiriman_paket SET no_resi='$nomor_resi',tgl_resi='$tanggal_resi',nama_pengirim='$nama_pengirim',alamat_pengirim='$alamat_pengirim',
                no_hp_pengirim='$nomor_hp_pengirim',jenis_barang='$jenis_barang',jenis_paket='$jenis_paket',berat_barang='$berat_barang',nama_penerima='$nama_penerima',alamat_penerima='$alamat_penerima',no_hp_penerima='$nomor_hp_penerima',total_biaya='$total_biaya' WHERE id ='$id'";
    
            $result = $this->db->insert($query); 
    
            if ($result) {
                $msg = "Perubahan Berhasil!";
                return $msg;
            } else {
                $msg = "Maaf Perubahan Gagal!";
                return $msg;
            }
        }
    }
    
    //delete
    public function delInfor($id){
        $del_query = "DELETE  FROM pengiriman_paket WHERE id = '$id'";
        $del = $this->db->delete($del_query);
        if ($del) {
            $msg = "Data Berhasil Dihapus!";
            return $msg;
        } else {
            $msg = "Data Gagal Dihapus!";
            return $msg;
        
        }
    }

}
