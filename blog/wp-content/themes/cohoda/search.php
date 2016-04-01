<?php get_header(); ?>

<section id="blog">
	<div class="container">

		<div class="row">

			<div class="col-md-8">

				<div class="search-title">
					<h1>
						<?php echo $wp_query->found_posts; ?> <?php _e( 'Results Found For', 'locale' ); ?> "<?php the_search_query(); ?>"
					</h1>

					<hr />
				</div>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div class="blog-post-preview">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p>
							<span class="glyphicon glyphicon-time"></span> Posted on <?php the_time('l, F jS, Y'); ?>
						</p>

						<hr>

						<?php the_excerpt(); ?>

						<a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

					</div>

				<?php endwhile; else: ?>

				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

				<ul class="pager">
					<li class="previous">
						<?php next_posts_link( 'Older' ); ?>
					</li>
					<li class="next">
						<?php previous_posts_link( 'Newer' ); ?>
					</li>
				</ul>

			</div>

			<?php get_sidebar(); ?>

		</div>

	</div>
</section>

<?php get_footer(); ?>
