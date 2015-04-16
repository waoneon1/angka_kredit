<!DOCTYPE>
<html>
<head>
<title>Jabatan Fungsional</title>
  <script src="js/jquery-1.9.1.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/add_image.js"></script>
  
  <!-- tanggal -->
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
  // untuk mendambah form & menyimpan inputan cekno ttp keliatan
    if(isset($_POST['add']) && $_POST['add'] == 'Add'){
        $form = $_POST['jmlForm'];
        $judul = $_POST['judul'];
        $keterangan = $_POST['keterangan'];

    //$bukti = $_POST['bukti'];
    } else {
      //ganti
        $form = 1;
        $judul[0]  = '';
        $keterangan[0]     = '';
    }

    //jika tombol simpan yg di tekan save ke database
    if(isset($_POST['submit']) && $_POST['submit'] == 'SIMPAN'){
      include 'upload.php';
      include 'form_@penelitian_insert.php';
    }
?>
<div style="width:700px;">
<form name="form" method="post" action="form_@penelitian.php" enctype="multipart/form-data">
<input type="hidden" id="angka_kredit"  name="angka_kredit"  value="<?php echo $_GET['id'];?>" />
  <table class="table table-striped table-borered">
  <tr class="warning">
    <td><input type="button" id="addform" class="btn btn-sm" value="Form" disabled /></td>
    <td width="300"><input type="number" name='jmlForm' min="1" max="30" class="form-control" value = "<?php echo $form; ?>" placeholder="Banyak Form . . ."></td>
    <td><input value="Add" name="add" type="submit" class="btn btn-info"/></td>
  </tr>
  </table>
  <table class="table table-striped table-borered">
  <tr class="info">
    <td colspan="3">&nbsp;</td>
  </tr>
  <?php for ($i=0; $i < $form; $i++) { ?>
    <tr>
      <td colspan="3"><h3>Penelitian <?php echo $i+1; ?></h3> </td>
    </tr>
    <tr class="form-group">
    <!-- inputan -->
      <td>Judul</td>
      <td width="5%">:</td>
      <td><input type="text" name="judul[]" id="judul" class="form-control" value="<?php echo (empty($judul[$i])) ? '' : $judul[$i]; ?>"></td>
    </tr>
    <tr class="form-group">
      <td>Keterangan</td>
      <td>:</td>
      <td><input type="text" name="keterangan[]" id="keterangan" class="form-control" value="<?php echo (empty($keterangan[$i])) ? '' : $keterangan[$i]; ?>"></td>
    </tr>
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
</div>