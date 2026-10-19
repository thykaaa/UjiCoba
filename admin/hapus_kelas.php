<?php
include_once "../src/koneksi.php"

// Membaca variabel Kode pada URL (alamat browser)
if(isset($_GET['id_kelas'])){
	$id_kelas	= $_GET['id_kelas'];

	// Hapus data sesuai Kode yang terbaca
	$sql = mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas='$id_kelas'");
	if($sql){
		// Refresh halaman
        echo "Data Berhasil Dihapus";
	}
}
else {
	// Jika tidak ada data Kode ditemukan di URL
	echo "<b>Data yang dihapus tidak ada</b>";
}
?> 

