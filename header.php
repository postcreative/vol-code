<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="favicon.ico"/>
		<?php wp_head(); ?>
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
		<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	</head>
<body <?php body_class(); ?>>
<div class="container">
	<header>
		<div id="brand" class="clearfix">
			<h1 class"pull-left"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		</div>
		<div class="navbar">
		  <div class="navbar-inner">
				<nav role="navigation">
					<?php 
					    wp_nav_menu( array(
					        'menu'       => 'header-menu',
					        'depth'      => 2,
					        'container'  => false,
					        'menu_class' => 'nav',
					        'fallback_cb' => 'wp_page_menu',
					        //Process nav menu using our custom nav walker
					        'walker' => new wp_bootstrap_navwalker())
					    );
					?>
				</nav><!-- /nav -->
		 	</div>
		</div>
		<div id="banner">
			<p class="banner-quote">“The values and behaviours by which we recognise each other”</p>
			<p class="banner-text">Voluntary code of practice for<br>Social Enterprise in Scotland</p>
		</div>
	</header>