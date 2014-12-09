<?php 
// require_once('dbtasks.class.php');
	$username = 'lakmal';
	$pw = 'ajkwRGFiMkhZcGp5dnpod3AwQkZ0UT09';

   $connection = mysql_connect("localhost", "root", "p3roo7");
   $database = mysql_select_db("sportunleash");
   $query = mysql_query("select u.userid, u.username, c.usr_category from user_category c, user u where u.categry = c.usr_cate_id and u.username = '$username' and u.passwd = '$pw' and u.categry = c.usr_cate_id", $connection);

   while ($row = mysql_fetch_array($query)) {
       echo $row[0]." ".$row[1]." ".$row[2]."<br>";
   }
   mysql_close($connection);
?>