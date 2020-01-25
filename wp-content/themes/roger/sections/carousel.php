<!-- Carousel -->
<section id="carousel" class="carousel">
	<div class="carousel__options">
		<button id="prevButton" class="carousel__prev">
			<i class="fas fa-chevron-left"></i>
		</button>
		<button id="nextButton" class="carousel__next">
			<i class="fas fa-chevron-right"></i>
		</button>
	</div>
	<?php
		$args = array(
	        'posts_per_page' => 5,
	        'meta_key' => 'meta-checkbox',
	        'meta_value' => 'yes'
	    );
	    
	    $featured = new WP_Query($args);

	    if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post()
    ?>
	<div class="carousel__item">
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="carousel__image">
		<div class="carousel__post-info">
			<h2 class="carousel__post-title">
				<a href="<?php echo get_the_permalink(); ?>" class="carousel__post-link">
					<?php echo get_the_title(); ?>
				</a>
			</h2>
			<div class="carousel__post-details">
				<span class="carousel__post-date"><?php echo get_the_date(); ?></span>
				<span class="icon icon--separator">-</span>
				<a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>" class="carousel__post-category"><?php echo get_the_category()[0]->name; ?></a>
			</div>
		</div>
	</div>
	<?php endwhile; endif; ?>
	<h3 class="carousel__title">Destacado</h3>
</section>
<!-- End carousel -->