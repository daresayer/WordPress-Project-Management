<?php
/**
 * Header Template
 *
 * The header template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the top of the file. It is used mostly as an opening
 * wrapper, which is closed with the footer.php file. It also executes key functions needed
 * by the theme, child themes, and plugins. 
 *
 * @package Hybrid
 * @subpackage Template
 */
?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
	
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />
  
	<title><?php hybrid_document_title(); ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<?php wp_head(); // wp_head ?>
	
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  
</head>

<body class="<?php hybrid_body_class(); ?>">
	
	<?php do_atomic( 'open_body' ); // marketing_open_body ?>

	<div class="navbar navbar-fixed-top navbar-inverse">
		
		<div class="navbar-inner">

			<div class="container">
				
				<?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>
		
				<form method="get" class="navbar-form pull-left" action="<?php echo trailingslashit( home_url() ); ?>">
					<input class="search-query" type="text" name="s" placeholder="Search..." />
				</form><!-- .navbar-form -->
	
				<?php get_template_part( 'menu', 'secondary' ); // Loads the menu-secondary.php template. ?>
			
				<?php
				if( is_user_logged_in() ):
				$current_user = wp_get_current_user();
				?>
				<div class="btn-group pull-right">
					<button class="btn btn-mini btn-inverse">
						<?php echo get_avatar( $current_user->ID, 18 ); ?> <?php echo $current_user->display_name; ?>
					</button>
					<button class="btn btn-mini btn-inverse dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li><?php wp_loginout(); ?></li>
					</ul>
				</div>
				<?php endif; ?>
										
			</div><!-- .container -->
		
		</div><!-- .navbar-inner -->
		
	</div><!-- .navbar -->
	
	<div id="container" class="container">

		<?php do_atomic( 'before_main' ); // marketing_before_main ?>

		<?php
		if ( current_theme_supports( 'breadcrumb-trail' ) ):
			echo '<div class="breadcrumb">';
			breadcrumb_trail( array( 'before' => __( '<code id="status"></code>You are here:', hybrid_get_parent_textdomain() ), 'front_page' => false ) );
			echo '</div>';
		endif;
		?>
	
		<div id="main">
						
			<div class="row">
			
			<?php do_atomic( 'open_main' ); // marketing_open_main ?>