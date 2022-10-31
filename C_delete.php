<?php
session_start();
include("dbcon.php");
$email=$_SESSION['email'];
     if(isset($_GET['uid'])){
     $id = $_GET['uid'];
     $query="DELETE FROM company WHERE  email = '$id'";

    $data=mysqli_query($conn,$query);

if($data)
{
    echo "<script>
    alert('Successfully deleted');
    window.location.href='admin.php'
    </script>";
}
else{
    echo "unavail to delete data from database ";
}
     }

?>