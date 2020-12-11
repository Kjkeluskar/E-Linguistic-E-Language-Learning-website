<?php include 'server.php'?>
<html>
<head>
    <link href="b-css.css" rel="stylesheet" type="text/css"/> <!--custom css-->
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:300,400,500,700" rel="stylesheet"> 
<!--  google fonts -->

<link href="https://fonts.googleapis.com/css?family=Muli&display=swap:400,500,600,700" rel="stylesheet"><!-- google fonts -->
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  
}

.topnav a {
  float: left;
  display: block;
 
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  
  color: black;
}

.topnav a.active {
  
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 1000px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 1000px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
@media only screen and (min-width: 994px) {
    #fadeshow1 {
        display: none;
    }
}
</style>
</head>
<body>
    <div id="fadeshow1">
    <div class="topnav" id="myTopnav">
  <a href="index.php" class="active"><img src="EL-Logo_PNG.png" class="img-fluid" alt="logo" style="width: 100px">Home</a>
  <a href="user_login.php" style="color: #F44A4A">Login</a>
  <a href="user_register.php" style="color: #F44A4A">Signup</a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<div class="row smallscreen-search-block">
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-12">
                        <div class="logo">
                            <a href="index.php" class="active"><img src="EL-Logo_PNG.png" class="img-fluid" alt="logo"></a>
                                                    </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-12">
                        <div class="navigation">
                            <div id="cssmenu">
                                <ul>
                                    <li><a href="#" title="Categories">Categories</a>
                                <ul>
                                    <li><a href="#" title="Spanish"><i class="fa fa-adn rgt-20"></i>Spanish<i class="fa fa-chevron-right float-rgt"></i></a>
                                      <ul>
                                        <li><a href="spanisha1.php" title="Spanish"><i class="fa fa-adn rgt-20"></i>Spanish A1<i class="fa fa-chevron-right float-rgt"></i></a></li>
                                          <li><a href="spanisha2.php" title="Spanish"><i class="fa fa-adn rgt-20"></i>Spanish A2<i class="fa fa-chevron-right float-rgt"></i></a>
                                          </li>
                                        </ul>
                                          
                                </li>
                                 </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="learning-business">
                            
                        </div>
                    </div>
                                        <div class="col-lg-6 col-md-6">
                        <div class="Login-btn">
                            <a href="#find" class="nav-search nav-wishlist">
                              <style type="text/css">
                                input[type=text] {
  width: 100px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

/* When the input field gets focus, change its width to 50% */
input[type=text]:focus {
  width: 30%;
}
                              </style>
                        <input type="text" name="search" placeholder="Search.."><i class="fa fa-search"></i></a>
                            <a href="user_login.php" class="btn btn-secondary" title="login" style="background-color: #FFFFFF; color: black">Login</a>
                            <a href="user_register.php" class="btn btn-primary" title="register" style="background: linear-gradient(-45deg, #F44A4A 0, #6E1A52 100%); color: #FFFFFF">Signup</a>
                            
                        </div> 
                    </div>
                
            </div>
        </div>
        </div>
        
    <!--</div>-->
       

    <br>

</body>
</html>