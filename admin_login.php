<?php
session_start();
    include("dbcon.php");

    // $adminid = random_int(1000, 9999);
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //somthing read
        $id = $_POST['name'];
		$password = $_POST['password'];
        
        if(!empty($id) && !empty($password))
        {
            //fetch from database
            $query = "SELECT * FROM admin WHERE name = '$id' limit 1 ";
            $result = mysqli_query($conn, $query);

            if($result){
                if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					if($password== $user_data['password'])
					{
                        $_SESSION['id'] = $user_data['adminid'];
						header("Location:admin.php");
						die;
					}
                    else
                    $wrng_pass = "Wrong user_id or password!";
				}
                else
                $wrng_pass = "User does not exist!!";
            }
        }
        else
        $wrng_pass = "Wrong inputs!";
    }
?>

<html lang="en">
<head>
   
    <title>Login</title>
	<link rel="stylesheet" href="css/all.min.css" >
	<link rel="stylesheet" href="css/bootstrap.min.css" >
 	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login_home">
        <div id="login_window" class="login_window">
            <h3>Admin</h3>
            <?php 
                if(isset($wrng_pass))
                {
                    echo '<h4 class= "wrng_pass" >' .$wrng_pass. '</h4>' ;
                }
            ?>
            <form method="POST" class="form-control">
                <div class="fill_box">
                    <h4>Admin id: </h4>
                    <input type="text" name="name" placeholder="admin id">
                </div>
                <div class="fill_box">
                <h4>Password: </h4>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="submit">
                    <input type="submit" value="Login">
                </div>
            </form>
            <div class="reset_password">
                <p>forgot password? <span><a href="forgot_password.php">reset Here!</a></span></p>
            </div>
            <p></p>
        </div>
    </div>

    
</body>
</html>