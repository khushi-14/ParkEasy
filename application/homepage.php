<!DOCTYPE html>
<html lang="en">
<head>
  <title>Parkeasy </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     
<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap');
@import url("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
@import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Montserrat, sans-serif;
}

/* Set a style for all buttons */
button 
{
  background-color: #f4b41e;
  color: white;
  padding: 5px 15px;
  margin: 3px 0;
  border: none;
  cursor: pointer;
  width: 80%;
  opacity: 0.9;
}

button:hover
{
  opacity:1;
}

/* Add padding to container elements */
.container 
{
  padding: 10px;
}
.clearfix 
{
  text-align: center;   
  width: 800px;  
  height: 500px;  
  padding-left: 450px;  
}  

section 
{
  position: relative;
  min-height: 100vh;
  background-color: black;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}

section .container 
{
  position: relative;
  width: 800px;
  height: 650px;
  background: black;
  overflow: hidden;
}

section .container .user 
{
  position: absolute;
  width: 100%;
  height: 100%;
  display: flex;
}

section .container .user .imgBx img 
{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

section .container .user .formBx 
{
  position: relative;
  width: 50%;
  height: 100%;
  background: black;
  align-items: center;
  padding: 40px;
  transition: 0.5s;
}

section .container .user .formBx form h2 
{
  font-size: 25px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 2px;
  text-align: center;
  width: 100%;
  margin-bottom: 10px;
  color: #fff;
}

section .container .user .formBx form input 
{
  position: relative;
  width: 100%;
  padding: 10px;
  background: black;
  color: #f4b41e;
  border: none;
  outline: none;
  box-shadow: none;
  margin: 8px 0;
  font-size: 14px;
  letter-spacing: 1px;
  font-weight: 300;
  border-bottom: 1px solid #f4b41e;
}

/*Adding css to submit button in log in form */
section .container .user .formBx form input[type='submit'] 
{
  max-width: 138px;
  background: #f4b41e;
  color: black;
  cursor: pointer;
  font-size: 16px;
  font-weight: 500;
  letter-spacing: 0.8px;
  transition: 0.5s;
}

/*Adding css to cancel button in log in form */
section .container .user .formBx form input[type='button'] {
  max-width: 138px;
  background: #f4b41e;
  color: black;
  cursor: pointer;
  font-size: 16px;
  font-weight: 500;
  letter-spacing: 0.8px;
  transition: 0.5s;
}

section .container .user .formBx form .signup {
  position: relative;
  margin-top: 20px;
  font-size: 12px;
  letter-spacing: 1px;
  color: #555;
  text-transform: uppercase;
  font-weight: 300;
}

section .container .user .formBx form .signup a {
  font-weight: 600;
  text-decoration: none;
  color: #677eff;
}

section .container .signupBx {
  pointer-events: none;
}

section .container.active .signupBx {
  pointer-events: initial;
}

section .container .signupBx .formBx {
  left: 100%;
}

section .container.active .signupBx .formBx {
  left: 0;
}

section .container .signupBx .imgBx {
  left: -100%;
}

section .container.active .signupBx .imgBx {
  left: 0%;
}

section .container .signinBx .formBx {
  left: 0%;
}

section .container.active .signinBx .formBx {
  left: 100%;
}

section .container .signinBx .imgBx {
  left: 0%;
}

section .container.active .signinBx .imgBx {
  left: -100%;
}

@media (max-width: 991px) {
  section .container {
    max-width: 400px;
  }

  section .container .imgBx {
    display: none;
  }

  section .container .user .formBx {
    width: 100%;
  }
}
  
h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #fff;
    font-weight: 600;
    margin-bottom: 30px;
    align:center
  }
  
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #f4b41e;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  
 .jumbotron {
    background-color: #0d0301;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
 
 .container-fluid {
    padding: 60px 50px;
color: #f4b41e
  }
 
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
 
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  
  .item span {
    font-style: normal;
  }
  
  .panel {
    border: 1px solid #f4b41e;
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  
/*Adds a panel to the header */ 
  .panel-heading {
    color: #fff !important;
    background-color: #f4b41e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  
/*adds a footer to the panel */
  .panel-footer .btn:hover {
    border: 1px solid #f4b41e;
    background-color: #0d0301 !important;
    color: #f4b41e;
  }
  
  .panel-footer {
    background-color: black !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4b41e;
    color: #0d0301;
  }
  
 /* Adding css to the navigation bar */
 .navbar {
    margin-bottom: 0;
    background-color: #f4b41e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  
 .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  
 .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4b41e !important;
    background-color: #0d0301 !important;
  }
  
 .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #0d0301 !important;
  }
 
 
  @media screen and (max-width: 1080px)
{
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
}
  @media screen and (max-width: 480px) 
{
    .logo {
      font-size: 300px;
    }
}
 

.hero-image
{
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img_blur1.jpg");
  height: 60%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text
{
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.team-section
{
background-color:black;
min-height: 100vh;
padding:70px 15px 30px;
}

.cont
{
max-width: 1170px;
margin:auto;
}

.row
{
display: flex;
flex-wrap: wrap;
}

.abc
{
  height: 50px;
  width: 100%;
  margin: auto;
  width: 60%;
}

.team-section .section-title
{
flex-basis: 100%;
max-width: 100%;
margin-bottom: 70px;
}

.team-section .section-title h1
{
font-size: 40px;
text-align: center;
margin:0;
color: #ffffff;
font-weight: 700;
}

.team-section .section-title p
{
font-size:16px;
text-align: center;
margin:15px 0 0;
color:#ffffff;
}

.team-section .team-items
{
flex-basis: 80%;
max-width: 90%;
display: flex;
flex-wrap: wrap;
justify-content: space-around;
margin-left:8%;
}

.team-section .team-items .item
{
 flex-basis: calc(22% - 30px);
 max-width: calc(25% - 30px);
 transition: all .5s ease;
 margin-bottom: 1px;
}

.team-section .team-items .item img
{
display: block;
width: 90%;
border-radius: 6px;
}

.team-section .team-items .item .inner
{
position: relative;
padding:0 15px;
}

.team-section .team-items .item .inner .info
{
background-color:black;
text-align: center;
padding: 15px 10px;
border-radius:6px;
transition: all .5s ease;
margin-top: -20px;
}

.team-section .team-items .item:hover .info
{
    transform: translateY(-20px);
}

.team-section .team-items .item:hover
{
 transform: translateY(-10px);
}

.team-section .team-items .item .inner .info h5
{
margin:0;
font-size: 15px;
font-weight: 600;
color:#f4b41e;
}

.team-section .team-items .item .inner .info p
{
font-size: 12px;
font-weight: 400;
color:#c5c5c5;
margin:10px 0 0;
}

</style>

<script type="text/javascript">

    function formval() {
                var fname = 
                    document.forms["RegForm"]["fname"];
				var lname=
				    document.forms["RegForm"]["lname"];
				var num_plate = 
                    document.forms["RegForm"]["lp"];
                var uname = 
                    document.forms["RegForm"]["user"];
                 var email = 
                    document.forms["RegForm"]["email"];
                var pass = 
                    document.forms["RegForm"]["pass"];
                var confirm_pass = 
                    document.forms["RegForm"]["cpass"];
  
                if (fname.value == "") {
                    window.alert("Please enter your first name.");
                    fname.focus();
                    return false;
                }
				else if (lname.value == "") {
                    window.alert("Please enter your last name.");
                    lname.focus();
                    return false;
                }
  
                 else if (num_plate.value == "") {
                    window.alert("Please enter your license plate number.");
                    num_plate.focus();
                    return false;
                }
  
                else if (email.value == "") {
                    window.alert(
                      "Please enter a valid e-mail address.");
                    email.focus();
                    return false;
                }
  
                else if (uname.value == "") {
                    window.alert(
                      "Please enter your username.");
                    uname.focus();
                    return false;
                }
  
                else if (pass.value == "") {
                    window.alert("Please enter your password");
                    pass.focus();
                    return false;
                }
				
				else if (confirm_pass.value == "") {
                    window.alert("Please enter your confirm password");
                    confirm_pass.focus();
                    return false;
                }
				
				if (pass.value != confirm_pass.value){
				window.alert("Entered passwords do not match");
				return false;
				}
  
                return true;
            }
		
    function validation() {
			    var user = 
                    document.forms["log"]["user"];
				var pass=
				    document.forms["log"]["pass"];
					
				if (user.value == "") {
                    window.alert("Please enter your username.");
                    user.focus();
                    return false;
                }
				
				else if (pass.value == "") {
                    window.alert("Please enter your password.");
                    pass.focus();
                    return false;
                }
				return true;
		    }
					
</script>  
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style="background-color:black;">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"> parkeasy</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	
<! NAVIGATION BAR>
      <ul class="nav navbar-nav navbar-right">
 
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#login_signup">LOGIN/SIGNUP </a></li>
        <li><a href="#contact_me">CONTACT</a></li>
        <li><a href="help.html">HELP</a></li>
		
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">

    <div class="hero-image" style="height:500px ;width:100%;">
        <div class="hero-text">
            <h1><img src="final1.png" width="700" height="150"></img></h1>
        </div>
    </div>

 
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-14">
      <br>
      <h2  style="font-size:40px; text-align:center">ABOUT</h2><br>
      <p color:#f4b41e style="font-size:19px;"> Parkeasy offers a smart one-stop solution for manual parking. The user is provided with a local wallet exclusively for the application. You can easily update your wallet balance once you log in to your account .As soon as your car enters the parking lot, its license plate is scanned and identified via a smart ANPR (Automatic license number recognition) technology. The exit time is recorded doing the same. Based on these times, your total parking time is calculated and displayed on your personalised account table once you log in. Your parking time is then multiplied with our base price to generate the aggregate price which is automatically deducted from your ParkEasy local wallet.<br> Isn't it literally Park-Easy ?! </p> <br>
      <br>

<section>
    <div id="login_signup" class="container">
      <div class="user signinBx">
        <div class="formBx" style="border-right: 0.5px #fff solid; ">
            <form action="authentication.php" name="log" method="POST" >
            <h2>Sign In</h2>
            <input type="text" name="user" placeholder="Username" />
            <input type="password" name="pass" placeholder="Password" /> <br>
			<br>
            <input type="submit" name="login" value="Login"/>
            <input type="button" name="" value="Cancel" />
            </form>
        </div>
           
		<div class="formBx">
            <form name="RegForm" action="" onsubmit="return formval()" method="POST">
            <h2>Create an account</h2>
            <input type="text" name="fname" placeholder="First Name"/>
            <input type="text" name="lname" placeholder="Last Name"/>
            <input type="text" name="lp" placeholder="License Plate Number"/>
            <input type="text" name="user" placeholder="Username"/>
            <input type="email" name="email" placeholder="Email Address"/>
            <input type="password" name="pass" placeholder="Create Password"/>
            <input type="password" name="cpass" placeholder="Confirm Password"/> <br> <br>
            <input type="submit" name="sub" value="Sign Up"/>
            <input type="button" name="" value="Cancel" />
            </form>
        </div>
      </div>
    </div>
</section>
  
<?php
 error_reporting(E_ERROR);
 $errors = array();
 $connect = mysqli_connect("localhost", "root", "", "db1"); 
 if (isset($_POST['sub'])) 
{
 $firstname=$_POST['fname'];
 $lastname=$_POST['lname'];
 $license=$_POST['lp'];
 $usern=$_POST['user'];
 $emailid=$_POST['email'];
 $passwd=$_POST['pass'];

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user_details WHERE username='$usern' OR email='$emailid' LIMIT 1";
  $result = mysqli_query($connect, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) 
  { // if user exists
    if ($user['username'] === $usern) {
      array_push($errors, "Username already exists");
	  echo '<script>alert("Username already exists")</script>';
    }

    if ($user['email'] === $emailid) {
      array_push($errors, "email already exists");
	 echo '<script>alert("Email already exists")</script>';
	}
  }
  
  if (count($errors) == 0) {
  	
$sqlq="insert into user_details(username,first_name,last_name,password,email,license_plate) values ('$usern','$firstname','$lastname','$passwd','$emailid','$license')" ;
$resultq= mysqli_query ($connect,$sqlq);
echo '<script>alert("REGISTERED SUCCESSFULLY")</script>';
}
}

?>
 
<br>
<section class="team-section">
    <div class="cont">
         <div class="row">
             <div class="section-title">
                 <h1>Our Team</h1>
             </div>
         </div>
        <div class="row">
            <div class="team-items">
                  
				  <div class="item">
                      <img src="khushi.jpeg" alt="team"/>
                      <div class="inner">
                          <div class="info">
                               <h5>Khushi Ruparel</h5>
                               <p>1881042</p>
                          </div>
                      </div>
                  </div>
                  <div class="item">
                      <img src="jeeya.jpeg" alt="team"  />
                      <div class="inner">
                          <div class="info">
                               <h5><center>Jeeya Shah</center></h5>
                               <p>1881050</p>
	                      </div>
                      </div>
                  </div>
                  <div class="item">
                      <img src="pusti.jpeg" alt="team" />
                      <div class="inner">
                          <div class="info">
                               <h5>Pusti Sheth</h5>
                               <p>1881052</p>
                          </div>
                      </div>
                  </div>

            </div>
        </div>
    </div>
</section>

  <div id="contact_me" class="container-fluid bg-grey">
    <div class="abc">
	
      <p>Contact us </p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Mumbai, India</p> 
      <p><span class="glyphicon glyphicon-phone"></span> +911234568</p> 
      <p><span class="glyphicon glyphicon-envelope"></span> Parkeasy3@gmail.com</p> 
	  
    </div>
  </div>
  
</body>
</html>



