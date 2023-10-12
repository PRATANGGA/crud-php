<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'a112214102');
class Database
{
	public $conn;
	function __construct()
	{
		$this->conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	}
	public function insProduk($id, $nama, $hrg, $jml, $ket,  $foto, $almt)
	{
		$sql = "insert into brg (id,nmbrg,hrg,stok,ket,foto,almt) values ('$id','$nama',$hrg,$jml,'$ket','$foto','$almt')";
		$hasil = $this->conn->query($sql);
		return $hasil;
	}
	public function produkAll()
	{
		$sql = "select * from brg";
		$hasil = $this->conn->query($sql);
		return $hasil;
	}
	public function getFoto($id)
	{
		$sql = "select foto from brg where id='$id'";
		$hasil = $this->conn->query($sql);
		while ($row = $hasil->fetch_assoc()) {
			$foto = $row['foto'];
		}
		return $foto;
	}
	public function produk($id)
	{
		$sql = "select * from brg where id='$id'";
		$hasil = $this->conn->query($sql);
		return $hasil;
	}
	public function updProduk($id, $nama, $hrg, $jml, $ket, $foto, $almt)
	{
		if ($foto == "")
			$sql = "update brg set nmbrg='$nama',hrg='$hrg',stok='$jml',ket='$ket',almt='$almt' where id='$id'";
		else
			$sql = "update brg set nmbrg='$nama',hrg='$hrg',stok='$jml',ket='$ket',foto='$foto',almt='$almt' where id='$id'";

		$hasil = $this->conn->query($sql);
		return $hasil;
	}
	public function delProduk($id)
	{
		$sql = "delete from brg where id=$id";
		$hasil = $this->conn->query($sql);
		return $hasil;
	}
}
