
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
        height: 480px;
        background-color:;
    }
     div.part3
    {
        width: 1300px;
        height: 320px;
        background-color:white;
    }
    div.part4
    {
         width: 1300px;
        height: 50px;
        background-color:;
    }
div.bottom
    {
        background-color:darkgray;
        height: 120px;
        width: 1340px;
        margin-top: 30px;
        
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
        margin-left: 310px;
    }
    div.title h2
    {
        margin-top: -70px;
        font-family:sans-serif;
        font-size: 30px;
        font-style:normal;
        color:black;
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
    <form method="post" action="bookyourtest.php">
    
    <div class="title">
        <img src="Images/LogoHospital.PNG" height="80px" width="80px;">
    <center><h2 style="margin-left:0px;">Srivyshnanvi Diagnostic Center</h2>
    </center>
        <table class="table1" border="0">
            <tr><td>
                <a href="feed.php"><input type="button" value="Feedback"></a></td>
                <td><a href="viewfeedback.php"><input type="button" value="ViewFeedback"></a></td></tr></table>
            
    </div>
<div class="navbar">    
    <div class="left">

    
  <a href="home.php" style="background:#3cb371">Home</a>
  <a href="services.php">Services</a>
        
      <a href="test.php">Tests</a>
<a href="about.php">About</a>
  <a href="contact.php">Contact </a>
        <?php
session_start();
         if(isset($_SESSION["uname"]))
        
           if($_SESSION['uname']=='Admin')
        { 
            ?>
<a href="Admin.php">
         Admin
</a>
     
            <?php
            }
        else
        {   
        ?>
              

        <?php
        }   
    
        ?>

                          
 

    
    
        </div>
    <div class="right">
          <div class="temp3">
              
              <?php
            if(isset($_SESSION["uname"]))
        { 
            ?>
<a href="Onlinereports.php">
         <input type="button" value="OnlineReports" style=" padding: 10px 40px;
    background:#3cb371;
    margin-top:10px;
    color: #ffff;  font-family:serif;
    border: none;font-size:15px;                      
    cursor: poniter;
    text-decoration:none;
border:3px solid #0000;"></a>
     
            <?php
            }
        else
        {   
        ?>
              
             <a href="login.html">
         <input type="button" value="OnlineReports" style=" padding: 10px 40px;
    background:#3cb371;
    margin-top:10px;
    color: #ffff;  font-family:serif;
    border: none;font-size:15px;                      
    cursor: poniter;
    text-decoration:none;
border:3px solid #0000;"></a>
        <?php
        }   
    
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
    <div class="part1">
                <img src="Images/img7.jpg" width="100%">
        <div class="part12">
        <center>  <h2 style="font-family:serif;color:azure;padding:10px;height:
    26px;margin-top:0px;width:220px;background:gray;p">Book your Test</h2>
    <input type="text" placeholder="Name*" name="name" required>
<input type="email" placeholder="Email*" name="email" required>
<input type="text" placeholder="MobileNumber*" name="phonenum" required><br>
<input type="text" placeholder="TestName*" name="testname" required><br>
<input type="datetime-local" placeholder="Date" name="datetime" required><br>
<input type="text" placeholder="City" name="city" required><br>
            <h5>You will get a Message within 2 Hrs from the time of Booking.
                <p>    *T&C – Free home sample collection is not available on specific tests. Pediatric home sample collection ( kids below 10 years age ) is available at specific cities only<br></p></h5>
            
            <?php
            if(isset($_SESSION["uname"]))
        { 
            ?>
            <input type="submit" value="Book" style="padding:10px 70px; background:#3cb371;
    color: #ffff;margin-top:-10px;  font-family:serif;
    border: none;font-size:15px;                      
    cursor: poniter;
border:3px solid #0000;">
     
            <?php
            }
        else
        {   
        ?>
            <h4 style="color:red;">---plz Login to Book Your Test--</h4>
        <?php
        }   
    
        ?>
  
            
            </center></div>
    </div>
    <div class="part2">
    
    </div>
    <div class="part3"><br>
        <marquee behavior="alternate"> 
        <img src="Images/502.jpg" height="250px" width="250px" style="radious:0px;  border: 10px solid rgb(216,216,216);">&nbsp;&nbsp;&nbsp;
        <img src="Images/503.jpg" height="250px" width="250px"style="radious:0px;   border: 10px solid rgb(216,216,216);"> &nbsp;&nbsp;&nbsp;
        <img src="Images/504.jpg" height="250px" width="250px" style="radious:0px;   border: 10px solid rgb(216,216,216);">&nbsp;&nbsp;&nbsp;
        <img src="Images/505.jpg" height="250px" width="250px" style="radious:0px;  border: 10px solid rgb(216,216,216);">&nbsp;&nbsp;&nbsp;
        <img src="Images/506.jpg" height="250px" width="250px" style="radious:0px;   border: 10px solid rgb(216,216,216);">
        <img src="Images/502.jpg" height="250px" width="250px" style="radious:0px;  border: 10px solid rgb(216,216,216);">&nbsp;&nbsp;&nbsp;
        <img src="Images/503.jpg" height="250px" width="250px"style="radious:0px;   border: 10px solid rgb(216,216,216);"> &nbsp;&nbsp;&nbsp;
        <img src="Images/504.jpg" height="250px" width="250px" style="radious:0px;   border: 10px solid rgb(216,216,216);">&nbsp;&nbsp;&nbsp;
        <img src="Images/505.jpg" height="250px" width="250px" style="radious:0px;  border: 10px solid rgb(216,216,216);">&nbsp;&nbsp;&nbsp;
        <img src="Images/506.jpg" height="250px" width="250px" style="radious:0px;   border: 10px solid rgb(216,216,216);"></marquee>
    </div><br><br><br>
    <div class="part4" style="margin-left:0px;">
        
        <div class="image" style="margin-left:200px;">
            <img src="Images/download.jpg" width="300" height="400"></div>
        
        <div class="text" style="hight:200px;width:600px;color:;background:;margin-left:530px;margin-top:-390px;">
            <p><b><u>Dr. Upasana Maheshwari Gupta </u></b>pursued her Degree of Bachelor of Dental Surgery from ITS Dental College, affiliated to Chaudhary Charan Singh University, Meerut and graduated in the year 2013. She believes in upgrading her skills with the advancing trends in the field of Dentistry, for which she keeps herself updated by attending various CDE's. She is a skilled practitioner of dentistry having an experience of working with few very reputed clinicians in Noida and Delhi. For further excelling in the field and to deliver her services to the public she is now associated with Aura Dental Avenue, Indirapuram. <br>
            <b><u> Education</u></b><br>
Certificate in Dental Implants - Maharashtra Universtity of Health Sciences, Nashik, 2010
BDS - Yerala Medical Trust Research Centres Dental College Hospital, 2009<br>
                <b> <u> Experience</u></b><br>
2009 - 2010 Intern at YMT Dental College and Hospital<br>
2010 - 2012 Dental Surgeon/ Private Practise at Smile Savers<br>
2011 - 2012 Dental Surgeon/ Private Practise at Barvalia Foundation and Trust<br>
2012 - 2012 Dental Surgeon/ Private Practise at Dr. Mandar Gadkari's Dental Clinic<br>
2012 - 2014 Dental Surgeon/ Private Practise at Denta Health<br>
                <u> <b>Awards and Recognitions</b></u><br>
Lions Club Of Ghatkopar west - 2014<br>
Lions Club Of Ghatkopar west - 2015<br>
                Lioness Club Of Ghatkopar west - 2015  <a href="https://www.practo.com/mumbai/clinic/i-smile-dental-clinic-2"><input type="button" value="Contact Me" style="padding:10px;width:150px;background:green;color:white;font-family:sans-serif;margin-left:400px;margin-top:-300px;"></a>
        </div>
    </div>
    <style>
        div.kak
        {
            height: 50px;
            width: 50px;
            background:;
            margin-top: -30px;
        }
        div.scroll
        {
              height: 100px;
            width: 700px;
            background:;
            margin-top: 400px;
            margin-left: 300px;
        }
        </style>
    <div class="kak">
        <img src="Images/rightarrow11.png" width="100px" height="100">
    </div>
    <div class="scroll" style="background:;">
        <marquee direction="right">
        <img src="Images/901.jpg"  width="100px" height="100px">&nbsp;&nbsp;&nbsp;
     <img src="Images/902.png"  width="100px" height="100px">&nbsp;&nbsp;&nbsp;
              <img src="Images/903.png"  width="100px" height="100px">&nbsp;&nbsp;&nbsp;
                    <img src="Images/904.png"  width="100px" height="100px">&nbsp;&nbsp;&nbsp;
     <img src="Images/905.jpg"  width="100px" height="100px">&nbsp;&nbsp;&nbsp;
              <img src="Images/901.jpg"  width="100px" height="100px">&nbsp;&nbsp;&nbsp;
            
                <img src="Images/902.png"  width="100px" height="100px">&nbsp;&nbsp;&nbsp;
     <img src="Images/903.png"  width="100px" height="100px">&nbsp;&nbsp;&nbsp;
              <img src="Images/904.png"  width="100px" height="100px">&nbsp;&nbsp;&nbsp;
            
            
        </marquee>
    </div>

    <div class="bottom">
      <br>
       <center> <h4>  Copy Right2019 By DiagnosisCenter AllRightsReserved.</h4> 
           <h5>------------Designed and Developed by &copy;VeeTechnology</h5></center>
    </div>
    </form>
</body>
</html>




