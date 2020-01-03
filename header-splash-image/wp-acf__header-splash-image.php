<!-- -->
<!-- header-splash-image -->
<?php 
/**
 * Block Name: header-splash-image
 *
 * This is the template that displays the header-splash-image block.
 */

// get image field (as an array)
$background_image = get_field('header-splash-image__background-image');

?>


<div class="header-splash-image">

    <img class="header-splash-image__background" src="<?php echo $background_image['url']; ?>">

    <div class="header-splash-image__title-wrapper">

        <h2 class="header-splash-image__title">
        <?php the_field('header-splash-image__title'); ?>
        </h2>
    </div>

</div>


<?php wp_enqueue_style( 'supercolin-modules__base-styles', get_template_directory_uri() . '/template-parts/supercolin-modules/supercolin-modules__base-styles.css'); ?>
<?php wp_enqueue_style( 'header-splash-image__style', get_template_directory_uri() . '/template-parts/supercolin-modules/header-splash-image/header-splash-image.css'); ?>

<!-- -->
<!-- /header-splash-image -->