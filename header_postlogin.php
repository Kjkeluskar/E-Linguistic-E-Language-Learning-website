<html>
<head>
    <link href="b-css.css" rel="stylesheet" type="text/css"/> <!--custom css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:300,400,500,700" rel="stylesheet"> 

<link href="https://fonts.googleapis.com/css?family=Muli&display=swap:400,500,600,700" rel="stylesheet"><!-- google fonts -->
</head>
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

@media screen and (max-width: 1100px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 1100px) {
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
<body>
<div id="fadeshow1">
    <div class="topnav" id="myTopnav">
  <a href="index.php" class="active"><img src="EL-Logo_PNG.png" class="img-fluid" alt="logo" style="width: 100px">Home</a>
  <a href="user_profile.php">Profile</a>
    <a href="reg_courses.php">My Courses</a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
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
                            <a href="index.php" ><img src="EL-Logo_PNG.png" class="img-fluid" alt="logo"></a>
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
                        <div class="Login-btn" style="position: absolute right;">
                            <input type="text" name="search" placeholder="Search.."><i class="fa fa-search"></i>

                            

                                <div class="dropdown">
  <button class="dropbtn"></button>
  <div class="dropdown-content">
<a href="user_profile.php">Profile</a>
    <a href="reg_courses.php">My Courses</a>
    </div>
</div>
                              <style type="text/css">
                                input[type=text] {
  width: 200px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
  position: absolute left;
}

/* When the input field gets focus, change its width to 50% */
input[type=text]:focus {
  width: 50%;
}
                              </style>
                              <style>
                                .dropbtn {
  background:  linear-gradient(-45deg, #F44A4A 0, #6E1A52 100%);
  color: white;
  padding: 16px;
  font-size: 16px;
  border-radius: 50%;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute right; 
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  overflow: auto;
}

nav ul ul {
    display: none;
}

nav ul li:hover > ul {
    position: absolute;
    display: block;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

</style>

                        

                    </div>
                            
                            
                        </div> 
                    </div>
                
            </div>
        </div>
        
    <!--</div>-->
        
    <br>

</body>
</html>