<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>judul</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
    <script src="js/npm.js"></script>
</head>
<?php
include "koneksi.php";

    $query = mysql_query("select * from data_dosen");
    while ($rows = mysql_fetch_assoc($query)) {
          $row[] = $rows;
    }
    // var_dump($row); exit;
?>
<body>
<div class="container">
<h3>Dosen Yang Mengajukan Kenaikan Jabatan</h3>
    <div class="list-group" >
    <?php 
    foreach ($row as $key => $value) { 
        echo '<a href="angka_kredit.php?id='.$value['id'].'&jabatan='.$value['jabatan'].'" class="list-group-item list-group-item-warning">';
        echo '<h5 >NIDN : '.$value['nidn'].'</h5>';
        echo '<h3 class="list-group-item-heading">'.$value['nama_dosen'].'</h3>';
        echo '<p>Jabatan : '.$JABATAN[$value['jabatan']].' / '.$value['pangkat'].'</p>';
        echo '<p>Pengajuan : '.$JABATAN[$value['usulan_jabatan']].'</p>';
        echo '</a>';   
    } 
    ?>
    </div>
</div>
</body>
</html>