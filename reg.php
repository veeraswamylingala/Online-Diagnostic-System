<?php

$uname=$_POST['uname'];
$gender=$_POST['gender'];
$emailid=$_POST['emailid'];
$pass=$_POST['pass'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$dob=$_POST['dob'];


$username="root";
$servername="localhost";
$password="";
$dbname="sri";
$temp=0;

$conn=new mysqli($servername,$username,$password,$dbname);

$sql = "INSERT INTO registration 
VALUES ('$uname','$gender','$emailid','$pass','$address','$city','$state','$pincode','$dob')";
 
    if(!$conn)
echo "connection error";
else if($conn->query($sql)==true)
{
echo "New record created successfully";
} 
else
  {
    echo "Error: ";
}
$conn->close();
?>