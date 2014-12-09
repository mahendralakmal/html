<!DOCTYPE html>
<html>
<head lang="en">
	<title>Admin</title>
	<?php include_once('./includes/css.php'); ?>

	<!-- Latest compiled and minified JavaScript -->
     <script src="./static/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="./static/js/jquery.js"></script>
</head>
<body>
	<div class="container content-main">
		<?php include_once('./includes/header.php'); ?>		
		<div class="wrap-logo row">
      <?php include_once('./includes/menu.php'); ?>
			<div class="col-md-9 pnl-right">
				<form action="" id="newusr1" method="post" class="lg-pane">
					<span class="login-error"><?php echo $error; ?></span>
                    <h1>Add New User</h1>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">First Name</div>
                    	<div class="form-group col-md-6 left-align"><input required maxlength="30" class="form-control" id="fname" name="fname" placeholder="First Name" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Middle Name</div>
                    	<div class="form-group col-md-6 left-align"><input maxlength="30" class="form-control" id="mname" name="mname" placeholder="Middle Name" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Last Name</div>
                    	<div class="form-group col-md-6 left-align"><input required maxlength="50" class="form-control" id="lname" name="lname" placeholder="Last Name" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Date Of Birth</div>
                    	<div class="form-group col-md-6 left-align">
                              <input class="form-control" required id="dob" name="dob" placeholder="dd/mm/yyyy" type="text" maxlength="10">
                         </div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Gender</div>
	                    <div class="form-group col-md-6 left-align">
	                    	<input type="radio" name="gender" value="1" checked>Male&nbsp;&nbsp;
	                    	<input type="radio" name="gender" value="0">Female
	                    </div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Address</div>
                    	<div class="form-group col-md-6 left-align"><input maxlength="100" required class="form-control" id="addr1" name="addr1" placeholder="Address" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Address</div>
                    	<div class="form-group col-md-6 left-align"><input maxlength="100" class="form-control" id="addr2" name="addr2" placeholder="Address" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">City</div>
                    	<div class="form-group col-md-6 left-align"><input maxlength="50" required class="form-control" id="city" name="city" placeholder="City" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">State/Region</div>
                    	<div class="form-group col-md-6 left-align"><input maxlength="50" class="form-control" id="state" name="state" placeholder="State/Region" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Country</div>
                    	<div class="form-group col-md-6 left-align">
                    		<select name="country" required class="form-control">
						                <option value="" selected>Select Country</option>
                                <?php 
                                // require_once('dbtasks.class.php');
                                   $connection = mysql_connect("localhost", "root", "p3roo7");
                                   $database = mysql_select_db("sportunleash");
                                   $query = mysql_query("select * from country", $connection);
                                   // $db = new dbtasks();
                                   // $query = $db->select("select * from country")
                                   while ($row = mysql_fetch_array($query)) {
                                       echo "<option value='".$row[0]."'>".$row[1]."</option>";
                                   }
                                   mysql_close($connection);
                                ?>
				                  </select>
                    	</div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Telephon</div>
                    	<div class="form-group col-md-6 left-align"><input maxlength="15" required class="form-control" id="tel" name="tel" placeholder="Telephon" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Mobile</div>
                    	<div class="form-group col-md-6 left-align"><input maxlength="15" class="form-control" id="mobile" name="mobile" placeholder="Mobile" type="text"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Email</div>
                    	<div class="form-group col-md-6 left-align"><input maxlength="50" required class="form-control" id="email" name="email" placeholder="Email" type="email"></div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-4 right-align">Prefered Sports</div>
                    	<div class="form-group col-md-6 left-align">
                                <?php 
                                   $connection = mysql_connect("localhost", "root", "p3roo7");
                                   $database = mysql_select_db("sportunleash");
                                   $query = mysql_query("select * from sport", $connection);
                                   echo '<select id="sport1" name="sport1"  class="form-control">
                                        <option value="" selected>Select sport</option>';
                                   while ($spo1 = mysql_fetch_array($query)) {
                                       echo "<option value='".$spo1[0]."'>".$spo1[1]."</option>";
                                   }
                                   echo '</select>';                                   
                                   mysql_close($connection);          
                                ?>  
                                <?php 
                                   $connection = mysql_connect("localhost", "root", "p3roo7");
                                   $database = mysql_select_db("sportunleash");
                                   $query = mysql_query("select * from sport", $connection);
                                   echo '<select id="sport2" name="sport2"  class="form-control">
                                        <option value="" selected>Select sport</option>';
                                   while ($spo1 = mysql_fetch_array($query)) {
                                       echo "<option value='".$spo1[0]."'>".$spo1[1]."</option>";
                                   }
                                   echo '</select>';                                   
                                   mysql_close($connection);          
                                ?>
                                <?php 
                                   $connection = mysql_connect("localhost", "root", "p3roo7");
                                   $database = mysql_select_db("sportunleash");
                                   $query = mysql_query("select * from sport", $connection);
                                   echo '<select id="sport3" name="sport3"  class="form-control">
                                        <option value="" selected>Select sport</option>';
                                   while ($spo1 = mysql_fetch_array($query)) {
                                       echo "<option value='".$spo1[0]."'>".$spo1[1]."</option>";
                                   }
                                   echo '</select>';                                   
                                   mysql_close($connection);          
                                ?>
                                <?php 
                                   $connection = mysql_connect("localhost", "root", "p3roo7");
                                   $database = mysql_select_db("sportunleash");
                                   $query = mysql_query("select * from sport", $connection);
                                   echo '<select id="sport4" name="sport4"  class="form-control">
                                        <option value="" selected>Select sport</option>';
                                   while ($spo1 = mysql_fetch_array($query)) {
                                       echo "<option value='".$spo1[0]."'>".$spo1[1]."</option>";
                                   }
                                   echo '</select>';                                   
                                   mysql_close($connection);          
                                ?>
                                <?php 
                                   $connection = mysql_connect("localhost", "root", "p3roo7");
                                   $database = mysql_select_db("sportunleash");
                                   $query = mysql_query("select * from sport", $connection);
                                   echo '<select id="sport5" name="sport5"  class="form-control">
                                        <option value="" selected>Select sport</option>';
                                   while ($spo1 = mysql_fetch_array($query)) {
                                       echo "<option value='".$spo1[0]."'>".$spo1[1]."</option>";
                                   }
                                   echo '</select>';                                   
                                   mysql_close($connection);          
                                ?>

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
         <script>
    // $("#newusr1").validate();
    </script>
</body>
</html>