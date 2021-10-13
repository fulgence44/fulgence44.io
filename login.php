
<?php
session_start();
include 'database.php';
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$slt="pinman".$pwd;
$hash=hash('sha1', $slt);
   $sql = "select *from student where uname = '$uname' and pwd = '$hash'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);   
        if($count == 1){ 

           header("location:home.php");
            if(!empty($_POST["remember"])) {
            setcookie ("uname",$_POST["uname"],time()+ 3600);
            setcookie ("pwd",$_POST["hash"],time()+ 3600);
           
            }
            $_SESSION['name']=$uname;
            $_SESSION['pass']=$hash; 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 

?>