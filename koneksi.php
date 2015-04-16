<?php
//these variables are used for database connection
$host = "localhost";
$user = "root";
$pass = "";
$database = "jabatan_fungsional";

//connect to the database.
$db = mysql_connect($host, $user, $pass);
mysql_select_db ($database);  

//~data
$JABATAN = array(
	'-1'=> 'All',
	'0' => 'Pengajar',
	'1'=> 'Asisten Ahli', 
	'2'=> 'Lektor',
	'3'=> 'Lektor Kepala',
	'4'=> 'Profesor'
);

session_start();