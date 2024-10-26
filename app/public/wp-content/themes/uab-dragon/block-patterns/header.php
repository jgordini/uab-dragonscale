<?php
/**
 * Register header block pattern
 */
register_block_pattern(
    'uab-dragon/header',
    array(
        'title'       => __( 'Header', 'uab-dragon' ),
        'description' => _x( 'Site header with logo and navigation', 'Block pattern description', 'uab-dragon' ),
        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:site-logo /-->
    <!-- wp:navigation {"layout":{"type":"flex","orientation":"horizontal"}} /-->
</div>
<!-- /wp:group -->'
    )
);
