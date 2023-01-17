<?php      
include('conn.php'); 
if(isset($_POST['Regno']))
{
    $Regno= $_POST['Regno'];   
    $Diagnosis= $_POST['textarea'];  
    $License = $_POST['License'];

    $sql="INSERT INTO doctor_response(License,Regno,Diagnosis) VALUES('$License','$Regno','$Diagnosis')";
    $result= mysqli_query($con, $sql);

if(($result)){
        header('Location:Home-page.php');
	   echo '<script> alert("Thank you for responding");</script>';

}
else{
        echo '<script> alert("Error could not submit!!Please confirm information before trying again");</script>';
}
}
 ?>