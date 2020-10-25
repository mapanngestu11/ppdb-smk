<?php include 'koneksi.php';

$nama	= $_POST['nama'];
$no_hp	= $_POST['no_hp'];
$hal	= $_POST['hal'];
$pesan  = $_POST['pesan'];
$waktu  = date('h:i:s');
$tanggal = date('d-M-y');


$sql = "INSERT INTO `pesan` (`id_pesan`,`nama`,`no_hp`,`hal`,`pesan`,`tanggal`,`waktu`) VALUES
									 (NULL,'$nama','$no_hp','$hal','$pesan','$tanggal','$waktu')";
									 $tambahdata = mysqli_query($conn,$sql);

									  if (!$tambahdata) {
		
		echo "<script> alert ('Gagal Terkirim');window.location.href='index.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Pesan Anda telah terkirim, Terima Kasih $nama :)');window.location.href='index.php';</script>";		
	}




?>