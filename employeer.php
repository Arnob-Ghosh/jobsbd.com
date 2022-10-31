<?php
session_start();
$email=$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body style="margin-bottom: 100px;">


    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="employeer.php">Home</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                    <a class="nav-link" href="postjob.php">post jobs <span class="sr-only">(current)</span></a>
                </li>
            <li class="nav-item active">
                    <a class="nav-link" href="C_showjob.php">my jobs <span class="sr-only">(current)</span></a>
            </li>
            </ul>
 
        </div>
        <div class="logout">
           <a href="logout.php" class="btn btn-danger">Log out</a>
        </div>
    </nav>

    
       

    <script src="jquery-3.5.1.slim.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>