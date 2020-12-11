<?php
if(!isset($_COOKIE['cookie_email']))
    {
      header("Location: user_login.php");
    }
 ?><!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="utf-8" />
<title>Online Courses | E-Linguistic</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="E-Linguistic is an institution that specializes in providing professional training in foreign languages. We offer systematic and well-structured courses across a wide spectrum of foreign la" />
<meta name="keywords" content="E-Linguistic
Language
French
Spanish
Indian
Made in India
Learn">
<meta name="author" content="Media City" />
<meta name="MobileOptimized" content="320" />
<link rel="icon" type="image/icon" href="EL-Logo_JPEG.jpg"> <!-- favicon-icon -->
<!-- theme styles -->
<link href="b-css.css" rel="stylesheet" type="text/css"/> <!--custom css-->
<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:300,400,500,700" rel="stylesheet"> <!--  google fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli&display=swap:400,500,600,700" rel="stylesheet"><!-- google fonts -->


<!-- end theme styles -->
</head><!-- end head -->
<!-- body start-->
<body>
<?php include 'header_postlogin.php'?>

<!-- side navigation  -->
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>



<div class="wrapper">
    <div class="sidebar" style="background: linear-gradient(-45deg, #F44A4A 0, #6E1A52 100%);color:#FFFFFF; ">
        <h2>Course Content</h2>
        <ul>
            <li><a href="spanisha1_week1.php" style="color: #FFFFFF"></i>Week 1</a></li>
            <li><a href="spanisha1_week2.php" style="color: #FFFFFF"></i>Week 2</a></li>
           </ul>
            </div>
    <div class="main_content">
        <div class="header"><h3>Week 2 Video Lecture</h3></div>  
        <div class="info">
            
            
          <iframe width="800" height="400" src="https://www.youtube.com/embed/ylKWkYVNzuk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


</video>
<br>
<h5> After completion of watching the video, you make proceed to take the <a href="https://forms.gle/BHf3znez2mbrfEnB6">Spanish A1 Week 2 Quiz </a></h5>
      </div>
    </div>

</div>

</div>
<br>

</body>
</html>