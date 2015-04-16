<!DOCTYPE>
<html>
<head>
<title>Jabatan Fungsional</title>
      <script src="js/jquery-1.9.1.js"></script>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <script src="js/bootstrap.min.js"></script>
      <script src="js/add_image.js"></script>
      <style>
      *{
            font-size: 12px;
      }
      </style>
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
      include "koneksi.php";
      $result = mysql_query("select * from data_dosen");

?>
<form name="form1" method="post" action="form_dosen_insert.php" enctype="multipart/form-data">
<div class="container-fluid">
<div class="row">
<div class="table-responsive"> 
      <table class="table table-striped table-borered" border="1">
            <tr align="center">
                  <th>No</th>
                  <th>Tgl Penilaian</th>
                  <th>Nama Dosen</th>
                  <th>NIDN</th>
                  <th>No Seri</th>
                  <!-- <th>Tempat Lahir</th> -->
                  <!-- <th>Tgl Lahir</th> -->
                  <th>JK</th>
                  <th>Pend Akhir</th>
                  <th>Pangkat</th>
                  <th>Jabatan</th>
                  <!-- <th>TMT</th> -->
                  <!-- <th>Fakultas</th> -->
                  <!-- <th>Masa Kerja (Lama)</th> -->
                  <!-- <th>Masa Kerja (Baru)</th> -->
                  <!-- <th>Unit</th> -->
                  <th>Usulan</th>
                  <th>Aksi</th>
            </tr>
            <?php
                        
                  $i=1;
                  while($buff = mysql_fetch_assoc($result)){
                  
            ?>
            <tr>
                  <td valign="middle" rowspan='3'><?php echo $i  ?></td>
                  <td valign="middle" rowspan='3'><?php echo $buff['tgl_penilaian']; ?></td>
                  <td valign="middle" rowspan='3'><?php echo $buff['nama_dosen']; ?></td>
                  <td valign="middle" rowspan='3'><?php echo $buff['nidn']; ?></td>
                  <td valign="middle" rowspan='3'><?php echo $buff['no_seri']; ?></td>
                  <!-- <td valign="middle" rowspan='3'><?php //echo $buff['tempat_lahir']; ?></td>
                  <td valign="middle" rowspan='3'><?php //echo $buff['tgl_lahir']; ?></td> -->
                  <td valign="middle" rowspan='3'><?php echo $buff['jenis_kelamin'][0]; ?></td>
                  <td valign="middle" rowspan='3'><?php echo $buff['pendidikan_akhir']; ?></td>
                  <td valign="middle" rowspan='3'><?php echo $buff['pangkat']; ?></td>
                  <td valign="middle" rowspan='3'><?php echo $JABATAN[$buff['jabatan']]; ?></td>
                  <!-- <td valign="middle" rowspan='3'><?php //echo $buff['tmt']; ?></td> -->
                  <!-- <td valign="middle" rowspan='3'><?php //echo $buff['fakultas']; ?></td> -->
                  <!-- <td valign="middle" rowspan='3'><?php //echo $buff['mk_lama']; ?></td>
                  <td valign="middle" rowspan='3'><?php //echo $buff['mk_baru']; ?></td> -->
                  <!-- <td valign="middle" rowspan='3'><?php //echo $buff['unit']; ?></td> -->
                  <td valign="middle" rowspan='3'><?php echo $JABATAN[$buff['usulan_jabatan']]; ?></td>
                  <td>
                        <div class="btn-group-vertical">
                              <a href="#" 
                              class="glyphicon glyphicon-list-alt"
                              data-toggle="tooltip" title="detail"></a>         
                        </div>
                        
                  </td>
            </tr>
            <tr>
                  <td>
                        <a href="form_dosen_edit.php?id=<?php echo $buff['id']; ?>" 
                        class="glyphicon glyphicon-cog"
                        data-toggle="tooltip" title="edit data"></a>
                  </td>
            </tr> 
            <tr>
                  <td>
                        <a href="form_dosen_delete.php?id=<?php echo $buff['id']; ?>" 
                        class="glyphicon glyphicon-remove"
                        data-toggle="tooltip" title="delete data"></a>
                  </td>
            </tr>
            <?php
            $i++;
                  }
            ?>
      </table>
      <a href="form_dosen_input.php" class=" btn btn-primary" role="button"
            data-toggle="tooltip" title="delete data"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
</div> 
</div> 
</div>    
</form>
<div id="detail" class="modal fade" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>
</html>
