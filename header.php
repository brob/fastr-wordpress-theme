<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package fastr
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="blog_tag"><a href="/" title="Back to Portfolio">View Bryan's Portfolio</a></div>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header text-center" role="banner">
        <div class="container">
            <?php
			$header_image = '';
            // Get default from Discussion Settings.
	        $default = get_option( 'avatar_default', 'mystery' ); // Mystery man default
	        if ( 'mystery' == $default )
		        $default = 'mm';
	        elseif ( 'gravatar_default' == $default )
		        $default = '';

	        $protocol = ( is_ssl() ) ? 'https://secure.' : 'http://';
	        $url = sprintf( '%1$sgravatar.com/avatar/%2$s/', $protocol, md5( get_option( 'admin_email' ) ) );
	        $url = add_query_arg( array(
		        's' => 120,
		        'd' => urlencode( $default ),
	        ), $url );

	        $header_image = esc_url_raw( $url );
			if ( ! empty( $header_image ) ) :
		    ?>
				<?php if( !(is_home() )) : ?>

				<a class="site-logo"  href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>
			    </a>
			<?php endif; ?>

			<?php endif; ?>
		    <div class="site-branding text-center">
                
                 <?php if( is_home() ) : ?>
			        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
               
			        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                <?php endif; ?>
		    </div>
        </div>
	</header><!-- #masthead -->
	<?php $post_header_image = get_field('header_image'); ?>
	<div id="content" class="site-content <?php if(empty($post_header_image)) { echo 'container'; } else { echo 'image-header';} ?>">
