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
    //clear session from disk
    //echo session_destroy() ? "Successfully Logged Out" :  "An error Occurred";
    session_destroy();
    session_unset();
    header("Location: index.php");
}
    
}
?>