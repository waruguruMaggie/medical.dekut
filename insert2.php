<?php      
include('conn.php'); 
if(isset($_POST['Specialisation']))
{
    $Regno= $_POST['Regno'];   
    $Specialisation= $_POST['Specialisation'];  
    $Symptoms= $_POST['Symptoms'];

    $sql="INSERT INTO student_info(Specialisation,Symptoms,Regno) VALUES('$Specialisation','$Symptoms','$Regno')";
    $result= mysqli_query($con, $sql);

if(($result)){
        header('Location:Responses.php');
	   echo '<script> alert("Please await response");</script>';

}
else{
        echo '<script> alert("Error could not submit!!Please confirm information before trying again");</script>';
}
}
 ?>