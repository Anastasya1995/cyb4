<?php
session_start();
$user = $_REQUEST["txtUser"];
$pwd_ = $_REQUEST["txtPwd"];
$hash = hash("sha256", $pwd_);

//Устраняем проблему секрета в коде
$server = getenv("cyb4_db_server");
$login = getenv("сyb4_db_user");
$pwd = trim (getenv("cyb4_db_pwd"));
$conn = mysqli_connect ($server,$login,$pwd,"cyb4");
//проблема слабого пароля и превышенного логина делегируется администратору производственного сервера
//Устраняем проблему SQL injection
$sql = "SELECT * FROM users WHERE Login=? AND PwdHash=? ";
$stat = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stat, "ss", $user, $hash);
mysqli_stmt_execute($stat);
$result = mysqli_stmt_get_result($stat);
$numRows = mysqli_num_rows($result);

if ($numRows == 0) {
	echo "<h2> Sorry, wrong login or password! </h2>";
}
else {
	echo "<h1> Hi, $user! </h1>";
	echo '<meta http-equiv="refresh" content="3; url=index1.html" />';
	$_SESSION["user"] = $user;
}

mysqli_close($conn);

