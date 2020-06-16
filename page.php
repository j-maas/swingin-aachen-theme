<?php get_header(); ?>
	
	<main>
	
	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
		
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php if (has_post_thumbnail()) the_post_thumbnail(); ?>

                <?php if (!is_front_page()) : ?>
                <h1><?php the_title(); ?></h1>
                <?php endif; ?>

				<?php the_content(); ?>
				
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

		</div>
		
		<?php endwhile; ?>

	<?php else : ?>
		
		<?php get_template_part('inc/gone'); ?>
		
	<?php endif; ?>
	
	</main>

<?php get_footer(); ?>
