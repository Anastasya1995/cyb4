<html>
<head>
	<title>Login</title>
	<meta charset="utf-8"/>
	<style>
		input, button {
			width: 150px;
			margin: 5px;
			text-align: center;
		}
	</style>
</head>
<body>
	<a href="index1.html">Home page</a>
	<h1>Enter your login and password</h1>
	<form method="POST" action="check_login.php">
		<input type="text" name="txtUser" /> <br/>
		<input type="password" name="txtPwd" /> <br>
		<button>Forward</button> <br/>
	</form>
	</body>
</html>