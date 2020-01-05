<!--  -->
<!-- asymmetric-splash-grid -->

<?php if( have_rows('asymmetric-splash-grid__block-repeater') ): ?>

<div class="asymmetric-splash-grid">

    <?php while( have_rows('asymmetric-splash-grid__block-repeater') ): the_row(); 

        // vars
        $block_justified = get_sub_field('asymmetric-splash-grid__justified');
        $full_image = get_sub_field('asymmetric-splash-grid__full-image');

        $block_title = get_sub_field('asymmetric-splash-grid__block-title');
        $block_text = get_sub_field('asymmetric-splash-grid__block-text');
        $block_image = get_sub_field('asymmetric-splash-grid__block-image');
        

        $switch_var = $block_justified['value'];

        if( $switch_var != 'double' && $switch_var != 'full'){
            ?>

            <!-- asymmetric-splash-grid__<?php echo $block_justified['value'] ?> -->

            <div class="asymmetric-splash-grid__splash-container asymmetric-splash-grid__splash-container__<?php 
            echo $block_justified['value'];
            echo(' ');
            if( $full_image == 1 ):
                echo('asymmetric-splash-grid__splash-container__full-image');
            endif
            ?>">

                <?php if( $block_title ): ?>
                    <span class="asymmetric-splash-grid__splash-container__title">
                        <?php echo $block_title ?>
                    </span>
                <?php endif ?>
                
                <?php echo $block_text; ?> 

                <?php if( $block_image ): ?>

                    
                    <img src="<?php echo $block_image['url']; ?>" alt="">
                <?php endif ?>

            </div>
            <!-- -->
            <!-- /asymmetric-splash-grid__<?php echo $block_justified['value'] ?> -->

            <?php
        }else{

            if($switch_var == 'double'){
            ?>

                <?php $double_block_image = get_sub_field('asymmetric-splash-grid__double-block-image'); ?>

                <!-- -->
                <!-- asymmetric-splash-grid__double -->

                    <div class="asymmetric-splash-grid__splash-container__half-wrapper">

                    
                        <div class="asymmetric-splash-grid__splash-container asymmetric-splash-grid__splash-container__half-width">

                            <?php if( $block_title ): ?>
                                <span class="asymmetric-splash-grid__splash-container__title">
                                    <?php echo $block_title ?>
                                </span>
                            <?php endif ?>

                            <?php echo $block_text ?> 

                        </div>

                        <div class="asymmetric-splash-grid__splash-container asymmetric-splash-grid__splash-container__half-width asymmetric-splash-grid__splash-container__full-image">

                            <img class="full-img" src="<?php echo $double_block_image['url']; ?>" alt="">

                        </div>

                        
                    </div>

                <!-- -->
                <!-- /asymmetric-splash-grid__double -->

            <?php
            }
            elseif( $switch_var == 'full' ){
            ?>

                <!-- -->
                <!-- asymmetric-splash-grid__full -->

                <div class="asymmetric-splash-grid__splash-container asymmetric-splash-grid__splash-container__<?php 
                    echo $block_justified['value'];
                    echo(' ');
                    if( $full_image == 1 ):
                        echo('asymmetric-splash-grid__splash-container__full-image');
                    endif
                ?>">

                    <?php if( $block_title ): ?>
                        <span class="asymmetric-splash-grid__splash-container__title">
                            <?php echo $block_title ?>
                        </span>
                    <?php endif ?>

                    <?php echo $block_text ?> 

                    <?php if( $block_image ): ?>
                        <img style="max-height: none;" src=" <?php echo $block_image['url']; ?>" alt="">
                    <?php endif ?>
                    
                </div>
                <!-- -->
                <!-- /asymmetric-splash-grid__full -->

            <?php
            }
            else{ 
                echo 'something went wrong';
            }

        }


    endwhile;

    ?>
    
</div>

<?php endif; ?>


<?php wp_enqueue_style( 'asymmetric-splash-grid__base-style', get_template_directory_uri() . '/template-parts/supercolin-modules/supercolin-modules__base-styles.css'); ?>
<?php wp_enqueue_style( 'asymmetric-splash-grid__style', get_template_directory_uri() . '/template-parts/supercolin-modules/asymmetric-splash-grid/asymmetric-splash-grid.css'); ?>

<!-- -->
<!-- /asymmetric-splash-grid -->