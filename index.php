

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SignUp Form</title>
	<style type="text/css">
  body{
    background-image: url(web2.jpg);
  margin: 50px auto;
    text-align: center;
    width: 100%;
		}
		
		button {
  background-color: greenyellow;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
  border-radius: 50%;
}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid green;
  border-radius: 4px;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

form {

  background: saddlebrown;
    margin: 20px auto;
    padding: 10px;
    border: 5px solid #ccc;
    width: 700px;
}
h2{
color: red;
}
	</style>
	<script type="text/javascript">
		function send(){
        location.href='loginForm.php';
    }
	</script>
</head>
<body><center>
<h2 >Signup To Create Your Account </h2>

<form action="signup.php" method="POST">
	First name:<input type="text" name="fname" required="required"><br><br>
	Last name:<input type="text" name="lname" required="required"><br><br>
	Email:<input type="text" name="email" required="required"><br><br>
	Username:<input type="text" name="uname" required="required"><br><br>
	Password:<input type="password" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 10 or more characters" name="psw" required><br><br>
	<button type="submit" name="signup">SignUp</button><br><br>
   <p> If you have already account please login here<br><br>
   	<input type="button" name="submit" onclick="send()" value="login" >
     
</form>
</center>
</body>
</html>