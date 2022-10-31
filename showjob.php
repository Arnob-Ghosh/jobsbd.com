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
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search-btn">Search</button>

        </form>
        </div>
    </nav>
        <div class="row">
            <div class="col-lg-12">
                <div class="viewjob">
                            <?php
                             include("dbcon.php");
                             session_start();
                             $email=$_SESSION['email']; 
                             if(isset($_POST['search'])){
                                 $searchkey= $_POST['search'];
                                 $v_query = "SELECT * FROM jobs WHERE jt LIKE '$searchkey'";
                                 $v_result = mysqli_query($conn, $v_query);
                             }
                             else{
                                $v_query = "SELECT * FROM jobs  ";
                                $v_result = mysqli_query($conn, $v_query);
                             }
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
                        
                    </div>
                </div>
            </div>
        </div><br>
                            
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