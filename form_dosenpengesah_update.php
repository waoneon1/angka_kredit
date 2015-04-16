<?php
	include("koneksi.php");

	$id=$_POST['id'];
	$nama = $_POST['nama'];
	$nip = $_POST['nip'];
	$pangkat = $_POST['pangkat'];
	$jabatan = $_POST['jabatan'];
	$struktur = $_POST['struktur'];
	$unit = $_POST['unit'];

	$query = mysql_query("update dosen_pengesah set nama='$nama', nip='$nip', pangkat='$pangkat', jabatan='$jabatan', struktur='$struktur', unit='$unit' where id='$id'");

	header("location:form_dosenpengesah_view.php");
?>

