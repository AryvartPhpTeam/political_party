<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo CSS;?>bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo CSS;?>bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo CSS;?>elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo CSS;?>font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo CSS;?>style.css" rel="stylesheet">
    <link href="<?php echo CSS;?>style-responsive.css" rel="stylesheet" />
	
	<?php if($page != 'index'){?>
	<!-- full calendar css-->
    <link href="<?php echo ASSETS;?>fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="<?php echo ASSETS;?>fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?php echo ASSETS;?>/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo CSS;?>owl.carousel.css" type="text/css">
	<link href="<?php echo CSS;?>jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="<?php echo CSS;?>fullcalendar.css">
	<link href="<?php echo CSS;?>widgets.css" rel="stylesheet">
	<link href="<?php echo CSS;?>xcharts.min.css" rel=" stylesheet">	
	<link href="<?php echo CSS;?>jquery-ui-1.10.4.min.css" rel="stylesheet">
	<?php }?>
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="<?php echo JS;?>html5shiv.js"></script>
    <script src="<?php echo JS;?>respond.min.js"></script>
    <![endif]-->
</head>
	<body class="login-img3-body">
		<?php 	
				if($page != 'index' && $page != 'signup')
				include(TEMPLATE_PATH.'header.php');
				
				if($page != 'index'&& $page != 'signup')
				include(TEMPLATE_PATH.'sidebar.php');
				
				include(TEMPLATE_PATH.$page.'.php');
				
				if($page != 'index' && $page != 'signup')
				include(TEMPLATE_PATH.'footer.php');
		?>
	</body>
</html>