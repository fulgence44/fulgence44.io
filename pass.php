<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		form{
			text-align: center;
			color: blue;
			margin: 25px auto;
    padding: 20px;
    border: 5px solid #ccc;
    width: 500px;
    height: 500px;

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
<form  action="for1.php" method="POST">

	Email<br><br><br>
	<input type="text" name="email" placeholder="Your email" required=""><br><br>
	<button type="submit" name="submit">Recover Password</button><br><br>
	
</form>
</body>
</html>