<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>


    <title>Forgot password  </title>
<div class="form-inner">
    
          <form action=" " method="POST" class="login">
           
            <div class="field">
              <input type="text" placeholder="Email Address" name = "name" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Submit" name = "Submit">
            </div>
          </from>
<?php
require 'dbcon.php';
if(isset($_POST['Submit']))
   {
       $name = $_POST['name'];
       $sql="select * from admin where name='$name'";
       $result=mysqli_query($conn,$sql);
       if($output=mysqli_num_rows($result) > 0)
       {     
           $key = (uniqid(rand(1,10)));
           session_start();
           $_SESSION['name']= $name;
           mysqli_query($conn,"insert into reset_pass values('$name','$key')");
           echo "<script>
           window.location.href='keyy.php'
           </script>";
       }
       else
       {
        echo "<script>
        alert('No account on this email!');
        window.location.href='forgot_password.php'
        </script>";
       }
   }


?>
</div>
</html>