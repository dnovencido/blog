<?php  
    include("db.php");

    if($_POST['name']) {
        echo $_POST['name'];
    }

    if($_POST['email']) {
        echo $_POST['email'];
    }
?>