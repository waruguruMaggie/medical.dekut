<?php      
include('conn.php'); 
if(isset($_POST['delete']))
{
    $License = $_POST['License'];  
    

    $sql="delete from doctor where License = '$License'";
$result= mysqli_query($con, $sql);

if(($result)){
        header('Location:Home-page.php');
	echo '<script> alert("Doctor has been successfully deleted!!");</script>';

}
else{
    echo '<script> alert("Error could not delete!!Please confirm information before trying again");</script>';
}
}
 ?>