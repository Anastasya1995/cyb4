<?php
session_start();
// фактически, здесь реализована авторизация
if(!isset($_SESSION["user"])){
	echo '<meta http-equiv="refresh" content="3; url=login.php" />';
	die("Enter your login! You will be retracked to Login page");

}
?>
<html>
<head>
	<title>Calculator</title>
	<meta charset="utf-8"/>
	<style>
		input, button {
			width: 150px;
			margin: 5px;
			text-align: center;
		}
	</style>
	<script>
		function plus() {
			var x, y, z;
			x = parseInt(document.getElementById("txt1").value);
			y = parseInt(document.getElementById("txt2").value);
			z = x+y;
		document.getElementById("txt3").value = z;
		}
		function minus() {
			var x, y, z;
			x = parseInt(document.getElementById("txt1").value);
			y = parseInt(document.getElementById("txt2").value);
			z = x-y;
		document.getElementById("txt3").value = z;
		}

	</script>
</head>
<body>
	<a href="index1.html">Home page</a>
	<h1>Pure JS Calculator</h1>
	<input type="text" id="txt1" autocomplete="off"  /> <br/>
	<input type="text" id="txt2" autocomplete="off" /> <br>
	<button onclick="plus();">+</button> <br/>
	<button onclick="minus();">-</button> <br/>
	<input type="text" id="txt3" readonly="true" />
</body>
</html>