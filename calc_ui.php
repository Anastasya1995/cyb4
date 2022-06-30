
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
			document.getElementById("txt3").value = "Wait...";
			
			var x, y, z;
			x = parseInt(document.getElementById("txt1").value);
			y = parseInt(document.getElementById("txt2").value);
			
			var url = "api/plus.php?x=" + x + "&y=" + y;
			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);
			xhr.onload = function() {
				z = xhr.responseText;
				document.getElementById("txt3").value = z;
			};
			xhr.send();
			
		}
		function minus() {
			document.getElementById("txt3").value = "Wait...";
			
			var x, y, z;
			x = parseInt(document.getElementById("txt1").value);
			y = parseInt(document.getElementById("txt2").value);
			
			var url = "api/minus.php?x=" + x + "&y=" + y;
			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);
			xhr.onload = function() {
				z = xhr.responseText;
				document.getElementById("txt3").value = z;
			};
			xhr.send();
			
		}

	</script>
</head>
<body>
	<a href="index1.html">Home page</a>
	<h1>Pure Web API Calculator</h1>
	<input type="text" id="txt1" autocomplete="off"  /> <br/>
	<input type="text" id="txt2" autocomplete="off" /> <br/>
	<button onclick="plus();">+</button> <br/>
	<button onclick="minus();">-</button> <br/>
	<input type="text" id="txt3" readonly="true" /> <br/>
	<textarea></textarea> 
</body>
</html>