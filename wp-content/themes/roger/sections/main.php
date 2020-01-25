<main class="main main--home">
	<?php
		get_template_part('sections/categories');
		
		if(is_home()) {
			get_template_part('sections/posts');
		}

		if(is_single()) {
			get_template_part('sections/post');
		}

		get_template_part('sections/aside');
	?>
</main>