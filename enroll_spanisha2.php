<?php
include 'server.php';
$course="Spanish_A2";
    //echo '<script> alert("executing") </script>';
    if(!isset($_COOKIE['cookie_email']))
    {
      header("Location: user_login.php");
    }
    else
    {
      $user_check_query = "SELECT language FROM languages_opt WHERE email='{$_COOKIE['cookie_email']}' AND language='Spanish_A2'";
      $result = mysqli_query($db, $user_check_query);
      if($user = mysqli_fetch_assoc($result)==NULL){
        $insert_query = "INSERT INTO languages_opt(email, language) VALUES ('{$_COOKIE['cookie_email']}', 'Spanish_A2')";
      if(mysqli_query($db, $insert_query))
      { 
      echo'<script> alert("Course Spanish A2 registered");
      window.location.href="reg_courses.php";</script>';

      }
      else {
        echo'<script> alert("Unsuccessful")</script>';
      }
      }
      else {
      echo'<script> alert("Course Spanish A2 already registered");
      window.location.href="reg_courses.php";</script>';
      
    }

  }

      



?>