<?php
include("koneksi.php");

// Fungsi untuk Merubah susunan format tanggal
	function ubahformatTgl($tanggal) {
		$pisah = explode('/',$tanggal);
		$urutan = array($pisah[2],$pisah[1],$pisah[0]);
		$satukan = implode('-',$urutan);
		return $satukan;
	}
	

$form = $_POST['jmlForm'];

// Cara penggunaan function ubahTgl
for($j = 0; $j < sizeof($_FILES["fileToUpload"]["name"]) ; $j++){
	for($i = 0; $i < sizeof($_FILES["fileToUpload"]["name"][$j]) ; $i++){
	$angka_kredit = $_POST['angka_kredit'][$j];
	$judul = $_POST['judul'][$j];
    $tempat = $_POST['tempat'][$j];
    $tahun = $_POST['tahun'][$j];
    $keterangan = $_POST['keterangan'][$j];

		$bukti = $_FILES["fileToUpload"]['name'][$j][$i];

		$insert ="insert into pendidikan values('','$angka_kredit','$judul','$tempat','$tahun','','$keterangan','$bukti')";
		$query = mysql_query($insert);

	}
}

/*header("location:data_admin.php");*/
?>