<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>

		<?php
			$parent = get_post_parent();
			if ($parent) { ?>
			<nav class="backlink">
				<a href="<?php echo get_permalink($parent->ID); ?>">Zurück zu "<?php echo $parent->post_title; ?>"</a>
			</nav>
		<?php } ?>
		<main>
			
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<?php if (has_post_thumbnail()) the_post_thumbnail(); ?>
					<h1><?php the_title(); ?></h1>

					<?php the_content(); ?>
					
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>
		</main>
		
		<?php endwhile; ?>
	

	<?php else : ?>
		<main>
			<?php get_template_part('inc/gone'); ?>
		</main>
	<?php endif; ?>

<?php get_footer(); ?>
