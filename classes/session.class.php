<?php
// ------------------VERIFY SESSION----------------------------

// A class to verify is a user is loged in or not and if the fields are filled or not
class session
{
//a function to check if the login fields are filled in or not
    public function checkField()
    {
        if (!isset($_POST['username'], $_POST['password'])) {
            exit('Please fill out both fields.');
        }
    }

    // if the user is not logged in send them to the login page
    public function checkLoged()
    {
        if (!isset($_SESSION['loggedin'])) {
            header('Location: login.php');
            exit;
        }
    }
};
