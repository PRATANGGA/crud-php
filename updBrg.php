<?php
include "uploadFoto.php";
require_once 'Database.php';
$db = new Database();

$id = $_POST['tid'];
$nama = $_POST['tnama'];
$jml = $_POST['tjml'];
$hrg = $_POST['thrg'];
$ket = $_POST['tket'];
$almt = $_POST['talmt'];
$foto_lama = $_POST['foto_lama'];
$foto = "";
if (isset($_POST['ubah_foto'])) {
    if (upload_foto($_FILES["foto"])) {
        $foto = $_FILES["foto"]["name"];
        $hasil = $db->updProduk($id, $nama, $hrg, $jml, $ket, $foto, $almt);
        if ($hasil) {
            if (is_file("img/" . $foto_lama)) // Jika gambar ada
                unlink("img/" . $foto_lama);
        }
    } else {
        $qry = false;
        echo "foto gagal diupload";
    }
} else {
    $hasil = $db->updProduk($id, $nama, $hrg, $jml, $ket, $foto, $almt);
}
header("location:produk.php");
