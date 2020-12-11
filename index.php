  <?php include 'server.php';?>
<!DOCTYPE html>
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

<!-- theme styles -->
<link href="b-css.css" rel="stylesheet" type="text/css"/> <!--custom css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:300,400,500,700" rel="stylesheet"> <!--  google fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli&display=swap:400,500,600,700" rel="stylesheet"><!-- google fonts -->
<script type="text/javascript" src="indexscript.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
   
<style>
  

                          .slider {
                              width: 100%;
                              text-align: center;
                              overflow: hidden;
                            }

                            .slides {
                              display: flex;
                              
                              overflow-x: auto;
                              scroll-snap-type: x mandatory;
                              
                              
                              
                              scroll-behavior: smooth;
                              -webkit-overflow-scrolling: touch;
                              
                              /*
                              scroll-snap-points-x: repeat(300px);
                              scroll-snap-type: mandatory;
                              */
                            }
                            .slides::-webkit-scrollbar {
                              width: 10px;
                              height: 10px;
                            }
                            .slides::-webkit-scrollbar-thumb {
                              background: black;
                              border-radius: 10px;
                            }
                            .slides::-webkit-scrollbar-track {
                              background: transparent;
                            }
                            .slides > div {
                              scroll-snap-align: start;
                              flex-shrink: 0;
                              width: 214px;
                              height: auto;
                              margin-right: 10px;
                              border-radius: 10px;
                              background: #eee0;
                              transform-origin: center center;
                              transform: scale(1);
                              transition: transform 0.5s;
                              position: relative;
                              
                              display: flex;
                              justify-content: center;
                              align-items: center;
                              font-size: 100px;
                            }
                            .slides > div:target {
                            /*   transform: scale(0.8); */
                            }
                            .author-info {
                              background: rgba(0, 0, 0, 0.75);
                              color: white;
                              padding: 0.75rem;
                              text-align: center;
                              position: absolute;
                              bottom: 0;
                              left: 0;
                              width: 100%;
                              margin: 0;
                            }
                            .author-info a {
                              color: white;
                            }
                            

                            .slider > a {
                              display: inline-flex;
                              width: 1.5rem;
                              height: 1.5rem;
                              background: white;
                              text-decoration: none;
                              align-items: center;
                              justify-content: center;
                              border-radius: 50%;
                              margin: 0 0 0.5rem 0;
                              position: relative;
                            }
                            .slider > a:active {
                              top: 1px;
                            }
                            .slider > a:focus {
                              background: #000;
                            }

                            /* Don't need button navigation */
                            @supports (scroll-snap-type) {
                              .slider > a {
                                display: none;
                              }
                            }
                            .zoom {
                             
                             transition: transform .2s; /* Animation */
                             
                            }

