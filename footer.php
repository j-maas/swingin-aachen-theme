        <img src="<?php echo get_template_directory_uri()?>/images/seal.svg" widht="256" height="256" class="seal" alt="" role="presentation"/>
        <footer>
            <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
            </nav>
		</footer>
		
	</div>
	
	<?php wp_footer(); ?>
	
	</body>
</html>