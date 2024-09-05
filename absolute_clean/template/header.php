<html lang="es-ES">
<head>
<meta charset="utf8mb4">

	<!--Construcción de la meta <title> -->
	<?php if (is_single() || is_page() ) : if (have_posts() ) : while (have_posts() ) : the_post(); ?>
		<title><?php the_title(); ?></title>
		<meta name="title" content="<?php the_title(); ?>"/>

	<?php endwhile; endif; elseif (is_home() ): ?>
		<title>Adrià Padilla | Data & Digital Research</title>
		<meta name="title" content="Adrià Padilla | Data & Digital Research"/>
	<?php endif; ?>

	<!-- componemos la <meta description> SI ES POST-->
	<?php if (is_single() || is_page() ) : if (have_posts() ) : while (have_posts() ) : the_post(); ?>
	<!--<meta name="description" content="<?php echo substr(get_post_meta($post->ID, '_yoast_wpseo_metadesc', true), 0, 160); ?>">-->

	<meta name="description" content="<?php echo get_the_excerpt();?>">
	
	<!-- Si es la Homepage -->
	<?php endwhile; endif; elseif (is_home() ): ?>
	<meta name="description" content="Blog personal de Adrià Padilla, investigador de cosas de internet y profesor de la Universitat Autònoma de Barcelona.">
	<?php endif; ?>


<!-- Meta etiquetas -->

	<!-- Cargamos el CSS -->
	<link rel="stylesheet" href="<?php echo get_site_url( 'path' ); ?>/wp-content/themes/template/style.css">
	
	<!-- fijamos la escala inicial de tamaño elementos -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<!-- Codigo Analytics -->
	
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-LM0GRVXQZZ"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-LM0GRVXQZZ');
		</script>


</head>
<body>
<div id="wrapper">
<div id="header">

	<?php if (is_single() || is_page() ) : if (have_posts() ) : while (have_posts() ) : the_post(); ?>
	
	<?php endwhile; endif; elseif (is_home() ): ?>
		<div id="header-title">
			<h1><?php echo get_bloginfo( 'name' ); ?></h1>
			<h3><i><?php echo get_bloginfo( 'description' ); ?></i></h3>
		</div>
	<?php endif; ?>
	
</div>
