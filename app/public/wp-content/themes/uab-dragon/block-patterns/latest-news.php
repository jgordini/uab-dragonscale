<?php
/**
 * Register latest news block pattern
 */
register_block_pattern(
    'uab-dragon/latest-news',
    array(
        'title'       => __( 'Latest News', 'uab-dragon' ),
        'description' => _x( 'Display latest news posts', 'Block pattern description', 'uab-dragon' ),
        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="has-text-align-center">Latest News</h2>
    <!-- /wp:heading -->
    
    <!-- wp:query {"query":{"posts":3,"order":"desc","orderBy":"date"}} -->
    <div class="wp-block-query">
        <!-- wp:post-template -->
            <!-- wp:post-title {"isLink":true} /-->
            <!-- wp:post-excerpt /-->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->'
    )
);
