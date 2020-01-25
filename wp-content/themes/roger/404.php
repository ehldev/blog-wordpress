<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Blog personal</title>
	<?php wp_head(); ?>
</head>
<body>
	<div class="error">
		<h1 class="error__title">Error</h1>
		<h2 class="error__subtitle">Página no encontrada</h2>
		<a href="<?php echo get_site_url(); ?>" class="button button--primary">Sácame de aquí</a>
	</div>
</body>
</html>