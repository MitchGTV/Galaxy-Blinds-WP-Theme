<?php /*
Template Name: Products
*/
?>


<?php get_header(); ?>

<section class="hero page-hero" style="background-image: url(<?php the_field('banner_image'); ?>);">
    <div class="inner">
        <h1 class="fade-in"><?php echo (the_field('banner_heading'));?></h1>
        <p class="fade-in-2"><?php echo (the_field('banner_subheading')); ?></p>
    </div>
</section>

<section class="intro">
    <div class="inner sec">
        <h2><?php echo (the_field('intro_heading')); ?></h2>
        <div><?php echo (the_field('intro_paragraph')); ?></div>
        <a class="btn" href="<?php echo get_site_url(); ?>/contact/">Contact us today</a>
    </div>
</section>

<section class="page-blocks flex-row">
    <div class="flex-row">
        <div class="img" style="background-image: url(<?php the_field('left_image'); ?>);"></div>
        <div class="content">
            <h3><?php echo (the_field('right_box_heading')); ?></h3>
            <div><?php echo (the_field('right_box_text')); ?></div>
        </div>
    </div>

    <div class="flex-row row-reverse">
        <div class="img" style="background-image: url(<?php the_field('right_image'); ?>);"></div>
        <div class="content">
            <h3><?php echo (the_field('left_box_heading')); ?></h3>
            <div><?php echo (the_field('left_box_text')); ?></div>
        </div>
    </div>
</section>

<section class="gallery-wrap">
    <div class="inner">
        <h2>Gallery</h2>
        <div class="gallery-inner">
            
            <?php 
            if (is_page('vertical-blinds')) {
                echo do_shortcode('[nggallery id="2"/]');
            }
            ?>
            
             <?php 
            if (is_page('perfect-fit-shutter')) {
                echo do_shortcode('[nggallery id="11"/]');
            }
            ?>
            
            
            <?php 
            if (is_page('awnings')) {
                echo do_shortcode('[nggallery id="9"/]');
            }
            ?>
            
            <?php 
            if (is_page('motorised-blinds')) {
                echo do_shortcode('[nggallery id="10"/]');
            }
            ?>
            
            <?php 
            if (is_page('venetian-blinds')) {
                echo do_shortcode('[nggallery id="6"/]');
            }
            ?>
            
            <?php 
            if (is_page('roman-blinds')) {
                echo do_shortcode('[nggallery id="3"/]');
            }
            ?>
            
            <?php 
            if (is_page('roller-blinds')) {
                echo do_shortcode('[nggallery id="1"/]');
            }
            ?>
            
            <?php 
            if (is_page('shutters')) {
                echo do_shortcode('[nggallery id="5"/]');
            }
            ?>
            
            <?php 
            if (is_page('soft-furnishings')) {
                echo do_shortcode('[nggallery id="4"/]');
            }
            ?>
            
            <?php 
            if (is_page('perfect-fit-blinds')) {
                echo do_shortcode('[nggallery id="7"/]');
            }
            ?>
            
            <?php 
            if (is_page('day-night-blinds')) {
                echo do_shortcode('[nggallery id="8"/]');
            }
            ?>
            
        </div>
    </div>
</section>

<section class="home-cta">
    <div class="inner">
        <h2>to buy blinds call us today</h2><!--use if here-->
        <div class="flex-row">
            <div>
                <p>Stockton / Middlesbrough<br><a class="call" href="tel:01642861166">01642 861 166</a></p>
            </div>

            <div>
                <p>Darlington<br><a class="call" href="tel:01325240605">01325 240 605</a></p>
            </div>

            <div>
                <p>Spennymoor<br><a class="call" href="tel:01388741252">01388 741 252</a></p>
            </div>

            <div>
                <p>Mobile<br><a class="call" href="tel:07830341665">07830 341 665</a></p>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>