 <?php get_header(); ?>

 <header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading">Blog.</div>
        </div>
    </div>
</header>

<section id="blog">
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">


                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="blog-post-preview">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p>
                            <span class="glyphicon glyphicon-time"></span> Posted on <?php the_time('l, F jS, Y'); ?>
                        </p>

                        <hr>

                        <?php if ( has_post_thumbnail()) : ?>
                           <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                           <?php the_post_thumbnail('large','style=max-width:100%;height:auto;'); ?>
                           </a>
                           <hr />
                       <?php endif; ?>

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