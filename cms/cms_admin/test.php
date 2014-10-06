<?php
$con = mysql_connect("localhost","eurocarl_neuropn","neuropn45");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("eurocarl_neuropanel", $con);

$result = mysql_query("SELECT * FROM menu");
$result=mysql_fetch_array($result);
print_r($result);
?>