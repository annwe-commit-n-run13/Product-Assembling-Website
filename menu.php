<?php
include('config/constants.php'); 
// delete all the session and redirect to login page
session_destroy();

header('location:'.SITEURL.'login.php');

?>