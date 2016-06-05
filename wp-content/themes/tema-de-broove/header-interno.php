<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<title><?php wp_title('.'); ?></title>

	<?php // Codificação ?>
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">

	<?php // Force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php // Mobile Meta ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

	<?php // Icons & Favicons ?>
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/library/favicon/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/library/favicon/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/favicon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/library/favicon/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/favicon/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/library/favicon/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/library/favicon/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/library/favicon/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/library/favicon/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/favicon/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/favicon/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/favicon/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/favicon/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/favicon/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/library/favicon/manifest.json">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/library/favicon/safari-pinned-tab.svg" color="#000000">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/favicon/favicon.ico">
			<![endif]-->
		<?php // Favicon WP-IE10 ?>
			<meta name="msapplication-TileColor" content="#da532c">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/favicon/mstile-144x144.png">
			<meta name="theme-color" content="#ffffff">

	<?php // Pingback ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php // Facebook Open Graph ?>
		<meta property="og:locale" content="pt_BR">
		<meta property="og:url" content="http://broove.com.br">
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="<?php _e('Broove', 'temadebroove') ?>">
		<meta property="og:title" content="<?php _e('Broove - Lançamento do EP', 'temadebroove') ?>">
		<meta property="og:description" content="<?php _e('Ouça agora o EP de lançamento da banda Broove, incluindo \'Sesdotempo\' e \'Olhar\'. Download disponível!', 'temadebroove') ?>">
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/library/images/facebook/facebook-og-img.png">
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="630">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

</head>

<header>
	<nav id="menu-principal" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
				<div class="navbar-header col-sm-12 col-md-2 col-lg-2 text-center">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo(get_site_url()) ?>">
						<img src="<?php echo get_template_directory_uri() .'/library/images/broove-logo-ep-navbar.svg'?>" alt="<?php _e('Broove','temadebroove') ?>" title="<?php _e('Broove','temadebroove') ?>" height="30vh" width="100%"></img>
					</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<?php wp_nav_menu(array(
											 'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
											 'menu_class' => 'row',               // adding custom nav class
											 'menu_id' => 'menu',
											 'theme_location' => 'main-nav',                 // where it's located in the theme
											 'before' => '',                                 // before the menu
														 'after' => '',                                  // after the menu
														 'link_before' => '',                            // before each link
														 'link_after' => '',                             // after each link
														 'depth' => 0,                                   // limit the depth of the nav
											 'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>
					</ul>
				</div>
		</div>
	</nav>


</header>
