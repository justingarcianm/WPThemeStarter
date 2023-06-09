<?php get_header();

// get_field('custom_field');

?>



<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        // Start the loop.
        while (have_posts()) : the_post();

            the_content();
        endwhile;
        ?>

    </main><!-- .site-main -->

</div><!-- .content-area -->
<?php get_footer(); ?>