 <?php
session_start();


$name=$_POST['name'];
$email=$_POST['email'];
$phonenum=$_POST['phonenum'];
$testname=$_POST['testname'];
$datetime=$_POST['datetime'];
$city=$_POST['city'];


$username="root";
$servername="localhost";
$password="";
$dbname="sri";
$temp=0;
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
	echo "connection error";
$sql="insert into bookyourtest(name,email,phonenum,testname,datetime,city)
values('$name','$email','$phonenum','$testname','$datetime','$city')";
 
  
if($conn->query($sql)==true)
{
echo " sucessfull";
header("home.html");
}
 else
    echo "Error :";
$conn->close();
?>