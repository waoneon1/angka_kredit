<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysql_query("select * from dosen_pengesah");
while ($rows = mysql_fetch_assoc($query)) {
      $buff = $rows;
}
?>
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
<div style="width:600px;">
<form name="form1" method="post" action="form_dosenpengesah_update.php">
    <table class="table table-striped table-borered">
            
      <tr class="info">
      <td colspan="3">&nbsp;</td>
      </tr>

      <tr class="form-group">
      <td>ID</td>
      <td>:</td>
      <td><input type="text" name="id" id="id" class="form-control"  value="<?php echo $buff['id']; ?>" readonly></td>
      </tr>

      <tr class="form-group">
      <td>Nama</td>
      <td>:</td>
      <td><input type="text" name="nama" id="nama" class="form-control" value="<?php echo $buff['nama']; ?>"></td>
      </tr>

      <tr class="form-group">
      <td>NIP</td>
      <td>:</td>
      <td><input type="text" name="nip" id="nip" class="form-control" value="<?php echo $buff['nip']; ?>"></td>
      </tr>

      <tr class="form-group">
      <td>Pangkat/Golongan Ruang</td>
      <td>:</td>
      <td><input type="text" name="pangkat" id="pangkat" class="form-control" value="<?php echo $buff['pangkat']; ?>"></td>
      </tr>

      <tr class="form-group">
      <td>Jabatan Fungsional</td>
      <td>:</td>
      <td><input type="text" name="jabatan" id="jabatan" class="form-control" value="<?php echo $buff['jabatan']; ?>"></td>
      </tr>

      <tr class="form-group">
      <td>Jabatan Struktural</td>
      <td>:</td>
      <td><input type="text" name="struktur" id="struktur" class="form-control" value="<?php echo $buff['struktur']; ?>"></td>
      </tr>

      <tr class="form-group">
      <td>Unit Kerja</td>
      <td>:</td>
      <td><input type="text" name="unit" id="unit" class="form-control" value="<?php echo $buff['unit']; ?>"></td>
      </tr> 

      <tr class="info">
      <td colspan="3">&nbsp;</td>
      </tr>
         
      <tr>
      <td colspan="3" align="center">
      <input value="SIMPAN" name="submit" type="submit" class="btn btn-success"/>
      <input value="RESET" type="reset" class="btn btn-warning"/>
      <input value="KEMBALI" type="button"  onClick="self.history.back()" class="btn btn-danger">
      </td>
      </tr>

    </table>
            
</form>
</body>
