<?php
session_start();
    include("dbcon.php");
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //somthing read
        $email = $_POST['email'];
		$password = $_POST['password'];
        
        if(!empty($email) && !empty($password))
        {
            //fetch from database
            $query = "SELECT email, password FROM job_seeker WHERE email = '$email' limit 1 ";
            $result = mysqli_query($conn, $query);

            if($result){
                if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					if(password_verify($password, $user_data['password']))
					{
                        $_SESSION['email'] = $user_data['email'];
                        
						header("Location:showjob.php");
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
            <h3>Job Portal</h3>
            <?php 
                if(isset($wrng_pass))
                {
                    echo '<h4 class= "wrng_pass" >' .$wrng_pass. '</h4>' ;
                }
            ?>
            <form method="POST">
                <div class="fill_box">
                    <h4>User Email: </h4>
                    <input type="emial" name="email" placeholder="Email">
                </div>
                <div class="fill_box">
                <h4>Password: </h4>
                    <input type="password" name="password" id="" placeholder="Password">
                </div>
                <div class="submit">
                    <input type="submit" value="Login">
                </div>
            </form>
            <div class="new_user">
                <p>Register as a Job Seeker! <span><a href="E_signup.php">SignUp Here!</a></span></p>
            </div>
            <p></p>
            
        </div>
    </div>



    
</body>
</html>