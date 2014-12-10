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
				<form action="" id="newusr1" method="post" class="lg-pane col-md-12">
					<span class="login-error"><?php echo $error; ?></span>
                    <h1>Users List</h1>
                      <div class="row">
                        <div class="form-group col-md-1"><b>ID</b></div>
                        <div class="form-group col-md-2"><b>User Name</b></div>
                        <div class="form-group col-md-2"><b>Category</b></div>
                        <div class="form-group col-md-2"><b>Status</b></div>
                        <div class="form-group col-md-4"><b>Name</b></div>
                        <div class="form-group col-md-1">&nbsp;</div>
                      </div>
                      <div class="hrr"></div>
                    <?php
                      $servername = "localhost";
                      $username = "root";
                      $password = "p3roo7";
                      $dbname = "sportunleash";
                      

                      $connection = mysql_connect($servername, $username, $password);
                      $database = mysql_select_db($dbname);
                      $qry = "select u.userid ,u.username ,c.usr_category,s.status,concat(p.f_name,' ' ,p.l_name) as Name from sportunleash.user u, sportunleash.user_category c, sportunleash.user_prof p, sportunleash.user_status s where u.status = s.status_id and u.categry = c.usr_cate_id and u.profile = p.prof_id";
                      $query = mysql_query($qry, $connection);

                      while ($row = mysql_fetch_array($query)) {
                        echo '<div class="row ulistp">';
                        echo '<div class="form-group col-md-1">'.$row[0].'</div>';
                        echo '<div class="form-group col-md-2">'.$row[1].'</div>';
                        echo '<div class="form-group col-md-2">'.$row[2].'</div>';
                        echo '<div class="form-group col-md-2">'.$row[3].'</div>';
                        echo '<div class="form-group col-md-4">'.$row[4].'</div>';
                        echo '<div class="form-group col-md-1"><a href="#">edit</a></div>';
                        echo '</div>';
                      }
                      mysql_close($connection);
                    ?>

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