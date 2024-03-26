<?php /*
Template Name: Gallery
*/
?>


<?php get_header(); ?>

<section class="gallery-page">
    <div class="inner">
        <div class="row">
            <h2>Vertical Blinds</h2>
            <div class="gall">
                <?php echo do_shortcode('[nggallery id="2"/]'); ?>
            </div>
        </div>
        
        <div class="row">
            <h2>Venetian & Wood Blinds</h2>
            <div class="gall">
                <?php echo do_shortcode('[nggallery id="6"/]'); ?>
            </div>
        </div>
        
        <div class="row">
            <h2>Roman Blinds</h2>
            <div class="gall">
                <?php echo do_shortcode('[nggallery id="3"/]'); ?>
            </div>
        </div>
        
        <div class="row">
            <h2>Roller Blinds</h2>
            <div class="gall">
                <?php echo do_shortcode('[nggallery id="1"/]'); ?>
            </div>
        </div>
        
        <div class="row">
            <h2>Perfect Fit Blinds</h2>
            <div class="gall">
                <?php echo do_shortcode('[nggallery id="7"/]'); ?>
            </div>
        </div>
        
        <div class="row">
            <h2>Day & Night Blinds</h2>
            <div class="gall">
                <?php echo do_shortcode('[nggallery id="8"/]'); ?>
            </div>
        </div>
        
        <div class="row">
            <h2>Shutters</h2>
            <div class="gall">
                <?php echo do_shortcode('[nggallery id="5"/]'); ?>
            </div>
        </div>
        
        <div class="row">
            <h2>Soft Furnishings</h2>
            <div class="gall">
                <?php echo do_shortcode('[nggallery id="4"/]'); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>