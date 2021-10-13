<?php 
if (isset($_POST['submit'])) {
	$email=$_POST['email'];
	$kan=0;
	include("database.php");
	$sql="select* from student where email=?";
$st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "statement has failed";
}
else{
  mysqli_stmt_bind_param($st,"s",$email);
  mysqli_stmt_execute($st);
  $select=mysqli_stmt_get_result($st);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['email']==$email)
    {
    $kan=$kan+1;
    $tokenem=$row['email'];
}
  }
}
  if($kan>=1){
	$slct=bin2hex(random_bytes(8));
	$token=random_bytes(32);

	$path="http://localhost/new/reset.php?slct=$slct";

	
     $sql1="delete from taker where email=?";
     $st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$sql1)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($st,"s",$email);
  mysqli_stmt_execute($st);
}
$ql="insert into taker(email,toke) values(?,?)";
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$ql)) {
 echo "statement failed";
}
else{
	
  mysqli_stmt_bind_param($st,"ss",$email,$slct);
  mysqli_stmt_execute($st);
}

$from = 'kananif201@gmail.com';
$to = $email;
$subject = 'Please Reset password';
$message = '<p>click this link to reset your password';
$message .= '<a href="'.$path.'</a></p>';
$headers = 'From: ' . $from;
$headers .= 'Reply-To: ' . $from;
$headers .= 'Content-type:text/html';
mail($to, $subject, $message, $headers);
echo "Message sent, check your Email";
//header("location:loginForm.php");
}
else{
	echo "Email not found";
}
}
?>
