<?php
get_header();
?>

<main id="main" class="site-main">
    <div id="primary" class="content-area">
        <div class="row content-justify-center">
            <div class="col-12">

                <?php while (have_posts()) {
                    the_post();
                    the_content();
                    // the_title();

                    // the_post_thumbnail();

                    // the_excerpt();

                } ?>

            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>