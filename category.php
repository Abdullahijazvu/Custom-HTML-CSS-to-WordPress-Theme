<?php
/**
 * A Simple Category Template
 */

get_header(); ?>

<div class="home-main container">
    <div class="row mr-0 ml-0">
        <div class="home-posts col-lg-8 col-xs-12">

            <?php // Check if there are any posts to display
            if (have_posts()) : ?>

                <?php // The Loop
                while (have_posts()) :
                    the_post(); ?>
                    <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <small><?php the_time(
                                'F jS, Y'
                            ); ?> by <?php the_author_posts_link(); ?></small>

                    <div class="entry">
                        <?php the_content(); ?>

                        <p class="postmetadata"><?php comments_popup_link(
                                                    'No comments yet',
                                                    '1 comment',
                                                    '% comments',
                                                    'comments-link',
                                                    'Comments closed'
                                                ); ?></p>
                    </div>

                <?php
                endwhile;
            else : ?>
                <p>Sorry, no posts matched your criteria.</p>


            <?php endif; ?>

        </div>
        <div class="home-sidebar col-lg-4 col-xs-12 pl-0 pr-0">
            <?php get_sidebar(); ?>
        </div>
    </div>

</div>
<?php get_footer(); ?>