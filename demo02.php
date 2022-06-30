<html>
<head>
	<title>Demo PHP</title>
	
</head>
<body>
	<a href="index1.html">Home page</a>
	<h1>Hello from PHP!</h1>
		<?php
			$x=2;
			$y=2;
			$z= $x+$y;
			echo "<h2> Result: $z </h2>";
			date_default_timezone_set("Europe/Moscow");
			$now = date("H:i:s");
			echo "<h1> Page opened at $now </h1>";

		?>
		<p> Type any number and we'll double it:</p>
		<form action="doubler.php">
			<input type="text" name="data"/>
			<button>Send data to double</button>
		</form>
		
</body>
</html>