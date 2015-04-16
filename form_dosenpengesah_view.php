<!DOCTYPE>
<html>
<head>
<title>Jabatan Fungsional</title>
      <script src="js/jquery-1.9.1.js"></script>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <script src="js/bootstrap.min.js"></script>
      <script src="js/add_image.js"></script>

</head>
<body>

<?php
      $sambung = mysql_connect("localhost", "root", "") or die ("Gagal konek ke server.");
      mysql_select_db("jabatan_fungsional") or die ("Gagal membuka database.");
?>

<form name="form1" method="post" action="form_dosenpengesah_insert.php" enctype="multipart/form-data">

<div class="table-responsive"> 
      <table width="109%" border="4" class="table table-striped table-borered">
            <tr>
                  <th width="15">ID</th>
                  <th width="62">Nama</th>
                  <th width="43">NIP</th>
                  <th width="32">Pangkat</th>
                  <th width="26">Jabatan</th>
                  <th width="53">Struktur</th>
                  <th width="33">Unit</th>
                  <th colspan="3">Aksi</th>
            </tr>
            <?php
                        
                  $query = "select * from dosen_pengesah";
                  $result = mysql_query($query, $sambung);
                  
                  while($buff = mysql_fetch_array($result)){
                  
            ?>
            <tr align="center">
                  <td align="center"><?php echo $buff['id']; ?></td>
                  <td align="center"><?php echo $buff['nama']; ?></td>
                  <td align="center"><?php echo $buff['nip']; ?></td>
                  <td align="center"><?php echo $buff['pangkat']; ?></td>
                  <td align="center"><?php echo $buff['jabatan']; ?></td>
                  <td align="center"><?php echo $buff['struktur']; ?></td>
                  <td align="center"><?php echo $buff['unit']; ?></td>
                  <td width="66">
                        <a href="form_dosenpengesah_edit.php?id=<?php echo $buff['id']; ?>">edit</a>
                        <a href="form_dosenpengesah_delete.php?id=<?php echo $buff['id']; ?>">delete</a>
                  </td>
            </tr>
            <?php
                  }
                  mysql_close($sambung);
            
            ?>
      </table>
      <a href="form_dosenpengesah_input.php">tambah</a>
</div> 
       
</form>
</body>
