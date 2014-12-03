<?php include('session.php'); ?>
<header>
	<div>
		<?php 
			echo "<div class='admin-login'>";
            echo "You are loged in as $login_session&nbsp;&nbsp;";
            echo '<a href="logout.php">Sign Out</a></div>';
		 ?>
	</div>
	<ul class="nav nav-pills">
	  <li role="presentation" class="active"><a href="add-user.php">Add New User</a></li>
	  <li role="presentation"><a href="#">Profile</a></li>
	  <li role="presentation"><a href="#">Messages</a></li>
	</ul>
	<hr>
</header>