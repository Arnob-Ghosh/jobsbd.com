<?php require 'dbcon.php' 
?>
<?php
  session_start();
   if(isset($_POST['post']))
   {
     $j_t=$_POST['jt'];
     $employee_no=$_POST['employee_no'];
     $salaries=$_POST['salaries'];
     $duration=$_POST['duration'];
     $qualification = $_POST['qualification'];
     $Exp=$_POST['Exp'];
     $des = $_POST['des'];
     $sex=$_POST['sex'];
     $status = $_POST['Status'];
     $email= $_SESSION['email'];
        $sql="INSERT INTO jobs(posted_by, jt, employee_needed, salaries, duration, qualification, Exp, des,sex, Status) 
        VALUES ( '$email','$j_t','$employee_no','$salaries', '$duration', '$qualification','$Exp','$des','$sex','$status')";
        $result=mysqli_query($conn,$sql);
       if($result )
       {
         echo "<script>
         alert('Successfully inserted');
         window.location.href='postjob.php'
         </script>";
      
       }
       else
       {
        echo "<script>
        alert('Not inserted');
        window.location.href='postjob.php'
        </script>
        "; 
       }
    }
     
   
?> 
<!DOCTYPE html>
<html>
  <head>

  <link rel="stylesheet" href="css/all.min.css" >
	<link rel="stylesheet" href="css/bootstrap.min.css" >
 	<link rel="stylesheet" href="css/style.css">

    <title></title>
  </head>
  <body>
  <div class="form-inner">
 <form action="" method="POST" class="postjob">		
</select>
            <br>
			<div class="field">
            <?php
                                 require 'dbcon.php';
                                 session_start();
                                 $email=$_SESSION['email'];
                                 if(isset($_GET['jid'])){
                                    $id = $_GET['jid'];
                                 $sql = "SELECT * from jobs where id = '$id'";
                                 $result = mysqli_query($conn, $sql);
                                 while($row = mysqli_fetch_array($result)){
                                ?>
              <input type="text" value ="Job Title" name="jt" required>
            </div>
		     <br>
            <div class="field">
              <input type="text" value="Employee Needed" name="employee_no" required>
            </div>
            <br>
            <div class="field">
              <input type="text" value="Salaries" name="salaries" required>
            </div>
            <br>
            <br>
            <div class="field">
              <input type="text" value="Duration" required name="duration">
            </div>
            <br>
			<div class="field">
              <input type="text" value="Qualification" name = "qualification"required>
            </div>
            <br>
			<div class="field">
              <input type="text" placeholder="years of Experience" name="Exp" required>
            </div>
		   <br>
           <div class="field">
              <input type="text" value="Description" name="des" required>
            </div>
		   <br>
           <select id="preferd sex" class="select-css" name= "sex">
                 <option>Male</option>
                 <option>Female</option>
                 <option>Male/Female</option>
           </select>

 
			<br>	
            <br>
            <div class="field">
              <input type="text" value="Status" name="Status" required>
            </div>	
			<br>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Post" name = "post">
            </div>
          </form>
        </div>
      </div>
    </div>


  </body>
</html>