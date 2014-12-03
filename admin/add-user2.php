<!DOCTYPE html>
<html>
<head lang="en">
	<title>Admin</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="./static/dist/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="./static/dist/css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="../static/css/site.css">

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
                    		<select name="select"  class="form-control">
							  <option value="value1">Value 1</option> 
							  <option value="value2" selected>Value 2</option>
							  <option value="value3">Value 3</option>
							</select>
                    	</div>
                    </div>
                    <button name="addusr" type="submit" class="btn-lg btn-primary">Add</button><br>                                                
                </form>
			</div>
		</div>		
	</div>
	<footer>
	<?php include_once('./includes/footer.php'); ?>
	</footer>
</body>
</html>