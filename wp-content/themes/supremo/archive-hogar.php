<?php get_header() ?>
<?php the_post() ?>
     <section id="main">
        <section id="int">
            <div class="int-header"><img src="<?php echo get_template_directory_uri() ?>/library/images/backgrounds/banner-lo-mejorfna.png" alt="header interna"></div>
            <section class="post">
                <div class="ico hidden-xs hidden-sm" data-80="top: 10px" data-450="top: -150px" style="left: 3%;"><img style="width: 90px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
                <div class="ico hidden-xs hidden-sm" data-100="top: 183px" data-480="top: 20px" style="left: 2%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
                <div class="ico hidden-xs hidden-sm" data-200="top: 400px" data-550="top: 200px" style="left: 3%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
                <div class="ico hidden-xs hidden-sm" data-260="top: 500px" data-590="top: 280px" style="left: 1%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
                <div class="ico hidden-xs hidden-sm" data-180="top: 20px" data-450="top: -115px" style="right: 2%;"><img style="width: 40px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
                <div class="ico hidden-xs hidden-sm" data-100="top: 183px" data-480="top: 20px" style="right: 10%;"><img style="width: 90px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
                <div class="ico hidden-xs hidden-sm" data-100="top: 380px" data-500="top: 200px" style="right: 5%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
                <div class="ico hidden-xs hidden-sm" data-360="top: 500px" data-590="top: 280px" style="right: 1%;"><img style="width: 50px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
                <div class="container">
                    <ul>
                        <?php query_posts([ 'post_type' => 'hogar', 'posts_per_page' => 37 ]) ?>
                        <?php $bg = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <li>
                                <a class="mask-wrapper" href="<?php echo get_the_permalink() ?>">
                                    <div class="img-post"><img src="<?php echo the_field('img') ?>"></div>
                                    <div class="post-int">
                                        <div class="title"><?php the_title() ?></div>
                                        <div class="description"><?php the_field('description_small') ?>...</div>
                                        <div class="more">Leer más</div>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile ?>
                    </ul>
                </div>
            </section>
        </section>
    </section>
<?php get_footer() ?>