<?php
	include("koneksi.php");

	// Fungsi untuk Merubah susunan format tanggal
		function ubahformatTgl($tanggal) {
			$pisah = explode('/',$tanggal);
			$urutan = array($pisah[2],$pisah[1],$pisah[0]);
			$satukan = implode('-',$urutan);
			return $satukan;
		}

	$id=$_POST['id'];
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

	$ubahtgl = ubahformatTgl($tgl_penilaian,$tmt);

	$query = mysql_query("update data_dosen set tgl_penilaian='$tgl_penilaian', nama_dosen='$nama_dosen', 
		nidn='$nidn', no_seri='$no_seri', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', 
		pendidikan_akhir='$pendidikan_akhir', pangkat='$pangkat', jabatan='$jabatan', tmt='$tmt', fakultas='$fakultas', 
		mk_lama='$mk_lama', mk_baru='$mk_baru',unit='$unit',usulan_jabatan='$usulan_jabatan' where id='$id'");

	header("location:form_dosen_view.php");
?>

