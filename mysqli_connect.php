<?php

$servername = 'localhost';
$username= 'root';
$password = '';
$dataname = 'huynhleminhthuan';
$port = 3306;

$dbc = mysqli_connect($servername, $username, $password, $dataname, $port);


mysqli_report(MYSQLI_REPORT_ERROR);
ini_set('display_errors', 1);

?>