<?php 
session_start();
// Unset and destroy session variables
// AKA signing out
session_unset(); 
session_destroy(); 
// Then redirect to the homepage
header("Location: ../index.php");
exit();
?>