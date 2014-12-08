<?php include('session.php'); ?>
<header>
	<div>
		<?php 
			
			echo "<div class='admin-login'>";
            echo "You are loged in as $login_session&nbsp;&nbsp;";
            echo '<a href="logout.php">Sign Out</a></div>';
        ?>
	</div>
	<hr>
</header>