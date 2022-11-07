<?php 
    include("db.php");

    function check_existing_email($email) {
        global $connection;
        $flag = false;

        $query = "SELECT id FROM `users` WHERE email = '".mysqli_real_escape_string($connection, $email)."' LIMIT 1";
        $result = mysqli_query($connection, $query);


        if (mysqli_num_rows($result) > 0) {
            $flag = true;
        } 

        return $flag;
    }

    function save_registration($name,$email,$password) {
        global $connection;
        $flag = true;

        $query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('".mysqli_real_escape_string($connection, $_POST['name'])."', '".mysqli_real_escape_string($connection, $_POST['email'])."', '".mysqli_real_escape_string($connection, $_POST['password'])."')";
        if (!mysqli_query($connection, $query)) {
            
        }
    }
?>