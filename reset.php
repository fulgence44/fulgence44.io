<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function myFunction() {
  var x = document.getElementById("k");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function my() {
  var x = document.getElementById("l");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
	</script>
	<style type="text/css">
		form{
			background-color: sandybrown;
			text-align: center;
			color: blue;
			margin: 25px auto;
    padding: 20px;
    border: 5px solid #ccc;
    width: 600px;
    
    
		}
		button {
  background-color: greenyellow;
  color: sandybrown;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
  border-radius: 12px;
}
input {
    border: 2px solid #ccc;
    font-size: 1.5rem;
    font-weight: 100;
    font-family: 'Lato';
    padding: 19px;
}
	</style>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
	 $slct=$_GET['slct'];
	 if(empty($slct)){
	 	echo "You are not allowed to change Password";
	 }
	 else{

	 	?>
	 
<form action="for2.php" method="POST">
	New Password:<input type="password" placeholder="Enter Your New password" name="pass" id="k" required="" >
	<input type="checkbox" onclick="myFunction()">Show Password<br><br>
	Confirm Passord:<input type="password" placeholder="Re-nter password" name="npass" id="l" required="">
	<input type="checkbox" onclick="my()">Show password<br><br>
	<input type="hidden" name="slct" value="<?php echo $slct; ?>">
	<button type="submit" name="reset">Reset</button><br><br>
</form>
<?php }?>
</body>
</html>