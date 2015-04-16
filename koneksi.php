<?php
//these variables are used for database connection
$host = "localhost";
$user = "root";
$pass = "";
$database = "jabatan_fungsional";

//connect to the database.
$db = mysql_connect($host, $user, $pass);
mysql_select_db ($database);  ?>