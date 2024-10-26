<?php
/**
 * Register banner block pattern
 */
register_block_pattern(
    'uab-dragon/banner',
    array(
        'title'       => __( 'Banner', 'uab-dragon' ),
        'description' => _x( 'Hero banner with heading and call to action', 'Block pattern description', 'uab-dragon' ),
        'content'     => '<!-- wp:cover {"dimRatio":50,"overlayColor":"primary","minHeight":500} -->
<div class="wp-block-cover" style="min-height:500px">
    <div class="wp-block-cover__inner-container">
        <!-- wp:heading {"level":1,"textAlign":"center"} -->
        <h1 class="has-text-align-center">Welcome to UAB Dragon</h1>
        <!-- /wp:heading -->
        
        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link">Learn More</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
</div>
<!-- /wp:cover -->'
    )
);
