<!-- -->
<!-- module v1.0.0 -->

<div class="module">

    <div class="module__inner-wrapper">

    </div>

</div>



<?php wp_enqueue_script( 'module__script', get_template_directory_uri() . '/template-parts/supercolin-modules/module/module.js', array ( ), 1, true); ?>

<?php wp_enqueue_style( 'supercolin-modules__base-styles', get_template_directory_uri() . '/template-parts/supercolin-modules/supercolin-modules__base-styles.css'); ?>
<?php wp_enqueue_style( 'module__style', get_template_directory_uri() . '/template-parts/supercolin-modules/module/module.css'); ?>
<!-- -->
<!-- /module -->