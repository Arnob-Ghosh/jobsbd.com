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
     $sql="INSERT INTO jobs(posted_by, jt, employee_needed, salaries, duration, qualification, Exp, des, sex, stat, id)
      VALUES ('$email','$j_t','$employee_no','$salaries','$duration','$qualification','$Exp','$des','$sex','$status',NULL)";

        $result=mysqli_query($conn,$sql);
       if($result )
       {
         echo "<script>
         alert('Successfully inserted');
         window.location.href='employeer.php'
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

	<link rel="stylesheet" href="css\style.css">
    <title></title>
  </head>
  <body>
  


 <form action="" method="POST" class="postjob">		
            <br>
			<div class="field">
              <input type="text" placeholder="Job Title" name="jt" required>
            </div>
		     <br>
            <div class="field">
              <input type="text" placeholder="Employee Needed" name="employee_no" required>
            </div>
            <br>
            <div class="field">
              <input type="text" placeholder="Salaries" name="salaries" required>
            </div>
            <br>
            <br>
            <div class="field">
              <input type="text" placeholder="Duration" required name="duration">
            </div>
            <br>
			<div class="field">
              <input type="text" placeholder="Qualification" name = "qualification"required>
            </div>
            <br>
			<div class="field">
              <input type="text" placeholder="years of Experience" name="Exp" required>
            </div>
		   <br>
           <div class="field">
              <input type="text" placeholder="Description" name="des" required>
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
              <input type="text" placeholder="Status" name="Status" required>
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

