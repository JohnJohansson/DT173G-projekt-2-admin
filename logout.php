<?php
// -------------- Logout ----------------

//usets all values and destroys the session to log a user out
session_start();
unset($_SESSION['id']);
unset($_SESSION['person']);
unset($_SESSION['loggedin']);
session_unset();
session_destroy();

// After your logged out you get sent to the login page
header("Location: login.php");
exit();
