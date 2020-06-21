<!DOCTYPE html> 
<html lang="en">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		
		<div class="wrap">
			
			<header>
				<a href="<?php echo home_url('/'); ?>" class="brand">
                    <img src="<?php echo get_template_directory_uri()?>/images/wordmark-bright.svg" class="logo" alt="Swingin’ Aachen e. V."/>
                    <span class="tagline"><?php bloginfo('description'); ?></span>
                </a>

                <nav>
                    <?php wp_nav_menu( array( 'theme_location' => 'nav-menu' ) ); ?>
                </nav>
			</header>