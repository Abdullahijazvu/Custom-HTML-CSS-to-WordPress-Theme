<?php
/*
* This is our first theme.
*/
get_header();
?>
        
       <div class="home-main container">
           <div class="row mr-0 ml-0">
            <div class="home-posts col-lg-8 col-xs-12">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article class="home-post">
                            <div class="post-header">
                                <div class="post-thumbnail row ml-0 mr-0">
                                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('home-featured') ?></a>
                                </div>
                                </div>
                                <div class="post-content">
                                <h1><?php the_title(); ?></h1>
                                <p>LAST UPDATED ON: <?php echo strtoupper(date('F j, Y')); ?></p>
                            <div class="post-description">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="post-footer row ml-0 mr-0">
                                <div class="post-meta">
                                    <a href="<?php the_permalink() ?>"><strong>Read more</strong></a>
                                </div>
                            </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="pagination col ml-0 mr-0">
                    <?php echo paginate_links();?>
                </div>
            </div>
            <div class="home-sidebar col-lg-4 col-xs-12 pl-0 pr-0">
                <?php get_sidebar(); ?>
            </div>
           </div>
           
       </div>
        

<?php 
get_footer();
?>
    
