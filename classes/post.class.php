<?php

// A post class where we store functions with varibles to get things out of our tabels
class post
{
    // properties

    private $db;


    //--------- CONSTRUKTOR -------------------------------------
    public function __construct()
    {
        $this->db = new mysqli(DBHOST, DBUSER, DBPASS, DBDATABASE); //Connects to the database
        if ($this->db->connect_errno > 0) { //
            die("Fel vid anslutning: " . $this->db->connect_error);
        }
    }


    // a function to check the users login atempt
    public function checkUser()
    {
        // Prepare ids used to avoid SQL injections(bad code)
        // we store them in the var $sql
        // we select the id and password from the table users where the username equals what was put it
        $sql = $this->db->prepare('SELECT id, password FROM admin WHERE username = ?');
        // Then we bind the parameters, its a string so we use 's', then we execute the statment
        $sql->bind_param('s', $_POST['username']);
        $sql->execute();
        // Now we store the results
        $sql->store_result();

            //if the returned rows are greater then 0
            // we bind the results the variblesand then fetch them 
        if ($sql->num_rows > 0) {
            $sql->bind_result($id, $password);
            $sql->fetch();
            // If the rows are more then 0 we know the account name exist, now lets check the password!
            // we werify our hashed password if user name and password are right we create a new session
            // Note: remember to use password_hash in your registration file to store the hashed passwords.
            if (password_verify($_POST['password'], $password)) {
                    // new session created with a var for being loged in set to true
                    //the name is equal to the name from the field
                    // and the id is equal to the users id
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['person'] = $_POST['username'];
                $_SESSION['id'] = $id;
            } else {
                // Incorrect password
                echo 'Wrong username or password';
            }
        } else {
            // wrong credentials
            echo 'Wrong username or password';
        }
//we close the prepared statment
        $sql->close();
    }
}
