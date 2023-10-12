<?php
require_once 'Database.php';
include "uploadFoto.php";
$id = $_POST['tid'];
$nama = $_POST['tnama'];
$hrg = $_POST['thrg'];
$jml = $_POST['tjml'];
$ket = $_POST['tket'];
$almt = $_POST['talmt'];

if (upload_foto($_FILES["foto"])) {
  $foto = $_FILES["foto"]["name"];
  $db = new Database();
  $hasil = $db->insProduk($id, $nama, $hrg, $jml, $ket, $foto, $almt);
  if ($hasil) {
    header("location:produk.php");
  } else {
    echo "Penambahan data gagal..";
  }
} else {
  echo "Sorry, there was an error uploading your file.";
}
