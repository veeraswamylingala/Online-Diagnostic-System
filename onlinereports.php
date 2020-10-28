<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  div.part12  input[type="text"],input[type="email"],input[type="date"]
    {
      padding: 4px 6px; 
        text-decoration: none;
    }
.navbar {
  overflow:hidden;
    position: relative;
  background-color:gray;
  font-family: Arial, Helvetica, sans-serif;
    margin-top: 45px;
    margin-left: -10px;
 margin-right: -10px;   
}
body{
background-repeat:no-repeat;
background-size:cover;
}

.left a {
  float: left;
  font-size: 19px;
  color:azure;
    font-family:serif;
  text-align: center;
  padding: 10px 25px;
  text-decoration: none;
margin-top: 0px;
}
.left h3
    {
        color: ;
        font-size: 24px;
        margin-top: 0px;

    }
.dropdown {
  float: left;
  overflow: hidden;
}
    div.temp1
    {
        max-width: 100%;
        float: right;
        margin-top: -150px;
    }
    div.temp3
    {
    margin-left: 850px;
        margin-top: -10px;
    }
    div.temp4
    {
    margin-left: 900px;
    margin-top:0px
        
    }

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn  {
  background-color:#3cb371;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
    div.part1
    {
        position:absolute;
    }
    div.part2
    {
        width: 1250px;
        height: 500px;
        background-color:azure;
    }
     div.part3
    {
        width: 1250px;
        height: 500px;
        background-color:azure;
    }
div.bottom
    {
        background-color:darkgray;
        height: 200px;
        width: 1350px;
        margin-bottom: 0px;
    }
    div.bottom h4
    {
          font-family:serif;
    }
.dropdown-content a:hover {
  background-color: #ddd;
}
    div.part12
    {
        height: 370px;
        width: 400px;
        background-color:rgb(192,192,192,0.7);
        margin-top: -410px;
        position: absolute;
        margin-left: 800px;
    }
div.title img
    {
        margin-left: 330px;
    }
    div.title h2
    {
        margin-top: -70px;
        font-family:serif;
        font-size: 30px;
        font-style:normal;
        color:darkslategrey;
    }
    div.title input[type="button"]
    {
        padding: 10px 40px;
    background:#B03A2E ;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        
    margin-top:0px;
    margin-left:0px;
    color: #ffff;  font-family:serif;
    border: none;font-size:15px;                      
    text-decoration:none;
border:3px solid #0000;
        margin-left: 0px;
    }
    div.title table
    {
        margin-left: 950px;
        margin-top: -85px;
        
    }

.show {
  display: block;
}
</style>
</head>
<body style="background-color:azure;">
   
    <div class="title">
        <img src="Images/LogoHospital.PNG" height="80px" width="80px;">
    <center><h2>Srivishanavi Diagnostic Center.</h2>
    </center>
        <table class="table1" border="0">
            <tr><td>
              <a href="feed.php"><input type="button" value="Feedback"></a></td>
                <td><a href="viewfeedback.php"><input type="button" value="ViewFeedback"></a></td></tr></table>
            
    </div>
<div class="navbar">
    <div class="left">

    
  <a href="home.php" >Home</a>
  <a href="services.php">Services</a>
        
      <a href="test.php">Tests</a>
<a href="about.php">About</a>
  <a href="contact.php">Contact </a>
 

    
    
        </div>
    <div class="right">
          <div class="temp3">
         <a href="Onlinereports.php">
         <input type="button" value="OnlineReports" style=" padding: 10px 40px;
    background:#3cb371;
    margin-top:10px;
    color: #ffff;  font-family:serif;
    border: none;font-size:15px;                      
    cursor: poniter;
    text-decoration:none;
border:3px solid #0000;">
                          
</a>
              <?php
              session_start();
              ?>
               <?php
            if(isset($_SESSION["uname"]))
        { 
            ?>
    
             <a href="logout.php">
              <input type="button" value="Logout" style=" padding: 10px 40px;
    background:#3cb371;
    margin-top:0px;
    margin-left:0px;
    color: #ffff;  font-family:serif;
    border: none;font-size:15px;                      
    text-decoration:none;
border:3px solid #0000;">
              </a>
            <?php
            }
        else
        {   
            ?>
                      <a href="login.html">
              <input type="button" value="Login" style=" padding: 10px 40px;
    background:#3cb371;
    margin-top:0px;
    margin-left:0px;
    color: #ffff;  font-family:serif;
    border: none;font-size:15px;                      
    text-decoration:none;
border:3px solid #0000;">
              </a>
        <?php
        }   
    
        ?>
              <div class="userlogo" style="margin-left:330px;margin-top:-43px;">
              <?php
            if(isset($_SESSION["uname"]))
        { 
            ?>
    <img src="Images/user_male2-512.png" height="43px" width="43px" style=" 
    margin-top:0px;
    margin-left:0p      
    border:3px solid #0000;">
     
            <?php
            }
        else
        {   
        ?>
        <?php
        }   
    
        ?>
             </div>

             
        </div>
        
       

             
        </div>
        
        
        
        
  
        
   
    </div>
    </div>
    <style>
        .box
        {
            background-color: cadetblue;
            height: 300px;
            width: 1200px;
    margin-left: 20px;
            border-radius: 30px;
                
        }
        .box table
        {
        margin-left: 20px;
        }
        </style>

    <div class="part3">
      <br>
        
     <div class="box" ><br><br>
            <table  border="0"><tr><td>Enter Your Email:</td><td>
                    <input type="email" name="email" required></td><td>
           <a href="onlinereports1.php">
               <input type="button" value="GO" style="background:green;padding:4px;color:white;width:50px;margin-left:8px;"></a></td></tr></table><br>
           
    
           
           
           
           
           
           
           </div>
   <br>
    <div class="bottom">
        <br>
       <center> <h4>  Copy Right2019 By DiagnosisCenter AllRightsReserved.</h4> 
           <h5>------------Designed and Developed by &copy;VeeTechnology</h5></center>
    </div>
        
       
             
    </div> 
</html>

