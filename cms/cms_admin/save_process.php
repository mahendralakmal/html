<?php

$content=$_POST['content'];
$id=$_POST['id'];
$table=$_POST['table'];
$currentFile=$_POST['currentFile'];
include('config.php');
$con = mysql_connect("$dbhost","$dbuser","$dbpass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($dbname,$con);


$sqlu = "UPDATE {$table} SET content='{$content}' WHERE id={$id}";
$r=mysql_query($sqlu);



if($r) {
header('Location:'.$base.'/'.$currentFile.'?id='.$id.' ');
}
?>
<div id="success">
Your content saved success fully
</div>
