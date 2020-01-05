<!-- -->
<!-- vertical-ticker v1.0.0 -->

<div id="vertical-ticker">
    <span class="vertical-ticker__span">
        Site Powered By:  
    </span>

    <ul id="vertical-ticker__ul">
        <li>SuperColin</li>
        <li>Determination</li>
        <li>Curiosity</li>
        <li>Research</li>
        <li>Experimentation</li>
        <li>Originality</li>
        <li>Hard Work</li>
        <li>Perseverance</li>
        <li>Dedication</li>
        <li>Passion</li>
    </ul>
</div>


<?php wp_enqueue_style( 'supercolin-modules__base-styles', get_template_directory_uri() . '/template-parts/supercolin-modules/supercolin-modules__base-styles.css'); ?>
<?php wp_enqueue_style( 'vertical-ticker__style', get_template_directory_uri() . '/template-parts/supercolin-modules/vertical-ticker/vertical-ticker.css'); ?>

<?php wp_enqueue_script( 'vertical-ticker__script', get_template_directory_uri() . '/template-parts/supercolin-modules/vertical-ticker/vertical-ticker.js', array ( ), 1, true); ?>

<!-- -->
<!-- /vertical-ticker -->