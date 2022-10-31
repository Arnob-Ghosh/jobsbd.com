<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

<div class="form-inner">
    
          <form action="" method="POST" class="login">
           
            <div class="field">
              <input type="text" placeholder="Key" name = "keyy" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Submit" name = "Submit">
            </div>
          </from>
          </div>
</html>

<?php
require 'dbcon.php';
session_start();
$name = $_SESSION['name'];
if(isset($_POST['Submit'])){
 $key = $_POST['keyy'];
 $sql = "select name,keyy from reset_pass where name = '$name'&& keyy='$key'";
 $result = mysqli_query($conn,$sql);
 if($output=mysqli_num_rows($result)>0){
  echo "<script>
  window.location.href='reset_password.php';
  </script>";
 }
 else
 {
  echo "<script>
  alert('Wrong keyy!!!');
  window.location.href='keyy.php'
  </script>";
 }

}


?> 