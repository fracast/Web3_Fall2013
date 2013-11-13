<?php
 //connect to database
 $mysql = mysql_connet("127.0.0.1", "root", "root");
 
 //select the table
 mysql_select_db('FortuneCookieMonter', $mysql);
 
 //get stuff from database
 $sql  = "SELECT fortune FROM Fortunes";
 $query = mysql_query($sql);
 
 $data = mysql_fetch_assoc($query);
 print_r($data);
 
 ?>