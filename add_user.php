<?php
session_start();
$user = $_REQUEST["txtUser"];
$pwd_ = $_REQUEST["txtPwd"];
$email = $_REQUEST["Email"];
$hash = hash("sha256", $pwd_);

    $server = getenv("cyb4_db_server");
    $login = getenv("сyb4_db_user");
    $pwd = trim (getenv("cyb4_db_pwd"));
    $conn = mysqli_connect ($server,$login,$pwd,"cyb4");
    $sql = "INSERT INTO users(Login,PwdHash,Email) Values ('$user','$hash','$email')";
    echo "<h3>Thank you for registering in out portal $user, you will be redirected to the Login page.</h3>";
    echo '<meta http-equiv= "refresh" content= "3; url=login.php"/>';
    mysqli_query($conn,$sql);
    mysqli_close($conn);
