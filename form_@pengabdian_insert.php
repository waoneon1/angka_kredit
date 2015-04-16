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
		$angka_kredit = $_POST['angka_kredit'];
		$kegiatan = $_POST['kegiatan'][$j];
		$bentuk = $_POST['bentuk'][$j];
		$tempat = $_POST['tempat'][$j];
		$waktu = $_POST['waktu'][$j];
		$keterangan = $_POST['keterangan'][$j];

		$bukti = $_FILES["fileToUpload"]['name'][$j][$i];

		$insert ="insert into pengabdian values('','$angka_kredit','$kegiatan','$tempat','$waktu','$bentuk','$keterangan','$bukti')";
		$query = mysql_query($insert);

	}
}

/*header("location:data_admin.php");*/
?>