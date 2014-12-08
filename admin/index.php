<?php 
    include('adminlg.php');
    include('encdec.php');
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


	<div class="container content-admin-login">		
		<div class="wrap-logo">
			<div class="jumbotron">
				<form action="" method="post" class="lg-pane">
                    <h1>Sign In</h1>
                    <div class="row">
                    <div class="form-group col-md-4">User Name</div>
                    <div class="form-group col-md-6"><input class="form-control" id="username" name="username" placeholder="User Name" type="text"></div>
                    </div>
                    <div class="row">
                    <div class="form-group col-md-4">Password&nbsp;&nbsp;</div>
                    <div class="form-group col-md-6"><input class="form-control" id="passwd" name="passwd" placeholder="Password" type="password"></div>
                    </div>
                    <button name="submit" type="submit" class="btn-lg btn-primary">Sign In</button><br>                            
                    <span class="login-error"><?php echo $error; ?></span>
                </form>
			</div>
		</div>		
	</div>
</body>
</html>