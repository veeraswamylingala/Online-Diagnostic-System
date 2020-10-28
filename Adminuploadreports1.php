<?php


$name=$_POST['name'];

$img1=$_POST['img1'];
$img2=$_POST['img2'];
$img3=$_POST['img3'];


$username="root";
$servername="localhost";
$password="";
$dbname="sri";
$temp=0;

$conn=new mysqli($servername,$username,$password,$dbname);

$sql = "INSERT INTO reports 
VALUES ('$name','$img1','$img2','$img3')";
 
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