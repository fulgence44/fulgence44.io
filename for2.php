<?php 
if (isset($_POST['reset'])) {
	$slct=$_POST['slct'];

  $k=0;
	$pwd=$_POST['pass'];
	$pwdc=$_POST['npass'];

	 if ($pwd!=$pwdc) {
    echo '<script language="javascript">';
echo 'alert("Both passwords don not match");';
echo "\n";
  
header("location:reset.php?slct=$slct");
echo '</script>';
	}

	require "database.php";
$sql="select* from taker where toke=?";
$st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo " It can't be loaded";
}
else{
  mysqli_stmt_bind_param($st,"s",$slct);
  mysqli_stmt_execute($st);
  $select=mysqli_stmt_get_result($st);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['toke']==$slct)
    {
    $k=$k+1;
    $tokenem=$row['email'];
}
  }
  if ($k<1) {
 echo "please send your request again";
  }
  else
  {
$sql="select* from taker where email=?";
$st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo " failed";
}
else{
  mysqli_stmt_bind_param($st,"s",$tokenem);
  mysqli_stmt_execute($st);
  $select=mysqli_stmt_get_result($st);
  if (!$row=mysqli_fetch_assoc($select)) {
  	echo " error Occured!";
  }
  else
  {
  $sql="UPDATE student set pwd=? where email=?";
  $st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo " failed";
}
else{
	$nph=sha1($pwd);
  mysqli_stmt_bind_param($st,"ss",$nph,$tokenem);
  mysqli_stmt_execute($st);

  $sql="delete from taker where email=?";
     $st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "failed";
}
else{
  mysqli_stmt_bind_param($st,"s",$tokenem);
  mysqli_stmt_execute($st);
  echo "Password reset successfully";
  header("location:loginForm.php");
}	
  }

  	}
}
}}}
else
{
	header("location:index.php");
}
?>