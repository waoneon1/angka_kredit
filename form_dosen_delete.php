<?php
include("koneksi.php");
mysql_query("DELETE from data_dosen WHERE id='$_GET[id]'");
header("location:form_dosen_view.php");
?>