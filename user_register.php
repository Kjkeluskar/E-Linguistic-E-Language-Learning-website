<!DOCTYPE html>
  <head>
    <script type="text/javascript" src="sweetalert.min.js"></script>

    
<meta charset="utf-8" />
<title>Sign Up | E-Linguistic.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="eClass fills in as a stage that permits teachers from everywhere throughout the world to spread information.

Let’s allow us to explain our product.

Students take courses largely as a me"  />
<meta name="keywords" content="E-Linguistic">
<meta name="author" content="Media City" />
<meta name="MobileOptimized" content="320" />

<link rel="icon" type="image/icon" href="EL-Logo_JPEG.jpg"> <!-- favicon-icon -->
<!-- theme styles -->
<link href="b-css.css" rel="stylesheet" type="text/css"/> <!--custom css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:300,400,500,700" rel="stylesheet"> <!--  google fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli&display=swap:400,500,600,700" rel="stylesheet"><!-- google fonts -->
<script type="text/javascript" src="cookie.js"></script>

<script type="text/javascript" src="passvalidation.js">

    function validation(){}
       let fname=document.forms["registerform"]["fname"].value;
       let lname=document.forms["registerform"]["lname"].value;
       let email=document.forms["registerform"]["email"].value;
       let mobile=document.forms["registerform"]["mobile"].value;
       let pass1=document.forms["registerform"]["password"].value;
       let txt;

       if(email=="")
       {
        txt=" Please enter your email ";
        document.getElementById("demo").innerHTML=txt;
        
       }else{
        let regex=/^\S+@\S+\.\S+$/;
        if(regex.test(email)===true){
           return true;
        }else{
          txt=" Invalid email address entered.";
        document.getElementById("demo").innerHTML=txt;
        }
       }
       
       if(mobile =="")
       {
        txt="Please enter you mobile number";
       }
       else{
        let regex= /^\d{10}$/;
        if(regex.test(mobile)===true){
      return true;
        }
      else
        {
        txt=" Invalid mobile number";
        document.getElementById("demo").innerHTML=txt;
        }
    }
    
    
    </script>
<script type="text/javascript">

        function validatePassword(password) {
                
                // Do not show anything when the length of password is zero.
                if (password.length === 0) {
                    document.getElementById("demo").innerHTML = "";
                    return;
                }
                // Create an array and push all possible values that you want in password
                var matchedCase = new Array();
                matchedCase.push("[$@$!%*#?&]"); // Special Charector
                matchedCase.push("[A-Z]");      // Uppercase Alpabates
                matchedCase.push("[0-9]");      // Numbers
                matchedCase.push("[a-z]");     // Lowercase Alphabates

                // Check the conditions
                var ctr = 0;
                for (var i = 0; i < matchedCase.length; i++) {
                    if (new RegExp(matchedCase[i]).test(password)) {
                        ctr++;
                    }
                }
                // Display it
                var color = "";
                var strength = "";
                switch (ctr) {
                    case 0:
                    case 1:
                    case 2:
                        strength = "Very Weak";
                        color = "red";
                        break;
                    case 3:
                        strength = "Medium";
                        color = "orange";
                        break;
                    case 4:
                        strength = "Strong";
                        color = "green";
                        break;
                }
                document.getElementById("demo").innerHTML = strength;
                document.getElementById("demo").style.color = color;
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
@media only screen and (min-width: 1026px) {
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
                              
                        <input type="text" name="search" placeholder="Search.."><i class="fa fa-search"></i></a>
                            <a href="user_login.php" class="btn btn-secondary" title="login" style="background-color: #FFFFFF; color: black">Login</a>
                            <a href="user_register.php" class="btn btn-primary" title="register" style="background: linear-gradient(-45deg, #F44A4A 0, #6E1A52 100%); color: #FFFFFF">Signup</a>
                            
                        </div> 
                    </div>
                
            </div>
        </div>
        </div>
<section id="signup" class="signup-block-main-block">
    <div class="container">
        <div class="col-lg-6 col-md-8 offset-md-3">
            <div style="background: linear-gradient(-45deg, #F44A4A 0, #6E1A52 100%); color: #FFFFFF" class="signup-heading">
               Sign Up and Start Learning!
            </div>

            <div style="background-color:#FFFFFF;color:black;" class="signup-block">
                                 
                
                <form class="signup-form" method="POST" name="registerform" action="register.php" onsubmit="return validation();">
                    <input type="hidden" name="_token" value="">                    
                    <div class="form-group">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="fname" value="" id="fname" placeholder="First Name" required>
                                            </div><br>
                    <div class="form-group">
                        <i class="fa fa-user" aria-hidden="true"></i>   
                        <input type="text" class="form-control" name="lname" value="" id="lname" placeholder="Last Name" required>
                                            </div><br>
                    <div class="form-group">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" class="form-control" name="email" value="" id="email" placeholder="Email">
                                            </div><br>
                                        <div class="form-group">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="mobile" value="" id="mobile" placeholder="Mobile">
                                            </div><br>
                                        <div class="form-group">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" onkeyup="return validatePassword(this.value);" required>
                                            </div><br>

                    <span id="demo"></span>
                    <br>


                    <button type="submit" title="Sign Up" name="signup" class="btn btn-primary btm-20" id="register" style="background: linear-gradient(-45deg, #F44A4A 0, #6E1A52 100%); color: #FFFFFF">Signup</button> 

                    <div class="signin-link text-center btm-20">
                        By signing up, you agree to our <a href="#" title="Policy">Terms &amp; Condition </a>, <a href="#" title="Policy">Privacy Policy.</a>
                    </div>
                    <hr>
                    <div class="sign-up text-center">Already have an account?<a href="user_login.php" title="login"> Login</a>
                    </div>
                </form>



            </div>
        </div>
    </div>
    <?php include 'footer.php'?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

</script>
</body>
<!-- body end -->
</html> 
