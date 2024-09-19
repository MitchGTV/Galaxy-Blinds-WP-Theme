<?php /*
Template Name: Gallery
*/
?>

<?php get_header(); ?>

    <style>
        .gallery-page {
            width: 100%;
            padding: 20px;
        }

        .row {
            margin-bottom: 40px;
        }

        .gall {
            display: flex;
            flex-wrap: wrap;
            gap: 10px; /* Adjust space between images */
        }

        .gall img {
            max-width: 100%;
            height: auto;
            flex: 1 0 21%; /* Adjust percentage to control image size and layout */
            margin: 5px; /* Add margin for spacing between images */
            box-sizing: border-box;
        }

        h2 {
            margin-bottom: 20px;
        }
    </style>

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