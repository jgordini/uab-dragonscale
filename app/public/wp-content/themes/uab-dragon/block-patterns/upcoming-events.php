<?php
/**
 * Register upcoming events block pattern
 */
register_block_pattern(
    'uab-dragon/upcoming-events',
    array(
        'title'       => __( 'Upcoming Events', 'uab-dragon' ),
        'description' => _x( 'Display upcoming events', 'Block pattern description', 'uab-dragon' ),
        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="has-text-align-center">Upcoming Events</h2>
    <!-- /wp:heading -->
    
    <!-- wp:columns -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3} -->
            <h3>Event 1</h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p>Date: TBD<br>Location: TBD</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3} -->
            <h3>Event 2</h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p>Date: TBD<br>Location: TBD</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->'
    )
);
