<html lang="en">
<head>
<meta charset="utf-8" />
  <title>judul</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <script src="js/bootstrap.min.js"></script>
  <script src="js/npm.js"></script>
  <style>
	*{
	    font-size: 12px;
	}
  </style>
</head>
<body>
<?php
include "koneksi.php";
    //FILTER = JENJANGE DOSEN YANG LOGIN, 

   /* if(isset($_GET['ak'])) { 
    	$_SESSION["angkaKredit"] .= ",".$_GET['ak'];
    	str_replace("array", "", $_SESSION["angkaKredit"]);
    } else if(isset($_GET['reset']) && $_GET['reset'] == 'ok') {
    	session_destroy();
    	$_SESSION["angkaKredit"] = "";
    }*/
    if (isset($_GET['id'])) {
    	$idDosen = $_GET['id'];
    	//~ini buat select dosen
	    $pross = "SELECT * FROM data_dosen WHERE id=$idDosen";
	    $result = mysql_query($pross);
	    //echo $pross;
	    $dataDosen = mysql_fetch_assoc($result);
	    $jabatanDosen = $dataDosen['jabatan'];

	    $_SESSION['dosen'] = $dataDosen;
	    
    } else {
    	$idDosen = '';
    	$jabatanDosen = 4;		
    }

    $pross = "SELECT  *  FROM angka_kredit  where  id_jabatan <= $jabatanDosen";
    $result = mysql_query($pross);
    //echo $pross;

    while($data = mysql_fetch_assoc($result)) {
    	$row[] = $data;
    }

    if(!empty($dataDosen)){
    	echo '<a href="pilih_dosen.php" class="list-group-item">';
	    echo '<h5>NIDN : '.$dataDosen['nidn'].'</h5>';
	    echo '<h3>'.$dataDosen['nama_dosen'].'</h3>';
	    echo '<p>Jabatan : '.$JABATAN[$dataDosen['jabatan']].' / '.$dataDosen['pangkat'].'</p>';
	    echo '<p>Pengajuan : '.$JABATAN[$dataDosen['usulan_jabatan']].'</p>';
	    echo '</a>'; 
    }
    //echo "<pre>";print_r($row); exit;
?>

<div class="table-responsive"> 
<!-- <a href="index.php?reset=ok">reset</a> -->
	<table class="table table-striped table-bordered">
	<?php 
	$unsur = '';
	foreach ($row as $key => $value) {
	if ($value['unsur'] != $unsur) {
		echo '<tr><td colspan="8">'.$value['unsur'].'</td></tr>';
		$unsur = $value['unsur']; ?>
		<tr>
			<td  colspan="2">NO</td>
			<td>SUB UNSUR</td>
			<td>KEGIATAN</td>
			<td>JUMLAH</td>
			<td>SATUAN HASIL</td>
			<td>JABATAN</td>
		</tr>
	<?php } ?>
	<tr>
		<td><a href="<?php echo $value['form'].'.php?id='.$value['id']; ?>">add</a></td>
		<td><?php echo $value['id']; ?></td>
		<td width="300"><?php echo $value['sub_unsur']; ?></td>
		<td><?php echo $value['kegiatan']; ?></td>
		<td><input name="ak" type="input"></td>
		<td><?php echo $value['satuan']; ?></td>
		<td><?php echo $JABATAN[$value['id_jabatan']]; ?></td>
	</tr>
	<?php 
	}
	?>
	</table>
</div>
<?php 
/*echo "<pre>";
var_dump($row);	
echo "</pre>";*/
?>

</body>
</html>