<?php
get_header();
?>
<main class="main main--search">
	<div class="panel">
		<h2 class="panel__subtitle">
			<span class="panel__subtitle-text">Resultados de la Búsqueda:</span> 
			<?php echo get_search_query(); ?>
		</h2>
	</div>
	<section class="posts posts--search">
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
	<!-- End posts -->
	<!-- Ad -->
	<div class="ad add--full">
		<div class="ad__content">
			<h2 class="ad__title">Ad</h2>
			<h3 class="ad__title">Anuncio de Google Adwords</h3>
		</div>
	</div>
	<!-- Ad -->
</main>
<?php
get_footer();
?>