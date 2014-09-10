<?php
/*
Template Name: Frontpage
*/
get_header(); ?>


<div class="orbit-container">
    <ul class="example-orbit" data-orbit 
                data-options="
                timer_speed: 6000;
                timer: false;
                pause_on_hover:false;
                slide_number: false;
                animation_speed:500;
                navigation_arrows:true;
                bullets:false;">
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/slider-pic-1.jpg" alt="slide 1" />
            <!-- <div class="orbit-caption">
              Caption One.
            </div> -->
        </li>
        <li class="active">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/slider-pic-2.jpg" alt="slide 2" />
            <!-- <div class="orbit-caption">
              Caption Two.
            </div> -->
        </li>
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/slider-pic-3.jpg" alt="slide 3" />
            <!-- <div class="orbit-caption">
              Caption Three.
            </div> -->
        </li>
    </ul>
</div>

<div class="row white minus-top">
    <div class="large-12 columns">
        <div class="row">
            <div class="large-4 medium-4 columns">
                <div class="link-box">
                    <div class="link-box-title">
                        <h3>Who we are</h3>
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
                        <h3>Our philosophy</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row white">
    <div class="large-12 columns">
        <div class="center">

            <?php /* Start loop */ ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

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
    </div>
</div>

<?php get_footer(); ?>
