<?php
$server='localhost';
$username='root';
$pwd='';
$db='web';

$conn= new mysqli($server,$username,$pwd,$db);
if ($conn->connect_error){
	die("Error occured".connect_error);
}

?>