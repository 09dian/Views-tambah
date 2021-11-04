<?php
$localhost = "localhost";
$server = "root";
$pass = "";
$db = "db_counter";

$konek = mysqli_connect($localhost, $server, $pass, $db) or die(mysqli_error($konek));
