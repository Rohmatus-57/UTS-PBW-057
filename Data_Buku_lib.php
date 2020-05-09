<?php 
 
class databuku{
 
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "perpustakaan";
 
	function __construct(){
		mysql_connect($this->host, $this->uname, $this->pass);
		mysql_select_db($this->db);
	}
 
	function tampil_data(){
		$data = mysql_query("SELECT * from tb_buku");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
 
	}
 
	function input($kode,$judul,$pengarang,$jenis,$penerbit){
		mysql_query("insert into tb_buku values('','$kode','$judul','$pengarang','$jenis','$penerbit')");
	}

	function edit($id){
		$data=mysql_query("SELECT* from tb_buku WHERE id='$id'");
		while($x=mysql_fetch_array($data)){
			$hasil[]=$x;
		}
		return $hasil;
	}

	function update($kode,$judul,$pengarang,$jenis,$penerbit){
		mysql_query("UPDATE tb_buku SET kode='$kode',judul='$judul',pengarang='$pengarang',jenis='$jenis',penerbit'$penerbit' WHERE id='$id'")
	}

	function hapus($id){
		mysql_query('DELETE FROM tb_buku WHERE id='$id'"");
	}
 
?>