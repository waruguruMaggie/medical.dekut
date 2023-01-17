<?php      
    include('conn.php');
if(isset($_POST["EmailAddress"])){  
    $EmailAddress = $_POST['EmailAddress'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $EmailAddress = stripcslashes($EmailAddress);  
        $password = stripcslashes($password);  
        $EmailAddress= mysqli_real_escape_string($con, $EmailAddress);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from student where EmailAddress = '$EmailAddress' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
 if($count == 1){ 
		
			header('Location:Student-task-select.php');
			 echo '<script> alert("Login successful");</script>';
        }  
        }
               
?>  