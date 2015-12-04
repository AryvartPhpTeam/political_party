<!-- Template Starts here -->
<html>
	<head>
	<!-- Insert CSS Script Title here -->
	</head>
	<body>
		<?php 	
				include(TEMPLATE_PATH.'header.php');
				include(TEMPLATE_PATH.'sidebar.php');
				include(TEMPLATE_PATH.$page.'.php');
				include(TEMPLATE_PATH.'footer.php');
		?>
	</body>
</html>