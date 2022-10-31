<?php
session_start();

	include("dbcon.php");
    
    if(isset($_GET['jid'])){
        $id = $_GET['jid'];
        $v_query = "SELECT * FROM jobs WHERE id ='$id' ";
        $result = mysqli_query($conn, $v_query);
        $user_data= mysqli_fetch_array($result);
        $j_t=$user_data['jt'];
        $employee_no=$user_data['employee_needed'];
        $salaries=$user_data['salaries'];
        $duration=$user_data['duration'];
        $qualification = $user_data['qualification'];
        $Exp=$user_data['Exp'];
        $des = $user_data['des'];
        $sex=$user_data['sex'];
        $status = $user_data['stat'];
        $email= $_SESSION['email'];
    }
    else{
        echo "Not set";
    }

    if(isset($_POST['post'])){

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

         $update_query = "UPDATE jobs SET jt='$j_t',employee_needed='$employee_no',salaries='$salaries',duration='$duration',
         qualification='$qualification',Exp='$Exp',des='$des',sex='$sex',stat='$status' WHERE id ='$id'";
         $up_result = mysqli_query($conn,$update_query);

        if($up_result){
            echo "<script> alert('Record Updated.') </script>";
        }
        else{
            echo "Failed";
        }

    }
    
?>
<html>
<head>

</head>
<body>
  <div class="form-inner">
 <form action="" method="POST" class="postjob">		
</select>
            <br>
			<div class="field">

              <input type="text" value ="<?php echo $j_t;?>" name="jt" required>
            </div>
		     <br>
            <div class="field">
              <input type="text" name="employee_no" value="<?php echo $employee_no;?>" required>
            </div>
            <br>
            <div class="field">
              <input type="text" name="salaries" value="<?php echo $salaries;?>" required>
            </div>
            <br>
            <br>
            <div class="field">
              <input type="text" value="<?php echo $duration;?>" required name="duration">
            </div>
            <br>
			<div class="field">
              <input type="text" value="<?php echo $qualification;?>" name = "qualification"required>
            </div>
            <br>
			<div class="field">
              <input type="text" value="<?php echo $Exp;?>" name="Exp" required>
            </div>
		   <br>
           <div class="field">
              <input type="text" value="<?php echo $des;?>" name="des" required>
            </div>
		   <br>
           <select id="prefered sex" class="select-css" name= "sex">
                 <option>Male</option>
                 <option>Female</option>
                 <option>Male/Female</option>
           </select>

 
			<br>	
            <br>
            <div class="field">
              <input type="text" value="<?php echo $status;?>" name="Status" required>
            </div>	
			<br>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Post" name = "post">
            </div>
            <br>
            <a class="btn btn-primary" href="delete.php?jid=<?php echo $user_data['id'];?>">delete</a><br>
          </form>
        </div>
      </div>
    </div>


  </body>
</html>