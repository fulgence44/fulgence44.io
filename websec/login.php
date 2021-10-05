
<html>
<head>
<title>User Login</title>
<script type="text/javascript">
    function send(){
        location.href='form.php';
    }
</script>
</head>
<body>
<form  method="post" action="loginget.php" align="center">
<div class="message"></div>
<h3 align="center">Login Form</h3>
 email:<br>
 <input type="text" name="email" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" >
 <br>
 Password:<br>
<input type="password" name="psw" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>">
<br><br>

        <div><input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
        <label for="remember-me">Remember me</label><br><br>
<input type="submit" name="submit" value="Login">
<h4>If you don't have account Signup</h4>
<input type="button" name="submit" onclick="send()" value="SignUp" >
</form>
</body>
</html>