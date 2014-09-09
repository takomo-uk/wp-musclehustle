<?php
/*
Template Name: Frontpage
*/
get_header(); ?>

<div class="front-slider"></div>

<div class="row white minus-top">
    <div class="large-12 columns">
        <div class="row">
            <div class="large-4 medium-4 columns">
                <div class="link-box">
                    <div class="link-box-title">
                        <h3>Who we are DEVELOPTEST</h3>
                    </div>
                </div>
            </div>
            <div class="large-4 medium-4 columns">
                <div class="link-box">
                    <div class="link-box-title">
                        <h3>Our team</h3>
                    </div>
                </div>
            </div>
            <div class="large-4 medium-4 columns">
                <div class="link-box">
                    <div class="link-box-title">
                        <h1>bugFix!</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php /* Start loop */ ?>
    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <header>
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
            <footer>
                <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
                <p><?php the_tags(); ?></p>
            </footer>
        </article>
    <?php endwhile; // End the loop ?>

</div>

<?php get_footer(); ?>
