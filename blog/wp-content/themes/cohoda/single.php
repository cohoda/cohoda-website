<?php get_header(); ?>

<section id="blog">
	<div class="container">

		<div class="row">
			<div class="col-md-8">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<h1><?php the_title(); ?></h1>

					<p><span class="glyphicon glyphicon-time"></span> Posted on <?php the_time('l, F jS, Y'); ?></p>
					<hr />

					<?php the_content(); ?>
					<hr />

					<?php if ( comments_open() || get_comments_number() ) {
						comments_template();
					} ?>

				<?php endwhile; else: ?>
				<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>

		</div>

		<?php get_sidebar(); ?>

	</div>

</div>
</section>

<?php get_footer(); ?>
