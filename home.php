<?php /*
Template Name: Home
*/
?>

<?php get_header(); ?>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Galaxy Blinds",
            "url": "https://galaxy4blinds.co.uk/",
            "logo": "<?php echo esc_url( get_template_directory_uri()); ?>/img/logo@2x.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "01642 680 974",
                "contactType": "customer service",
                "contactOption": "TollFree",
                "areaServed": "GB",
                "availableLanguage": "en"
            },
            "sameAs": [
                "https://facebook.com/galaxy4blinds",
                "https://www.instagram.com/galaxy4blinds/",
                "https://www.tiktok.com/@galaxyblinds"
            ]
        }
    </script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="carousel slide" id="carousel-360167">
                    <ol class="carousel-indicators">
                        <li data-slide-to="0" data-target="#carousel-360167" class="active">
                        </li>
                        <li data-slide-to="1" data-target="#carousel-360167">
                        </li>
                        <li data-slide-to="2" data-target="#carousel-360167">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" alt="Carousel Bootstrap First" src="<?php echo esc_url( get_template_directory_uri()); ?>/img/romans-roller.jpg);" />
                            <div class="carousel-caption">
                                <h4>
                                    Roman Blinds
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://www.layoutit.com/img/sports-q-c-1600-500-2.jpg" />
                            <div class="carousel-caption">
                                <h4>
                                    Second Thumbnail label
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://www.layoutit.com/img/sports-q-c-1600-500-3.jpg" />
                            <div class="carousel-caption">
                                <h4>
                                    Third Thumbnail label
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-360167" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-360167" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
        </div>
    </div>


<section class="home-blocks flex-row">
    <div class="block">
        <a class="img" href="<?php echo get_site_url(); ?>/vertical-blinds/" style="background-image: url(<?php echo esc_url( get_template_directory_uri()); ?>/img/homeb1.jpg);"></a>
        <div class="content">
            <h3><?php the_field('vertical_blinds_heading'); ?></h3>
            <div><?php the_field('vertical_blinds_content'); ?></div>
            <a class="btn" href="<?php echo get_site_url(); ?>/vertical-blinds/">Learn More</a>
        </div>
    </div>

    <div class="block">
        <a class="img" href="<?php echo get_site_url(); ?>/venetian-blinds/" style="background-image: url(<?php echo esc_url( get_template_directory_uri()); ?>/img/ven-blinds-000.jpg);"></a>
        <div class="content">
            <h3><?php the_field('venetian_blinds_heading'); ?></h3>
            <div><?php the_field('venetian_blinds_content'); ?></div>
            <a class="btn" href="<?php echo get_site_url(); ?>/venetian-blinds/">Learn More</a>
        </div>
    </div>

    <div class="block">
        <a class="img" href="<?php echo get_site_url(); ?>/roller-blinds/" style="background-image: url(<?php echo esc_url( get_template_directory_uri()); ?>/img/homeb3.jpg);"></a>
        <div class="content">
            <h3><?php the_field('roller_blinds_heading'); ?></h3>
            <div><?php the_field('roller_blinds_content'); ?></div>
            <a class="btn" href="<?php echo get_site_url(); ?>/roller-blinds/">Learn More</a>
        </div>
    </div>

    <div class="block">
        <a class="img" href="<?php echo get_site_url(); ?>/roman-blinds/" style="background-image: url(<?php echo esc_url( get_template_directory_uri()); ?>/img/homeb4.jpg);"></a>
        <div class="content">
            <h3><?php the_field('roman_blinds_heading'); ?></h3>
            <div><?php the_field('roman_blinds_content'); ?></div>
            <a class="btn" href="<?php echo get_site_url(); ?>/roman-blinds/">Learn More</a>
        </div>
    </div>

    <div class="block">
        <a class="img" href="<?php echo get_site_url(); ?>/shutters/" style="background-image: url(<?php echo esc_url( get_template_directory_uri()); ?>/img/homeb5.jpg);"></a>
        <div class="content">
            <h3><?php the_field('shutters_heading'); ?></h3>
            <div><?php the_field('shutters_content'); ?></div>
            <a class="btn" href="<?php echo get_site_url(); ?>/shutters/">Learn More</a>
        </div>
    </div>

    <div class="block">
        <a class="img" href="<?php echo get_site_url(); ?>/soft-furnishings/" style="background-image: url(<?php echo esc_url( get_template_directory_uri()); ?>/img/homeb6.jpg);"></a>
        <div class="content">
            <h3><?php the_field('furnishings_heading'); ?></h3>
            <div><?php the_field('furnishings_content'); ?></div>
            <a class="btn" href="<?php echo get_site_url(); ?>/soft-furnishings/">Learn More</a>
        </div>
    </div>
</section>

    <section class="intro">
        <div class="inner sec">
            <h2><?php the_field('about_us_heading'); ?></h2>
            <div><?php the_field('about_us_content'); ?></div>
        </div>
    </section>

<section class="home-cta">
    <div class="inner">
        <h2><?php the_field('quality_heading'); ?></h2>
        <div><?php the_field('quality_content'); ?></div>
        <a class="btn" href="<?php echo get_site_url(); ?>/gallery/">View Gallery</a>
    </div>
</section>

<section class="contact-blocks flex-row">
    <div class="details-wrap">
        <div class="content">
            <h3><?php the_field('contact_us_heading'); ?></h3>
            <div><?php the_field('contact_us_content'); ?></div>

            <p class="num">Stockton / Middlesbrough</p>
            <a class="call" href="tel:01642861166">01642 861 166</a>

            <p class="num">Darlington</p>
            <a class="call" href="tel:01325240605">01325 240 605</a>

            <p class="num">Spennymoor</p>
            <a class="call" href="tel:01388741252">01388 741 252</a>

            <p class="num">Mobile</p>
            <a class="call" href="tel:07830341665">07830 341 665</a>
        </div>
    </div>

    <div class="form-wrap">
        <div class="content">
            <h3>Send us a message</h3>
            <p>Enter your details and message below and our friendly team will get back to you as soon as possible.</p>
            
            <div class="the-form">
                <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>