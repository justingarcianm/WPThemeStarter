<?php get_header(); ?>

<style>

</style>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php while (have_posts()) : the_post(); ?>
            <?php the_title(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>

        <script>

        </script>

    </main><!-- .site-main -->

</div><!-- .content-area -->
<?php get_footer(); ?>