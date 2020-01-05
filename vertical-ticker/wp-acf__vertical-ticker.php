<!-- -->
<!-- vertical-ticker v1.0.0 -->

<div id="vertical-ticker">

    <span class="vertical-ticker__span">
        <?php the_field('vertical-ticker__title'); ?>
    </span>

    <?php if( have_rows('vertical-ticker__phrases') ): ?>

        <ul id="vertical-ticker__ul">

            <?php while( have_rows('vertical-ticker__phrases') ): the_row();

                $phrase = get_sub_field('vertical-ticker__phrase');
                ?>

                <li>
                    <?php  echo $phrase; ?>
                </li>

            <?php endwhile; ?>

        </ul>

    <?php endif; ?>

</div>


<?php wp_enqueue_style( 'supercolin-modules__base-styles', get_template_directory_uri() . '/template-parts/supercolin-modules/supercolin-modules__base-styles.css'); ?>
<?php wp_enqueue_style( 'vertical-ticker__style', get_template_directory_uri() . '/template-parts/supercolin-modules/vertical-ticker/vertical-ticker.css'); ?>

<?php wp_enqueue_script( 'vertical-ticker__script', get_template_directory_uri() . '/template-parts/supercolin-modules/vertical-ticker/vertical-ticker.js', array ( ), 1, true); ?>

<!-- -->
<!-- /vertical-ticker -->