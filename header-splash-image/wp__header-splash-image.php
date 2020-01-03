<!-- -->
<!-- header-splash-image -->

<!-- 
this will pull in this module if you're not using acf to make guttenberg blocks
<?php // get_template_part('template-parts/supercolin-modules/header-splash-image/wp__header-splash-image','') ?>
 -->

<div class="header-splash-image">

    <img class="header-splash-image__background" src=" <?php echo get_template_directory_uri() . "/template-parts/supercolin-modules/header-splash-image/demo-featured-image.png" ?>">

    <div class="header-splash-image__title-wrapper">

        <h2 class="header-splash-image__title">
            Great Expectations
        </h2>
    </div>

</div>


<?php wp_enqueue_style( 'supercolin-modules__base-styles', get_template_directory_uri() . '/template-parts/supercolin-modules/supercolin-modules__base-styles.css'); ?>
<?php wp_enqueue_style( 'header-splash-image__style', get_template_directory_uri() . '/template-parts/supercolin-modules/header-splash-image/header-splash-image.css'); ?>


<!-- -->
<!-- /header-splash-image -->