<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="margin-bottom: 100px;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Home</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form method ="POST" class="form-inline my-2 my-lg-0">


        </form>
        </div>
    </nav>
        <div class="row">
            <div class="col-lg-12">
                <div class="viewjob">
                            <?php
                             include("dbcon.php");
                             session_start();
                            //  $name=$_SESSION['name']; 
                             
                                $v_query = "SELECT * FROM job_seeker  ";
                                $v_result = mysqli_query($conn, $v_query);
                             
                                $i=0;
                                 while($data= mysqli_fetch_array($v_result))
                                  {
                            ?>
                            
                            <table class="table table-hover table-dark">
                            <tr>
                                <td>Job seeker</td>
                                <td>email</td>
                                <td> </td>
                        
                            </tr>
                           
                            <?php

                            ?>
                             <tr>
                                <td><?php echo $data['user']; ?></td>
                                <td><?php echo $data['email']; ?></td>
                                <td><a class="btn btn-primary" href="E_delete.php?uid=<?php echo $data['email'];?>">delete</a></td>
                                
                            </tr>
                          
                            

                        </table>

                
                            
                            <?php
                                      }
                                    $i++;
                             
                                ?>
                    </div>
                </div>

        </div>
    </div>

</body>
</html>