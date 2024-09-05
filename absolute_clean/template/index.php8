<?php get_header(); ?>
<div id="main">
	<div id="content">
		<hr>
		<h2>Artículos</h2>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<section id="continguts">
			
			<div class="articulo">
				<h3 class="index-post-title">
					<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
				</h3>
				<span class="post-category"><?php the_category(' / ')?> - </span><span class="post-date"><?php the_time('j \d\e F \d\e Y') ?></span>
			</div>
				
			</section>
			<?php endwhile; else: ?>
			<p><?php _e('No hay publicaciones :('); ?></p><?php endif; ?>
	
			<!-- Widget Categories de post -->
			<hr>
			<div id="post-categories">
				<?php the_widget( 'WP_Widget_Categories', 'title=Categorias', 'before_title=<h2>&after_title=</h2>' ); ?>
		
			</div>
			<hr>
	<h2>Sobre mi</h2>
	<p>Adrián Padilla Molina (1987) es doctor en comunicación Audiovisual y Publicidad por la Universitat Autònoma de Barcelona (2023), Máster en Comunicación y Marketing Digital (2015) y Licenciado en Periodismo (2013), también por la UAB. Sus principales líneas de investigación son el análisis de audiencias digitales, el impacto social y cultural de plataformas digitales y redes sociales emergentes, así como la desinformación en el ámbito digital (tema central de su tesis doctoral). Ha publicado numerosos artículos en reconocidas revistas científicas sobre estas cuestiones, y también ha colaborado con medios de comunicación como especialista en la materia.</p> 
	<ul>
		<li><a href="https://scholar.google.com/citations?user=zKICdGIAAAAJ&hl=es" target="_blank">Google Scholar</a></li>
		<li><a href="https://www.researchgate.net/profile/Adrian-Padilla-6" target="_blank">Reserach Gate</a></li>
		<li><a href="https://github.com/AdriaPadilla" target="_blank">GitHub</a></li>
	</ul>
	<p>Además de su faceta investigadora, es profesor de analítica digital, visualización de datos, programación y análisis de datos en Python. Ha impartido docencia en el Grado en Comunicación Interactiva de la UAB (2018-2024) y en el grado de Comunicación y Marketing Digital de la EUNCET-UPC (2018-Actualidad). También en el Máster en Comunicación y Marketing Digital (2019-2023) y el Máster Universitario en Contenidos de Comunicación Audiovisual y Publicidad (2021-2024), ambos de la UAB. Tiene un perfil técnico centrado en la extracción de datos masivos, la minería de datos y el BigData. Ha desarrollado numerosos scripts para la explotación de APIs de plataformas y redes sociales.</p> 
	<p>Antes de centrar su atención en la docencia universitaria y la actividad científica, trabajó como SEO y especialista en marketing digital.</p>


			

	</div>
	<hr>
	<div id="delimiter">
	</div>
<?php get_footer(); ?>
