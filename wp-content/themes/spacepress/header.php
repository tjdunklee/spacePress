<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package spacePress
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--[if (gt IE 8) | (IEMobile)]><!-->
<link href="<?php bloginfo( 'template_url' ); ?>/assets/stylesheets/application.css" media="all" rel="stylesheet" type="text/css" />
<!--<![endif]-->
<!--[if (lt IE 9) & (!IEMobile)]>
<link href="<?php bloginfo( 'template_url' ); ?>/assets/stylesheets/application-ie.css" media="all" rel="stylesheet" type="text/css" />
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <div class="site-wrapper">

    <a class="skip-link visuallyhidden" href="#content"><?php esc_html_e( 'Skip to content', 'spacepress' ); ?></a>

    <header id="masthead" class="site-header" role="banner">
      <div class="site-branding">
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
      </div><!-- .site-branding -->

      <nav id="site-navigation" class="main-navigation" role="navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'spacepress' ); ?></button>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
      </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
