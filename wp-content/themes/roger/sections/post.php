<?php if ( have_posts() ) : while ( have_posts() ) : the_post()  ?>
<section class="posts posts--full-post">
	<article class="post post--full">
		<h2 class="post__title post--full-title">
			<?php echo get_the_title(); ?>
		</h2>
		<div class="post__details post--full-details">
			<span class="post__date"><?php echo get_the_date(); ?></span>
		</div>
		<div class="post__image-container post--full-image-container">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="post__image">
			<p class="post__category">
				<a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>" class="post__category-link"><?php echo get_the_category()[0]->name; ?></a>
			</p>
		</div>
		<div class="post__content post--full-content">
			<?php the_content(); ?>
		</div>
		<section class="tags">
			<ul class="tags__list">
				<li class="tag">
					<a href="#" class="tag__link">Perú</a>
				</li>
				<li class="tag">
					<a href="#" class="tag__link">Elecciones</a>
				</li>
				<li class="tag">
					<a href="#" class="tag__link">Perú</a>
				</li>
				<li class="tag">
					<a href="#" class="tag__link">Martín Vizcarra</a>
				</li>
				<li class="tag">
					<a href="#" class="tag__link">Perú</a>
				</li>
				<li class="tag">
					<a href="#" class="tag__link">Elecciones</a>
				</li>
			</ul>
		</section>
		<section class="post__controls">
			<div class="post__prev">
				<?php
					$prev_post = get_previous_post();
					$next_post = get_next_post();
				?>
				<a href="<?php echo get_permalink($prev_post); ?>" class="icon icon--post-left">
					<i class="fas fa-chevron-left"></i>
					Anterior
				</a>
			</div>
			<div class="post__next">
				<a href="<?php echo get_permalink($next_post) ?>" class="icon icon--post-right">
					Siguiente
					<i class="fas fa-chevron-right"></i>
				</a>
			</div>
		</section>
	</article>
</section>
<?php endwhile; endif; ?>