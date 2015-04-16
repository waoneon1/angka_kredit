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
	$matakuliah = $_POST['matakuliah'][$j];
    $tempat = $_POST['tempat'][$j];
    $semester = $_POST['semester'][$j];
    $sks = $_POST['sks'][$j];
    $keterangan = $_POST['keterangan'][$j];

		$bukti = $_FILES["fileToUpload"]['name'][$j][$i];

		$insert ="insert into pendidikan values('','$angka_kredit','$matakuliah','$tempat','$semester','$sks','$keterangan','$bukti')";
		$query = mysql_query($insert);

	}
}

/*header("location:data_admin.php");*/
?>