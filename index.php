<?php
	include_onece "indexed.html";
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>Elecricity bill</title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		
		</head>
		<body>
		
		<h2> <marquee direction="right" >Domestic Elecricity Bill Calculator</marquee></h2>
		
		<div id = "bd">
		<from>
		
		<label>No of unit used:</label>
		
		<input type="text" id = "elecbill" name= "elecbill">KWh<br><br>
		
		<div id = "btn">
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type ="reset" value ="Clear">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 

<button type="button" onclick="myFunction()">Calculate My Bill</button></br>
<div id="calculate"></div>		
		
		</div>
		
		</from>
		
		</body>
		
		</html>