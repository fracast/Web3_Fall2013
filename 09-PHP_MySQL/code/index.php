<?php

 $fortune = array();
 
 //connect to database
 $mysql = mysql_connect("127.0.0.1", "root", "root");
 
 //select the table
 mysql_select_db('FortuneCookieMonster', $mysql);
 
 //get stuff from database
 $sql  = "SELECT fortune FROM Fortunes";
 $query = mysql_query($sql);
 
 while ($data = mysql_fetch_assoc($query)){
 
 array_push($fortune, $data["fortune"]);
 
/* 	 echo $data["fortune"]; */
 }
 
$randomNum = rand(0, count($fortune)-1);
 
 ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Fortune Cookie Monster</title>
		<link rel="stylesheet" href="css/style.css"> 
		<link href='http://fonts.googleapis.com/css?family=Dosis:200,400,800|Raleway+Dots' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
		<h1>Fortune Cookie Monster</h1>
		<div id="cookie">
			<a href="index.php">
			<img src="img/cookie.png" alt="cookie">
			</a>
		</div>
		<h2> <?php echo $fortune[$randomNum]; ?></h2>
	</body>
	
	<footer>
		<h3>Fortune Cookie Monster is brought to you by Web3000++ with Jamie Kosoy and Francesca Castelli</h3>
	</footer>
	
</html>