.zoom:hover {
  transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
                      </style>

<script>
        var x=document.getElementById("demo");
        function getLocation()
         {
        if (navigator.geolocation)
        {
        navigator.geolocation.getCurrentPosition(showPosition);
        }
        else{x.innerHTML="Geolocation is not supported by this browser.";}
        }
        function showPosition(position)
        {
        x.innerHTML="Latitude: " + position.coords.latitude + 
        "<br>Longitude: " + position.coords.longitude;  
        }
        getLocation()
        </script>
        

<!-- end theme styles -->
</head><!-- end head -->
<!-- body start-->
<body>
  
<?php
if(isset($_COOKIE['cookie_email']))
{
  include 'header_postlogin.php';
}
else
{
 include 'header_prelogin.php';
}
?>


<div class="hero-image">
</div>

<!-- home end -->
<!-- learning-work start -->

<section id="learning-work" class="learning-work-main-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="learning-work-block text-white">
                    <div class="row">                        
                        <div class="col-lg-9 col-md-9">
                            <div class="learning-work-dtl">
                                <div class="work-heading">Expert Faculty</div>
                                <p>With years of experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-lg-4 col-sm-6">
                <div class="learning-work-block text-white">
                    <div class="row">
                         <div class="col-lg-9 col-md-9">
                            <div class="learning-work-dtl">
                                <div class="work-heading">Interactive Online Lectures</div>
                                <p>To help you Conversate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="col-lg-4 col-sm-6">
                <div class="learning-work-block text-white">
                    <div class="row">
                        <div class="col-lg-9 col-md-9">
                            <div class="learning-work-dtl">
                                <div class="work-heading">Well Structured Courses</div>
                                <p>with Provided Certifications</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
    </div>
</section>
<br>

<!-- live-courses start -->

<section id="learning-courses" class="learning-courses-main-block">
    <div class="container">
        <h4 class="student-heading">Featured Courses</h4>
        <div class="row">
           
            <div class="col-lg-12">
                <div class="learning-courses">
                
                    <ul class="nav nav-tabs">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#Spanish">Spanish</a>
                        
                      </li>
                                                               

                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div class="tab-pane fade active show" id="Spanish">
                        <div class="slider">
                            <div class="slides">
                               <div class="zoom">
                               <div id="slide-1">

                                  <div class="card mb-3" style="width: 214px;">
                                
                                    <img style="width: 212px; display: block;" src="spanisha1.jpg" alt="Card image">
                                    <div class="card-body" style="height: 40px;">
                                        <div class="view-heading btm-10">Spanish A1</div>
                                    </div>
                                
                                    <div class="card-body" style="height: 160px;">
                                      <div class="protip-btn">
                                        <a href="spanisha1.php" class="btn btn-secondary" title="course" style="background: linear-gradient(-45deg, #F44A4A 0, #6E1A52 100%)">Go To Course</a>
                                      </div>
                                    </div>
                                   </div>
                                </div>
                              </div>
                                <br>
                                <div class="zoom">
                                <div id="slide-2">

                                  <div class="card mb-3" style="width: 214px;">
                                
                                    <img style="width: 212px; display: block;" src="spanisha2.jpg" alt="Card image">
                                    <div class="card-body" style="height: 40px;">
                                        <div class="view-heading btm-10">Spanish A2</div>
                                    </div>
                                
                                    <div class="card-body" style="height: 160px;">
                                      <div class="protip-btn">
                                        <a href="spanisha2.php" class="btn btn-secondary" title="course" style="background: linear-gradient(-45deg, #F44A4A 0, #6E1A52 100%)">Go To Course</a>
                                      </div>
                                    </div>
                                   </div>
                                </div>
                            </div>               

                           
                        </div>
                                               
                        </div>
                    </div>
                    

                    </div>
                    

                    </div>

                    </div>
                                                 

                      </div>
                      

                            

                           
                        </div>
                    </div>
                    

                    </div>

                         </section>                    
<!-- live-courses end -->

<!-- recommendations end -->


<section id="trusted" class="trusted-main-block">
    <div class="container">
        <div class="patners-block">            
            <h6 class="patners-heading text-center btm-40"><center>Universities Offered</center></h6>
            <div id="avatars" class="av-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSplpni_j4_RD_AAlH38ZcnDssd0xT0jfexSw&usqp=CAU" class="av-img" alt="partners-1" style="width:200px; height:200px">
                
                        <img src="https://images-platform.99static.com//g16WhRK0GrcqPeeQHWcUukMDHRk=/32x31:588x587/fit-in/590x590/projects-files/64/6459/645987/72d26c7c-f7cc-46c9-a1bd-08a1215591ce.jpg" class="av-img" alt="partners-1" style="width:200px; height:200px">  
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSplpni_j4_RD_AAlH38ZcnDssd0xT0jfexSw&usqp=CAU" class="av-img" alt="partners-1" style="width:200px; height:200px">
                
                        <img src="https://images-platform.99static.com//g16WhRK0GrcqPeeQHWcUukMDHRk=/32x31:588x587/fit-in/590x590/projects-files/64/6459/645987/72d26c7c-f7cc-46c9-a1bd-08a1215591ce.jpg" class="av-img" alt="partners-1" style="width:200px; height:200px">  


        </div>
        </div>
    </div>
    
</section>

<!-- recommendations start -->
<section id="" class="secsec" style="background: linear-gradient(45deg, #F44A4A 0, #6E1A52 100%) !important; padding: 0px 0 0px !important;"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                
                <img src="Capture.PNG" style="width: 100%;" class="imagebeside">
                
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="top-border"></div>
                    <div class="text-center centered-redirect" >
                    <div class="container">
                        <h3 class="text-white" style="text-align: left; color: #FFFFFF">Tie Up with Us!</h3>
                        <p class="text-white btm-20" style="text-align: left; color: #FFFFFF">Top instructors from all around the world teach at Language Fluent, Join us.</p>
                        <a href="#" class="btn btn-secondary " title="View Services" style="float: left; background-color: #FFFFFF">Become an instructor</a>
                        
                         
                    </div>
                </div>  
            </div>
            
        </div>
    </div>
    
</section>
<style>
    .centered-redirect { padding-top: 50px; }
    .secsec {  height: 250px;  margin-top: 80px;  margin-bottom: 60px;}
    .imagebeside {     margin-top: -25px; }

    @media  only screen and (max-width: 480px) and (min-width: 320px) {
.centered-redirect { padding-top: 0px; }
.imagebeside { padding-top: 40px;     margin-top: 0px; }
.secsec { height: auto;  margin-top: 0px;  margin-bottom: 0px;}
}

</style>
<br>
<style type="text/css">
  
 .contact-in
 {
  width:80%
  height : auto;
  margin : auto;
  display: flex;
  flex-wrap: wrap;
  padding: 10px;
  background: #ffffff;
 }

 .contact-map
 {
  width: 100%;
  height: auto;
  flex: 50%;

 }

.contact-map iframe
 {
  width: 100%;
  height: 100%;

 }

 .contact-form
 {
  width: 100%;
  height: auto;
  flex: 50%;
  padding: 30px;
  text-align: center;
  
 }
 .contact-form h1
 {
  color: #000000;
  margin-bottom: 10px;
  font-size: 2rem;
 }
 .contact-form-txt
 {
  width: 100%;
  height: 40px;
  color: #000;
  border: 1px solid #bcbcbc;
  border-radius: 50px;
  outline: none;
  margin-bottom: 20px;
  padding: 15px;
  font-family: 'Poppins', sans-serif;
 }
</style>
<section>
        <div class="contact-in">
  <div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241326.1686681065!2d72.87765590322411!3d19.07598368099473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1602566225464!5m2!1sen!2sin" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
  <div class="contact-form">
    <h1>Contact Us</h1>
        <form name="feedback" onsubmit="return feedbackCheck()" method="post">
      <input name="namefield" type="text1" placeholder="E-Linguistic HQ" class="contact-form-txt" readonly>
      <input name="mailfield" type="email" placeholder="elinguistic01@gmail.com" class="contact-form-txt" readonly>
     
      
    </form>
   </div>
      </section>
<?php include 'footer.php' ?>

</body>
<!-- body end -->
</html> 
