<?php
include 'database.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$psw= sha1($_POST['psw']) ;


$sql= "insert into userform(fname,lname,email,password) values('$fname','$lname','$email','$psw')";

if ($conn->query($sql) === TRUE){
	echo "<script>location.href='login.php'</script>";
}
else
{
	echo "failed to register";
}
$conn->close();





?>