<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?php wp_title('»', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script src="<?php echo bloginfo('template_directory'); ?>/fancybox/jquery.fancybox-1.3.1.pack.js"></script>
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link href="http://fonts.googleapis.com/css?family=Reenie+Beanie|Crimson+Text|Inconsolata|Molengo" rel="stylesheet" type="text/css">
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script>
		jQuery( function ($) {
			$('.fancybox').attr('rel', 'group1').fancybox({
				padding: 2,
				transitionIn: 'elastic',
				transitionOut: 'elastic'
			});
			
			var pre = $('pre');
			
			pre.each( function () {
				$(this).hide().wrap('<div class="codewrap" />').before('<a class="toggler" href="#">Vis/Skjul kode</a>');
			});
			
			$('div.entry').delegate('a.toggler', 'click', function (e) {
				e.preventDefault();
				
				$(this).next().toggle();
			});
		});
	</script>
	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/ie.css" type="text/css" media="screen" />
	<![endif-->
</head>
<body>
	<div id="wrapper">
		<header>
			<hgroup>
				<h1><a href="<?php echo get_bloginfo('url'); ?>">Svenneprøven 2010</a></h1>
				<h2>Av Torjus Bjåen</h2>
			</hgroup>
		</header>