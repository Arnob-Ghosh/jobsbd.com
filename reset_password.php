<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

	<link rel="stylesheet" href="css\style.css">
	<link rel="stylesheet" href="css\style-header.css">
    <title>Forgot password  </title>
<div class="form-inner">
    
          <form action="" method="POST" class="login">
           
            <div class="field">
              <input type="password" placeholder="Password" name = "pass1" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Retype Password" name = "pass" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Update" name = "Submit">
            </div>
          </from>
<?php
require 'dbcon.php';
if(isset($_POST['Submit'])){
    $pass1 = $_POST['pass1'];
    $len = strlen($pass1);
     $lowA = "a";
     $lowZ = "z";
     $uppA = "A";
     $uppZ = "Z";
     $number = 0;
     $number2 = 9;
     $strcnt = 0;
     $numbercnt = 0;
     $perfect_pass = 0;
     if($len>=8 && $len <18)
     {
         for($i = 0; $i<$len;$i++){

            if(($pass1[$i]>= $lowA && $pass1[$i]<=$lowZ ) || ($pass1[$i]>= $uppA && $pass1[$i]<=$uppZ ))
            {
                   $strcnt++;
            }
            elseif($pass1[$i]>=$number && $pass1[$i]<=$number2)
            {
               $numbercnt++;
            }
         }
        if($strcnt>0 && $numbercnt>0)
        {
         $perfect_pass = 1;
         $pass1 = ($pass1);
        }

     }


    $pass2 = ($_POST['pass']);
    session_start();
    $name=$_SESSION['name'];
    if($pass1 == $pass2 && $perfect_pass==1){
      $sql = "UPDATE admin SET  password='$pass1' where name = '$name'"; 
       $result=mysqli_query($conn,$sql);
    if($result){
       mysqli_query($conn,"delete from reset_pass where name='$name'");
        echo "<script>
  alert('Succesfully changed!!!');
  window.location.href='admin_login.php'
  </script>";
    }
   
    }

   else{
    if($perfect_pass==0)
    {
        echo "<script>
        alert('Password must grater than 8 charecters and must contain mix off number and alphabet');
         
        window.location.href='reset_password.php'
        </script>";
    }
    else{
    echo "<script>
  alert('Password and retype password don't match');
  window.location.href='reset_password.php'
  </script>";
    }
}
}
?>