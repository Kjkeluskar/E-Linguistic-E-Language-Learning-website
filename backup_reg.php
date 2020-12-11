<?php

include 'server.php';

if (isset($_POST['signup'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fname)) { array_push($errors, "First Name is required"); }
  if (empty($lname)) { array_push($errors, "Last Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($mobile)) { array_push($errors, "Mobile is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  
     // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM elinguistic_users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
        if ($user['email'] === $email) {
      echo'<script> swal("email already exists")</script>';
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password =  $password;//encrypt the password before saving in the database

    $query = "INSERT INTO elinguistic_users (fname, lname, email, mobile, password) 
          VALUES('$fname', '$lname', '$email', '$mobile', '$password')";
    mysqli_query($db, $query);
    //$_SESSION['username'] = $username;
    $_SESSION['success'] = "$email";
    $cookie_fname = "$fname";
    $cookie_lname = "$lname";
    $cookie_email = "$email";

    setcookie("cookie_fname", $fname, time()+(86400*30), "/");
    setcookie("cookie_lname", $lname, time()+(86400*30), "/");
    setcookie("cookie_email", $email, time()+(86400*30), "/");
    setcookie("cookie_mobile", $mobile, time()+(86400*30), "/");
    header('location: index.php');
    echo '<script> swal("Registered successfully")</script>';

  }  
}
?>

/*
<script type="text/javascript">
  $(function(){
    $('#register').click(function(e){

      var valid = this.form.checkValidity();

      if(valid){


      var fname   = $('#fname').val();
      var lname  = $('#lname').val();
      var email     = $('#email').val();
      var mobile = $('#mobile').val();
      var password  = $('#password').val();
      

        e.preventDefault(); 

        $.ajax({
          type: 'POST',
          url: 'process.php',
          data: {fname: fname,lname: lname,email: email,mobile: mobile,password: password},
          success: function(data){
            
          Swal.fire({
                'title': 'Successful',
                'text': data,
                'type': 'success'
                })
              
          },
          error: function(data){
            Swal.fire({
                'title': 'Errors',
                'text': 'User already exists. Please try logging in.',
                'type': 'error'
                })
          }
        });

        
      } 



    });   

    
  });*/
  