<html>
<?php include("config.php");
include("db.class.php");?>
<head>
	<title><?php echo $Title;?></title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link href="../static/css/bootstrap.css" rel="stylesheet" media="all">
    <link href="../static/css/bootstrap-theme.css" rel="stylesheet" media="all">
    <script type="text/javascript" src="../static/js/jquery.js"></script>

    <link href="../static/css/global-styles.css" rel="stylesheet" type="text/css" media="screen">
    <link href="../static/css/main.css" rel="stylesheet" type="text/css" media="screen">
    <!--[if lt IE 7]>
	<link href="/styles/shared/global-styles-ie6.css" rel="stylesheet" type="text/css" media="screen" />
    <![endif]-->
    <!--[if IE 7]>
    	<link href="/styles/shared/global-styles-ie7.css" rel="stylesheet" type="text/css" media="screen" />
    <![endif]-->
	<link href="../static/css/site-override.css" rel="stylesheet" type="text/css" media="screen">
    <link href="../static/css/main-lg.css" rel="alternate stylesheet" type="text/css" media="screen" title="A">
	<link href="../static/css/main-xlg.css" rel="alternate stylesheet" type="text/css" media="screen" title="A+">
	<link href="../static/css/print.css" rel="stylesheet" type="text/css" media="print">

    <!-- Flexslider script -->
    <script type="text/javascript" src="../static/js/jquery_002.js"></script>
    <link href="../static/css/flexslider-636.css" rel="stylesheet" type="text/css" media="screen">
    <script type="text/javascript">
		$(window).load(function(){
			$('.flexslider').flexslider({
				controlsContainer: "flexSlider",
				controlNav: true,
				manualControls: $("flex-control-nav li")
			});
		})
    </script>

    <!-- News - Google Feed script -->
    <link rel="icon" type="image/ico" href="../../favicon.png">

    <link href="../static/css/site.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/site.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
	<?php include("header.php");?>		
	<div id="wrapper">
        <div id="site-container">
            <div id="content-container">
			<?php include("leftFe.php");?>
			<?php include("right_index.php");?>
			</div> <!-- content-container -->
        </div> <!-- end site-container -->
    </div> <!-- end wrapper -->
	<?php include("footer.php");?>
</body>
</html>
