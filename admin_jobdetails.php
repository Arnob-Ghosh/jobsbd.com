


<!DOCTYPE html>
<html lang="en">

<head>

<link rel="stylesheet" href="css/all.min.css" >
	<link rel="stylesheet" href="css/bootstrap.min.css" >
 	<link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- JOB SINGLE START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                                
                                <?php
                                
                                 session_start();
                                 include("dbcon.php");

                                //  $name=$_SESSION['name'];

                                 if(isset($_GET['jid'])){
                                    $id = $_GET['jid'];
                                 $sql = "SELECT * from jobs where id = '$id'";
                                 $result = mysqli_query($conn, $sql);
                                
                                 while($row = mysqli_fetch_array($result)){
                                ?>
    

    <table class="table table-hover table-dark">
                            <tr>
                                <td>Job title</td>
                                <td>employee needed</td>
                                <td>salary</td>
                                <td>qualification</td>
                                <td>experience</td>
                                <td>description</td>
                                <td>Sex</td>
                                <td>status</td>
                            </tr>
                           
                            <?php

                            ?>
                             <tr>
                                <td><?php echo $row['jt']; ?></td>
                                <td><?php echo $row['employee_needed']; ?></td>
                                <td><?php echo $row['salaries']; ?></td>
                                <td><?php echo $row['qualification']; ?></td>
                                <td><?php echo $row['Exp'] ; ?></td>
                                <td><?php echo $row['des']; ?></td>
                                <td><?php echo $row['sex']; ?></td>
                                <td><?php echo $row['stat']; ?></td>
                            </tr>
                          
                            

                        </table>
                    <?php
                    

                    
                        echo "<a class='btn btn-success' href='delete.php?jid=".$row['id']."'>delete Job</a>";
                        echo "<a class='btn btn-success' href='cv_view.php?jid=".$row['id']."'>view applications</a>";

                    
                    
                    
                     }}
                     
                    ?>



                   

                    <div class="row">
                        <div class="col-6">
                            <div class="job-single-social-icon text-center mt-4">
                                <a href="" class="text-white"><i class="mdi mdi-facebook facebook"></i></a>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="job-single-social-icon text-center mt-4">
                                <a href="" class="text-white"><i class="mdi mdi-google-plus google"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    

    

</body>
</html>