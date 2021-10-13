<?php 
session_start();
if (!isset($_SESSION['name'],$_SESSION['pass'])) {
   header("location:loginForm.php");
}
 ?>
 <<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 	<style type="text/css">
 		

 		
 		form {

  background: skyblue;
    margin: 20px auto;
    padding: 10px;
    border: 5px solid #ccc;
    width: 900px;
}
 	</style>
 </head>
 <body>
 <center>
 
<form>

<table style="width:100%;max-width:550px;border:0;" cellpadding="8" cellspacing="0">
<tr> <td>
<label for="Name">Name*:</label>
</td> <td>
<input name="Name" type="text" maxlength="60" style="width:100%;max-width:250px;" />
</td> </tr> <tr> <td>
<label for="PhoneNumber">Phone number:</label>
</td> <td>
<input name="PhoneNumber" type="text" maxlength="43" style="width:100%;max-width:250px;" />
</td> </tr> <tr> <td>
<label for="FromEmailAddress">Email address*:</label>
</td> <td>
<input name="FromEmailAddress" type="text" maxlength="90" style="width:100%;max-width:250px;" />
</td> </tr> <tr> <td>
<label for="Comments">Comments*:</label>
</td> <td>
<textarea name="Comments" rows="7" cols="40" style="width:100%;max-width:350px;"></textarea>
</td> </tr> <tr> <td>
* - required fields
</td> <td>

<input name="skip_Submit" type="submit" value="Submit" />

</td> </tr>
</table>
</form>
</center>
</body>
 </html>