<?php get_header() ?>
<?php the_post() ?>
    <section id="home">
        <section id="slider">
            <div class="slide hidden-sm hidden-xs"><?php masterslider(1); ?></div>
            <div class="slide hidden-lg hidden-md"><?php masterslider(2); ?></div>
        </section>
        <div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="title-modal">¡REGÍSTRATE!</div>
                        <div class="text-modal">Queremos que estés enterada de nuestros concursos, recetas y tips ¡Registra tu correo y recibe todas la novedades Supremo!</div>
                        <?php echo do_shortcode('[contact-form-7 id="4" title="Pop up"]') ?>
                    </div>
                </div>
            </div>
        </div>
        <section id="productos">
            <div class="products-title">
                <h1>NUESTROS <strong>PRODUCTOS</strong></h1>
            </div>
            <div class="ico hidden-xs hidden-sm" data-250="top: 412px" data-1200="top: 200px" style="left: 6%;"><img style="width: 90px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja3.png"></div>
            <div class="ico hidden-xs hidden-sm" data-290="top: 290px" data-1000="top: 120px" style="right: 14%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja2.png"></div>
            <div class="ico hidden-xs hidden-sm" data-330="top: 590px" data-1250="top: 290px" style="left: 16%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja3.png"></div>
            <div class="ico hidden-xs hidden-sm" data-360="top: 800px" data-1300="top: 600px" style="left: 3%;"><img style="width: 90px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja3.png"></div>
            <div class="ico hidden-xs hidden-sm" data-420="top: 562px" data-1500="top: 300px" style="right: 5%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja2.png"></div>
            <div class="ico hidden-xs hidden-sm" data-490="top: 759px" data-1600="top: 570px" style="left: 65%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja3.png"></div>
            <div class="ico hidden-xs hidden-sm" data-520="top: 890px" data-1700="top: 740px" style="left: 80%;"><img style="width: 90px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja3.png"></div>
            <div class="ico hidden-xs hidden-sm" data-600="top: 1050px" data-1800="top: 900px" style="right: 7%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja2.png"></div>
            <div class="ico hidden-xs hidden-sm" data-690="top: 1150px" data-1820="top: 980px" style="left: 55%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja3.png"></div>
            <div class="ico hidden-xs hidden-sm" data-750="top: 1280px" data-2000="top: 1000px" style="left: 80%;"><img style="width: 90px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja3.png"></div>
            <div class="ico hidden-xs hidden-sm" data-820="top: 1250px" data-2100="top: 1000px" style="left: 5%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja2.png"></div>
            <div class="ico hidden-xs hidden-sm" data-990="top: 1300px" data-2200="top: 1220px" style="left: 29%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/burbuja3.png"></div>
            <?php $products = get_field('products') ?>
            <?php foreach ($products as $product): ?>
                <div class="product">
                    <?php $title = $product['title'] ?>
                    <?php $description = $product['description'] ?>
                    <?php $img_ppal = $product['img_ppal'] ?>
                    <?php $bg = $product['color_bg'] ?>
                    <?php $color = $product['color'] ?>
                    <?php $others = $product['others'] ?>
                    <?php $position = $product['position'] ?>
                    <?php $popup = $product['img_pop_up'] ?>
                    <?php $id = $product['id'] ?>
                    <div class="modal product-modal fade" id="<?php echo $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo $popup ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info <?php echo ( $position == 'left') ? 'left' : 'right' ?>" style="background-color: <?php echo $bg ?>">
                        <div class="ico-ppal"><img src="<?php echo $img_ppal?>" alt="Jabones Supremo"></div>
                        <?php if ( $position == 'left' ): ?>
                                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 hidden-md hidden-lg">
                                    <div class="owl-carousel owl-theme">
                                        <?php foreach ($others as $other): ?>
                                            <?php $img = $other['img'] ?>
                                            <div class="item"><img src="<?php echo $img ?>" alt="Jabón Supremo"></div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 hidden-sm hidden-xs">
                                    <ul class="dats">
                                        <li class="others">
                                            <div class="owl-carousel owl-theme">
                                                <?php foreach ($others as $other): ?>
                                                    <?php $img = $other['img'] ?>
                                                    <div class="item"><img src="<?php echo $img ?>" alt="Jabón Supremo"></div>
                                                <?php endforeach ?>
                                            </div>
                                            <div class="more" data-toggle="modal" data-target="#<?php echo $id ?>">Conoce más</div>
                                        </li>   
                                    </ul>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6">
                                    <div class="title"><i><?php echo $title ?></i></div>
                                </div>
                            <?php else: ?>
                                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6">
                                    <div class="title"><i><?php echo $title ?></i></div>
                                </div>
                                <div class="col-lg-7 col-md-7 hidden-sm hidden-xs">
                                    <ul class="dats">
                                        <li class="others">
                                            <div class="owl-carousel owl-theme">
                                                <?php foreach ($others as $other): ?>
                                                    <?php $img = $other['img'] ?>
                                                    <div class="item"><img src="<?php echo $img ?>" alt="Jabón Supremo"></div>
                                                <?php endforeach ?>
                                            </div>
                                            <div class="more" data-toggle="modal" data-target="#<?php echo $id ?>">Conoce más</div>
                                        </li>   
                                    </ul>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 hidden-md hidden-lg">
                                    <div class="owl-carousel owl-theme">
                                        <?php foreach ($others as $other): ?>
                                            <?php $img = $other['img'] ?>
                                            <div class="item"><img src="<?php echo $img ?>" alt="Jabón Supremo"></div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            <?php endif ?>
                    </div>
                </div>
            <?php endforeach ?>
        </section>
        <section id="hogar">
            <div class="ico hidden-xs hidden-sm" data-1800="top: 100px" data-2150="top: 0px" style="left: 56%;"><img style="width: 90px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
            <div class="ico hidden-xs hidden-sm" data-1700="top: 150px" data-2350="top: 0px" style="right: 14%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
            <div class="ico hidden-xs hidden-sm" data-1700="top: 150px" data-2350="top: 0px" style="left: 16%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
            <div class="ico hidden-xs hidden-sm" data-1700="top: 100px" data-2750="top: 400px" style="left: 6%;"><img style="width: 90px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
            <div class="bg">
                <img src="<?php echo get_template_directory_uri() ?>/library/images/backgrounds/blanco-lomejorparatuhogar.png">
            </div>
            <div class="home-content">
                <div class="ico hidden-xs hidden-sm" data-2100="top: 400px" data-2750="top: 20px" style="left: 92%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
                <div class="ico hidden-xs hidden-sm" data-2200="top: 500px" data-2750="top: 300px" style="left: 2%;"><img style="width: 90px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/flor.png"></div>
                <div class="container-fluid">
                    <div class="col-lg-6 col-md-6 hidden-sm hidden-xs">
                        <div class="img"><img src="<?php echo the_field('img_ppl_home') ?>"></div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="home-dats">
                            <div class="title"><?php echo the_field('title_home') ?></div>
                            <div class="description"><?php echo the_field('description_home') ?></div>
                            <div class="btns">
                                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body hidden-sm hidden-xs"><img src="<?php echo the_field('more') ?>"></div>
                                            <div class="modal-body hidden-lg hidden-md"><img src="<?php echo $imgresponsive ?>"></div>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li><div class="more"><a href="<?php echo the_field('home_link') ?>">Leer <img src="<?php echo get_template_directory_uri()?>/library/images/icons/more.png"></a></div></li>
                                    <li><div class="more"><a href="<?php echo home_url('/') ?>hogar/">Más artículos</a></div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="tiempo">
            <div class="ico hidden-xs hidden-sm" data-2300="top: 0px" data-3550="top: 290px" style="left: 16%;"><img style="width: 80px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/limon.png"></div>
            <div class="ico hidden-xs hidden-sm" data-2300="top: 10px" data-3550="top: 330px" style="left: 73%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/limon.png"></div>
            <div class="ico hidden-xs hidden-sm" data-2300="top: 150px" data-3550="top: 280px" style="right: 10%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/hoja2.png"></div>
            <div class="ico hidden-xs hidden-sm" data-2300="top: 50px" data-3550="top: 330px" style="left: 4%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/hoja2.png"></div>
            <div class="ico hidden-xs hidden-sm" data-2300="top: 150px" data-3550="top: 410px" style="left: 21%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/hoja1.png"></div>
            <div class="ico hidden-xs hidden-sm" data-2300="top: 150px" data-3550="top: 390px" style="left: 95%;"><img style="width: 80px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/hoja1.png"></div> 
            <div class="bg">
                <img src="<?php echo get_template_directory_uri() ?>/library/images/backgrounds/blanco-tiempoparami.png">
            </div>
            <div class="time-content">
                <div class="ico hidden-xs hidden-sm" data-3100="top: 550px" data-4190="top: 170px" style="left: 95%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/hoja1.png"></div> 
                <div class="ico hidden-xs hidden-sm" data-3100="top: 550px" data-4190="top: 170px" style="left: 95%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/limon.png"></div> 
                <div class="ico hidden-xs hidden-sm" data-3100="top: 550px" data-4190="top: 270px" style="left: 95%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/hoja1.png"></div> 
                <div class="ico hidden-xs hidden-sm" data-3100="top: 550px" data-4190="top: 470px" style="left: 95%;"><img style="width: 60px;" src="<?php echo get_template_directory_uri() ?>/library/images/icons/hoja2.png"></div> 
                <div class="container-fluid">
                    <div class="col-lg-6 col-md-6">
                        <div class="time-dats">
                            <div class="title"><?php echo the_field('title_time') ?></div>
                            <div class="description"><?php echo the_field('description_time') ?></div>
                            <div class="btns">
                                <ul>
                                    <li><a href="<?php echo the_field('time_link') ?>"><div class="more">Leer <img src="<?php echo get_template_directory_uri()?>/library/images/icons/more.png"></div></a></li>
                                    <li><div class="more"><a href="<?php echo home_url('/') ?>tiempo/">Más artículos</a></div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 hidden-xs hidden-sm">
                        <div class="img"><img src="<?php echo the_field('img_ppl_time') ?>"></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="mujeres">
            <div class="mujeres-title"><h2>MUJERES<strong> SUPREMO</strong></h2></div>
            <div class="container-fluid" style="padding: 0 75px;">
                <div class="galery">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 no-padding">
                        <div class="images"><div class="img-ppal down" style="background: url(<?php echo the_field('img_first') ?>);"></div></div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 no-padding">
                        <div class="images"><div class="img-ppal down" style="background: url(<?php echo the_field('img_second') ?>);"></div></div>
                    </div>
                    <?php $galery = get_field('galery') ?>
                    <?php foreach ($galery as $imgs): ?>
                        <?php $img = $imgs['img'] ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 no-padding">
                            <div class="images"><div class="img-galery down" style="background: url(<?php echo $img ?>);"></div></div>
                        </div>    
                    <?php endforeach ?>
                </div>
            </div>
            <div class="video">
                <video controls>
                    <source src="http://jabonsupremo.app-loboagencia.com/wp-content/uploads/2018/01/Supremo-Version-FINAL_2.mp4" type="video/mp4">
                </video>
            </div>
        </section>
    </section>
<?php get_footer() ?>