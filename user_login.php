<?php include 'server.php';
include 'login.php';
?><html>
<head>
<meta charset="utf-8" />
<title>Login | E-Linguistic.com </title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="eClass fills in as a stage that permits teachers from everywhere throughout the world to spread information.

Let’s allow us to explain our product.

Students take courses largely as a me" />
<meta name="keywords" content="eClass">
<meta name="author" content="Media City" />
<meta name="MobileOptimized" content="320" />
<link rel="icon" type="image/icon" href="EL-Logo_JPEG.jpg"> <!-- favicon-icon -->
<!-- theme styles -->
<link href="b-css.css" rel="stylesheet" type="text/css"/><!--custom css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:300,400,500,700" rel="stylesheet"> <!--  google fonts -->
<script type="text/javascript" src="sweetalert.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Muli&display=swap:400,500,600,700" rel="stylesheet"><!-- google fonts -->
<script type="text/javascript" src="cookie.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript">
            $(document).ready(function(){

                $("#user_login").click(function(){
                    var username = $("#email").val().trim();
                    var password = $("#password").val().trim();

                    if( username != "" && password != "" ){
                        $.ajax({
                            url:'login.php',
                            type:'post',
                            data:{username:username,password:password},
                            success:function(response){
                                var msg = "";
                                if(response == 1){
                                   
                                    window.location = "index_postlogin.php";
                                }else{
                                    msg = "Invalid username and password!";
                                }
                                $("#message").html(msg);
                            }
                        });
                    }
                });

            });
        </script>
        
<!--<script type="text/javascript">
    var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
if ( email == "eling@gmail.com" && password == "Qwerty123@"){
alert ("Login successfully");
//window.location = "success.html"; // Redirecting to other page.
return false;
}
else{
attempt --;// Decrementing by one.
alert(" Wrong password. Unauthorised login. You have left "+attempt+" attempt;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("email").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}
</script>-->

</head>

<body>
    
<?php include 'header_prelogin.php'?>


<section id="signup" class="signup-block-main-block">
    <div class="container">
        <div class="col-md-6 offset-md-3">
            <div style="background: linear-gradient(-45deg, #F44A4A 0, #6E1A52 100%);color:white;" class="signup-heading">
                Log In to Your E-Linguistic.com Account!
            </div>

            <div style="background-color:#FFFFFF;color:black;" class="signup-block">

                <div class="signin-link btm-10">

                <form method="POST" class="signup-form" action="login.php" name="loginform">
                    <input type="hidden" name="_token" value="avqVqx7SrhB3gxloVuuxNz4l2ZgmqXha1KeVr9Ry">                 
                    <div class="form-group">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input id="email" type="email" class="form-control" placeholder="Enter Your E-Mail" name="email" id="email" value="" required autofocus>

                                            </div>
                                            <br>
                    <div class="form-group">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input id="password" type="password" class="form-control" id="password" placeholder="Enter Your Password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[$@$!%*#?&])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, at least 8 or more characters and special character" required>

                                            </div>
                                            <br>
                                            
                    <div class="form-group row" align="center-block">
                        <div class="col-md-8 offset-md-4">
                            <div class="form-check" align="center-block">
                                
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button  type="submit" class="btn btn-primary" name="user_login" id="user_login" style="background: linear-gradient(-45deg, #F44A4A 0, #6E1A52 100%); color: #FFFFFF">
                            Login
                        </button>
                        <br>
                        <br>

                        <div class="forgot-password text-center btm-20"><a href="password/reset" title="sign-up">Forgot Password?</a>
                        </div>

                    </div>


                    <div class="signin-link text-center btm-20">
                       By signing up, you agree to our <a href="#" title="Policy">Terms &amp; Condition </a>, <a href="#" title="Policy">Privacy Policy.</a>
                    </div>
                    <hr>
                    <div class="sign-up text-center">Do not have an account?<a href="user_register.php" title="sign-up"> Signup</a>
                    </div>
                            
                </form>
            </div>
        </div>
    </div>



</section>
<?php include 'footer.php'
?></body>

</html> 

