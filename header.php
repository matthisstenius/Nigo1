<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	
	<?php wp_head(); ?>
	
</head>
<body>
	<div class="wrapper grid">
	 	<header class="header pad clearfix">
	 		<a class="logo" href="<?php echo home_url('/'); ?>"></a>
	 	</header>