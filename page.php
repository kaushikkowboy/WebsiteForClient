<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The HTML5 Herald</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">
	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- PLUGINS -->
	<link href="plugins/bootstrap.min/css/bootstrap.min.css" rel="stylesheet">
	<link href="plugins/font-awesome.min/css/font-awesome.min.css" rel="stylesheet">
	<link href="plugins/lightbox.min/css/lightbox.min.css" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/modules/header.css">    
	<link rel="stylesheet" href="css/modules/breadcrumb.css">    
	<link rel="stylesheet" href="css/modules/page.css">    
	<link rel="stylesheet" href="css/modules/footer.css">   
	<link rel="stylesheet" href="css/responsive.css">
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<div class="container">
		<div class="row">
			<?php require('modules/header.php'); ?> 
			<?php require('modules/breadcrumb.php'); ?> 
			<?php require('modules/page.php'); ?> 
		</div>
	</div>
	<?php require('modules/footer.php'); ?>
	<!-- PLUGINS -->
	<script src="plugins/jquery.min.js"></script>
	<script src="plugins/bootstrap.min/js/bootstrap.min.js"></script>
	<script src="plugins/lightbox.min/js/lightbox.min.js"></script>
	 
</body>
</html>