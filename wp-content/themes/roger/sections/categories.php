<section class="categories categories--post">
	<h2 class="categories__subtitle">Categorías</h2>
	<div class="categories__list">
		<?php
			$categories = get_categories( array(
			    'orderby' => 'name',
			    'order'   => 'ASC'
			) );

			foreach($categories as $category):
		?>
			<div class="category">
				<h3 class="category__name">
					<a href="<?php echo get_category_link($category->term_id); ?>" class="category__link">
						<?php echo $category->name; ?>
					</a>
				</h3>
			</div>
		<?php endforeach; ?>
	</div>
</section>