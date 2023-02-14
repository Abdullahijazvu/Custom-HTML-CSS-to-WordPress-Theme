<?php
/*
 * This template is used display single posts
 */
get_header(); ?>        
    <div class="home-main container">
        <div class="row mr-0 ml-0">
            <div class="home-posts col-lg-8 col-xs-12">
                <?php if (have_posts()): ?>
                <?php while (have_posts()):
                    the_post(); ?>
                <div class="post-title" style="text-align: center; padding-bottom: 10px;">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_author(); ?> —  <?php echo the_date('F j, Y' ); ?> • <?php the_time(); ?></p>
                    </div>
                    <div class="post-images">
                        <?php the_post_thumbnail('post-img'); ?>
                    </div><?php
                    wp_reset_postdata();
                endwhile; ?>
                    <?php endif; ?>
                        <?php
                        the_content();
                        if (comments_open() || get_comments_number()):
                            comments_template();
                        endif;
                        

               ?>
            </div>
        <div class="home-sidebar col-lg-4 col-xs-12 pl-0 pr-0">
                <?php get_sidebar(); ?>
        </div>
        </div>
           
    </div>
    </div>

<?php get_footer(); ?>