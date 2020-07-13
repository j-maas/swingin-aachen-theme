        <img src="<?php echo get_template_directory_uri()?>/images/seal.svg" width="256" height="256" class="seal" alt="" role="presentation" loading="lazy"/>
        <footer>
            <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
            </nav>
		</footer>
		
	</div>
	
	<?php wp_footer(); ?>
	
	</body>
</html>