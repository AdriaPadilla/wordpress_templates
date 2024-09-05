<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}
	/* This variable is for alternating comment background */
	$oddcomment = 'class="comments-alt" ';
?>

<!-- You can start editing here. -->
<br />
<hr>
<?php if ('open' == $post->comment_status) : ?>

<h2>¿Quieres dejar un comentario?</h2>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>Has d'estar <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">registrat</a> per deixar un comentari</p>
<?php else : ?>

<div id="comments-form">
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

	<?php if ( $user_ID ) : ?>

	<p>Registrado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Tancar la sessió">Sortir &raquo;</a></p>

	<?php else : ?>
		<div class="labels">
			<label for="author">Nombre <?php if ($req) echo "(Obligatorio)"; ?></label>
			<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="43" tabindex="1" />
				<br />
			<label for="email">Correo (no será publico) <?php if ($req) echo "(Obligatorio)"; ?></label>
			<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="43" tabindex="2" />

		</div>

	<?php endif; ?>

	<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
	<label>Comentario:</label>
	<textarea style="width:100%; height:150px;" name="comment" id="comment"></textarea>

	<p><input class="button" name="submit" type="submit" id="submit" tabindex="5" value="Publicar" />
	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	</p>
	<?php do_action('comment_form', $post->ID); ?>

	</form>
</div>


<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
<br />
<?php if ($comments) : ?>
	<h2 id="comments"><?php comments_number('Sin comentarios', 'Comentario', 'Comentarios' );?></h2>

	<?php foreach ($comments as $comment) : ?>
		<cite><b><?php comment_author_link() ?></b> (<?php comment_date('j \d\e F \d\e Y') ?> a las <?php comment_time() ?>)</cite> dice:
		<?php if ($comment->comment_approved == '0') : ?>
		<em>Tu comentario se revisará</em>
		<?php endif; ?>
			<p>
			<?php comment_text() ?>
			<?php edit_comment_link('Editar'); ?>
			</p>
	<hr>

	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="comments-alt" ' : '';
	?>

	<?php endforeach; /* end for each comment */ ?>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comentarios cerrados</p>

	<?php endif; ?>
<?php endif; ?>
