<?php
include("koneksi.php");

	
	$nama = $_POST['nama'];
	$nip = $_POST['nip'];
	$pangkat = $_POST['pangkat'];
	$jabatan = $_POST['jabatan'];
	$struktur = $_POST['struktur'];
	$unit = $_POST['unit'];

	$query = mysql_query("insert into dosen_pengesah values('','$nama','$nip','$pangkat','$jabatan','$struktur','$unit')");
	header("location:form_dosenpengesah_view.php");
?>