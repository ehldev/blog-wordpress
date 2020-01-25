<section class="posts">
	<?php if(have_posts()): while(have_posts()): the_post() ?>
		<article class="post">
			<div class="post__image-container">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="post__image">
				<p class="post__category">
					<a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>" class="post__category-link">
						<?php echo get_the_category()[0]->name; ?>
					</a>
				</p>
			</div>
			<div class="post__content">
				<h2 class="post__title">
					<a href="<?php echo get_the_permalink(); ?>" class="post__title-link">
						<?php echo get_the_title(); ?>
					</a>
				</h2>
				<div class="post__details">
					<span class="post__date">
						<?php echo get_the_date(); ?>
					</span>
				</div>
			</div>
		</article>
	<?php endwhile; endif; ?>
</section>