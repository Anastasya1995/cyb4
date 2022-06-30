<?php
    session_start();
    unset($_SESSION["user"]);
    echo '<meta http-equiv="refresh" content="3; url=index1.html" />';
    die("Logged out!");
    

?>
