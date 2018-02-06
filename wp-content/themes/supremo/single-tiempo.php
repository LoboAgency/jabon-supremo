<?php get_header() ?>
<?php the_post() ?>
    <section id="main">
        <section id="post-int">
            <div class="header" style="background: url(<?php echo the_field('bg') ?>) fixed center 0 repeat; background-size: contain;">
                <?php $bg = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ?>
                <div class="img"><img src="<?php echo $bg ?>"></div>
            </div>
            <div class="titles" style="color: <?php echo the_field('color_text') ?>">
                <h1 class="title"><?php the_title() ?></h1>
                <div class="subtitle"><?php the_field('subtitle') ?></div>
            </div>
            <article class="description"><?php the_field('description_all') ?></article>
            <div class="title-tips"><?php the_field('title_tips') ?></div>
            <div class="tips">
                <div class="ico hidden-xs hidden-sm" data-150="top: -112px" data-400="top: -300px" style="left: 6%;"><img style="width: 90px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja3.png"></div>
                <div class="ico hidden-xs hidden-sm" data-190="top: -90px" data-450="top: -220px" style="right: 14%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja2.png"></div>
                <div class="ico hidden-xs hidden-sm" data-330="top: 290px" data-850="top: -190px" style="left: 16%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja3.png"></div>
                <div class="ico hidden-xs hidden-sm" data-360="top: 800px" data-1300="top: -600px" style="left: 3%;"><img style="width: 90px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja3.png"></div>
                <div class="ico hidden-xs hidden-sm" data-420="top: 562px" data-1500="top: 300px" style="right: 5%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja2.png"></div>
                <div class="ico hidden-xs hidden-sm" data-490="top: 759px" data-1600="top: 570px" style="left: 65%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja3.png"></div>
                <div class="ico hidden-xs hidden-sm" data-520="top: 890px" data-1700="top: 740px" style="left: 80%;"><img style="width: 90px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja3.png"></div>
                <div class="ico hidden-xs hidden-sm" data-600="top: 1050px" data-1800="top: 900px" style="right: 7%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja2.png"></div>
                <div class="ico hidden-xs hidden-sm" data-690="top: 1150px" data-1820="top: 980px" style="left: 55%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja3.png"></div>
                <div class="ico hidden-xs hidden-sm" data-520="top: 890px" data-1700="top: 740px" style="left: 10%;"><img style="width: 90px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja3.png"></div>
                <div class="ico hidden-xs hidden-sm" data-820="top: 1250px" data-2100="top: 1000px" style="left: 5%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja2.png"></div>
                <div class="ico hidden-xs hidden-sm" data-990="top: 1300px" data-2200="top: 1220px" style="left: 29%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja3.png"></div>
                <div class="container">
                    <div class="row">
                        <?php $tips = get_field('tips') ?>
                        <?php foreach ($tips as $tip): ?>
                            <?php $order = $tip['order'] ?>
                            <?php $img = $tip['img'] ?>
                            <?php $title = $tip['title'] ?>
                            <?php $description = $tip['description'] ?>
                            <div class="col-lg-12 col-md-12 down">
                                <ul>
                                    <li class="img-tips"><div class="img"><img src="<?php echo $img ?>"></div></li>
                                    <li class="dats">
                                        <aritcle class="content">
                                            <div class="title" style="color: <?php echo the_field('color_text') ?>"><?php echo $title ?></div>
                                            <div class="description-tip"><?php echo $description ?></div>
                                        </aritcle>
                                    </li>
                                </ul>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="container">
                    <div class="col-lg-12 col-md-12">
                        <ul>
                            <li><img src="<?php echo the_field('img_footer') ?>"></li>
                            <li><div class="description-footer"><?php echo the_field('footer') ?></div></li>
                        </ul>
                        <div class="more"><a href="<?php echo home_url('/tiempo') ?>">Ver más</a></div>
                    </div>
                    <?php $imgm = get_field('logo_marca') ?>
                    <?php if (imgm) : ?>
                        <div class="col-lg-12 col-md-12">
                            <div class="logo"><img src="<?php echo $imgm ?>"></div>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </section>
    </section>
<?php get_footer() ?>