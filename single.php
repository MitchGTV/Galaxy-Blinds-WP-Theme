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
    .comments-container {
        margin: 0 auto;
        max-width: 800px;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
    }
    .comments-container h3 {
        margin-bottom: 20px;
        font-size: 1.5em;
    }
    .comments-container .comment-form-comment textarea {
        width: 100%;
        max-width: 100%;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
        font-size: 1em;
        margin-bottom: 10px;
    }
    .comments-container .form-submit input {
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        background-color: #0073aa;
        color: #fff;
        font-size: 1em;
        cursor: pointer;
    }
    .comments-container .form-submit input:hover {
        background-color: #005f8d;
    }
    .comments-container {
        margin-bottom: 20px;
    }
</style>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('content-container'); ?>>
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>

                <?php
                if (comments_open() || get_comments_number()) : ?>
                    <div class="comments-container">
                        <?php comments_template(); ?>
                    </div>
                <?php
                endif;

                the_post_navigation();
            endwhile;
        else :
            get_template_part('template-parts/content', 'none');
        endif;
        ?>
    </main>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
