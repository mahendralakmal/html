<?php
if(isset($_GET['id'])) {
$id=$_GET['id'];
}else {
$id=1;
}

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


$sql = "SELECT * from {$table} where id='{$id}'";
$content=$dpack->query($sql);


$SYSTEM = "admi0n";
if($SYSTEM=="admin") {
		if(isset($_GET['id']) ) 
		{

		include("editor.php");
		
		
		}

} else {

		include("content_display.php");
		
		

}
?>