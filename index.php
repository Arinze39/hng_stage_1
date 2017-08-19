<?php
$servername = "localhost";
$username = "root";
$password = "";
$myDb = "hng_testdb";
$con = mysqli_connect($servername, $username, $password, $myDb);
$dbselect = mysqli_select_db($con,$myDb);
if (!$con) {
        die('could not connect: ' . mysql_error());
    }
?>
<html>
    <head>
        <title>HNG stage 1</title>
<style>
    body {background-color:lightgray}
        div.content {
            margin: 100px auto;
            width: 50%;
            padding: 50px;
            float: center
        }
        </style>
    </head>
<body>
<div class="content">
    <form enctype="multipart/form-data" action="" method="post">
                <label><b>FULLNAME</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="text"  name="fullname" required></p>
                
                <label><b>GENDER</b></label>           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="text" name="gender" required></p>
                
                <label><b>JOB</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="job" required></p>
                <button type="submit" name="submit" class="signupbtn">SUBMIT</button>
            </form>
    </div>
    <?php
        if (isset($_POST['submit'])) {
        $fullname = $_POST['fullname'];
        $gender = $_POST['gender'];
	    $job = $_POST['job'];         
			
        $query = "INSERT INTO `profile` (`FullName`, `Gender`, `Job`) VALUES('$fullname','$gender','job');";
        $result = mysqli_query($con,$query); 
        
        if($result){
            echo "successfull"; Display.php();
        }  
        else {
			var_dump($result);
             echo "Try Again" .mysql_error(); 
          }
   }
    ?>
    </body>
</html