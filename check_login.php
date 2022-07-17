<?php

session_start();
$user = $_REQUEST["txtUser"];
$pwd = $_REQUEST["txtPwd"];
$hash = hash("sha256", $pwd);


/*if ($hash =="8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92") {
	echo "<h1> Hi, $user! </h1>";
}
else {
	echo "<h2> Sorry, wrong password! </h2>";
}*/

// Здесь нарушены все мыслимые нормы безопасности:
// 1. Weak password (Cлабый парооль);
// 2. Principle of least privilege (Нарушен принцип наименьших привилегий);
// 3. Hardcode secret (Секрет в коде).
//$conn = mysqli_connect("localhost","root","","cyb4");
//4. Уязвисмость для SQL Injection
// $sql = "SELECT * FROM users WHERE Login='$user' AND PwdHash='$hash'";
// //echo $sql; (отладка)
// $query = mysqli_query($conn, $sql);
// $result = mysqli_fetch_all($query);
// //echo $result;
// //var_dump($result);
// $numRows= count($result);
// //echo ($numRows);

$server = getenv("cyb4_db_server");
$login = getenv("cyb4_user_user");
$pwd = trim(getenv("cyb4_db_pwd"));
$conn = mysqli_connect($server,$login,$pwd,"cyb4");
// Устраненяем проблему SQL Injection!!!

$sql = "SELECT * FROM users WHERE Login=? AND PwdHash=? ";
$stat = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stat, "ss", $user, $hash);
mysqli_stmt_execute($stat);
$result = mysqli_stmt_get_result($stat);
$numRows= mysqli_num_rows($result);






if ($numRows == 0) {
	echo "<h2> Sorry, wrong login or password! </h2>";
}
else {
	echo "<h1> Hi, $user! </h1>";
	echo '<meta http-equiv="refresh" content="3; url=index1.html" />';
	$_SESSION["user"] = $user;
}



mysqli_close($conn);

