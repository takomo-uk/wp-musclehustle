<?php
/*
Template Name: Frontpage
*/
get_header(); ?>


<div class="orbit-container">
    <ul class="example-orbit back-of-house" data-orbit 
                data-options="
                timer_speed: 5000;
                timer: true;
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

<div class="row trans-white minus-top front-of-house">
    <div class="large-12 columns">
        <div class="row front-of-house">
            <div class="large-4 medium-4 columns">
                <a href="#">
                    <div class="link-box">
                        <div class="link-box-title">
                            <h5>Who we are</h5>
                        </div>
                        <div class="img-box link-box-pic-1">
                            
                        </div>
                    </div>
                </a>
            </div>
            <div class="large-4 medium-4 columns">
                <a href="#">
                    <div class="link-box">
                        <div class="link-box-title">
                            <h5>Our team</h5>
                        </div>
                        <div class="img-box link-box-pic-2">
                            
                        </div>
                    </div>
                </a>
            </div>
            <div class="large-4 medium-4 columns">
                <a href="#">
                    <div class="link-box">
                        <div class="link-box-title">
                            <h5>Our philosophy</h5>
                        </div>
                        <div class="img-box link-box-pic-3">
                            
                        </div>
                    </div>
                </a>
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

<div class="gray-bg">
    <div class="row space-top">
        <div class="large-12 columns outer-spacing info-box">
            <h2 class="text-center">TRAIN HARD, TRAIN FUN</h2>
            <hr class="info-hr">
            <p>Whether you're a beginner or a seasoned athlete, our sessions are designed to be effective and fun at the same time. Regardless of whether you've ever set foot in a gym before or not, we have developed programs and sessions to suit all types of different customers.﻿</p> 
            <p>You can check out the different sessions we provide in the <a href="#">Classes</a> section.</p>
            <p>Remember at Muscle Hustle we provide a group, family orientated environment that is friendly. We believe in having fun when doing exercise!!</p>
        </div>
    </div>
</div>

<div class="red-bg text-center divider-spacing">
    <div class="row">
        <div class="large-12 columns">
            <h5 class="text-white">MUSCLE HUSTLE - WHERE WE TRAIN HARD WHILST HAVING FUN</h5>
        </div>
    </div>
</div>


<div class="row">
    <div class="large-4 columns outer-spacing">
        <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2F351523308284604&width=600&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=435" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; width:600px; height:430px; background: white; float:left; " allowtransparency="true">
        </iframe>        
    </div>
</div>


<?php get_footer(); ?>
