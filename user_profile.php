<?php include 'login.php';
  if (!isset($_COOKIE['cookie_email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: user_login.php');
  }
?>
<?php


?>
<?php 
                                    $query = "SELECT fname from elinguistic_users where email = '{$_COOKIE['cookie_email']}'";
                                    $result = mysqli_query($db,$query);
                                    //echo $_COOKIE['cookie_email']?>
<?php
include 'logout.php';
?>


<!DOCTYPE html>
<html lang="en" >
<meta charset="utf-8" />
<title>Profile &amp; Setting | E-Linguistic.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="eClass fills in as a stage that permits teachers from everywhere throughout the world to spread information.

Allow us to explain our product.

Students take courses largely as a me" />
<meta name="keywords" content="E-Linguistic
Language
French
Spanish
Indian
Made in India
Learn">
<meta name="author" content="Media City" />
<meta name="MobileOptimized" content="320" />

<!-- theme styles -->
<link rel="icon" type="image/icon" href="EL-Logo_JPEG.jpg"> <!-- favicon-icon -->
<!-- theme styles -->
<link href="b-css.css" rel="stylesheet" type="text/css"/> <!--custom css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:300,400,500,700" rel="stylesheet"> <!--  google fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli&display=swap:400,500,600,700" rel="stylesheet"><!-- google fonts -->
<script type="text/javascript" src="cookie.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<style type="text/css">
    
</style>
<script type="text/javascript">
$( document ).ready(function() {
    $( "#logout" ).click(function() {
         $.ajax({
            type: "GET",
            url: 'logout.php',
            data: ({ logout : 1 }),
            dataType: "html",
            success: function(data) {
                $( "#output" ).text(data);
                $( "#logout" ).hide();
            },
            error: function() {
                $( "#output" ).text(data);
            }
            });
        });
    });
</script>
<script type="text/javascript">
    
</script>
  
    
    <?php
include 'server.php';
if(isset($_GET['logout']))
{
    session_start();
    //remove PHPSESSID from browser
    if ( isset( $_COOKIE['cookie_email'] ) )
    {
    setcookie("cookie_email", "", time()-(86400*30), "/" );
    setcookie("cookie_fname", "", time()-(86400*30), "/" );
    setcookie("cookie_lname", "", time()-(86400*30), "/" );
    setcookie("cookie_mobile", "", time()-(86400*30), "/" );
    //clear session from globals
    $_SESSION = array();
    echo '<script> swal("Successfully logged out", "Redirecting to Homepage")</script>';
    //clear session from disk
    //echo session_destroy() ? "Successfully Logged Out" :  "An error Occurred";
    session_destroy();
    session_unset();

    header("Location: index.php");

}
    
}
?>
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
@media only screen and (min-width: 1026px) {
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
                                          <li><a href="#" title="Spanish"><i class="fa fa-adn rgt-20"></i>Spanish A2<i class="fa fa-chevron-right float-rgt"></i></a>
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
<section style="background: linear-gradient(-45deg, #F44A4A 0, #6E1A52 100%);color:#FFFFFF;" id="blog-home" class="blog-home-main-block">
    <div  class="container">
        <h1 class="blog-home-heading text-black" style="color: white">My Profile</h1>
    </div>
</section> 
<!-- profile update start -->
<section style="background-color:#FFFFF;color:black; id="profile-item" class="profile-item-block">
    <div class="container">
        <form action="#" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="m3kaqgfFLTZUS2FZ0Ov3I1xtbLHfNwvBRfyxj0FE">
            <input type="hidden" name="_method" value="PUT">

            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div style="background-color:#FFFFFF;color:black; class="dashboard-author-block text-center">
                        <div class="author-image">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                  <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    <input type='file' id="imageUpload" name="user_img" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"><i class="fa fa-pencil"></i></label>
                                </div>
                                <div class="avatar-preview">
                                        <div class="avatar-preview-img" id="imagePreview">
                                        </div>
                                                                    </div>
                            </div>
                        </div>
                        <div class="author-name"></div>
                    </div> 
                   <!-- <div align="center">
                    <button type="submit" class="btn btn-primary" name="logout" title="upload items" align="center" style="background: linear-gradient(-45deg, #F44A4A 0, #6E1A52 100%);color:#FFFFFF;"> Upload Image </button>
                </div>-->
                </div>
                <div  class="col-xl-9 col-lg-8">

                    <div style="background-color:#FFFFFF;color:black;" class="profile-info-block">
                        <div style="color:black; background-color: #FFFFFF" class="profile-heading">Personal Information</div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input type="text" id="name" name="fname" class="form-control" placeholder="Enter First Name" value="<?php
                                    echo $_COOKIE['cookie_fname'];
                                    ?>">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="info@example.com" value="<?php
                                    echo $_COOKIE['cookie_email'];
                                    ?>" readonly > 
                                </div>
                            </div>
                                
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="Username">Last Name</label>
                                    <input type="text" id="lname" name="lname" class="form-control" placeholder="Enter Last Name" value="<?php
                                    echo $_COOKIE['cookie_lname'];
                                    ?>">
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile No." value="<?php
                                    echo $_COOKIE['cookie_mobile'];
                                    ?>">
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>

                    <div class="upload-items text-right">
                        
                        <button type="submit" class="btn btn-primary" name="logout" id="logout" title="upload items" style="background: linear-gradient(-45deg, #F44A4A 0, #6E1A52 100%);color:#FFFFFF;"" > Logout</button>
                    </div>
                    
                </div>
            </div>

        </form>
    </div>
</section>
</body>
<!-- body end -->
</html> 
