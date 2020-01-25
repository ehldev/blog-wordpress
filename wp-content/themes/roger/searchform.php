<form action="<?php echo home_url( '/' ); ?>" method="get" role="search" class="form form--inline form--header">
	<input type="search" id="search" class="form__item form__item--nav" placeholder="Buscar" value="<?php echo get_search_query(); ?>" name="s">
	<button type="submit" class="button button--s button--primary button--nav">
		<i class="fas fa-search"></i>
	</button>
</form>