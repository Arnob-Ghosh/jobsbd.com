<?php
		session_start();

		include("dbcon.php");
        if(isset($_GET['jid'])){
            $id = $_GET['jid'];
        }
        if(isset($_SESSION['email'])){
            $email=$_SESSION['email']; 
        }
        if(isset($_POST['submit'])){
            $filename = $_FILES['cv']['name'];
            $temp = $_FILES['cv']['tmp_name'];
            $folder = "cv/".$filename;
            $data = addslashes(file_get_contents($_FILES['cv']['tmp_name']));
            move_uploaded_file($temp,$folder);
      
            if(!empty($filename)){
              $query="INSERT INTO `applications`(job_id, file_name, email,cv) VALUES ('$id','$folder','$email','$data')";
              $result = mysqli_query($conn, $query);
            }
            else {
              echo "No image.";
            }
        }
    
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/all.min.css" >
	<link rel="stylesheet" href="css/bootstrap.min.css" >
 	<link rel="stylesheet" href="css/style.css">

 </head>
<body>
  <div class="container">
  <form  method="post" enctype="multipart/form-data">
          <h2 class=" mb-3 mt-3">apply for job</h2>
          <div class="form-group " >
          <input type="file" name="cv" />
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary " value="Save cv">
          </div> 
        </form>
	</div>

	
</body>
</html>