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
                    	<div class="form-group col-md-4 right-align">First Name</div>
                    	<div class="form-group col-md-6 left-align"><input class="form-control" id="fname" name="fname" placeholder="First Name" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Middle Name</div>
                    	<div class="form-group col-md-6 left-align"><input class="form-control" id="mname" name="mname" placeholder="Middle Name" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Last Name</div>
                    	<div class="form-group col-md-6 left-align"><input class="form-control" id="lname" name="lname" placeholder="Last Name" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Date Of Birth</div>
                    	<div class="form-group col-md-6 left-align"><input class="form-control" id="dob" name="dob" placeholder="Date Of Birth" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Gender</div>
	                    <div class="form-group col-md-6 left-align">
	                    	<input type="radio" name="sex" value="male" checked>Male&nbsp;&nbsp;
	                    	<input type="radio" name="sex" value="female">Female
	                    </div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Address</div>
                    	<div class="form-group col-md-6 left-align"><input class="form-control" id="addr1" name="addr1" placeholder="Address" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Address</div>
                    	<div class="form-group col-md-6 left-align"><input class="form-control" id="addr2" name="addr2" placeholder="Address" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">City</div>
                    	<div class="form-group col-md-6 left-align"><input class="form-control" id="city" name="city" placeholder="City" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">State/Region</div>
                    	<div class="form-group col-md-6 left-align"><input class="form-control" id="state" name="state" placeholder="State/Region" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Country</div>
                    	<div class="form-group col-md-6 left-align">
                    		<select name="select"  class="form-control">
							  <option value="value1">Value 1</option> 
							  <option value="value2" selected>Value 2</option>
							  <option value="value3">Value 3</option>
							</select>
                    	</div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Telephon</div>
                    	<div class="form-group col-md-6 left-align"><input class="form-control" id="tel" name="tel" placeholder="Telephon" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Mobile</div>
                    	<div class="form-group col-md-6 left-align"><input class="form-control" id="mobile" name="mobile" placeholder="Mobile" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Email</div>
                    	<div class="form-group col-md-6 left-align"><input class="form-control" id="email" name="email" placeholder="Email" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Prefered Sports</div>
                    	<div class="form-group col-md-6 left-align"><textarea cols="50" rows="5" class="form-control" id="sports" name="sports" placeholder="Prefered Sports" type="text"></textarea></div>
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