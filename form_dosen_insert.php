<?php
include("koneksi.php");

// Fungsi untuk Merubah susunan format tanggal
	function ubahformatTgl($tanggal) {
		$pisah = explode('/',$tanggal);
		$urutan = array($pisah[2],$pisah[1],$pisah[0]);
		$satukan = implode('-',$urutan);
		return $satukan;
	}
	

$tgl_penilaian = $_POST['tgl_penilaian'];
$nama_dosen = $_POST['nama_dosen'];
$nidn = $_POST['nidn'];
$no_seri = $_POST['no_seri'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pendidikan_akhir = $_POST['pendidikan_akhir'];
$pangkat = $_POST['pangkat'];
$jabatan = $_POST['jabatan'];
$tmt = $_POST['tmt'];
$fakultas = $_POST['fakultas'];
$mk_lama = $_POST['mk_lama'];
$mk_baru = $_POST['mk_baru'];
$mk_baru = $_POST['mk_baru'];
$unit = $_POST['unit'];
$usulan_jabatan = $_POST['usulan_jabatan'];

// Cara penggunaan function ubahTgl
$ubahtgl = ubahformatTgl($tgl_penilaian,$tmt);

$query = mysql_query("insert into data_dosen values('','$tgl_penilaian','$nama_dosen','$nidn','$no_seri','$tempat_lahir','$tgl_lahir','$jenis_kelamin','$pendidikan_akhir','$pangkat','$jabatan','$tmt','$fakultas','$mk_lama','$mk_baru','$unit','$usulan_jabatan')");
header("location:form_dosen_view.php");
?>