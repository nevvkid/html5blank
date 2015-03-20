<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- facebook -->
    <meta property="og:title" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?>"/>
    <meta name="og:type" content="product">
    <meta property="og:description" content="Can´t wait for @Zedfy_Germany to launch. Check out the early bird discounts #zedcon - smart moving #LED #lights!"/>
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/page-landing/rendering2.jpg"/>
    <meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>"/>

    <!-- twitter card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@zedfy_germany" />
    <meta name="twitter:title" content="Zedfy is the specialist for digital LEDs, LED Controller and LED Products." />
    <meta name="twitter:description" content="Can´t wait for @Zedfy_Germany to launch.">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/img/page-landing/rendering2.jpg" />
    <meta name="twitter:url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700|Merriweather:400,700' rel='stylesheet' type='text/css'>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
  <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <header class="cd-header">
    <div id="cd-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/zedfy-logo2.svg" alt="Logo" class="logo-img"></a></div>

    <nav class="cd-main-nav">
    <ul>
      <?php html5blank_nav(); ?>
    </ul>
    </nav> <!-- cd-main-nav -->
  </header>
