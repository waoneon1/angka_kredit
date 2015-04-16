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
<div style="width:600px;">
<form name="form1" method="post" action="form_dosen_insert.php" enctype="multipart/form-data">
<table class="table table-striped table-borered">
      <tr class="info">
      <td colspan="3">&nbsp;</td>
      </tr>

      <tr class="form-group">
      <td>Tanggal Penilaian</td>
      <td>:</td>
      <td><input type="text" name="tgl_penilaian" id="tgl_penilaian" class="tgl form-control"></td>
      </tr>

      <tr class="form-group">
      <td>Nama</td>
      <td>:</td>
      <td><input type="text" name="nama_dosen" id="nama_dosen" class="form-control"></td>
      </tr>

      <tr class="form-group">
      <td>NIP/NIDN</td>
      <td>:</td>
      <td><input type="text" name="nidn" id="nidn" class="form-control"></td>
      </tr>

      <tr class="form-group">
      <td>No Seri Karpeg</td>
      <td>:</td>
      <td><input type="text" name="no_seri" id="no_seri" class="form-control"></td>
      </tr>

      <tr class="form-group">
      <td>Tempat Lahir</td>
      <td>:</td>
      <td><input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"></td>
      </tr>

      <tr class="form-group">
      <td>Tanggal Lahir</td>
      <td>:</td>
      <td><input type="text" name="tgl_lahir" id="tgl_lahir" class="tgl form-control"></td>
      </tr>

      <tr class="form-group">
      <td>Jenis_kelamin</td>
      <td>:</td>
      <td>      
            <select name="jenis_kelamin" id="jenis_kelamin" onChange="pilih_type(this.value)" class="form-control">
            <option value="-">-</option>
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option>
            </select>                        
      </td>
      </tr>

      <tr class="form-group">
      <td>Pendidikan tertinggi</td>
      <td>:</td>
      <td>      
            <select name="pendidikan_akhir" id="pendidikan_akhir" onChange="pilih_type(this.value)" class="form-control">
            <option value="-">-</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
            </select>                        
      </td>
      </tr>

      <tr class="form-group">
      <td>Pangkat/Golongan Ruang</td>
      <td>:</td>
      <td>      
            <select name="pangkat" id="pangkat" onChange="pilih_type(this.value)" class="form-control">
            <option value="-">-</option>
            <option value="Penata Muda/IIIa">Penata Muda/IIIa</option>
            <option value="Penata Muda Tingkat I/IIIb">Penata Muda Tingkat I/IIIb</option>
            <option value="Penata/IIIc">Penata/IIIc</option>
            <option value="Penata Tingkat I/IIId">Penata Tingkat I/IIId</option>
            <option value="Pembina/IVa">Pembina/IVa</option>
            <option value="Pembina/IVb">Pembina/IVb</option>
            <option value="Pembina Utama Muda/IVc">Pembina Utama Muda/IVc</option>
            <option value="Pembina Utama Madya/IVd">Pembina Utama Madya/IVd</option>
            <option value="Pembina Utama/IVe">Pembina Utama/IVe</option>
            </select>                        
      </td>
      </tr>

      <tr class="form-group">
      <td>Jabatan Fungsional</td>
      <td>:</td>
      <td>      
            <select name="jabatan" id="jabatan" onChange="pilih_type(this.value)" class="form-control">
            <option value="-">-</option>
            <option value="Tenaga Pengajar">Tenaga Pengajar</option>
            <option value="Asisten Ahli">Asisten Ahli</option>
            <option value="Lektor">Lektor</option>
            <option value="Lektor Kepala">Lektor Kepala</option>
            <option value="Profesor">Profesor</option>
            </select>                        
      </td>
      </tr>

      <tr class="form-group">
      <td>TMT</td>
      <td>:</td>
      <td><input type="text" name="tmt" id="tmt" class="tgl form-control"></td>
      </tr>

      <tr class="form-group">
      <td>Fakultas/Jurusan</td>
      <td>:</td>
      <td><input type="text" name="fakultas" id="fakultas" class="form-control"></td>
      </tr>

      <tr class="form-group">
      <td>Masa Kerja Golongan (Lama)</td>
      <td>:</td>
      <td><input type="text" name="mk_lama" id="mk_lama" class="form-control"></td>
      </tr>

      <tr class="form-group">
      <td>Masa Kerja Golongan (Baru)</td>
      <td>:</td>
      <td><input type="text" name="mk_baru" id="mk_baru" class="form-control"></td>
      </tr>

      <tr class="form-group">
      <td>Unit Kerja</td>
      <td>:</td>
      <td><input type="text" name="unit" id="unit" class="form-control"></td>
      </tr>

      <tr class="form-group">
      <td>Diusulkan menjadi</td>
      <td>:</td>
      <td>      
            <select name="usulan_jabatan" id="usulan_jabatan" onChange="pilih_type(this.value)" class="form-control">
            <option value="-">-</option>
            <option value="Asisten Ahli">Asisten Ahli</option>
            <option value="Lektor">Lektor</option>
            <option value="Lektor Kepala">Lektor Kepala</option>
            <option value="Profesor">Profesor</option>
            </select>                        
      </td>
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
