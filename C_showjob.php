<html>
<head>
<link rel="stylesheet" href="css/all.min.css" >
	<link rel="stylesheet" href="css/bootstrap.min.css" >
 	<link rel="stylesheet" href="css/style.css">

</head>
<body style="margin-bottom: 100px;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Home</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0">
               
        </form>
        </div>
        <div class="logout">
           <a href="logout.php" class="btn btn-danger">Log out</a>
        </div>
    </nav>
        <div class="row">
            <div class="col-lg-12">
                <div class="viewjob">
                            <?php
                             include("dbcon.php");
                             session_start();
                             if(isset($_SESSION['email'])){
                             $email=$_SESSION['email']; 
                             $v_query = "SELECT * FROM jobs  where posted_by='$email'";
                                $v_result = mysqli_query($conn, $v_query);
                                $i=0;
                                 while($data= mysqli_fetch_array($v_result))
                                  {
                            ?>
                            
                            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                    <?php echo $data['jt']; ?>
                    
                    </div>
                    <div class="card-body">
                    <?php echo $data['salaries']; ?>
                        <a class="btn btn-primary" href="jobdetails.php?jid=<?php echo $data['id'];?>">click to view</a><br>
                         <br>
                        
                    </div>
                </div>
            </div>
        </div><br>
                            
                            <?php
                                      
                                    $i++;
                             }
                            }
                                ?>
                    </div>
                </div>

        </div>
    </div>

</body>
</html>