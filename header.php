<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/manifest.json">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#16fb84">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico">
		<meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/img/favicon/browserconfig.xml">
		<meta name="theme-color" content="#16fb84">

		<!-- Fonts -->

		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto" rel="stylesheet">

		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/shareup-box.png" />

		<meta property="og:description" content="A meetup for digital content creators." />

		<meta property="og:title" content="ShareUp Soton" />

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<!-- header -->
		<header class="header clear">

				<div class="header--mobile">
					<button class="hamburger">&#9776;</button>
					<button class="cross">&#735;</button>
				</div>

				<a href="<?php echo site_url();?>"><div class="header--logo"></div></a>

				<nav class="menu--mobile">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</nav>

				<script>
					var navigation = responsiveNav(".nav-collapse");
				</script>

				<!-- nav -->
				<nav class="nav">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</nav>
				<!-- /nav -->

		</header>
		<!-- /header -->

		<!-- wrapper -->
		<div class="wrapper">
