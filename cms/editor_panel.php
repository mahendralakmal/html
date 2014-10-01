

	<!-- jQuery and jQuery UI -->
	<script src="editor/js/jquery-1.6.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="editor/js/jquery-ui-1.8.13.custom.min.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="editor/css/smoothness/jquery-ui-1.8.13.custom.css" type="text/css" media="screen" charset="utf-8">

	<!-- elRTE -->
	<script src="editor/js/elrte.min.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="editor/css/elrte.min.css" type="text/css" media="screen" charset="utf-8">

	<!-- elRTE translation messages -->
	<script src="editor/js/i18n/elrte.ru.js" type="text/javascript" charset="utf-8"></script>

	<script type="text/javascript" charset="utf-8">
		$().ready(function() {
			var opts = {
				cssClass : 'el-rte',
				// lang     : 'ru',
				height   : 450,
				toolbar  : 'complete',
				cssfiles : ['css/elrte-inner.css']
			}
			$('#editor').elrte(opts);
		})
	</script>
	<div id="Ebox">
	<?php 
	$currentFile = $_SERVER["PHP_SELF"];
	$parts = Explode('/', $currentFile);
	$currentFile=$parts[count($parts) - 1];
	if($currentFile== "subpage.php") {
	$table="contents";
	}else {
	$table="menu";
	}
	?>
<form method="post" action="save_process.php">
<button type="submit" value="save"><img src="images/save.png"></button>
	<input type="hidden" value="<?php echo $_GET['id'];?>" name="id">	
	<input type="hidden" value="<?php echo $table;?>" name="table">	
	<input type="hidden" value="<?php echo $currentFile;?>" name="currentFile">	
		<p id="intro_hl"></p>
		<div id="text">
		<div id="info">
		
		<h2><?php echo $content['title'];?></h2>
	
<div id="edit_box">
	<textarea id="editor" name="content">
		<?php echo $content['content'];?>

	</textarea>
</div>
	
	
		</div>

		</div>
		<p id="intro_hl"></p>
		
		</div>
