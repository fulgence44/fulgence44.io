<?php
session_start();
include 'database.php';
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
 
    $_SESSION['ema']=$email;
    $_SESSION['code']=$code;

$code=mt_rand(100000,999999);
$status="Not verified";
$sql="insert into student (fname,lname,email,uname,pwd,code,status) values(?,?,?,?,?,?,?)";

	$to=$email;
    $from="From: kananif201@gmail.com";
    $subject="Verification Code for K&k ";
    $message =$code;
  
    $mailing = mail($to,$subject,$message,$from);


$st=mysqli_stmt_init($conn);
if(mysqli_stmt_prepare($st,$sql))
{
//echo "New record created successfully";
$slt="pinman".$pwd;
$hash=hash('sha1', $slt);
mysqli_stmt_bind_param($st,"sssssss",$fname,$lname,$email,$uname,$hash,$code,$status);
mysqli_stmt_execute($st);
//echo "<script>location.href='loginForm.php'</script>";
header('location:cd.php');
}
else{

echo "error:".$sql."<br>".$conn->error;

}

$conn->close();
?>