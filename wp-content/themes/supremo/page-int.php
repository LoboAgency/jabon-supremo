<?php get_header() ?>
 <?php /* Template Name: Plantilla Landing */ ?>
<?php the_post() ?>
    <section id="main">
        <section id="int">
            <?php $bg = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>
            <div class="int-header"><img src="<?php echo $bg ?>" alt="header interna"></div>
            <section class="post">
                <div class="ico hidden-xs hidden-sm" data-80="top: 10px" data-450="top: -150px" style="left: 3%;"><img style="width: 90px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
                <div class="ico hidden-xs hidden-sm" data-100="top: 183px" data-480="top: 20px" style="left: 2%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
                <div class="ico hidden-xs hidden-sm" data-200="top: 400px" data-550="top: 200px" style="left: 3%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
                <div class="ico hidden-xs hidden-sm" data-260="top: 500px" data-590="top: 280px" style="left: 1%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
                <div class="ico hidden-xs hidden-sm" data-80="top: 10px" data-450="top: -150px" style="right: 3%;"><img style="width: 90px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
                <div class="ico hidden-xs hidden-sm" data-100="top: 183px" data-480="top: 20px" style="right: 2%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
                <div class="ico hidden-xs hidden-sm" data-200="top: 400px" data-550="top: 200px" style="right: 3%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
                <div class="ico hidden-xs hidden-sm" data-260="top: 500px" data-590="top: 280px" style="right: 1%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
                <div class="container">
                    <ul>
                        <?php $articles = get_field('articles') ?>
                        <?php foreach ($articles as $article): ?>
                            <?php $img = $article['img'] ?>
                            <?php $text = $article['text'] ?>
                            <?php $imgppal = $article['img_article'] ?>
                            <?php $imgresponsive = $article['img_responsive'] ?>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body hidden-sm hidden-xs"><img src="<?php echo $imgppal ?>"></div>
                                        <div class="modal-body hidden-lg hidden-md"><img src="<?php echo $imgresponsive ?>"></div>
                                    </div>
                                </div>
                            </div>
                            <li>
                                <div class="content">
                                    <div class="img"><img src="<?php echo $img ?>"></div>
                                    <div class="description"><?php echo $text ?> <div class="more" type="button" data-toggle="modal" data-target="#exampleModal">Leer más</div></div>
                                </div>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </section>
        </section>
    </section>
<?php get_footer() ?>