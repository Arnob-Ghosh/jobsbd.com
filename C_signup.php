<?php
session_start();

    include("dbcon.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){


        $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';

        //somthing was posted
        $user = $_POST['user'];
        if(isset($_POST['password'])){
            $password = $_POST['password'];
        }
        $email = $_POST['email'];
        $dateofbirth = $_POST['DOB'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $company = $_POST['company'];
        $hash = password_hash($password,PASSWORD_DEFAULT);
        
        if(!empty($user) && !empty($password))
        {
            if (preg_match($pattern, $email) === 1) 
            {
                if (strlen($password) >= 5){ 
                    
                    //save to database
                    $query = "INSERT INTO company(user, password, email, DOB, address, phone, gender,company) 
                    VALUES ('$user','$hash','$email','$dateofbirth','$address','$phone','$gender','$company')";
                    
                    if ($conn->query($query) === TRUE) {
                        
                        header("Location:C_login.php");
                        die;
                      } 
                      else {
                        $wrng_pass = "User already Registered.";
                      }

                }
                else
                    $wrng_pass = "Use bigger password.";
            }
            else
                $wrng_pass = "Enter valid email address.";
        }
        else
            $wrng_pass = "Please fill all information.";
    }

?>

<html lang="en">
<head>
   
    <title>SignUp</title>
	<link rel="stylesheet" href="css/all.min.css" >
	<link rel="stylesheet" href="css/bootstrap.min.css" >
 	<link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="login_home">
        <div id="signup_window" class="signup_window">
            <h3>Job Portal</h3>
            <?php 
                if(isset($wrng_pass))
                {
                    echo '<h4 class= "wrng_pass" >' .$wrng_pass. '</h4>' ;
                }
            ?>
            <form  method="POST">
                <div class="fill_box">
                    <h4>User: </h4>
                    <input type="text" name="user" placeholder="User" required>
                </div>
                <div class="fill_box">
                    <h4>Password: </h4>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                
                <div class="fill_box">
                    <h4>Email: </h4>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="fill_box">
                    <h4>Date of Birth: </h4>
                    <input type="date" name="DOB" placeholder="Date of Birth" required>
                </div>
                <div class="fill_box">
                    <h4>Gender: </h4>
                    <select name="gender" id="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="fill_box">
                    <h4> Address: </h4>
                    <input type="text" name="address" placeholder="Present Address" required>
                </div>
                <div class="fill_box">
                    <h4>Phone Number: </h4>
                    <input type="text" name="phone" placeholder="Phone Number" required>
                </div>
                <div class="fill_box">
                    <h4>Company: </h4>
                    <input type="text" name="company" placeholder="Name of your Company" required>
                </div>
                
                <div class="submit">
                    <input type="submit" value="Register">
                </div>
                
            </form>
            <div class="new_user">
                <p>Already an user? <span><a href="C_login.php">Login Here!</a></span></p>
            </div>
            
        </div>
    </div>

   
    
</body>
</html>