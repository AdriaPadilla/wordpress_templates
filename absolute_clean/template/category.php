<?php get_header(); ?> 
 
<div id="main">
	<div id="content">
    <a href="https://www.adriapadilla.net/">Volver</a>
		<!-- Category section -->
		<hr>
		<h2>Artículos en "<?php the_category('category') ?>"</h2>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section id="continguts">
			<div class="articulo">
				<h3 class="index-post-title">
					<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
				</h3>
				<span class="post-date"><?php the_time('j \d\e F \d\e Y') ?></span>
			</div>
				
			</section>
			<?php endwhile; else: ?>
			<p><?php _e('No hay publicaciones :('); ?></p><?php endif; ?>

			<!-- Widget Categories de post -->
		<hr>	
		<!-- END -->
	</div>
</div>
<?php get_footer(); ?>
