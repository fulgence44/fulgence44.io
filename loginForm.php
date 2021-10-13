<?php

include 'csrf.class.php';
 
$csrf = new csrf();
 
// Generate Token Id and Valid
$token_id = $csrf->get_token_id();
$token_value = $csrf->get_token($token_id);
if($csrf->check_valid('post')) {
  var_dump($_POST[$token_id]);
} 
?>


<?php include('database.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<script type="text/javascript">
		function sen() {
        location.href='index.php';
    }
	</script>
	<style type="text/css">

	
		body{
			background-color: blue;
			background-image: url(web1.jpg);

		}
		form {
    margin: 25px auto;
    padding: 20px;
    border: 5px solid #ccc;
    width: 500px;
    height: 500px;
    background: yellow;
}
input {
    border: 2px solid #ccc;
    font-size: 1.5rem;
    font-weight: 100;
    font-family: 'Lato';
    padding: 10px;
}
	button {
  background-color: blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
  border-radius: 12px;
}



	</style>
	
</head>
<center>
<body >
<h3 style="color: pink;text-align: center; font-size: 300%;">Login Form</h3>
<form action="login.php" method="POST">
	Username:<input type="text" placeholder="Enter a username" name="uname" value="<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["uname"]; } ?>"><br><br>
	Password:<input type="password" placeholder="Enter password" name="pwd" value="<?php if(isset($_COOKIE["pwd"])) { echo $_COOKIE["pwd"]; } ?>"><br><br>
	<button type="submit" name="login">Login</button><br><br>
   <a href="pass.php">Forgot Password?</a>
	<p><input type="checkbox" name="remember" checked="checked"> Remember me</p><br>
   <p> you don't have account?  </p>
   <input type="button" name="submit" onclick="sen()" value="SignUp" >

</form>
</center>
</body>
</html>
