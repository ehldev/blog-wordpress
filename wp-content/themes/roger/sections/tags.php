<section class="tags">
	<h2 class="tags__subtitle">Etiquetas</h2>
	<ul class="tags__list">
		<?php
			$tags = get_tags(array(
			    'orderby' => 'name',
			    'order'   => 'ASC'
			));

			foreach ($tags as $tag):
		?>
		<li class="tag">
			<a href="<?php echo get_tag_link($tag->term_id) ?>" class="tag__link"><?php echo $tag->name ?></a>
		</li>
		<?php endforeach ?>
	</ul>
</section>