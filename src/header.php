<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="google-site-verification" content="dBnA6p6voa7-_vAHtikgOfqEkEjpQO0LJhnXsmsNYkU" />
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico?v=2" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- twitter card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@zedfy_germany" />
    <meta name="twitter:title" content="Zedfy is the specialist for digital LEDs, LED Controller and LED Products." />
    <meta name="twitter:description" content="Check out the prelaunch early bird discounts at @zedfy! Zedcon – smart moving lights!">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/img/page-landing/zedcon.jpg?v=<?php echo rand() ?>" />
    <meta name="twitter:url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />

    <!-- facebook -->
    <meta property="og:title" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?>"/>
    <meta name="og:type" content="product">
    <meta property="og:description" content="Check out the prelaunch early bird discounts at @Zedfy_Germany! Zedcon – smart moving lights!"/>
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/page-landing/zedcon.jpg?v=<?php echo rand() ?>"/>
    <meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>"/>

    <link href='http://fonts.googleapis.com/css?family=Armata|Merriweather:400,700' rel='stylesheet' type='text/css'>

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
