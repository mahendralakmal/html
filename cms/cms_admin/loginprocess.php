<?php
$user = $_POST['username'];
$pass = $_POST['PaSSER'];
if($_SESSION['Liken']) {
header("location:/sportunleashphp/neuropanel_admin/index.php");
}
if( $user == "powertool" && $pass == "user@123") {
session_start();
$_SESSION['Liken'] = "luke" ;
header("location:/sportunleashphp/neuropanel_admin/index.php");
}else {
header("location:/Login.php");
}
/*testing for the upload*/
?>