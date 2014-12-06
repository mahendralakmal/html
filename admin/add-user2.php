<?php
$error = '';
$encrypt_method = "AES-256-CBC";
$skey = '!@#$';
$siv = '@#$%';
$key = hash('sha256', $skey);
$iv = substr(hash('sha256', $siv), 0, 16);
if (isset($_POST['submit'])){
	$id=$_POST['id'];
	$created_usr=$_POST['login_id'];
    $username=$_POST['username'];
    $passwd=$_POST['passwd'];
    $usrcate=$_POST['usrcate'];

	$connection = mysql_connect("localhost", "root", "p3roo7");
	$database = mysql_select_db("sportunleash");

	$encrypted_passwd = openssl_encrypt($passwd, $encrypt_method, $key, 0, $iv);
	$encrypted_passwd = base64_encode($encrypted_passwd);

	$qry = "INSERT INTO user (username, passwd, created_date, created_usr, categry, profile) VALUES ('$username', '$encrypted_passwd', CURRENT_TIMESTAMP(), '$created_usr', '$usrcate', '$id')";

	$query = mysql_query($qry, $connection);
	if ($query) {
	  header("location: /admin/");
	}
	else{
	  $error = "Somthing is wrong!";
	}
	mysql_close($connection);
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<title>Admin</title>
	<?php include_once('./includes/css.php'); ?>

	<!-- Latest compiled and minified JavaScript -->
	<script src="./static/dist/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container content-main">
		<?php include_once('./includes/header.php'); ?>		
		<div class="wrap-logo">
			<div class="jumbotron">
				<form action="" method="post" class="lg-pane">
					<span class="login-error"><?php echo $error; ?></span>
                    <h1>Add New User</h1>
                    <div>
                    	<?php 
                           $profid = intval($_GET['id']);
                           echo '<input type="hidden" name="id" id="id" value='.$profid.'>';
                           echo '<input type="hidden" name="login_id" id="login_id" value='.$login_id.'>';
                        ?>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">User Name</div>
                    	<div class="form-group col-md-6 left-align"><input class="form-control" id="username" name="username" placeholder="User Name" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Password</div>
                    	<div class="form-group col-md-6 left-align"><input class="form-control" id="passwd" name="passwd" placeholder="Password" type="password"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">User Category</div>
                    	<div class="form-group col-md-6 left-align">
							<?php 
                                   $connection = mysql_connect("localhost", "root", "p3roo7");
                                   $database = mysql_select_db("sportunleash");
                                   $query = mysql_query("select * from user_category", $connection);
                                   echo '<select name="usrcate"  class="form-control">
                                        <option value="" selected>Select Category</option>';
                                   while ($cate = mysql_fetch_array($query)) {
                                       echo "<option value='".$cate[0]."'>".$cate[1]."</option>";
                                   }
                                   echo '</select>';                                   
                                   mysql_close($connection);          
                                ?>
                    	</div>
                    </div>
                    <button name="submit" type="submit" class="btn-lg btn-primary">Add</button><br>                                                
                </form>
			</div>
		</div>		
	</div>
	<footer>
	<?php include_once('./includes/footer.php'); ?>
	</footer>
</body>
</html>