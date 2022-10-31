<html>
    <head>
    <link rel="stylesheet" href="css/all.min.css" >
	<link rel="stylesheet" href="css/bootstrap.min.css" >
 	<link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div>
<?php
  require 'dbcon.php';
  if(isset($_GET['jid'])){
    $id = $_GET['jid'];
    $query = "SELECT * FROM applications WHERE job_id ='$id' ";
    $result = mysqli_query($conn, $query);
    $user_data= mysqli_fetch_array($result);
     $i=0;

      while($data= mysqli_fetch_array($result))
       {
          $img = $data['file_name'];
          ?>
          <img style="width:50%;" src='<?php echo $img; ?>' alt="Insert Your Image Here">;

        <?php
           }
         $i++;
        }
  
     ?>
</div>


        </body>
        </html>

  


