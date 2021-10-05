<?php
include 'database.php';
$email=$_POST['email'];
$psw=sha1($_POST['psw']) ;
    session_start();
    if(count($_POST)>0) {
        $result = mysqli_query($conn,"SELECT * FROM userform WHERE email='$email' and password = '$psw'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["email"] = $row['email'];
        } 
        else
        {
            if($_POST['email']===$email && $_POST['psw']===$psw){
                $_SESSION['email']=$email;
                echo "<script>location.href='form.php'</script>";
            }
            else{
                echo "<script>alert('Incorrect username or password!!!!')</script>";
                echo "<script>location.href='login.php'</script>";
            }
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:index.php");
    }

  if(!empty($_POST["remember"])){   
    setcookie ("member_login",$email,time()+ (10 * 365 * 24 * 60 * 60));  
    setcookie ("member_password",$_POST['psw'],time()+ (10 * 365 * 24 * 60 * 60));
    $_SESSION["member_name"] = $email;
   }  
   else  
   {  
    if(isset($_COOKIE["member_login"]))   
    {  
     setcookie ("member_login","");  
    }  
    if(isset($_COOKIE["member_password"]))   
    {  
     setcookie ("member_password","");  
    }  
    
  else  
  {  
   $message = "Invalid Login";  
  } 
 }


?>