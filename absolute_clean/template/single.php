<?php get_header(); ?>

<div id="header">

    <?php if (is_single() || is_page() ) : if (have_posts() ) : while (have_posts() ) : the_post(); ?>

    <a href="https://www.adriapadilla.net/">Volver</a> | <a href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" target="_blank">Compartir</a>

    <hr>

    <div class="titol">
    <?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
	}?>
        <h1 class="article-title"><?php the_title(); ?></h1>
            <p class="data-autor"><?php the_time('j \d\e F \d\e Y') ?> <br> A. Padilla</p>
        
    </div> 
    <?php endwhile; endif; elseif (is_home() ): ?>
    <?php endif; ?>
    
</div>


<?php
//get attachment meta
if ( !function_exists('wp_get_attachment') ) {
    function wp_get_attachment( $attachment_id )
    {
        $attachment = get_post( $attachment_id );
        return array(
            'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
            'caption' => $attachment->post_excerpt,
            'description' => $attachment->post_content,
            'href' => get_permalink( $attachment->ID ),
            'src' => $attachment->guid,
            'title' => $attachment->post_title
        );
    }
}
?>

<div id="main">
	<div id="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<section id="continguts">

				
				<p><?php the_content(); ?></p>
			</section>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
			
			<section id="Comentarios">
				<?php comments_template(); ?>
			</section>

	</div>
</div>

<?php get_footer(); ?>

<!-- Imagen destacada para RRSS -->
<?php
function mytheme_excerpt_rss_thumbs($content) {
 
    global $post;
    $args = array(
        'post_type'      => 'attachment', // Seleccionamos adjuntos
        'post_mime_type' => 'image', // Del tipo "imagen"
        'order'          => 'ASC', // Los ordenamos ascendentemente
        'orderby'        => 'menu_order', // Que respete el orden asignado
        'post_parent'    => $post->ID // De la entrada actual
    );
    $images = get_posts($args);
    $style = 'float:right;margin:0 0 20px 20px;'; // Estilos CSS
 
    // La entrada tiene una imagen destacada.
    if ( has_post_thumbnail($post->ID) ) {
        $content = '<div style="' . $style . '">' . get_the_post_thumbnail($post->ID, 'thumbnail') . '</div>' . $content;
 
    // No se ha asignado una imagen destacada, asi que adjuntamos
    // la primera que encontramos asociada a la entrada actual.
    } elseif ( $images ) {
        $post_link = get_permalink();
        $content = '<a href="' . $post_link . '" style="' . $style . '">' . wp_get_attachment_image($images[0]->ID, 'thumbnail') . '</a>' . $content;
    }
 
    return $content;
}
 
add_filter('the_excerpt_rss', 'mytheme_excerpt_rss_thumbs');
?>
