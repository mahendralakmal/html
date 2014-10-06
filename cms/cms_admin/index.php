<?php
session_start();
if(!$_SESSION['Liken']) {
header("location:/cms/cms_admin/Login.php");
}
?>
<html>
<?php include("config.php");
include("db.class.php");?>
<head>
		<title><?php echo $Title;?></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

		
		<div id="wrapper">
		        <?php include("header.php");?>
				<div id="cm">
				<?php include("leftFe.php");?>
				<?php include("right_index.php");?>
				</div>

               <?php include("footer.php");?>
		</div>
</body>
</html>
