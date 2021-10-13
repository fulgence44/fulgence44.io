<?php 
session_start();
if (!isset($_SESSION['name'],$_SESSION['pass'])) {
   header("location:loginForm.php");
}
$uname=$_SESSION['name'];
$pwd=$_SESSION['pass'];

 echo "<center><a  href=index.php>HOME</a> &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<a href=contact.php>CONTACT US</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=logout.php>LOGOUT</a> </center>";
             
            echo "<center><img src='web1.jpg'></center>"; 
            

 ?>
