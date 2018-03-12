<footer>
	<div class="footer_widget">
		<div class="row">
			<?php
			if(is_active_sidebar('mm_footersidebar')){
				dynamic_sidebar('mm_footersidebar');
			}
			?>
		</div>
	</div>
	<div class="mainfooter">
		<div class="mainfooter_left">
			&copy; Todos os direitos reservados - 
			<?php if(get_theme_mod('mm_privacy_url')): ?>
				<a href="<?php the_permalink(get_theme_mod('mm_privacy_url')); ?>">Política de privacidade</a>
			<?php endif; ?>
		</div>
		<div class="mainfooter_right">
			Criado por MAR
		</div>
		<div class="mainfooter_scroll">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-up.png" />
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>