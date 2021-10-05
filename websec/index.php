<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>


<?php
if($_SESSION["email"]) {
?>
Welcome To Our Site<?php echo '<br>'."Enjoy your time while you are Here".'<br>'. $_SESSION["email"].'<br>'.'<br>'; ?>. Click here to 
	<a href="logout.php"><button>Logout</button></a>
<?php
}else echo "<h1>Please login first .</h1>";

?>
</body>
</html>