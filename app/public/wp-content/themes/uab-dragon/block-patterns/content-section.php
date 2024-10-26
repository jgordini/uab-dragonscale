<?php
/**
 * Register content section block pattern
 */
register_block_pattern(
    'uab-dragon/content-section',
    array(
        'title'       => __( 'Content Section', 'uab-dragon' ),
        'description' => _x( 'Content section with heading and text columns', 'Block pattern description', 'uab-dragon' ),
        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="has-text-align-center">Our Services</h2>
    <!-- /wp:heading -->
    
    <!-- wp:columns -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3} -->
            <h3>Service 1</h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p>Description of service 1</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3} -->
            <h3>Service 2</h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p>Description of service 2</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->'
    )
);
