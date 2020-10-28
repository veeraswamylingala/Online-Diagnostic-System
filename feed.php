<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .rating { 
  border: none;
  float: left;
}
.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}
.rating > .half:before { 
  content: "\f089";
  position: absolute;
}
.rating > label { 
  color: #ddd; 
 float: right; 
}
.rating table.rate
{
    margin-left: 0px;
}
/***** CSS Magic to Highlight Stars on Hover *****/
.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */
.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
           .rating input[type="submit"]
{
	padding: 8px 15px;
    background: #000000;
    color: #ffff;
    border: 20px;;
    margin-top: 0px;
    margin-bottom: 0px;
    text-decoration: none;
    font-size: 16px;
    cursor: poniter;
    margin-bottom:px;
     font-family: "Times New Roman", Times, serif;
}
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
        width: 600px;
        height: 260px;
        background-color:;
          border: 5px double black;
        border-radius: 50px;
        background: rgb(192,192,192,0.7);
    }
div.bottom
    {
        background-color:darkgray;
        height: 200px;
        width: 1340px;
        margin-top: 100px;
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
<body style="background-color:;">
    <form method="post" action="feed1.php">
    
    <div class="title">
        <img src="Images/LogoHospital.PNG" height="80px" width="80px;">
    <center><h2>Srivyshnavi Diagnostic Center.</h2>
    </center>
        <table class="table1" border="0">
            <tr><td>
                <a href="feed.html"><input type="button" value="Feedback"></a></td>
                <td><a href="viewfeedback.php"><input type="button" value="ViewFeedback"></a></td></tr></table>
    </div>
<div class="navbar">
    <div class="left">

    
  <a href="home.php" >Home</a>
  <a href="services.php">Services</a>
        
      <a href="test.php">Tests</a>
<a href="about.php">About</a>
  <a href="contact.php">Contact </a>
 
<?php
session_start();
?>
<?php
         if(isset($_SESSION["uname"]))
            if('Admin'==($_SESSION["uname"]))
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
<br>
   <center> <div class="part3">


<div class="rating" style="margin-top:0px;margin-left:50px;">
        <table class="rate">
        <tr>    <td>
            <h2 style="color:black;text-align:center;margin-left:100px;">  <u> &nbsp;GIVE FEEDBACK</u></h2>
                
            </td></tr>
            <tr><td><h4>Give your rating hear:</h4></td>
                <td>
                    
<fieldset class="rating">
    
    <input type="radio" id="star5" name="rating" value="5" onclick="postToController();"/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4half" name="rating" value="4.5"  onclick="postToController();"/><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4"onclick="postToController();" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3.5" onclick="postToController();"/><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3"onclick="postToController();" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2.5" onclick="postToController();"/><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" onclick="postToController();"/><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1.5"onclick="postToController();" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" onclick="postToController();"/><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="0.5"onclick="postToController();" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset></td></tr>
            <tr><td><h4>Comment</h4></td><td><textarea name='comment'></textarea></td></tr></table>
        
                
                
            <?php
            if(isset($_SESSION["uname"]))
        { 
            ?>
    <a href="viewfeedback.php" style="margin-left: 0px;" onclick="execute()"> <input type="submit" value="submit" id="comment"></a>
     
            <?php
            }
        else
        {  
        }
        ?>
              
      
        </div>
   
    </div></center>

    <div class="bottom">
        <br>
       <center> <h4>  Copy Right2019 By DiagnosisCenter AllRightsReserved.</h4> 
           <h5>------------Designed and Developed by &copy;VeeTechnology</h5></center>
    </div></form>
</body>
</html>


