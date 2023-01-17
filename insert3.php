<?php      
include('conn.php'); 
if(isset($_POST['submit']))
{
    $specialization = $_POST['specialization']; 
    $name= $_POST['name'];
    $email = $_POST['email'];   
    $License = $_POST['License'];
    $telno=$_POST['telno'];

$sql1="INSERT INTO doctor(specialization,name,email,License,telno) VALUES('$specialization','$name','$email','$License','$telno')";
$result=mysqli_query($con,$sql1);

if(($result)){
        header('Location:Home-page.php');
	echo '<script> alert(" Registration successful!!! ");</script>';

}
else{
    include('Register-medic.php');
    echo '<script> alert("ERROR:Please insert correct values in all fields!!! ");</script>';

}
}
 ?>