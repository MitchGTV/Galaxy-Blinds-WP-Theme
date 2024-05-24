<?php get_header(); ?>

<style>
    .content-container {
        margin: 0 auto;
        max-width: 800px;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
    }
    .content-container .entry-title {
        margin-bottom: 20px;
        font-size: 2em;
    }
    .content-container .entry-content {
        font-size: 1.2em;
        line-height: 1.6;
    }
</style>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('content-container'); ?>>
                    <header class="entry-header">
                        <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                    </header>

                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>

            <div class="pagination">
                <?php the_posts_navigation(); ?>
            </div>
        <?php else : ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'galaxy-blinds'); ?></p>
        <?php endif; ?>
    </main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
