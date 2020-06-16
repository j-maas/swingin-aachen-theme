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
				<a href="<?php echo home_url('/'); ?>"><h1><?php bloginfo('name'); ?></h1>
				<h2><?php bloginfo('description'); ?></h2></a>
			</header>