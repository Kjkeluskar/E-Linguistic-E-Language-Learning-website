<?php
include 'server.php';

if(isset($_POST['user_login']))
{
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);

if ($email != "" && $password != ""){
    $hash=md5($password);

    $sql_query = "select count(*) as cntUser from elinguistic_users where email='".$email."' and password='".$hash."'";
    $result = mysqli_query($db,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['success'] = $email;
        session_start();
        setcookie("cookie_email", $email, time() + (86400 * 30),  "/");
        $query_fname = "select fname, lname, mobile from elinguistic_users where email='$email'";
        $result = mysqli_query($db,$query_fname);
        while ($row =mysqli_fetch_assoc($result))
            {

                setcookie("cookie_fname", $row['fname'], time()+(86400*30), "/");
        
        setcookie("cookie_lname", $row['lname'], time()+(86400*30), "/");
        
        setcookie("cookie_mobile", $row['mobile'], time()+(86400*30), "/");
            }
   
        echo '<script>
alert("Logged in successfully. You can view your profile and register for courses");
window.location.href="index.php";
</script>';
  
        
        
    }else{
        echo '<script>
alert("Invalid credentials! Please try again.");
window.location.href="user_login.php";
</script>';
    }

}
}

?>