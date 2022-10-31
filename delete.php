<?php
session_start();
include("dbcon.php");
$email=$_SESSION['email'];
     if(isset($_GET['jid'])){
     $id = $_GET['jid'];
     $query="DELETE FROM jobs WHERE id = $id";

    $data=mysqli_query($conn,$query);

if($data)
{
    echo "<script>
    alert('Successfully deleted');
    window.location.href='C_showjob.php'
    </script>";
}
else{
    echo "unavail to delete data from database ";
}
     }

?>