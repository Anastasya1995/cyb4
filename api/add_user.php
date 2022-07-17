<?php
    $email=$_REQUEST["txtEmail"];
    $user=$_REQUEST["txtUser"];
    $pwd=$_REQUEST["txtPwd"];
    $hash = hash("sha256", $pwd);
    sleep(1); 
    
    $server = getenv("cyb4_db_server");
    $login = getenv("cyb4_user_user");
    $pwd = trim(getenv("cyb4_db_pwd"));
    $conn = mysqli_connect($server,$login,$pwd,"cyb4");

$sql = "INSERT INTO users (Email, Login, PwdHash) VALUES($email, $user, $hash)";
$stat = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stat, "ss", $email, $user, $hash);
mysqli_stmt_execute($stat);
$result = mysqli_stmt_get_result($stat);



	echo "<h1> Register complete! You will be retracked to the Login page... </h1>";
	echo '<meta http-equiv="refresh" content="3; url=login.php" />';
	$_SESSION["user"] = $user;


mysqli_query($conn, $sql);
mysqli_close($conn);
