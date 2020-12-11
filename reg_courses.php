<?php
// Turn off all error reporting
error_reporting(0);
?>
<?php include 'server.php';
if(isset($_COOKIE['cookie_email']))
{
  
}
else
{
 header("Location: user_login.php");
}
?>

<!DOCTYPE html>
<html lang="en" >
<!-- <![endif]-->
<!-- head -->
<head>
<meta charset="utf-8" />
<title>My Courses | Language Fluent</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="E-Linguistic is an institution that specializes in providing professional training in foreign languages. We offer systematic and well-structured courses across a wide spectrum of foreign la" />
<meta name="keywords" content="Language Fluent
Language
French
German
Spanish
Korean 
Japanese
Chinese
Arabic
Learn">
<meta name="author" content="Media City" />
<meta name="MobileOptimized" content="320" />
<link rel="icon" type="image/icon" href="EL-Logo_JPEG.jpg"> <!-- theme styles -->
<link href="b-css.css" rel="stylesheet" type="text/css"/> <!--custom css-->
<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:300,400,500,700" rel="stylesheet"> <!--  google fonts -->
<script type="text/javascript" src="sweetalert.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Muli&display=swap:400,500,600,700" rel="stylesheet"><!-- google fonts -->

<!-- end theme styles -->
</head><!-- end head -->
<!-- body start-->
<body>

<!-- top-nav bar start-->

<?php include 'header_postlogin.php'?>
            
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>



<!-- home start -->

<!-- about-home start -->
<section id="wishlist-home" class="blog-home-main-block" style="background: linear-gradient(-45deg, #F44A4A 0, #6E1A52 100%);color:#FFFFFF; ">
    <div class="container">
        <h1 class="wishlist-home-heading text-white" style="color: #FFFFFF">My Courses</h1>
    </div>
</section> 
<!-- about-home end -->

    <!--<section id="no-result-block" class="no-result-block">
        <div class="container">
            <div class="no-result-courses">When you enroll in a course, it will appear here.&nbsp;<a href="homepage.html"><b>Browse courses now</b></a></div>

            
        </div>
    </section>-->
<br>
<?php

$user_check_query = "SELECT * FROM languages_opt WHERE email='{$_COOKIE['cookie_email']}'";
$result = mysqli_query($db, $user_check_query);
while($user = mysqli_fetch_assoc($result)){


if($user['language']=="Spanish_A1")
{
  $xml = new DOMDocument;
  $xml->load('spanisha1.xml');

// Load XSL file
$xsl = new DOMDocument;
$xsl->load('courses.xsl');

// Configure the transformer
$proc = new XSLTProcessor;

// Attach the xsl rules
$proc->importStyleSheet($xsl);

echo $proc->transformToXML($xml);

}
else
{
  echo '';
}
if($user['language']=="Spanish_A2")
{
  $xml = new DOMDocument;
  $xml->load('spanisha2.xml');

// Load XSL file
$xsl = new DOMDocument;
$xsl->load('courses.xsl');

// Configure the transformer
$proc = new XSLTProcessor;

// Attach the xsl rules
$proc->importStyleSheet($xsl);

echo $proc->transformToXML($xml);

      
   }
 }
 

?>

<!-- testimonial end -->
<!-- footer start -->

<?php include 'footer.php'?>
</body>
<!-- body end -->
</html> 
