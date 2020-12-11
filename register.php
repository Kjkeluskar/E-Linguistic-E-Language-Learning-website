<?php
  
$showAlert = false; 
$showError = false; 

  
if($_SERVER["REQUEST_METHOD"] == "POST") { 
  
  // Include file which makes the 
  // Database Connection. 
  include 'server.php'; 
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  
   
  $sql = "select * from elinguistic_users where email='$email'"; 
  
  
  $result = mysqli_query($db, $sql); 
  
  $num = mysqli_num_rows($result); 
  
  
  // This sql query is use to check if 
  // the username is already present 
  // or not in our Database 
  if($num == 0) { 
    $hash=md5($password);
    
    setcookie("cookie_fname", $fname, time()+(86400*30), "/");
    setcookie("cookie_lname", $lname, time()+(86400*30), "/");
    setcookie("cookie_email", $email, time()+(86400*30), "/");
    setcookie("cookie_mobile", $mobile, time()+(86400*30), "/");
   
      $query = "INSERT INTO elinguistic_users(fname, lname, email, mobile, password) VALUES('$fname', '$lname', '$email', '$mobile', '$hash')";
      
      $result_query=mysqli_query($db, $query);
    
      $_SESSION['success'] = "$email";
      


    echo '<script>
alert("Registered successfully. You can view your profile and register for courses");
window.location.href="index.php";
</script>';
      
     
  }// end if 
  
if($num>0) 
{ 

  echo '<script>
alert("Email exists. Please try to log in!");
window.location.href="user_login.php";
</script>';

} 
  
}//end if 
  
?>
  