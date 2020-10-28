    
<?php
session_start();
$x=$_SESSION['uname'];
$rating=$_POST['rating'];
$comment=$_POST['comment'];

$username="root";
$servername="localhost";
$password="";
$dbname="sri";

$conn=new mysqli($servername,$username,$password,$dbname);
$sql="insert into feedback values('$x','$rating','$comment')";
 
    if(!$conn)
echo "connection error";
else
if($conn->query($sql)==true)
{
    
echo "thank you for giving your FEEDBACK..!<br>
    <a href=viewfeedback.php>viewfeedback</a>"; 
}
else
  {
    echo "Error: ";
}
$conn->close();
?>