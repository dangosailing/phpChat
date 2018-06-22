<?php

    //Start a session
    session_start();

    // Variables
    if(isset($_POST["userName"]))
    {
        $_SESSION["userName"] = $_POST["userName"];
    }

?>

<?php require 'head.php' ?>

<h1 class="text-center">My PHP based chat app</h1>

<?php
if(isset($_SESSION["userName"]))
{
    require 'chatWindow.php';
} else{
    require 'login.php';
   

}


?>
<?php require 'foot.php' ?>