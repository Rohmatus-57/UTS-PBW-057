<?php
include "koneksi.php";

$id	= $_GET['id'];
$query = mysql_query("delete from meminjam where id_pinjam='$id'");
if ($query) {
	echo "<script>alert('data berhasil dihapus');document.location.href='pinjam.php'</script>\n";
} else {
	echo "<script>alert('data gagal dihapus');document.location.href='pinjam.php'</script>\n";
}
?>