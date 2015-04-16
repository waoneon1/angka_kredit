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
<?php
      include("koneksi.php");
      // Cara penggunaan function ubahTgl
      // $ubahtgl = ubahformatTgl($tgl_penilaian,$tmt);
      $query = mysql_query("select * from data_dosen");
      while ($rows = mysql_fetch_assoc($query)) {
            $row[] = $rows;
      }
      // echo "<pre>"; var_dump($row); exit;
?>
<body>
<form name="form1" method="post" action="form_dosen_insert.php" enctype="multipart/form-data">

<div class="table-responsive"> 
      <table class="table table-striped table-borered" border="4">
            <tr>
            <?php foreach ($row[0] as $key => $value)
                echo "<th>$key</th>"; ?>      
            </tr>
            <?php foreach ($row as $keys => $values){
                  echo "<tr>";
                  foreach ($values as $k => $val) {
                        echo "<td>";
                        echo $val;
                        echo "</td>";
                  }
                  echo "<td>";
                  echo '<a href="form_dosen_edit.php?nidn='.$values['id'].'">edit</a>';
                  echo "</td>";
            }
                  echo "</tr>";
            ?>  
            
      </table>
</div> 
       
</form>
</body>
