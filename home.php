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

<section class="hero">
    <div class="inner">
        <h1 class="fade-in"><?php echo (the_field('slider_heading')); ?></h1>
        <p class="fade-in-2"><?php echo (the_field('slider_subheading')); ?></p>
        <a class="btn fade-in-3" href="<?php echo get_site_url(); ?>/contact/">Contact us</a>
    </div>
    <div class="slider-wrap">
    <div class="slide" style="background-image: url(<?php echo esc_url( get_template_directory_uri()); ?>/img/romans-roller.jpg);"></div>
    <div class="slide" style="background-image: url(<?php echo esc_url( get_template_directory_uri()); ?>/img/hero.jpg);"></div>
    <div class="slide" style="background-image: url(<?php echo esc_url( get_template_directory_uri()); ?>/img/rollers-hero.jpg);"></div>
    <div class="slide" style="background-image: url(<?php echo esc_url( get_template_directory_uri()); ?>/img/vertical-hero.jpg);"></div>
    <div class="slide" style="background-image: url(<?php echo esc_url( get_template_directory_uri()); ?>/img/curtains-hero.jpg);"></div>
    <div class="slide" style="background-image: url(<?php echo esc_url( get_template_directory_uri()); ?>/img/shutters-hero.jpg);"></div>
    </div>
</section>

<section class="intro">
    <div class="inner sec">
        <h2><?php the_field('about_us_heading'); ?></h2>
        <div><?php the_field('about_us_content'); ?></div>
    </div>
</section>

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