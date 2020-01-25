	<footer class="footer">
		<div class="footer__container">
			<div class="footer__info">
				<a href="#">
					<img src="<?php echo getImage('logo.png'); ?>" alt="Logo de blog" class="logo">
				</a>
				<p class="footer__info-about">
					<?php echo bloginfo('description'); ?>
				</p>
			</div>
				<?php if(!has_nav_menu('social_menu')): ?>
					<?php 
						wp_nav_menu(array(
							'menu' => false,
							'theme_location' => 'social_menu',
							'menu_class' => 'footer__social',
							'container' => false
						));
					?>
				<?php else: ?>
					<div class="footer__social">
						<span class="icon icon--header">
							<a href="" class="icon__link" target="_blank">
								<i class="fab fa-facebook-f"></i>
							</a>
						</span>
						<span class="icon icon--header">
							<a href="" class="icon__link" target="_blank">
								<i class="fab fa-instagram"></i>
							</a>
						</span>
						<span class="icon icon--header">
							<a href="" class="icon__link" target="_blank">
								<i class="fab fa-twitter"></i>
							</a>
						</span>
					</div>
				<?php endif; ?>
			<div class="footer__copyright">
				<div class="footer__copyright-line"></div>
				<p class="footer__copyright-info">© <?php echo date("Y"); ?> <i><?php bloginfo('name') ?></i> | Desarrollado por <a href="" class="footer__copyright-link">Goteo lab</a></p>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>