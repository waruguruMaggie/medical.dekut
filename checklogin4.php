<?php      
    include('conn.php');
if(isset($_POST["EmailAddress"])){  
    $EmailAddress = $_POST['EmailAddress'];  
    $License = $_POST['License'];  
      
        //to prevent from mysqli injection  
        $EmailAddress = stripcslashes($EmailAddress);  
        $License = stripcslashes($License);  
        $EmailAddress= mysqli_real_escape_string($con, $EmailAddress);  
        $License = mysqli_real_escape_string($con, $License);  
      
        $sql = "select * from doctor where email = '$EmailAddress' and License= '$License'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
 if($count == 1){ 
		
			header('Location:view-messages.php');
			 echo '<script> alert("Login successful");</script>';
        }  
        }
               
?>  