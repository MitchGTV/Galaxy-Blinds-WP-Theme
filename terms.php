<?php /*
Template Name: Terms
*/
?>


<?php get_header(); ?>

<section class="terms-pages">
    <div class="inner">
        <h1 style="color: ##25334c; font-size: 2.1em;"><?php the_field('heading'); ?></h1>

        <div><?php the_field('content'); ?></div>
    </div>
</section>


<?php get_footer(); ?>