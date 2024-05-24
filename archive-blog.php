<?php
/*
Template Name: Blog
*/
get_header(); ?>

<style>
    .content-container {
        margin: 0 auto;
        max-width: 800px;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
        margin-bottom: 20px; /* Added margin at the bottom */
        position: relative; /* Ensure positioning context for absolute element */
    }
    .content-container .entry-title {
        margin-bottom: 10px;
        font-size: 2em;
        line-height: 1.2; /* Adjust line-height */
    }
    .content-container .entry-title a {
        background-color: transparent !important; /* Set the background to transparent with !important */
        text-decoration: none; /* Remove underline */
        display: inline-block; /* Ensure block element doesn't inherit background */
        padding: 0; /* Remove any padding */
        color: inherit; /* Inherit text color */
    }
    .content-container .entry-meta {
        margin-bottom: 20px;
        font-size: 1em;
        color: #555;
    }
    .content-container .entry-content {
        font-size: 1.2em;
        line-height: 1.6;
        margin-top: 0; /* Ensure no extra margin */
    }
    .entry-header {
        background-color: #f9f9f9;
    }
    .content-container a.absolute-link {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        display: block;
    }
</style>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10,
        );
        $blog_query = new WP_Query($args);
        if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('content-container'); ?>>
                    <a class="absolute-link" href="<?php the_permalink(); ?>"></a>
                    <header class="entry-header">
                        <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                        <p class="entry-meta">Updated on: <?php the_modified_date(); ?></p>
                    </header>

                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>

            <div class="pagination">
                <?php
                the_posts_navigation();
                wp_reset_postdata();
                ?>
            </div>
        <?php else : ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'galaxy-blinds'); ?></p>
        <?php endif; ?>
    </main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
