<?php
/**
 * Register footer block pattern
 */
register_block_pattern(
    'uab-dragon/footer',
    array(
        'title'       => __( 'Footer', 'uab-dragon' ),
        'description' => _x( 'Site footer with widgets and copyright', 'Block pattern description', 'uab-dragon' ),
        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:columns -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3} -->
            <h3>About Us</h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p>Brief description about UAB Dragon</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3} -->
            <h3>Contact</h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p>Contact information here</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">© 2024 UAB Dragon. All rights reserved.</p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->'
    )
);
