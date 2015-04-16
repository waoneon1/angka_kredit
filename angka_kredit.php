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

session_start();
    function db_connect() {

        $db_host = "localhost";
        $db_name = "jabatan_fungsional";
        $db_user = "root";
        $db_pass = "";

        $con=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
        if (mysqli_connect_errno($con)) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }else{
            return $con;
        }
        mysqli_close($con);
    }

    $con = db_connect();
    //FILTER = JENJANGE DOSEN YANG LOGIN, 

   /* if(isset($_GET['ak'])) {
    	$_SESSION["angkaKredit"] .= ",".$_GET['ak'];
    	str_replace("array", "", $_SESSION["angkaKredit"]);
    } else if(isset($_GET['reset']) && $_GET['reset'] == 'ok') {
    	session_destroy();
    	$_SESSION["angkaKredit"] = "";
    }*/

    $pross = "SELECT  *  FROM angka_kredit WHERE id NOT IN (0".$_SESSION["angkaKredit"].")";
    $result = mysqli_query($con, $pross);
    echo $pross;

    while($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    	$row[] = $data;
    }
?>

<div class="table-responsive"> 
<a href="index.php?reset=ok">reset</a>
	<table class="table table-striped table-bordered">
	<?php 
	$unsur = '';
	foreach ($row as $key => $value) {
	if ($value['unsur'] != $unsur) {
		echo '<tr><td colspan="6">'.$value['unsur'].'</td></tr>';
		$unsur = $value['unsur']; ?>
		<tr>
			<td colspan="2">&nbsp;</td>
			<td>NO</td>
			<td>SUB UNSUR</td>
			<td>KEGIATAN</td>
			<td>JUMLAH</td>
			<td>SATUAN HASIL</td>
			<td>jabatan</td>
		</tr>
	<?php } ?>
	<tr>
		<td><a href="<?php echo $value['form'].'.php?id='.$value['id']; ?>">add</a></td>
		<td><?php echo $value['id']; ?></td>
		<td width="300"><?php echo $value['sub_unsur']; ?></td>
		<td><?php echo $value['kegiatan']; ?></td>
		<td><input name="ak" type="input"></td>
		<td><?php echo $value['satuan']; ?></td>
		<td><?php echo $value['id_jabatan']; ?></td>
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