<!DOCTYPE>
<html>
<head>
<title>Jabatan Fungsional</title>
      <script src="js/jquery-1.9.1.js"></script>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <script src="js/bootstrap.min.js"></script>
      <script src="js/add_image.js"></script>

      <!--tanggal-->
      <link type="text/css" rel="stylesheet" href="development-bundle/themes/ui-lightness/ui.all.css" />      
      <script src="development-bundle/jquery-1.8.0.min.js"></script>
      <script src="development-bundle/ui/ui.core.js"></script>
      <script src="development-bundle/ui/ui.datepicker.js"></script>
      <script src="development-bundle/ui/i18n/ui.datepicker-id.js"></script>
      <script type="text/javascript">
            $(document).ready(function(){
                  $(".tgl").datepicker({
                        dateFormat : "dd/mm/yy",
                        changeMonth : true,
                        changeYear : true
                  });
            });
      </script>

</head>
<body>

<?php
      $sambung = mysql_connect("localhost", "root", "") or die ("Gagal konek ke server.");
      mysql_select_db("jabatan_fungsional") or die ("Gagal membuka database.");
?>

<form name="form1" method="post" action="form_dosen_insert.php" enctype="multipart/form-data">

<div class="table-responsive"> 
      <table width="109%" border="4" class="table table-striped table-borered">
            <tr>
                  <th width="15">ID</th>
                  <th width="62">Tgl Penilaian</th>
                  <th width="43">Nama Dosen</th>
                  <th width="32">NIDN</th>
                  <th width="26">No Seri</th>
                  <th width="53">Tempat Lahir</th>
                  <th width="33">Tgl Lahir</th>
                  <th width="54">Jenis Kelamin</th>
                  <th width="80">Pendidikan Akhir</th>
                  <th width="54">Pangkat</th>
                  <th width="53">Jabatan</th>
                  <th width="27">TMT</th>
                  <th width="57">Fakultas</th>
                  <th width="138">Masa Kerja (Lama)</th>
                  <th width="131">Masa Kerja (Baru)</th>
                  <th width="36">Unit</th>
                  <th width="53">Usulan Jabatan</th>
                  <th colspan="3">Aksi</th>
            </tr>
            <?php
                        
                  $query = "select * from data_dosen";
                  $result = mysql_query($query, $sambung);
                  
                  while($buff = mysql_fetch_array($result)){
                  
            ?>
            <tr align="center">
                  <td align="center"><?php echo $buff['id']; ?></td>
                  <td align="center"><?php echo $buff['tgl_penilaian']; ?></td>
                  <td align="center"><?php echo $buff['nama_dosen']; ?></td>
                  <td align="center"><?php echo $buff['nidn']; ?></td>
                  <td align="center"><?php echo $buff['no_seri']; ?></td>
                  <td align="center"><?php echo $buff['tempat_lahir']; ?></td>
                  <td align="center"><?php echo $buff['tgl_lahir']; ?></td>
                  <td align="center"><?php echo $buff['jenis_kelamin']; ?></td>
                  <td align="center"><?php echo $buff['pendidikan_akhir']; ?></td>
                  <td align="center"><?php echo $buff['pangkat']; ?></td>
                  <td align="center"><?php echo $buff['jabatan']; ?></td>
                  <td align="center"><?php echo $buff['tmt']; ?></td>
                  <td align="center"><?php echo $buff['fakultas']; ?></td>
                  <td align="center"><?php echo $buff['mk_lama']; ?></td>
                  <td align="center"><?php echo $buff['mk_baru']; ?></td>
                  <td align="center"><?php echo $buff['unit']; ?></td>
                  <td align="center"><?php echo $buff['usulan_jabatan']; ?></td>
                  <td width="66">
                        <a href="form_dosen_edit.php?id=<?php echo $buff['id']; ?>">edit</a>
                        <a href="form_dosen_delete.php?id=<?php echo $buff['id']; ?>">delete</a>
                  </td>
            </tr>
            <?php
                  }
                  mysql_close($sambung);
            
            ?>
      </table>
      <a href="form_dosen_input.php">tambah</a>
</div> 
       
</form>
</body>
