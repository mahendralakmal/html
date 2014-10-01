<?php
$id=$_GET['id'];
$dpack=new DB();
$dpack->connect();
$currentFile = $_SERVER["PHP_SELF"];
$parts = Explode('/', $currentFile);
$currentFile=$parts[count($parts) - 1];
if($currentFile== "subpage.php") {
$table="contents";
}else {
$table="menu";
}


$sql="SELECT * from {$table} where id='$id'";
$content=$dpack->query($sql);
if($content['pt']==0) {
include("editor_panel.php");
}else {
include("content_display.php");

}
?>
