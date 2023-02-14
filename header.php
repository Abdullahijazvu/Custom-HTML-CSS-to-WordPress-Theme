<?php
/*
This template is used to display header
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php wp_head()?>
    <style type="text/css">
        body{
            background: <?php echo get_theme_mod('blog_body_bg_color','#fff')?>;

        }
        .site-navigation {
            background: <?php echo get_theme_mod('blog_nav_bg_color','#fff')?>;
        }
        
    </style>
</head>
<body>
    <div class="site-main">
        <header class="site-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xs-12">
                    <h1 class="site-name"><a href="<?php bloginfo('url')?>">
                            <?php bloginfo('name'); ?>
                            </a></h1>
                    </div>
                    <div class="col-lg-4 col-xs-12 pl-0 pr-0">
                        <nav class="site-navigation">
                        <?php wp_nav_menu($args)?>
                        </nav>
                        
                    </div>
                </div>
    </div>
    </header>