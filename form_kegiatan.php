<form name="form" method="post" action="form_kagiatan.php" enctype="multipart/form-data">
  <table class="table table-striped table-borered">
  <tr class="info">
    <td colspan="3">&nbsp;</td>
  </tr>
  <?php 
  $form = 1;
  for ($i=0; $i < $form; $i++) { ?>
    <tr>
      <td colspan="3"><h3>Kagiatan <?php echo $i+1; ?></h3> </td>
    </tr>
    <tr class="form-group">
    <!-- inputan -->
      <td>Nama Kegiatan</td>
      <td width="5%">:</td>
      <td><input type="text" name="kagiatan[]" id="kagiatan" class="form-control" value="<?php echo (empty($kagiatan[$i])) ? '' : $kagiatan[$i]; ?>"></td>
    </tr>
    <tr class="form-group">
      <td>Tempat/Instansi</td>
      <td>:</td>
      <td><input type="text" name="tempat[]" id="tempat" class="form-control" value="<?php echo (empty($tempat[$i])) ? '' : $tempat[$i]; ?>"></td>
    </tr>
    <tr class="form-group">
      <td>Semester</td>
      <td>:</td>
      <td><input type="text" name="semester[]" id="semester" class="form-control" value="<?php echo (empty($semester[$i])) ? '' : $semester[$i]; ?>"></td>
    </tr>
    <tr class="form-group">
      <td>Tahun</td>
      <td>:</td>
      <td><input type="text" name="tahun[]" id="tahun" class="form-control" value="<?php echo (empty($tahun[$i])) ? '' : $tahun[$i]; ?>"></td>
    </tr>
    <tr class="form-group">
      <td>Tanggal</td>
      <td>:</td>
      <td><input type="text" name="tanggal[]" id="tanggal" class="form-control" value="<?php echo (empty($tanggal[$i])) ? '' : $tanggal[$i]; ?>"></td>
    </tr>
    <!-- <form action="upload.php" method="post" enctype="multipart/form-data"> -->
    <tr>
      <td><input type="file" name="fileToUpload[<?php echo $i; ?>][]" id="img<?php echo $i; ?>1" class="bakabon<?php echo $i; ?> form-control"></td>
      <td colspan="2"><input type="button" id="btnAdd<?php echo $i; ?>" class="btn btn-info addImg" value="Add"/>
      <input type="button" id="btnDel<?php echo $i; ?>" class="btn btn-danger removeImg" value="Remove" style="display:none"/></td>
    </tr>
    <tr class="info">
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
  <?php } ?>
  <tr>
    <td colspan="3" align="center">
      <input value="SIMPAN" name="submit" type="submit" class="btn btn-success"/>
      <input value="RESET" type="reset" class="btn btn-warning"/>
      <input value="KEMBALI" type="button"  onClick="self.history.back()" class="btn btn-danger">
    </td>
  </tr>
  </table>
</form>