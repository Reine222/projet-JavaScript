<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	    #texto{
			
			padding:5px;
            height:10%;
			width:95%;
			border-radius:20px;
			background-color: white;
			font-size:2em;
			font-family:Lucida Calligraphy, serif;
		}
	</style>
</head>
<body>
<?php

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'chatbox');

$result1 = mysqli_query($con,"SELECT * FROM logs ORDER BY id ASC");

while($extract = mysqli_fetch_array($result1)) {
	echo "<div class='container' id='texto'><span class='glyphicon glyphicon-user'> " . $extract['username'] . "</span>: <p>" . $extract['msg'] . "</p></div><br />";
}
?>
</body>
</html>
