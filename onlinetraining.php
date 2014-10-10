<?php
/*
Template Name: Online Training
*/
get_header(); ?>


<div class="row">
    <div class="large-12 columns text-center animated bounceInLeft">
        <h2 class="b-title">Online Training</h2>
    </div>
</div>

<div class="row">
    <div class="large-12 columns text-center animated bounceInLeft">
        <p>See our list of online training classes. The best option for you if you'd rather work out from home!</p>
        <p>Click on an exercise for more information and to enroll.</p>   
    </div>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<a href="<?php get_category_link( $category_id ); ?> ">
    <?php query_posts( 'category_name = exercise' ); 
        wp_reset_query(); ?>
    <div class="row outer-spacing online-class-box animated animation-delay-1 bounceInRight">
        <div class="medium-8 columns">

            <div class="row">
                <div class="medium-10 columns online-class-info">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                </div>

                <div class="medium-2 columns text-center class-date">
                    <h5>Date</h5>

                    <p><?php the_modified_time(__('F jS')); ?> <br>
                    <?php the_time(); ?></p>
                </div>
            </div>
        </div>

        <div class="right online-class-img show-for-medium-up">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/holder.jpg" alt="muscle hustle fitness">
        </div>
    </div>
    <?php endwhile; ?>
</a>
<?php endif; ?>


<a href="#">
    <div class="row outer-spacing online-class-box animated animation-delay-1-2 bounceInRight">
        <div class="medium-8 columns">
            <div class="row">
                <div class="medium-10 columns online-class-info">
                    <h3>Swimming</h3>
                    <p>Swimming with Fabrice Kabenge<br>
                    <small>Beginner / All</small> </p>
                </div>

                <div class="medium-2 columns text-center class-date">
                    <h5>Date</h5>

                    <p><b>Mon,<br>
                    Nov 12th<br>
                    12pm</b></p>
                </div>
            </div>
        </div>

        <div class="right online-class-img show-for-medium-up">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/holder.jpg" alt="muscle hustle fitness">
        </div>
    </div>
</a>

<a href="#">
    <div class="row outer-spacing online-class-box animated animation-delay-1-4 bounceInRight">
        <div class="medium-8 columns">
            <div class="row">
                <div class="medium-10 columns online-class-info">
                    <h3>Weights</h3>
                    <p>Weight lifing with Fabrice Kabenge<br>
                    <small>Advanced / Professional</small> </p>
                </div>

                <div class="medium-2 columns text-center class-date">
                    <h5>Date</h5>

                    <p><b>Mon,<br>
                    Nov 12th<br>
                    12pm</b></p>
                </div>
            </div>
        </div>

        <div class="right online-class-img show-for-medium-up">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/holder.jpg" alt="muscle hustle fitness">
        </div>
    </div>
</a>

<a href="#">
    <div class="row outer-spacing online-class-box animated animation-delay-1-6 bounceInRight">
        <div class="medium-8 columns">
            <div class="row">
                <div class="medium-10 columns online-class-info">
                    <h3>Karate</h3>
                    <p>Martial arts training with Fabrice Kabenge<br>
                    <small>Intermediate / Experienced</small> </p>
                </div>

                <div class="medium-2 columns text-center class-date">
                    <h5>Date</h5>

                    <p><b>Mon,<br>
                    Nov 12th<br>
                    12pm</b></p>
                </div>
            </div>
        </div>

        <div class="right online-class-img show-for-medium-up">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/holder.jpg" alt="muscle hustle fitness">
        </div>
    </div>
</a>

       

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
        <?php query_posts( 'cat=33' ); ?>



<?php get_footer(); ?>
