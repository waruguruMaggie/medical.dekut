<?php      
include('conn.php'); 
if(isset($_POST['submit']))
{
    $Regno = $_POST['Regno'];  
    $EmailAddress = $_POST['EmailAddress'];   
    $password = $_POST['password'];

$sql1="INSERT INTO student(Regno,EmailAddress,password) VALUES('$Regno','$EmailAddress','$password')";
$result=mysqli_query($con,$sql1);

if(($result)){
        header('Location:Sign-in.php');
    echo '<script> alert(" Registration successful!!! ");</script>';

}
else{
    include('Signup.php');
    echo '<script> alert("ERROR:Please insert correct values in all fields!!! ");</script>';

}
}
 ?>