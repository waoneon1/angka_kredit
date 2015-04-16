<?php
include("koneksi.php");
mysql_query("DELETE from dosen_pengesah WHERE id='$_GET[id]'");
header("location:form_dosenpengesah_view.php");
?>