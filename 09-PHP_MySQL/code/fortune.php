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
 
 print_r($fortune);
 
 ?>