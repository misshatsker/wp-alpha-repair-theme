<?php get_header(); ?>

    <main>
        <div class="main-content-block">
            <h1 class="main-content-h1"><?php echo get_the_title();?></h1>
            <?php echo get_the_content(); ?>
        </div>

        <div class="main-image-block">
            <img class="main-image" src="<?php echo get_template_directory_uri(); ?>/img/img.png" alt="main">
        </div>
    </main>

<?php get_footer(); ?>
